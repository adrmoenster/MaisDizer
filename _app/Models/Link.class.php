<?php

/**
 * Link [MODEL]
 * Classe responsável por organizar o SEO do sistema e realizar a navegação!
 * 
 * @copyright (c) 2017, Adriano S. M. ZATER
 */
class Link {

    private $Local; //Será a url completa que estará acessando
    private $File; //Irá identificar o arquivo  
    private $Link; //Vai verificar o name para obter os dados no banco
    private $Patch; //Caminho e o arquivo de inclusão para fazer a navegação

    /** @var Seo */
    private $Tags;

    /** @var Seo */
    private $Dados;

    public function __construct() {
        $this->Local = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
        $this->Local = ($this->Local ? $this->Local : 'index');
        $this->Local = explode('/', $this->Local);
        $this->File = (isset($this->Local[0]) ? $this->Local[0] : 'index');
        $this->Link = (isset($this->Local[1]) ? $this->Local[1] : null);
    }

    public function getTags() {
        $this->Tags = new Seo($this->File, $this->Link);
        $this->Tags = $this->Tags->getTags();
        echo $this->Tags;
    }

    public function getDados() {
        $this->Dados = new Seo($this->File, $this->Link);
        $this->Dados = $this->Dados->getDados();
        return $this->Dados;
    }

    public function getLocal() {
        return $this->Local;
    }

    public function getPatch() {
        $this->setPatch();
        return $this->Patch;
    }

    /*
     * ********************************************
     * *************  Metodos Privados ***********
     * ********************************************
     */

    private function setPatch() {
        if (file_exists(REQUIRE_PATH . DIRECTORY_SEPARATOR . $this->File . '.php')):
            $this->Patch = REQUIRE_PATH . DIRECTORY_SEPARATOR . $this->File . '.php';
        elseif (file_exists(REQUIRE_PATH . DIRECTORY_SEPARATOR . $this->File . DIRECTORY_SEPARATOR . $this->Link . '.php')):
            $this->Patch = REQUIRE_PATH . DIRECTORY_SEPARATOR . $this->File . DIRECTORY_SEPARATOR . $this->Link . '.php';

        else:
            $this->Patch = REQUIRE_PATH . DIRECTORY_SEPARATOR . '404.php';
        endif;
    }

}
