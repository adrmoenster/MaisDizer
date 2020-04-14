<?php

/**
 * <b>Update.class:</b>
 * Classe responsável por atualizações de Cadastros genéricos no banco de dados!
 * @copyright (c) 2017, Adriano S. M.
 */
class Update extends Conn {

    private $Tabela;
    
    //Aqui irá armazenar os dados que serão atualizados
    private $Dados;
    
    //Termos são as condições de atualização
    private $Termos;

    //Necessário para fazer os bindValue, ele que vai armazenar a parce string, exemplo "name=Chrome&views=10&limit=2"
    private $Places;
    private $Result;


    /* * @var PDOStatment - Esse deve sempre ter nome da Classe */
    private $Update;

    /** @var PDO */
    private $Conn;
    
    /**
     * <b>Exe Update:</b> Realiza uma atualização. Basta informar o nome da tabela, os termos e a parseString
     * 
     * @param STRING $Tabela = Nome da tabela
     * @param STRING $Termos = WHERE | ORDER | LIMIT :limit | OFFSET :offset
     * @param STRING $ParseString = link={$link}&link2={$link2}
     */
    //Precisa verificar se vai ou não existir uma condição para executar essa Query, essa condição vai ser validade sempre pelo $ParseString, esse $ParseString que vai fazer a substituição dos links no PrepareStatement
    public function ExeUpdate($Tabela, array $Dados, $Termos, $ParseString) {
        $this->Tabela = (string) $Tabela;
        $this->Dados = $Dados;
        $this->Termos = (string) $Termos;
        
        parse_str($ParseString, $this->Places);
        $this->getSyntax();
        $this->Execute();
        
    }


    public function getResult() {
        return $this->Result;
    }

    public function getRowCount() {
        return $this->Update->rowCount();
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
        
        //Reescrevo o atributo quando executa a Conexão, ja criando a query preparada
        $this->Update = $this->Conn->prepare($this->Update);
        
    }

    //Cria a sintaxe da query para o Prepared Statements, e realiza os bindValue
    private function getSyntax() {
        foreach ($this->Dados as $Key => $Value):
            $Places[] = $Key . ' = :' .$Key;
        endforeach;
        
        $Places = implode(', ', $Places);
        $this->Update = "UPDATE {$this->Tabela} SET {$Places} {$this->Termos}";
    }

    //Obtém a Conexão e a Syntax, executa a query!
    private function Execute() {
        $this->Connect();
        try {        
            $this->Update->execute(array_merge($this->Dados, $this->Places));
            $this->Result = true;
        } catch (PDOException $e) {
            //Aqui definido oque ocorre se der erro ao executar a try
            $this->Result = null;
            ZTErro("<b>Erro ao Atualizar:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
