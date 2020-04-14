<?php

/**
 * Session.class [HELPER]
 * Responsável pelas estatísticas, sessões e atualizações de tráfego do sistema!
 * 
 * @copyright (c) 2017, Adriano S. M. ZATER
 */
class Session {

    //Essa é uma classe autocontida ou seja ela executa sózinha ao ser instanciada, não é necessário executar metodos.

    private $Date; //Para saber dia das estatíticas
    private $Cache; //Para poder personalizar o tempo de Sessão
    private $Traffic; //Para poder gerenciar o trafego do site
    private $Browser; //Para poder descobrir e fazer a contagem de acesso de cada navegador que acessa o sistema

    public function __construct($Cache = null) {
//        session_start(); //Cria a sessão
        $this->CheckSession($Cache); //Realiza toda a checagem que vai estar neste metodo
    }

    //METODO PRINCIPAL - verifica e executa todos os metodos da Classe!
    private function CheckSession($Cache = null) {
        $this->Date = date('Y-m-d'); //Atributo Date recebe a data do sistema nos formatos Ano-Mês-Dia
        $this->Cache = ((int) $Cache ? $Cache : 20); //Se informar o cache então ele recebe esse cache, caso não informe ele recebe 20

        if (empty($_SESSION['useronline']))://Verifica se a sessão não existe e se não é null, se entrar no else é para atualizar a sessão
            $this->setTrafic(); //Chamando o metodo setTraffic
            $this->setSession(); //Chamando o metodo setSession
            $this->CheckBrowser(); //Verifica navegadordo usuario
            $this->setUsuario(); //Chamando o metodo setUsuario

            $this->BrowserUpdate(); //Chamando o metodo BrowserUpdate

        else:
            $this->TrafficUpdate(); //Chamando o metodo de atualização do trafego
            $this->sessionUpdate(); //Chamando o metodo de atualização da sessão
            $this->CheckBrowser(); //Verifica navegadordo usuario
            $this->UsuarioUpdate();
        endif;

        $this->Date = null;
    }

    /*
     * ********************************************
     * *************  SESSÃO DO USUÁRIO ***********
     * ********************************************
     */

    //Inicia a Sessão do usuário, aqui fica todos as infromações da sessão do usuário
    private function setSession() {

        $_SESSION['useronline'] = [
            "online_session" => session_id(), //Id
            "online_startview" => date('Y-m_d H:i:s'), //Hora inicio da sessão
            "online_endview" => date('Y-m_d H:i:s', strtotime("+{$this->Cache}minutes")), //Hora fim da sessão
            "online_ip" => $_SERVER['REMOTE_ADDR'], //Ip do usuário da sessão
            "online_url" => $_SERVER['REQUEST_URI'], //URL acessada pelo usuário
            "online_agent" => $_SERVER['HTTP_USER_AGENT']//Qual navegador utilizado
//            "online_ip" => filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_VALIDATE_IP), //Ip do usuário da sessão
//            "online_url" => filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_DEFAULT), //URL acessada pelo usuário
//            "online_agent" => filter_input(INPUT_SERVER, "HTTP_USER_AGENT", FILTER_DEFAULT)//
        ];
    }

    //Atualiza sessão do usuário!
    private function sessionUpdate() {
        $_SESSION['useronline']['online_endview'] = date('Y-m_d H:i:s', strtotime("+{$this->Cache}minutes")); //Atualiza endview
        $_SESSION['useronline']['online_url'] = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_DEFAULT); //Atualiza a url
    }

    /*
     * ********************************************
     * *****  USUÁRIOS, VISITAS, ATUALIZAÇÕES *****
     * ********************************************
     */

    //Verifica e Insere o tráfego na tabela
    private function setTrafic() {
        $this->getTraffic();
        if (!$this->Traffic)://Se retornar verdadeiro é porque o getTraffic não obteve resultado, quer dizer que tabela está vazia
            $ArrSiteViews = ['siteviews_date' => $this->Date, 'siteviews_users' => 1, 'siteviews_views' => 1, 'siteviews_pages' => 1]; //Aqui é adicionado cada informação a cada campo da tabela
            $createSiteViews = new Create; //Instanciando metodo Create
            $createSiteViews->ExeCreate('siteviews', $ArrSiteViews); //Executando o metodo ExeCreate, neste passando nome da tabela e o array com os dados
        else://Se retornar false é porque obtivemos resultado do getTraffic
            if (!$this->getCookie())://verificando a não existencia de cookie(usuário), se não existir então ele cria
                $ArrSiteViews = ['siteviews_users' => $this->Traffic['siteviews_users'] + 1, 'siteviews_views' => $this->Traffic['siteviews_views'] + 1, 'siteviews_pages' => $this->Traffic['siteviews_pages'] + 1];
            else://se existir cookie ai atualiza as visualizações e paginas
                $ArrSiteViews = ['siteviews_views' => $this->Traffic['siteviews_views'] + 1, 'siteviews_pages' => $this->Traffic['siteviews_pages'] + 1];
            endif;
            //Aqui fazendo o update na tabela siteviews, ocorre se obtiver novo usuário ou se apenas atualizar as visualizações e paginas, de qualquer forma executa
            $updateSiteViews = new Update; //Estanciando a classe Update(atualização no banco)
            $updateSiteViews->ExeUpdate('siteviews', $ArrSiteViews, "WHERE siteviews_date = :date", "date={$this->Date}"); //Executando metodo da classe Update, neste passando nome da tabela, dados a serem atualizados com condição de que a data seja igual a data atual
        endif;
    }

    //Verifica e atualiza os pageviews
    private function TrafficUpdate() {
        $this->getTraffic(); //Chamando o metodo getTraffic
        $ArrSiteViews = ['siteviews_pages' => $this->Traffic['siteviews_pages'] + 1]; //Atualizando a pages
        $updatePageViews = new Update; //instanciando a classe Update
        $updatePageViews->ExeUpdate('siteviews', $ArrSiteViews, "WHERE siteviews_date = :date", "date={$this->Date}"); //Executando o metodo ExeUpdate, neste informando tabela e quais dados atualizar

        $this->Traffic = null; //Liberado espaço da memoria
    }

    //Obtem dados da tabela [HELPER TRAFFIC]
    private function getTraffic() {//Irá verificar na tabela se os dados do dia existem
        $readSiteViews = new Read; //Aqui ocorrendo uma composição
        $readSiteViews->ExeRead('siteviews', "WHERE siteviews_date = :date", "date={$this->Date}");
        if ($readSiteViews->getRowCount())://Verifica se a leitura retornou resultado
            $this->Traffic = $readSiteViews->getResult()[0]; //Pega apenas o resultado atual, logo o Traffic vai armazenar os dados do dia recorrente
        endif;
    }

    //Metodo responsável por obter os cookies do navegador, verificando, criando  e atualizando o cookie do usuário [ HELPER TRAFFIC ]
    private function getCookie() {
        //filter_input = metodo do php que captura por imput as informações que forem solicitadas
        //(primeiro parametro)INPUT_COOKIE = Informação de cookie solicitada pelo método 
        //(segundo parametro)'useronline' = nome dado ao cookie
        //(terceiro parametro)FILTER_DEFAULT = Filtro aplicado por segurança, neste caso o default significa "Como vier"        
        $Cookie = filter_input(INPUT_COOKIE, 'useronline', FILTER_DEFAULT); //O $Cookie recebe o Cookie de mesmo nome que a Sessão, recebendo como ele vir
        setcookie("useronline", base64_encode("zatersistemas"), time() + 86400); //Cookie fica válido por 24Horas
        if (!$Cookie)://Verifica se parametro $Cookie não teve retorno 
            return false;
        else:
            return true;
        endif;
    }

    /*
     * ********************************************
     * ********** NAVEGADORES DE ACESSO ***********
     * ********************************************
     */

    //Identifica navegador do usuário!
    private function CheckBrowser() {//Verifica qual navegador está sendo usado pelo usuário que acessou o site
        $this->Browser = $_SESSION['useronline']['online_agent'];
        if (strpos($this->Browser, 'Edge') && strpos($this->Browser, 'Chrome'))://Se navegador Edge
            $this->Browser = 'Edge';
        elseif (strpos($this->Browser, 'MSIE') || strpos($this->Browser, 'Trident/'))://Se navegador for Internet Explorer
            $this->Browser = 'IE';
        elseif (strpos($this->Browser, 'Mac') && strpos($this->Browser, 'Safari'))://Se navegador for Safari
            $this->Browser = 'Safari';
        elseif (strpos($this->Browser, 'Firefox'))://Se navegador for Mozilla Firefox
            $this->Browser = 'Firefox';
        elseif (strpos($this->Browser, 'Chrome'))://Se navegador for Chrome
            $this->Browser = 'Chrome';
        else:
            $this->Browser = 'Outros'; //Aqui fora os navegadores informados, qualquer outro navegador
        endif;
    }

    //Atualiza tabela com dados de navegadores
    private function BrowserUpdate() {
        $readAgent = new Read; //Instanciando a classe Read
        $readAgent->ExeRead('siteviews_agent', "WHERE agent_name = :agent", "agent={$this->Browser}"); //Executando o metodo ExRead da classe Read
        if (!$readAgent->getResult())://Se não fizer leitura então se cria uma nova
            $ArrAgent = ['agent_name' => $this->Browser, 'agent_views' => 1];
            $createAgent = new Create; //Instanciando Classe Create
            $createAgent->ExeCreate('siteviews_agent', $ArrAgent); //Executando o Metodo ExCreate da classe Create passando os dados a serem criados no banco
        else://Se fez leitura então atualiza
            $ArrAgent = ['agent_views' => $readAgent->getResult()[0]['agent_views'] + 1];
            $updateAgent = new Update; //Instanciando o metodo Update
            $updateAgent->ExeUpdate('siteviews_agent', $ArrAgent, "WHERE agent_name = :name", "name={$this->Browser}"); //Executando o metodo ExUpdate da classe Update, neste atualizando as informações no banco
        endif;
    }

    /*
     * ********************************************
     * ************* USUÁRIOS ONLINE **************
     * ********************************************
     */

    //Cadastra usuários online na tabela
    private function setUsuario() {
        $sesOnline = $_SESSION['useronline']; //Adiciona a variável $sesOnline a sessão useronline
        $sesOnline['agent_name'] = $this->Browser;

        $userCreate = new Create; //Instanciando a Classe Create
        $userCreate->ExeCreate('siteviews_online', $sesOnline); //Executando o metodo ExCreate da classe Create, neste informando a tabela do banco e a informação a ser criada
    }

    //Atualiza navegação do usuário online
    private function UsuarioUpdate() {
        $ArrOnline = [
            'online_endview' => $_SESSION['useronline']['online_endview'], //Adiciona a variável $ArrOnline o array com as informações a serem atualizadas no banco
            'online_url' => $_SESSION['useronline']['online_url']
        ];
        $userUpdate = new Update; //Instanciando a classe Update
        $userUpdate->ExeUpdate('siteviews_online', $ArrOnline, "WHERE online_session = :ses", "ses={$_SESSION['useronline']['online_session']}"); //Executando o metodo ExeUpdate e passando tabvela do banco a alterar e as informações a serem alteradas

        if (!$userUpdate->getRowCount())://Se O metodo ExeUpdate não retornar nada ele faz o if que irá gravar novos dados no banco na tabela informada
            $readSes = new Read; //Instanciando a classe Read
            $readSes->ExeRead('siteviews_online', "WHERE online_session = :onses", "onses={$_SESSION['useronline']['online_session']}"); //Executando o metodo ExeRead da classe Read
            if (!$readSes->getRowCount()):// Se a execusão do metodo ExeRead não retornar nada ele entra no if
                $this->setUsuario(); //Chamando o metodo setusuario
            endif;
        endif;
    }

}
