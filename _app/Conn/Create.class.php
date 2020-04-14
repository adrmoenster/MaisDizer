<?php

/**
 * <b>Create.class:</b>
 * Classe responsável por Cadastros genéricos no banco de dados!
 * @copyright (c) 2017, Adriano S. M.
 */
class Create extends Conn{//Classe filha da Classe Conn, ou seja, é uma herança

    private $Tabela;//Tabela no banco de dados
    private $Dados;//Informações a serem inseridas
    private $Result;//Retorna resultado para confirmar se cadastrou ou não
    
    
    /**@var PDOStatment */
    private $Create;//Responsável por receber a query preparada da PDO(Deixar com mesmo nome da classe)
    
    /** @var PDO */
    private $Conn;//Serve para pegar a conexão da PDO
    
    
    /**
     * <b>ExeCreate: </b> Executa um cadastro simplificado no banco de dados utilizando prepared statements.
     * Basta informar o nome da tebela e um array atribuitivo com nome da coluna e valor!
     * 
     * @param String $Tabela = Informe o nome da tabela no banco!
     * @param array $Dados = Informe um array atribuitivo. (Nome da Coluna => Valor).
     */
    public function ExeCreate($Tabela, array $Dados) {
        $this->Tabela = (String) $Tabela;
        $this->Dados = $Dados;
        
        //Aqui chama o metodo Privado "private function getSyntax()"
        $this->getSyntax();
        
        //Aqui chama o metodo Privado "private function Execute()"
        $this->Execute();
    }
    
    /**
     * 
     * @param 
     */
    
    /**
     * <b>Obter resultado:</b> Retorna o ID do registro inserido ou FALSE caso nenhum registro seja inserido!
     * @return INT $Variavel = Retorna falso ou retorna ultimo id inserido na Tabela caso seja inserido com sucesso.
     */
    public function getResult() {
        return $this->Result;
    }

    /**
     * ****************************************
     * *********** PRIVATE METODOS ************
     * ****************************************
     */
    
    //Obtém conexão com a PDO e Prepara a query
    private function Connect() {
        //Aqui ja obtem a Conexão
        $this->Conn = parent::getConn();
        //Aqui está Preparando a query
        $this->Create = $this->Conn->prepare($this->Create);  
    }
    
    //Cria a sintaxe da query para o Prepared Statements
    private function getSyntax() {
        $Fildes = implode(', ', array_keys($this->Dados));//Da um implode nos dados pegando os indices do array
        $Places = ':' . implode(', :', array_keys($this->Dados));//Coloca o ":" antes de cada Fildes
        $this->Create = "INSERT INTO {$this->Tabela} ({$Fildes}) VALUES ({$Places})";//Montando a query dentro da do atributo create para depois preparar no metodo conect
    }
    
    //Obtém a Conexão e a Syntax, executa a query!
    private function Execute() {
        
        //Aqui Chamou o metodo Connect
        $this->Connect();
        
        try {
            //Aqui realiza cadastro
            $this->Create->execute($this->Dados);
            //Se não der nenhum erro ao realizar cadastro acima ele vai armazenar o ultimo Id inserido em Result
            $this->Result = $this->Conn->lastInsertId();
            
        } catch (PDOException $e) {
            
            //Aqui definido oque ocorre se der erro ao executar a try
            $this->Result = null;
            ZTErro("<b>Erro ao Cadastrar:</b> {$e->getMessage()}", $e->getCode());
        }
    }
}
