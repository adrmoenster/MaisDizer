<?php

//define('HOST', 'localhost');substituir somente os segunto campo, os que estão em minusculo


//CONFIGURAÇÂO DO SITE ####################
define('HOST', 'localhost');//Endereço local do banco, geralmente localhost
define('USER', 'root');//Usuário do banco de dados
define('PASS', '');//Senha do banco de dados
define('DBSA', 'posweb');//Nome do Banco de Dados

//DEFINE SERVIDOR DE E-MAIL ###############
define('MAILUSER', 'contato@maisdizer.com');//Endereço de e-mail
define('MAILPASS', 'epconnectjornal');//Senha do E-mail
define('MAILPORT', '465');//Porta de envio do E-mail(se não souber, ver com sua hospedagem)
define('MAILHOST', 'br460.hostgator.com.br');//ver com hospedagem

//DEFINE IDENTIDADE DO SITE ###############
define('SITENAME', 'Mais Dizer');//Nome do Site
define('SITEDESC', 'Assunto bem tratado, noticias, curiosidades, fique por dentro, vem com a gente!.');//Breve descrição do site
define('SITEFONE', '(##) ####-####');//Telefone informado no site
define('SITESKYPE', 'maisdizer');//Skype informado no site
define('SITESLOGAN', 'muito mais a dizer, com gostinho de quero mais!');//um slogan, esse aparece nos motores de busca e no site.

//DEFINE REDES SOCIAIS DO SITE ###############
define('INSTAGRAM', '');//Instagram informado no site
define('TWITTER', '');//Twitter informado no site
define('LINKEDIN', '');//Linkedin informado no site
define('FACEBOOK', 'https://www.facebook.com/Mais-Dizer-1860596430916130');//Facebook informado no site
define('GOOGLEPLUS', '');//Facebook informado no site

//DEFINE ENDEREÇO EMPRESA #################
define('ADDRESSPAIS', 'Brasil');//Pais a ser informado como pais sede no site
define('ADDRESSESTADO', 'Paraná');//Estado a ser informado como estado sede no site
define('ADDRESSCIDADE', 'Paranavaí');//Cidade a ser informado como cidade sede no site
define('ADDRESSRUA', '####');//Rua e numero da residencia a ser informado como endereço sede no site

//DEFINE A BASE DO SITE ###################
define('HOME', 'http://localhost/maisdizer');//Endereço base do site, colocar (http://www.) para evitar erros nas postagens, não coloque barra"/" no final do endereço, coloque apenas http://www.seusominio.com.br
define('TEMA', 'md');//Serve para especificar tema(Pasta) pasta do index(2) do site

//Não alterar
define('INCLUDE_PATH', HOME . DIRECTORY_SEPARATOR . 'site' . DIRECTORY_SEPARATOR . TEMA);
define('REQUIRE_PATH', 'site' .DIRECTORY_SEPARATOR .TEMA);






//As informações a seguir não precisam ser modificadas


//AUTO LOAD DE CLASSES ####################
//Esta função recebe automáticamente o nome da classe e busca classe ao instanciar
function autocarregar($Class) {
    $cDir = ['Conn', 'Helpers', 'Models'];//Configuração de diretório, indica pastas a serem carregadas no autoload
    $iDir = null;//Serve para verificar se a inclusão de diretório ocorreu, se ocorreu seta true, caso não então retorna erro

    foreach ($cDir as $dirName)://Percorrendo o array do cDir
        $path = __DIR__ . DIRECTORY_SEPARATOR . $dirName . DIRECTORY_SEPARATOR .$Class .'.class.php';

        if (!$iDir && file_exists($path) && !is_dir($path))://Verifica se arquivo existe e se não é um diretório
            include_once ($path);
            $iDir = true;
        endif;
    endforeach;
    if (!$iDir)://Se não conseguiu incluir ai sim retorna o erro de inclusão
        trigger_error("Não foi possível incluir {$Class}.class.php", E_USER_ERROR);
    endif;
}
spl_autoload_register("autocarregar");

// TRATAMENTO DE ERROS NO PAINEL#####################
//CSS Constantes :: Mensagem de Erro
define('ZT_ACCEPT', 'alert-success');
define('ZT_INFOR', 'alert-info');
define('ZT_ALERT', 'alert-warning');
define('ZT_ERROR', 'alert-danger');

//ZTErro :: Exibe erros lançados :: Front do painel
function ZTErro($ErrMsg, $ErrNo, $ErrDie = null){
    $CssClass = ($ErrNo == E_USER_NOTICE ? ZT_INFOR : ($ErrNo == E_USER_WARNING ? ZT_ALERT : ($ErrNo == E_USER_ERROR ? ZT_ERROR : $ErrNo)));
    echo "<div><p class=\" alert {$CssClass} alert-dismissible\">
                    </button>{$ErrMsg}</p></div>";
    
    if ($ErrDie):
        die;
    endif;
}


//ZTErro :: Exibe erros lançados :: Front do Site
function ZTErro2($ErrMsg, $ErrNo, $ErrDie = null){
    $CssClass = ($ErrNo == E_USER_NOTICE ? ZT_INFOR : ($ErrNo == E_USER_WARNING ? ZT_ALERT : ($ErrNo == E_USER_ERROR ? ZT_ERROR : $ErrNo)));
    echo "<div class=\"m-0 alert  {$CssClass}\" role=\"alert\">{$ErrMsg}</div>";
    
    if ($ErrDie):
        die;
    endif;
}




//PHPErro :: personaliza o gatilho de erro PHP
function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine){
    $CssClass = ($ErrNo == E_USER_NOTICE ? ZT_INFOR : ($ErrNo == E_USER_WARNING ? ZT_ALERT : ($ErrNo == E_USER_ERROR ? ZT_ERROR : $ErrNo)));
    echo "<div><p class=\"alert {$CssClass} alert-dismissible\">";
    echo "<strong>Erro na Linha: {$ErrLine} ::</strong> {$ErrMsg} <br>";
    echo "<small>{$ErrFile}</small>";
    echo "</p></div>";
    
    if ($ErrNo == E_USER_ERROR):
        die;
    endif;
}
set_error_handler('PHPErro');