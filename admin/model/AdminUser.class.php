<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminUser
 *
 * @author Adriano
 */
class AdminUser {

    private $dados;
    private $usuarioId;
    private $error;
    private $result;

    const Tabela = "usuario";

    public function EditaUsuario($UsuarioId, array $Dados) {
        $this->dados = $Dados;
        $this->usuarioId = $UsuarioId;

        $Pais = $this->dados['usuario_pais'];
        $Estado = $this->dados['usuario_estado'];
        $Cidade = $this->dados['usuario_cidade'];
        $Endereco = $this->dados['usuario_endereco'];
        $Numero = $this->dados['usuario_numero'];
        $Cep = $this->dados['usuario_cep'];
        $Telefone = $this->dados['usuario_telefone'];
        unset($this->dados['usuario_pais'], $this->dados['usuario_estado'], $this->dados['usuario_cidade'], $this->dados['usuario_endereco'], $this->dados['usuario_numero'], $this->dados['usuario_cep'], $this->dados['usuario_telefone']);

        if (!$this->dados['usuario_senha']):
            unset($this->dados['usuario_senha']);
        endif;
        if (!$this->dados['usuario_avatar']):
            unset($this->dados['usuario_avatar']);
        endif;
        if (in_array('', $this->dados)):
            $this->error = ["Para Atualizar as informações, Preencha todos os campos Obrigatórios!", ZT_ALERT];
            $this->result = false;
        else:
            $this->dados['usuario_pais'] = $Pais;
            $this->dados['usuario_estado'] = $Estado;
            $this->dados['usuario_cidade'] = $Cidade;
            $this->dados['usuario_endereco'] = $Endereco;
            $this->dados['usuario_numero'] = $Numero;
            $this->dados['usuario_cep'] = $Cep;
            $this->dados['usuario_telefone'] = $Telefone;
            $this->VerificaDados();

            if ($this->getResult()):
                //Aqui está verificando se a imagem capa ja foi enviada, se foi então ao enviar nova deve substituir, se não foi ai irá ter nova
                if (is_array($this->dados['usuario_avatar'])):
                    $readAvatar = new Read;
                    $readAvatar->ExeRead(self::Tabela, "WHERE usuario_id = :id", "id=$this->usuarioId");
                    $avatar = '../avatars' . $readAvatar->getResult()[0]['usuario_avatar'];
                    if (file_exists($avatar) && !is_dir($avatar)):
                        unlink($avatar);
                    endif;
                    //Aqui faz o Upload da nova capa
                    $uploadAvatar = new Upload("../avatars/");
                    $uploadAvatar->Image($this->dados['usuario_avatar'], $this->dados['usuario_nome'], 200);
                endif;
                if (isset($uploadAvatar) && $uploadAvatar->getResult()):
                    $this->dados['usuario_avatar'] = $uploadAvatar->getResult();
                    $this->Editar();
                else:
                    unset($this->dados['usuario_avatar']);
                    $this->Editar();
                endif;
            endif;

        endif;
    }

    public function getError() {
        return $this->error;
    }

    public function getResult() {
        return $this->result;
    }

    /**
     * ****************************************
     * *********** METODOS PRIVADOS ***********
     * ****************************************
     */
    private function VerificaDados() {
        if (!Check::Email($this->dados['usuario_email']))://Verificando se e-mail NÂO está nos padroes de um email(Metodo Check::Email)
            $this->error = ["O email informado parece não ter um formato válido!", ZT_ALERT];
            $this->result = false;
        elseif (isset($this->dados['usuario_senha']) && (strlen($this->dados['usuario_senha']) < 6 || strlen($this->dados['usuario_senha']) > 12))://Verifica se senha tem entre 6 e 12 caractares
            $this->error = ["A senha deve ter entre 6 e 12 caracteres!", ZT_INFOR];
            $this->result = false;
        else:
            $this->VerificaCadastro();
        endif;
    }

    private function VerificaCadastro() {
        $WHERE = (isset($this->usuarioId) ? "usuario_id != {$this->usuarioId} AND" : '');
        $readUser = new Read;
        $readUser->ExeRead(self::Tabela, "WHERE {$WHERE} usuario_email = :email", "email={$this->dados['usuario_email']}");
        if ($readUser->getRowCount()):
            $this->error = ["O email informado foi cadastrado no sistema por outro usuário! Informe outro email!", ZT_ERROR];
            $this->result = false;
        else:
            $this->result = true;

        endif;
    }

    private function Editar() {
        $Update = new Update; //Instanciando a classe Update(outro classe de mesmo nome que esta que está sendo criada)
        if (isset($this->dados['usuario_senha']))://Verificando se foi iniciado o atributo dados no indice usuario_senha
            $this->dados['usuario_senha'] = md5($this->dados['usuario_senha']); //Se foi iniciado então adiciona ao atributo $dados no indice usuario_senha ele mesmo mas criptografado com metodo de criptografia md5
        endif;

        $Update->ExeUpdate(self::Tabela, $this->dados, "WHERE usuario_id = :id", "id={$this->usuarioId}"); //Executando o metodo ExeUpdate da Classe Update(não desta classe, mas sim de outra)
        if ($Update->getResult())://Se a execução do metodo ExeUpdate tiver retornado resultado então entra neste if
            $this->error = ["O usuário <b>{$this->dados['usuario_nome']}</b> foi atualizado com sucesso!", ZT_ACCEPT]; //Mensagem e tipo de erro adicionado ao atributo Error
            $this->result = true;//Adicionando verdadeiro(true) ao atributo Result
        endif;
    }

}
