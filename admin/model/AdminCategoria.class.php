<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminCategoria
 *
 * @author Adriano
 */
class AdminCategoria {

    private $dados;
    private $error;
    private $result;
    private $categoriaId;

    const Tabela = 'categoria';

    public function CadastraCategoria(array $Dados) {
        $this->dados = $Dados;
        $this->dados['categoria_data'] = Check::Data($this->dados['categoria_data']);
        if (!$this->dados['categoria_pai']):
            unset($this->dados['categoria_pai']);
        endif;
//Aqui está verificando se não tem nenhum campo do formulario em branco, if é se tem campos em branco, else se não existir
        if (in_array('', $this->dados)):
            $this->error = ["<b>Erro ao cadastrar:</b> Para cadastrar uma categoria, preencha todos os campos!", ZT_ALERT];
            $this->result = false;
        else:
            //Esse metodo faz a formatação dos dados parar poder realizar cadastro
            $this->SetDados();
            //Verifica se não existe nenhuma categoria com mesmo campo Name
            $this->SetNome();
            //Esse é o metodo que realmente irá cadastrar
            $this->Gravar();
        endif;
    }

    public function EditaCategoria($CatId, array $Dados) {
        $this->categoriaId = (int) $CatId;
        $this->dados = $Dados;
        $this->dados['categoria_pai'] = ($this->dados['categoria_pai'] == null ? null : $this->dados['categoria_pai']);
        if ($this->dados['categoria_pai'] == null):
            unset($this->dados['categoria_pai']);
        endif;
        //Aqui está verificando se não tem nenhum campo do formulario em branco, if é se tem campos em branco, else se não existir
        if (in_array('', $this->dados)):
            $this->error = ["<b>Erro ao atualizar:</b> Para atualizar a catergoria {$this->dados['categoria_titulo']}, preencha todos os campos!", ZT_ALERT];
            $this->result = false;
        else:
            //Esse metodo faz a formatação dos dados parar poder atualizar cadastro
            $this->SetDados();
            //Verifica se não existe nenhuma categoria com mesmo campo Name
            $this->SetNome();
            //Esse é o metodo que realmente irá realizar a atualização do cadastro
            $this->Editar();
        endif;
    }

    /**
     * <b>Verificar Cadastro:</b> Retorna TRUE se o cadastro ou update for efetuado ou FALSE se não. Para verificar
     * erros execute um geterror();
     * @return BOOL $Var = True or False
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * <b>Obter Erro:</b> Retorna um array associativo com a mensagem e o tipo de erro!
     * @return ARRAY $error = Array associatico com o erro
     */
    public function getError() {
        return $this->error;
    }

    /*
     * ***************************************
     * **********  METODOS PRIVADOS **********
     * ***************************************
     */

    private function SetDados() {
        //array_map pega cada indice do array e execura a função determinada a ele, no caso aqui a função trip_tags e depois na outra a trim, previne assim a inserção de qualquer código
        $this->dados = array_map('strip_tags', $this->dados);
        $this->dados = array_map('trim', $this->dados);
        //Necessário parar criar nome da categoria no próprio indice
        $this->dados['categoria_nome'] = Check::Name($this->dados['categoria_titulo']);
    }

    //Verifica o NAME da categoria. Se existir adiciona um pós-fix +1 - Usado tanto no execreate quanto no exeupdate
    private function SetNome() {
        //se existir e não for nulo o categoriaId quer dizer que estarei editando e não criando um novo vai receber string (category_if diferente $this->CatID cao isso não ocorra simplesmente recebe null
        $WHERE = (!empty($this->categoriaId) ? "categoria_id != {$this->categoriaId} AND" : '');

        //Aqui está instanciando o Objeto(no cado fazendo leitura)
        $readNome = new Read;
        $readNome->ExeRead(self::Tabela, "WHERE {$WHERE} categoria_titulo = :t", "t={$this->dados['categoria_titulo']}");

        //aqui se obteve resultado então reescreve o nome, não retorna erro, apenas cria com nome diferente do que já existe
        if ($readNome->getResult()):
            $this->dados['categoria_nome'] = $this->dados['categoria_nome'] . '-' . $readNome->getRowCount();
        endif;
    }

    private function Gravar() {
        $Cadastra = new Create;
        $Cadastra->ExeCreate(self::Tabela, $this->dados);
//Se tiver resultado quer dizer que conseguiu realizar o cadastro
        if ($Cadastra->getResult()):
            //Esse result vai obter o Id do registro inserido 
            $this->result = $Cadastra->getResult();
            // Mensagem que irá ser apresentado informando que teve sucesso ao cadastrar
            $this->error = ["<b>Sucesso:</b> A categoria {$this->dados['categoria_titulo']} foi cadastrada no sistema!", ZT_ACCEPT];
        endif;
    }

    //Atualiza a categoria no banco!
    private function Editar() {
        $Update = new Update;
        $Update->ExeUpdate(self::Tabela, $this->dados, "WHERE categoria_id = :catid", "catid={$this->categoriaId}");

        //Se o if retornar é porque atualizou corretamente a categoria
        if ($Update->getResult()):
            $tipo = (empty($this->dados['categoria_pai']) ? 'seção' : 'categoria');
            $this->error = ["<b>Sucesso:</b> {$tipo} <b>{$this->dados['categoria_titulo']}</b> foi atualizada com sucesso no sistema", ZT_ACCEPT];
            $this->result = true;
        endif;
    }

}
