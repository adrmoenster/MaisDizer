<?php

/**
 * View.class [HELPER MVC]
 * Responsável por carregar o template, exibir a view, povoar e incluir arquivos PHP no sistema
 * Arquitetura MVC
 * 
 * @copyright (c) 2017, Adriano S. M. ZATER
 */
class View {

    private $Dados;//Para poder receber os dados
    private $keys;//Para poder criar os indices
    private $Values;//Para armazenar os valores que estão sendo substituidos
    private $Template;//Para carregar o temnplate html
    
    //Metodo responsável por carregar o template
    public function Load($Template){
        $this->Template = INCLUDE_PATH . DIRECTORY_SEPARATOR . '_tpl' .DIRECTORY_SEPARATOR . (string)$Template;
        $this->Template = file_get_contents($this->Template.'.tpl.html');
        return $this->Template;
 
    }
    
    //Metodo que irá exibir os dados executando os metodo privados setKeys, setValues e ShowView
    public function Show(array $Dados, $View){
        $this->setKeys($Dados);//Chamando metodo setKeys
        $this->setValues();//Chamando o metodo setValues
        $this->ShowView($View);//Chamando o metodo ShowView
        
    }
    
    //Metodo que se passa a view caso seja .php
    public function Request($File, array $Dados){
        extract($Dados);
        require ("{$File}.inc.php");
    }
    
    /*
     * ********************************************
     * *************  METODOS PRIVADOS ************
     * ********************************************
     */
    //Metodo adiciona # nos indices das tabelas vindas do banco, assim transformando em um link na template
    private function setKeys($Dados) {
        $this->Dados = $Dados;
        $this->Dados['HOME'] = HOME;
        $this->keys = explode('&','#' .implode('#&#', array_keys($this->Dados)) .'#');//Unir o array;
        $this->keys[] = '#HOME#';

    }
    //Metodo irá fazer o atributo Values receber os valores do array
    private function setValues() {
        $this->Values = array_values($this->Dados);
        
    }
    //Metodo que irá fazer substituição dos Links por atributos com mesmo nome da coluna no do banco de dados
    private function ShowView($View) {
        $this->Template = $View;
        echo str_replace($this->keys, $this->Values, $this->Template);//str_replace(Link a ser substiruido, pelo que irá substituir o link, onde estão esses links)
 }
}
