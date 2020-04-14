<?php

/**
 * <b>Read.class:</b>
 * Classe responsável por Leitura de Cadastros genéricos no banco de dados!
 * @copyright (c) 2017, Adriano S. M.
 */
class Read extends Conn {//Classe filha da Classe Conn, ou seja, é uma Herança

    private $Select;//Query de seleção
    
    //Necessário para fazer os bindValue, ele que vai armazenar a parce string, exemplo "name=Chrome&views=10&limit=2"
    private $Places;
    private $Result;


    /* * @var PDOStatment - Esse deve sempre ter nome da Classe */
    private $Read;

    /** @var PDO */
    private $Conn;
    
    /**
     * <b>Exe Read:</b> Executa uma leitura simplificada com Prepared Statments. Basta informar o nome da tabela,
     * os termos da seleção e uma analize em cadeia (ParseString) para executar.
     * @param STRING $Tabela = Nome da tabela
     * @param STRING $Termos = WHERE | ORDER | LIMIT :limit | OFFSET :offset
     * @param STRING $ParseString = link={$link}&link2={$link2}
     */
    //Precisa verificar se vai ou não existir uma condição para executar essa Query, essa condição vai ser validade sempre pelo $ParseString, esse $ParseString que vai fazer a substituição dos links no PrepareStatement
    public function ExeRead($Tabela, $Termos = null, $ParseString = null) {
        //if diz - Deve existir e não pode ser nulo
        if (!empty($ParseString)):
            $this->Places = $ParseString;
        
            //Aqui está transformando a String Parcial em um array
            parse_str($ParseString, $this->Places);
        endif;
        
        //Aqui está criando a Query
        $this->Select = "SELECT * FROM {$Tabela} {$Termos}";
        
        //Aqui está chamando o metodo Execute()
        $this->Execute();
        

        
    }

    /**
     * <b>Obter resultado:</b> Retorna um array com todos os resultados obtidos. Envelope primário númérico. Para obter
     * um resultado chame o índice getResult()[0]!
     * @return ARRAY $this = Array ResultSet
     */
    public function getResult() {
        return $this->Result;
    }

    /**
     * <b>Contar Registros: </b> Retorna o número de registros encontrados pelo select!
     * @return INT $Var = Quantidade de registros encontrados
     */
    public function getRowCount() {
        return $this->Read->rowCount();
    }

    /**
     * <b>Full Read:</b> Executa leitura de dados via query que deve ser montada manualmente para possibilitar
     * seleção de multiplas tabelas em uma única query!
     * @param STRING $Query = Query Select Syntax
     * @param STRING $ParseString = link={$link}&link2={$link2}
     */
    //Esse método existe para caso queira ou necessite passar a Query Manualmente, aqui em $Query se passa a query total podendo fazer execução de duas tabelas ou trabalhando com INNER ou JOIN 
    public function FullRead($Query, $ParseString = null) {

        $this->Select = (string) $Query;
        //if diz - Deve existir e não pode ser nulo
        if (!empty($ParseString)):
            $this->Places = $ParseString;
            parse_str($ParseString, $this->Places);
        endif;
        $this->Execute();
    }

    //Para trabalhar com Store Prossedure deve ser possível manipular apenas a Parce STring "name=Chrome&views=10&limit=2" se precisar manipular a Query novamente
    public function setPlaces($ParseString) {
        //Aqui reseta a ParseString, rearmazenar o array, após isso pode executar
        parse_str($ParseString, $this->Places);
        $this->Execute();
    }

    private function retornaId(){
        //Primeiro realiza a conexão
        $this->Connect();
        var_dump($this->ultid = parent::getConn()->lastInsertId());
        
    }

    /**
     * ****************************************
     * *********** PRIVATE METODOS ************
     * ****************************************
     */
    //Obtém conexão com a PDO e Prepara a query
    private function Connect() {
        $this->Conn = parent::getConn();
        
        $this->Read = $this->Conn->prepare($this->Select);
        //Aqui está setando o FechMode informando se vai retornar array ou objetos, ou outros, nesse caso retorno é de array
        $this->Read->setFetchMode(PDO::FETCH_ASSOC);
    }
    

    //Cria a sintaxe da query para o Prepared Statements, e realiza os bindValue
    private function getSyntax() {
        //Verifica se Places tem valores
        if ($this->Places):
            //$vinvulo no caso é campos(Coluna) da tabela no banco, e $valor é valor de cada um
            foreach ($this->Places as $Vinculo => $Valor):
                // Aqui está prevendo que ser for LIMIT ou OFFSET Deve então ser do tipo "INT", a query não pode receber uma String na montagem dela, aqui 'limit' e 'offset' estão como palavras reservadas
                if ($Vinculo == 'limit' || $Vinculo == 'offset'):
                    $Valor = (int) $Valor;
                endif;
                //Aqui informa que deve passar os Links, Valor e o tipo de dado que vai ser montado na Query(no caso aqui tem uma condição ternária se for int ele recebe PARAM_INT se não for então recebe PARAM_STR)
                $this->Read->bindValue(":{$Vinculo}", $Valor, ( is_int($Valor) ? PDO::PARAM_INT : PDO::PARAM_STR));
            endforeach;
        endif;
    }

    //Obtém a Conexão e a Syntax, executa a query!
    private function Execute() {
        //Primeiro realiza a conexão
        $this->Connect();
        try {
            $this->getSyntax();
            $this->Read->execute();
            //Se der certo a Result vai armazenar os dados Já envelopados para poder trabalhar com array
            $this->Result = $this->Read->fetchAll();
        } catch (PDOException $e) {
            //Aqui definido oque ocorre se der erro ao executar a try
            $this->Result = null;
            ZTErro("<b>Erro ao LER:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
