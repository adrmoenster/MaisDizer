<?php

/**
 * Check.class [HELPER]
 * Classe respons[avel por manipular e validar dados do sistema
 * 
 * @copyright (c) 2017, Adriano S. M. ZATER
 */
class Check {

    private static $Dados;
    private static $Format;

    /**
     * <b>Metodo Email :</b> Verifica se e-mail informado tem formado padrão de e-mail ou não
     * 
     * @param string $Email = Deve ser informado e-mail no formato com @.
     * @return boolean = Se retona False é inválido, se true então é válido
     */
    public static function Email($Email) {
        self::$Dados = (string) $Email;
        self::$Format = '/[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/';

        if (preg_match(self::$Format, self::$Dados))://Se retornar positivo significa que o email é valido
            return true;
        else:
            return false;
        endif;
    }

    /**
     * <b>Name:</b> Metodo para validar texto para criar url amigável
     * 
     * @param string $Name = Recebe infromação de texto para criar url amigavel
     * @return string = Retorna os dados do texto ja validados
     */
    public static function Name($Name) {
        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr?"!@#$%&*()_-+={[}]/;:.,\\\'<>°ºª';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr --------------------------------';

        //Função nativa do PHP para traduzir string, vai substituir tudo oq ue tem no $Format['a'] po tudo oque tem em $Format['b'].
        //Função strtr pede primeiro a string que quer traduzir, depois é onde vai comparar caracteres para traduzir, e por ultimo por qual caracteres vai substituir
        self::$Dados = strtr(utf8_decode($Name), utf8_decode(self::$Format['a']), self::$Format['b']);
        //Para fazer uma validação correta precisa eliminar espassos desdenessários e códigos html, para isso abaixo se reescreve o atributo
        self::$Dados = strip_tags(trim(self::$Dados));
        //Abaixo substitui os espaços por traços(-)
        self::$Dados = str_replace(' ', '-', self::$Dados);
        //A seguir serve para substituir caso tenhamos de 2 a 5 espaços, ele irá substituir por apenas um traço e não colocar vários traços
        self::$Dados = str_replace(array('-----', '----', '---', '--'), '-', self::$Dados);

        //Retorno já reformatando para voltar todos os caracteres em caixa baixa, voltando a codificação dos caracteres no self::$dados
        return strtolower(utf8_encode(self::$Dados));
    }

    /**
     * <b>Data:</b> metodo recebe a data no formato BR e converte para o formato TIMESTAMP
     * 
     * @param string $Data = recebe data no formato BR Dia/Mês/Ano Horas:Minuto:Segundo, não é obrigatório informar as informações de tempo
     * @return string = Retorna os dados no formato TIMESTAMP Ano/Mês/Dia Horas:Minutos/Segundos
     */
    public static function Data($Data) {
        self::$Format = explode(' ', $Data); //Aqui separando a Data do Tempo pelo espaço que existe entre essas informações
        self::$Dados = explode('/', self::$Format[0]); //Aqui localizando na data a "/", informa $self::$Format['0'] por que no primeiro explode ele separa o campo data com  indice 0 e o campo tempo com indice 1
        //Esse if é para quando não for informado tempo então ele seja validado automáticamente pelo sistema
        if (empty(self::$Format[1]))://Se der verdadeiro significa que não informou o tempo
            self::$Format[1] = date('H:i:s'); //Se if for verdadeiro pode ver que atribuiu a hora do sistema
        endif;

        self::$Dados = self::$Dados[2] . '-' . self::$Dados[1] . '-' . self::$Dados[0] . ' ' . self::$Format[1]; //Neste caso o indisse dois é o ANO, indice 1 é Mes e o indice 0 é dia
        return self::$Dados;
    }

    /**
     * <b>Words: </b> Metodo que realiza limitação de caracteres de um texto
     * 
     * @param string $String = String que será limitado a quantia de caracteres
     * @param int $Limite = quantidade de caracteres limite da string
     * @param type $Pointer = Adiciona ... pontos ao final do texto assim que limitado
     */
    public static function Words($String, $Limite, $Pointer = null) {
        self::$Dados = strip_tags(trim($String)); //Limpando a string de códigos html e removendo espaços em branco
        self::$Format = (int) $Limite; //Limite de caracteres permitidos

        $ArrWords = explode(' ', self::$Dados); //Transformando a string em um array para saber quantas palavras existem
        $NumWords = count($ArrWords); //Conta o numero de palavras no array
        $NewWords = implode(' ', array_slice($ArrWords, 0, self::$Format)); //cria o novo texto

        $Pointer = (empty($Pointer) ? '...' : ' ' . $Pointer); //Se não informar o Ponter ele coloca automáticamente ao final do texto "..."
        $Result = (self::$Format < $NumWords ? $NewWords . $Pointer : self::$Dados); //Se o limite de caracteres for menor que numero de palavres do texto então ele coloca o novo texto seguido do pointer, do contrário ele só coloca o texto inicial
        return $Result;
    }

    //Metodo para poder ler categoria através do name, assim ao informar select informa o name ao invés do id
    public static function CatByName($CategoriaNome) {
        $read = new Read;
        $read->ExeRead('categoria', "WHERE categoria_nome = :nome", "nome={$CategoriaNome}");
        if ($read->getRowCount())://Verifica se teve contagem, se sim então encontrou
            return $read->getResult()[0]['categoria_id']; //Retorna apenas o primeiro resultado
        else:
            echo "A categoria {$CategoriaNome} não foi encontrada!";
            die;
        endif;
    }
    
    public static function catSlide(array $NomeCategoria){
          $read = new Read;
        $read->ExeRead('categoria', "WHERE categoria_nome = :nome", "nome={$CategoriaNome}");
    }

    /**
     * <b>UserOnline: </b> Metodo responsável por limpar a tabela de registro de usuários online, mas somente os que esteiverem deixado de acessar a um dia
     * 
     * @return int = Retorna a quantidade de usuários Online
     */
    public static function UserOnline() {
        $now = date('Y-m-d H:i:s');
        $deleteUserOnline = new Delete;
        $deleteUserOnline->ExeDelete('siteviews_online', "WHERE online_endview < :now", "now={$now}");

        $readUserOnline = new Read;
        $readUserOnline->ExeRead('siteviews_online');
        return $readUserOnline->getRowCount();
    }

    //Checar a existencia de uma imagem e dinamicamente retornar ela redimencionada
    public static function Image($ImageUrl, $ImageDesc, $ImageW = null, $ImageH = null) {
        self::$Dados = $ImageUrl;

        if (file_exists(self::$Dados) && !is_dir(self::$Dados)):
            $path = HOME. "/";
            $imagem = self::$Dados;
            
//            return " <img src=\"{$path}/tim.php?src={$path}/{$imagem}&w={$ImageW}&h={$ImageH}\" alt=\"{$ImageDesc}\" title=\"{$ImageDesc}\"/>";
//            return " <img src=\"{$path}/thumb.php?src={$path}/{$imagem}&w={$ImageW}&h={$ImageH}\" alt=\"{$ImageDesc}\" title=\"{$ImageDesc}\"/>";
            return " <img src=\"{$path}/{$imagem}\" height='$ImageH' width='$ImageW' alt=\"{$ImageDesc}\" title=\"{$ImageDesc}\"/>";
            
            
            

//            return " <img src=\"{$path}/thumb.php?mv=centro&mh=meio&w={$ImageW}&h={$ImageH}&img={$path}/{$imagem}\"/>";
        else:
            return false;
        endif;
    }

}
