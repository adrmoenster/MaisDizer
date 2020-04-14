<?php

/**
 * <b>Delete.class:</b>
 * Classe responsável por Exclusão de Cadastros genéricos no banco de dados!
 * @copyright (c) 2017, Adriano S. M.
 */
class Delete extends Conn {//Classe filha da Classe Conn, ou seja, é uma Herança

    //Recebe o nome da tabela a ser deletada
    private $Tabela;
    
    //Termos são as condições de Exclusão
    private $Termos;

    //Necessário para fazer os bindValue, ele que vai armazenar a parce string, exemplo "name=Chrome&views=10&limit=2"
    private $Places;
    
    //Retorna resultado, se ocorreu exclusão retorna true, se não retorna false
    private $Result;


    /* * @var PDOStatment - Esse deve sempre ter nome da Classe */
    private $Delete;

    /** @var PDO */
    private $Conn;
    
    /**
     * <b>Exe Delete:</b> Realiza uma exclusão. Basta informar o nome da tabela, os termos e a parseString
     * 
     * @param STRING $Tabela = Nome da tabela
     * @param STRING $Termos = WHERE | ORDER | LIMIT :limit | OFFSET :offset
     * @param STRING $ParseString = link={$link}&link2={$link2}
     */
    //Precisa verificar se vai ou não existir uma condição para executar essa Query, essa condição vai ser validade sempre pelo $ParseString, esse $ParseString que vai fazer a substituição dos links no PrepareStatement
    public function ExeDelete($Tabela, $Termos, $ParseString) {
        $this->Tabela = (string) $Tabela;
        $this->Termos = (string) $Termos;
        
        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
    }


    public function getResult() {
        return $this->Result;
    }

    public function getRowCount() {
        return $this->Delete->rowCount();
    }

  
    //Para trabalhar com Store Prossedure deve ser possível manipular apenas a Parce STring "name=Chrome&views=10&limit=2" se precisar manipular a Query novamente
    public function setPlaces($ParseString) {
        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
        
    }

    /**
     * ****************************************
     * *********** PRIVATE METODOS ************
     * ****************************************
     */
    //Obtém conexão com a PDO e Prepara a query
    private function Connect() {
        $this->Conn = parent::getConn();
        $this->Delete = $this->Conn->prepare($this->Delete);
    }

    //Cria a sintaxe da query para o Prepared Statements, e realiza os bindValue
    private function getSyntax() {
        $this->Delete = "DELETE FROM {$this->Tabela} {$this->Termos}";
    }

    //Obtém a Conexão e a Syntax, executa a query!
    private function Execute() {
        $this->Connect();
        try {
            $this->Delete->execute($this->Places);
            $this->Result = true;
        } catch (PDOException $e) {
            //Aqui definido oque ocorre se der erro ao executar a try
            $this->Result = null;
            ZTErro("<b>Erro ao Deletar:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
