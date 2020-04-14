<?php

/**
 * Login.class [MODELS]
 * Responsável por autenticar, validar e checar usuário no sistema de login
 * 
 * @copyright (c) 2017, Adriano S. M. ZATER
 */
class Login {

    private $Nivel; //Pra autenticar o nível de usuário
    private $Email; //Armazenar o email informado
    private $Senha; //Armazenar senha informada
    private $Error; //Para armazenar mensagem de erro e retornar
    private $Result; //Para fazer as validações armazenar resultados
    

    /**
     * <b>Informar Nivel:</b> Informe o nivel de acesso maximo para a area a ser protegida.
     * @param INT $Level = Nivel maximo para acesso
     */
    public function __construct($Nivel) {
        $this->Nivel = (int) $Nivel;
    }

    /**
     * <b>Efetuar Login:</b> Envelope um array atribuitivo com indices STRING user [email], STRING pass.
     * Ao passar este array na ExeLogin() os dados sao verificados e o login e feito!
     * @param ARRAY $UserData = user [email], pass
     */
    public function ExeLogin($UserDados) {
        $this->Email = (string) strip_tags(trim($UserDados['user'])); //adicionando o E-mail informado ao atributo E-mail
        $this->Senha = (string) strip_tags(trim($UserDados['pass'])); //adicionando a Senha informado ao atributo Senha
        $this->setLogin(); //Chamando o metodo setLogin
    }

    

    /**
     * <b>Verificar Login:</b> Executando um getResult e possivel verificar se foi ou nao efetuado
     * o acesso com os dados.
     * @return BOOL $Var = true para login e false para erro
     */
    public function getResult() {
        return $this->Result;
    }

    /*
     * <b>Obter Erro:</b> Retorna um array associativo com uma mensagem e um tipo de erro ZT_
     * @return ARRAY $Error = Array associativo com erro
     */

    public function getError() {
        return $this->Error;
    }

    /*
     * <b>Checar Login:</b> Execute esse método para verificar a sessão USERLOGIN e revalidar o acesso
     * para proteger telas restritas.
     * @return BOLEAN $login = Retorna true ou mata a sessão e retorna false!
     */

    public function CheckLogin() {
        if (empty($_SESSION['userlogin']) || $_SESSION['userlogin']['usuario_nivel'] < $this->Nivel)://Verifica se não existe sessão se está logado ou se o nível de acesso do usuário é menor que permitido
            unset($_SESSION['userlogin']); //Limpando a sessão userlogin
            return false;
        else:
            return true;
        endif;
    }

    /**
     * ****************************************
     * *********** PRIVATE METODOS ************
     * ****************************************
     */
    //Valida os dados e armazena os erros caso existam. Executa o login!
    private function setLogin() {
        if (!$this->Email || !$this->Senha || !Check::Email($this->Email))://Verifica se não foi informado Email e se não foi informado a senha, também checa se e-mail está no padrão, usando metodo Check::Email 
            $this->Error = ['Informe seu e-mail e senha para efetuar o login!', ZT_INFOR]; //Se alguma das opções for verdadeira ele retorna esse erro
            $this->Result = false;
        elseif (!$this->getUser())://Chamando o metodo getUser, este verifica e compara se e-mail e senha informados não é igual aos mesmos dados no banco 
            $this->Error = ['Email ou senha incorreto, favor informe os dados corretos!', ZT_ALERT]; //Se retornar verdadeiro é passado essa mensagem de erro
            $this->Result = false;
        elseif ($this->Result['usuario_nivel'] < $this->Nivel)://Este verifica se o nível do usuário não está apto a ter acesso, se não tiver retorna erro
            $this->Error = ["Desculpe {$this->Result['usuario_nome']}, Você não tem permissão para acessar essa área!", ZT_ERROR]; //Se nivel do usuário não for compativel com o permitido ele retorna esse erro
            $this->Result = false;
        else:
            $this->Execute(); //Aqui se tudo estiver ok então executa esse método
        endif;
    }

    //Busca as informações no banco verificando se são mesmos e-mail e senha informados
    private function getUser() {
        $this->Senha = md5($this->Senha); //Criptografando a senha

        $read = new Read; //Instanciando a Classe Read
        $read->ExeRead('usuario', "WHERE usuario_email = :e AND usuario_senha = :p", "e={$this->Email}&p={$this->Senha}"); //Executando o metodo ExeRead da classe Read
        if ($read->getResult())://Verificando se a leitura no banco retornou resultado, se sim entra no if
            $this->Result = $read->getResult()[0]; //Se resultado retornou resultado então o Atributo Result executa o metodo getResult no indice zero, este metodo da classe Read
            return true; //Retorna verdadeiro
        else:
            return false; //Retorna Falso
        endif;
    }

    //Metodo de execução, garantindo a sessao que se não estiver iniciada irá iniciar.
    private function Execute() {
        if (!session_id())://Se não tiver sessão iniciada com esse id então inicia uma sessão
            session_start(); ////Iniciando a Sessão
        endif;
        $_SESSION['userlogin'] = $this->Result; //Atribui a $Session no indice userlogin  as informações disponíveis no atributo Result
        $this->Error = ["Olá {$this->Result['user_name']}, seja bem vindo(a). Aguarde redirecionamento!", ZT_ACCEPT]; //Mensagem retornando a confirmação e de boas vindas ao sistema
        $this->Result = true; //Limpando memória do atributo Result
    }

    //FAZER UM METODO PARA RECUPERAÇÃO DE SENHA
}
