<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminPost
 *
 * @author Adriano
 */
class AdminPost {
    private $dados; //Necessário para receber os dados
    private $postId; //Para armazenar o postId no caso de edição
    private $error; //Para armazenar as mensagem caso exista erros.
    private $result; //Para fazer as validações

    //Nome da tabela no banco de dados

    const Tabela = 'post'; //Constante para ser usada na tabela aqui informada
    
    public function CadastraPost($Dados){
        $this->dados = $Dados;//Atributo Dados recebe o array Dados passados no próprio metodo
        
        if (in_array('', $this->dados))://If verificando se nenhum dos campos do array dados ficou sem ser informado
            $this->error = ["Erro ao cadastrar: Para criar um post, favor preencha todos os campos", ZT_ALERT]; //Se algum campo não foi informado então adiciona ao atributo error esse aray com mensagem e tipo de erro
            $this->result = false; //Adiciona ao atributo Result o false
        else:
            $this->setDados(); //Executando metodo setDados
            $this->setName(); //Executando metodo setName
            if (is_array($this->dados['post_capa']))://Verificando se obteve informação do atributo Dados no indice post_capa
                $upload = new Upload; //instanciando a classe Upload
                $upload->Image($this->dados['post_capa'], $this->dados['post_nome']); //Executando o metodo Image da classe Upload, neste passando endereço do diretório e nome do arquivo
            endif;

            if (isset($upload) && $upload->getResult())://verificando se o parametro $uploadCapa foi iniciado e se tem resultado
                $this->dados['post_capa'] = $upload->getResult(); //Atributo Dados no indice post_capa recebe o parametro $upload em getResult
                $this->Create(); //Executando o metodo Create(este ocorre se houver ou não upload de imagem)
            else://Caso não tenha iniciado o parametro &upload e não tenha resultado então entra no else
                $this->dados['post_capa'] = null; //Atributo Dados no indice post_capa recebe null
                $this->Create(); //Executando o metodo Create(este ocorre se houver ou não upload de imagem)
            endif;
            $this->setDados(); //Executando metodo setDados
            $this->setName(); //Executando metodo setName

            
        endif;
    }
    
    
     public function EditaPost($PostId, array $Dados) {
        $this->postId = (int) $PostId; //Atributo Post recebe o id informado pelo parametro $PostId através do proprio metodo
        $this->dados = $Dados; //Atributo Dados recebe o conteudo informado pelo parametro $Dados do próprio metodo

        if (in_array('', $this->dados))://If verificando se nenhum dos campos do array dados ficou sem ser informado
            $this->error = ["Para atualizar esse Post preencha todos os campos (capa não precisa ser enviada)", ZT_ALERT]; //Se algum campo não for informado então retorna essa mensagem de erro para o atributo Error
            $this->result = false; //O atributo result recebe false

        else://Neste else entra se todos os campos foram informados

            $this->setDados(); //Executando metodo setDados
            $this->setName(); //Executando metodo setName
            //Essa parte é referente o reenvio da capa
            if (is_array($this->dados['post_capa']))://Se existir no atributo Dados no indice post_capa algo informado então entra neste if
                $readCapa = new Read; //Instanciando a classe de leitura no banco, classe read
                $readCapa->ExeRead(self::Tabela, "WHERE post_id = :post", "post={$this->postId}"); //Executando o metodo ExeRead da classe Read, este verificando na coluna post id se o valor é igual ao atributo Post
                $capa = '../uploads' . $readCapa->getResult()[0]['post_capa']; //parametro $capa recebe o endereço da imagem
                if (file_exists($capa) && !is_dir($capa))://Verificando se existe o arquivo localizado no endereço atribuido ao parametro $capa e se este não é um diretório
                    unlink($capa); //Se o id retornou que existe ja um arquivo então se remove o arquivo do sistema
                endif;

                $uploadCapa = new Upload; //Instanciando a classe Upload
                $uploadCapa->Image($this->dados['post_capa'], $this->dados['post_nome']); //Executando o metodo Image da classe Upload, neste passando endereço do diretório e nome do arquivo
            endif;
            //Fim da parte que é referente o reenvio da capa

            if (isset($uploadCapa) && $uploadCapa->getResult())://verificando se o parametro $uploadCapa foi iniciado e se tem resultado
                $this->dados['post_capa'] = $uploadCapa->getResult(); //Atributo Dados no indice post_capa recebe o resultado do parametro uploadCapa
                $this->Update(); //Executando o metodo Update
            else:
                unset($this->dados['post_capa']); //limpando o atributo Dados no indice post_capa
                $this->Update(); //Executando metodo Update
            endif;
        endif;
    }

    /**
     * <b>ExeStatus: </b> Metodo de gerenciamento do status do post
     * 
     * @param int $PostId = Informar o id que deseja que tenha status alterado
     * @param int $PostStatus = informar status do post, se zero('0') é rascunho ou se um('1') é publicado
     */
    public function ExeStatus($PostId, $PostStatus) {
        $this->postId = (int) $PostId; //Atributo Post recebendo a informação passada no parametro $PostId pelo metodo ExeStatus
        $this->dados['post_status'] = (string) $PostStatus; //Atributo Dados no indice post_status recebendo string recebida pelo parametro $PostStatus através do metodo ExeStatus
        $Update = new Update; //Instanciando classe Update
        $Update->ExeUpdate(self::Tabela, $this->dados, "WHERE post_id = :id", "id={$this->postId}"); //Executando o metodo ExeUpdate da classe Update
    }
    
     /**
     * <b>gbSend: </b>Metodo de gerenciamento das imagens de Upload em cada post
     * 
     * @param array $Images = Informar imagens a terem uploads realizados
     * @param int $PostId = informar o id do post a qual deseja fazer Upload de imagens
     */
    public function gbSend(array $Images, $PostId) {
        $this->postId = (int) $PostId; //Adicionando ao atributo Post o conteudo (numero do id) da variável $PostId informado pelo metodo gbSend
        $this->dados = $Images; //Adicionando ao atributo Dados o conteudo da variável $Imagem informada pelo Metodo gbSend

        $ImageName = new Read; //Instanciando a classe de leitura no banco, classe Read.
        $ImageName->ExeRead(self::Tabela, "WHERE post_id = :id", "id={$this->postId}"); //Executando metodo ExeRead da Classe Read e atribuindo resultado a variável $ImageName
        if (!$ImageName->getResult())://Verificando a negação do resultado obtido pelo MetodoExeread
            $this->error = ["Erro ao enviar galeria. O indice {$this->postId} não foi encontrado no banco!", ZT_ERROR]; //Mensagem de retorno e tipo de retorno adicionado como array ao atributo Error
            $this->result = false; //Adicionando false ao atributo Result
        else://Aqui entra se obtivemos resultado ao executar o metodo ExeRead
            $ImageName = $ImageName->getResult()[0]['post_nome']; //Variável $ImageName recebendo conteudo de $ImageName no resultado de indice zero em post_nome

            $gbFiles = array(); //Definindo que a variável $gbFiles recebe um array
            $gbCount = count($this->dados['tmp_name']); //Variável $gbCount recebe resultado do metodo count neste caso do atributo Dados em tmp_name(nome temporário)
            $gbkeys = array_keys($this->dados); //Variável $gbKeys recebe resultado no metodo array_key que é a chave de cada indice nesse caso do atributo Dados

            for ($gb = 0; $gb < $gbCount; $gb++)://Realizando um for em que iniciamente a variável $gb recebe zero, e enquanto variável $gb for menor que conteudo de variável $gbCount, e a cada passagem pelo laço ele adiciona variável $gb mais um($gb++)
                foreach ($gbkeys as $keys)://Realizando um looping por foreach Adicionando Resultado da variável $gbKeus a variável $keys
                    $gbFiles[$gb][$keys] = $this->dados[$keys][$gb]; //Aqui a cada vez que percorrer o foreach a variável $gbFiles no incice $gb em $keys vai receber o atributo Dados no indice $Keys em $gb
                endforeach;
            endfor;

            $gbSend = new Upload; //variável $gbSend instanciando classe Upload
            $i = 0; //variável $i recebendo inicialmente valor zero
            $u = 0; //variável $u recebendo inicialmente valor zero

            foreach ($gbFiles as $gbUpload)://Realizando foreach percorrendo resultado do array $gbFiles e atribuindo a variável $gbUpload cada um dos resultados
                $i++; //a cada looping do foreach a variável $i recebe ele e mais um ($i++)
                $ImgName = "{$ImageName}-bg-{$this->postId}-" . (substr(md5(time() + $i), 0, 5)); //Também a cada vez que forreach percorrer looping o parametro $ImgName recebe parametro $ImageName seguido das strings -gb- seguido do atributo post- e eecutando metodo substr com md5 na hora + a variável $i
                $gbSend->Image($gbUpload, $ImgName); //$gbSend executando metodo Image

                if ($gbSend->getResult())://Verifica se existe resultado através do getResult, se sim então a cada loopin novamente verifica e a cada vez que existir resultado entra no if
                    $gbImage = $gbSend->getResult(); //Adiciona ao parametro $gbImage os resultados obtidos 
                    $gbCreate = ['post_id' => $this->postId, "galeria_image" => $gbImage, "galeria_data" => date('Y-m-d H:i:s')]; //A cada loopin que entrar no if o parametro $gbCreate recebe um array em que o atributo Post recebe o post id, o parametro $gbImage recebe galeria_image e data recebe galeria_data
                    $insertGb = new Create; //Instanciando a classe Create
                    $insertGb->ExeCreate("postgaleria", $gbCreate); //Executando o metodo ExeCreate e passando tabela especifica e os parametros inseridos
                    $u++; //A cada looping o parametro $u recebe ele mesmo e mai um
                endif;
            endforeach;

            if ($u > 1)://Se o parametro $u for maior que um entra neste if
                $this->error = ["Galeria Atualizada: Foram enviadas {$u} imagens para galeria deste post!", ZT_INFOR]; //Mensagem de retorno e tpo que será informado ao usuário
                $this->result = true; //Atributo Result recebe verdadeiro(true)
            endif;

        endif;
    }
    
     /**
     * <b>gbRemove: </b> Metodo de remoção das imagens do sistema e do banco
     * 
     * @param int $GbImageId = Informar o id das imagens a serem removidas
     */
    public function gbRemove($GbImageId) {
        $this->postId = (int) $GbImageId; //Adicionando ao atributo Post o id da imagem informada ao exeutar o metodo
        $readGb = new Read; //Instancia classe de leitura do banco, a classe Read
        $readGb->ExeRead("postgaleria", "WHERE galeria_id = :gb", "gb={$this->postId}"); //Executando Metodo ExeRead da classe Read e atribuindo a variável $readGb o resultado
        if ($readGb->getResult())://Se a variável $readGb retornar resultado entra então neste if
            $Imagem = '../uploads' . $readGb->getResult()[0]['galeria_image']; //Atribuindo a variável $Imagem o endereço da url concatenando com resultado guardado na variável $readGb no metodo getResult indice zero coluna galeria_image
            if (file_exists($Imagem) && !is_dir($Imagem))://Se existe a imagem e se não é um diretório entra neste if
                unlink($Imagem); //Removendo a imagem do sistema
            endif;

            $Deleta = new Delete; //Instanciando a Classe Delete
            $Deleta->ExeDelete("postgaleria", "WHERE galeria_id = :id", "id={$this->postId}"); //Executando o metodo ExeDelete da classe Delete e atribuindo o resultado a variável $Deleta
            if ($Deleta->getResult())://Se o metodo Exeread retornou resultado então entra neste if
                $this->error = ["A imagem foi removida com sucesso da galeria!", ZT_ACCEPT]; //Se entrou no if então a imagem foi removida, então atribui ao atributo Error a mensagem de retorno e tipo de erro
                $this->result = true; //Adiciona ao atributo Result o valor verdadeiro(true)
            endif;

        endif;
    }

    public function gbUpdate($GbImageId, $dados) {
        $this->postId = (int) $GbImageId; //Adicionando ao atributo Post o id da imagem informada ao exeutar o metodo

        $readGb = new Read; //Instancia classe de leitura do banco, a classe Read
        $readGb->ExeRead("postgaleria", "WHERE galeria_id = :gb", "gb={$this->postId}"); //Executando Metodo ExeRead da classe Read e atribuindo a variável $readGb o resultado
        if ($readGb->getResult())://Se o metodo ExeRead retornou resultado então entra neste if

            $updateGb = new Update;
            $updateGb->ExeUpdate("postgaleria", $dados, "WHERE galeria_id = :id", "id={$this->postId}");
            $this->error = ["A legeda foi atualizada com sucesso da galeria!", ZT_ACCEPT];


        endif;
    }
    
     /**
     * <b>Verificar Cadastro:</b> Retorna ID do registro se o cadastro for efetuado ou FALSE se nÃ£o.
     * Para verificar erros execute um getError();
     * @return BOOL $Var = InsertID or False
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * <b>Obter Erro:</b> Retorna um array associativo com uma mensagem e o tipo de erro.
     * @return ARRAY $Error = Array associatico com o erro
     */
    public function getError() {
        return $this->error;
    }
    
    
    
    
     /**
     * ****************************************
     * *********** PRIVATE METODOS ************
     * ****************************************
     */
    //Metodo que seta os dados 
    private function setDados() {
        $Cover = $this->dados['post_capa']; //Esse indice não pode ser limpo pelo trim nem o array_map
        $Content = $this->dados['post_conteudo']; //Esse indice não pode ser limpo pelo trim nem o array_map
        unset($this->dados['post_capa'], $this->dados['post_conteudo']); //Como os itens anteriores ja foram guardados em váriáveis então podemos dar unset neles, assim podemos pegar eles após limpesa dos dados

        $this->dados = array_map('strip_tags', $this->dados); //Realizando a limpesa dos dados de entrada com metoto strip_tags, assim evitando entrada de códigos maliciosos
        $this->dados = array_map('trim', $this->dados); //Realizando a limpesa dos dados de entrada com metoto trim, assim evitando entrada de códigos maliciosos

        $this->dados['post_nome'] = Check::Name($this->dados['post_titulo']); //Adicionando ao atributo Dados no indice post_name com checagem pelo metodo statico Check::Name
        $this->dados['post_data'] = Check::Data($this->dados['post_data']); //Adicionando ao atributo Dados no indice post_date com checagem pelo metodo statico Check::Data
        

        $this->dados['post_capa'] = $Cover; //Adicionando ao atributo Dados no indice post_capa o conteudo da variável $Cover
        $this->dados['post_conteudo'] = $Content; //Adicionando ao atributo Dados no indice post_content o conteudo da váriável $Content
        $this->dados['post_categoria_pai'] = $this->getCatParent(); //Adicionando ao atributo Dados no indice post_categoria_pai o conteudo do metodo getCatParent
    }
    
     //Metodo que pega as informações da categoria parent
    private function getCatParent() {
        $rCat = new Read; //Instancia classe de leitura no banco, classe Read
        $rCat->ExeRead("categoria", "WHERE categoria_id = :id", "id={$this->dados['post_categoria']}"); //Adionando a variável $rCat o resultado do metodo ExeRead da classe Read
        if ($rCat->getResult())://Se a variável $rCat retornar resultado entra neste if
            return $rCat->getResult()[0]['categoria_pai']; // tendo o resultado então retorna esse resultado no indice zero na coluna categoria_pai
        else:
            return null; //Retorna nullo
        endif;
    }
    
     //Metodo que verifica a existencia de nome para novo cadastro no banco ou para atualização de dado ja existente
    private function setName() {
        $Where = (isset($this->postId) ? "post_id != {$this->postId} AND" : ''); //Adicionando a variável $Where o resultado desta verificação ternária 
        $readName = new Read; //Estancia a classe de leitura do banco, classe Read
        $readName->ExeRead(self::Tabela, "WHERE {$Where} post_titulo = :t", "t={$this->dados['post_titulo']}"); //Executando o metodo ExeRead da classe de leitura do banco Read, e adiciona resultado a variável $readName
        if ($readName->getResult())://Verificando se o metodo Exeread retornou resultado, se retornou entra neste if
            $this->dados['post_nome'] = $this->dados['post_nome'] . '-' . $readName->getRowCount(); //Se retonou resultado é porque ja existe uma informação com mesmo nome no banco, e essa linha renomeia esse nome para mesmo nome seguido de - e contador de resultado
        endif;
    }
    
    
    
    //Metodo de criação dos dados no banco
    private function Create() {
        $cadastra = new Create; //Instanciando classe Create
        $cadastra->ExeCreate(self::Tabela, $this->dados); //Executando o Metodo ExeCreate da classe Create
        if ($cadastra->getResult())://Se o metodo de cadastro ExeCreate retornar resultado verdadeiro então entra neste if
            $this->error = ["O post {$this->dados['post_titulo']} foi cadastrado com sucesso no sistema!", ZT_ACCEPT]; //Adiciona ao atributo Error a mensagem de retorno e tipo de erro
            $this->result = $cadastra->getResult(); //Adiciona ao atributo Result o metodo getResult
        endif;
    }
    
     //Metodo de atualização das informações no banco
    private function Update() {
        $Update = new Update; //Instanciando classe de atualização Update
        $Update->ExeUpdate(self::Tabela, $this->dados, "WHERE post_id = :id", "id={$this->postId}"); //Executando metodo ExeUpdate da classe Update
        if ($Update->getResult())://Se execução do Metodo ExeUpdate obtiver resultado então entra no if
            $this->error = ["O Post <b>{$this->dados['post_titulo']}</b> foi atualizado com sucesso no sistema!", ZT_ACCEPT]; //Mensagem atribuida ao Atributo Error
            $this->result = true; //Atributo Result recebendo verdadeiro(true);
        endif;
    }
}
