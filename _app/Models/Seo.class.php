<?php

/**
 * Seo [MODEL]
 * Classe de apoio para modelo LINK. pode ser utilizada para gerar SSEO para as páginas do sistema!
 * 
 * @copyright (c) 2017, Adriano S. M. ZATER
 */
class Seo {

    private $File; //Para identidicar qual arquivos está sendo acessado
    private $Link; //Para saber se está acessando um artigo ou uma categoria
    private $Dados; //Para armazenar os dados
    private $Tags; //Para montar as Tags

    /* DADOS POVOADOS */
    private $seoTags;
    private $seoDados;

    public function __construct($File, $Link) {
        $this->File = strip_tags(trim($File));
        $this->Link = strip_tags(trim($Link));
    }

    public function getTags() {
        $this->checkDados();
        return $this->seoTags;
    }

    public function getDados() {
        $this->checkDados();
        return $this->seoDados;
    }

    /**
     * ****************************************
     * *********** PRIVATE METODOS ************
     * ****************************************
     */
    private function checkDados() {
        if (!$this->seoDados):
            $this->getSeo();
        endif;
    }

    private function getSeo() {
        $ReadSeo = new Read;


        switch ($this->File):
            case 'post':
                $Admin = (isset($_SESSION['userlogin']['usuario_nivel']) && $_SESSION['userlogin']['usuario_nivel'] == 3 ? true : false);
                $Check = ($Admin ? '' : "post_status = 'on' AND");
                
                
                $ReadSeo->ExeRead("post", "WHERE {$Check} post_nome = :link", "link={$this->Link}");


                if (!$ReadSeo->getResult()):
                    $this->seoDados = null;
                    $this->seoTags = null;
                else:
                    extract($ReadSeo->getResult()[0]);
                    $this->seoDados = $ReadSeo->getResult()[0];
                    $this->Dados = [SITENAME . ' - ' . $post_titulo, $post_conteudo, HOME . DIRECTORY_SEPARATOR . "post" . DIRECTORY_SEPARATOR . "{$post_nome}", HOME . DIRECTORY_SEPARATOR . "uploads" . "{$post_capa}"];

                    //post:: post_views
                    $ArrUpdate = ['post_acessos' => $post_acessos + 1];
                    $Update = new Update;
                    $Update->ExeUpdate("post", $ArrUpdate, "WHERE post_id = :postid", "postid={$post_id}");
                endif;
                break;
            case 'enquete':

                
                $ReadCat = $ReadSeo->ExeRead("categoria", "WHERE categoria_nome = :link", "link={$this->Categoria}");
                $ReadCat = $ReadSeo->getResult();
                $ReadSeo->ExeRead("enquete", "WHERE enquete_nome = :link", "link={$this->Link}");

                if (!$ReadSeo->getResult()):
                    $this->seoDados = null;
                    $this->seoTags = null;
                else:
                    extract($ReadSeo->getResult()[0]);
                    $this->seoDados = $ReadSeo->getResult()[0];
                    $this->Dados = [SITENAME . ' - ' . $enquete_pergunta, 'Participe da enquete do '.SITENAME.', e ai qual sua escolha? Deixe-nos saber sua opinião', HOME . DIRECTORY_SEPARATOR . "enquete" . DIRECTORY_SEPARATOR . $ReadCat[0]['categoria_nome'] . DIRECTORY_SEPARATOR . "{$enquete_nome}", HOME . DIRECTORY_SEPARATOR . "img-enquete" . "{$enquete_capa}"];

                endif;
                break;
            case 'categoria':
                $ReadSeo->ExeRead("categoria", "WHERE categoria_nome = :link", "link={$this->Link}");
                if (!$ReadSeo->getResult()):
                    $this->seoDados = null;
                    $this->seoTags = null;
                else:
                    extract($ReadSeo->getResult()[0]);
                    $this->seoDados = $ReadSeo->getResult()[0];
                    $this->Dados = [SITENAME . ' - ' . $categoria_titulo, $categoria_descricao, HOME . DIRECTORY_SEPARATOR . "categoria" . DIRECTORY_SEPARATOR . "{$categoria_nome}", HOME . '/img/site.jpg'];

                    //post:: Classificado_view
                    $ArrUpdate = ['categoria_view' => $categoria_view + 1];
                    $Update = new Update;
                    $Update->ExeUpdate("categoria", $ArrUpdate, "WHERE categoria_id = :catid", "catid={$categoria_id}");
                endif;
                break;
           
            case 'autor':
                $ReadSeo->ExeRead("usuario", "WHERE usuario_link = :link", "link={$this->Link}");
                if (!$ReadSeo->getResult()):
                    $this->seoDados = null;
                    $this->seoTags = null;
                else:
                    extract($ReadSeo->getResult()[0]);
                    $this->seoDados = $ReadSeo->getResult()[0];
                    $this->Dados = [SITENAME . ' - ' . $usuario_nome, $usuario_sobre, HOME . DIRECTORY_SEPARATOR . "autor" . DIRECTORY_SEPARATOR . "{$usuario_link}", HOME . DIRECTORY_SEPARATOR . "avatars" . "{$usuario_avatar}"];
                endif;
                break;
           
            
            //SEO:: BUSCA
            case 'busca':
                $ReadSeo->ExeRead("post", "WHERE post_status = 'on' AND (post_titulo LIKE '%' :link '%' OR post_conteudo LIKE '%' :link '%')", "link={$this->Categoria}");
                if (!$ReadSeo->getResult()):
                    $this->seoDados = null;
                    $this->seoTags = null;
                else:
                    $this->seoDados['count'] = $ReadSeo->getRowCount();
                    $this->Dados = ["Pesquisa por: {$this->Categoria}" . ' - ' . SITENAME, "Sua pesquisa por {$this->Categoria} retornou {$this->seoDados['count']} resultados!", HOME . DIRECTORY_SEPARATOR . "busca" . DIRECTORY_SEPARATOR . "{$this->Categoria}", HOME . '/img/site.jpg'];
                endif;
                break;

           
            case '404':
                $this->Dados = [SITENAME . '404 Oppsss, Nada encontrado!', SITENAME . SITESLOGAN, HOME . '/404', HOME . '/img/404.gif']; //Criar uma imagem de erro 404 e colocar na pasta images com nome 404.extensão
                break;

            default :
                $this->Dados = [SITENAME . ' - ' . SITESLOGAN, SITEDESC, HOME, HOME . '/img/site.jpg']; //Criar uma imagem na pasta images de nome site.jpg este para usar como imagem padrão para redes sociais
        endswitch;

        if ($this->Dados):
            $this->setTags();
        endif;
    }

    //Responsável por facilitar na hora de criar o SEO
    private function setTags() {
        $this->Tags['Title'] = $this->Dados[0];
        $this->Tags['Content'] = Check::Words(html_entity_decode($this->Dados[1]), 25);
        $this->Tags['Link'] = $this->Dados[2];
        $this->Tags['Image'] = $this->Dados[3];

        $this->Tags = array_map('strip_tags', $this->Tags);
        $this->Tags = array_map('trim', $this->Tags);

        $this->Dados = null;

        //PAGINA NORMAL
        $this->seoTags = '<title>' . $this->Tags['Title'] . '</title>' . "\n";
        $this->seoTags .= '<meta name="description" content="' . $this->Tags['Content'] . '"/>' . "\n";
        $this->seoTags .= '<meta name="robots" content="index, follow" />' . "\n";
        $this->seoTags .= '<link rel="canonical" href="' . $this->Tags['Link'] . '">' . "\n";
        $this->seoTags .= "\n";

        //FACEBOOK
        $this->seoTags .= '<meta property="og:site_name" content="' . SITENAME . '"/>' . "\n";
        $this->seoTags .= '<meta property="og:locale" content="pt_BR" />' . "\n";
        $this->seoTags .= '<meta property="og:title" content="' . $this->Tags['Title'] . '"/>' . "\n";
        $this->seoTags .= '<meta property="og:description" content="' . $this->Tags['Content'] . '"/>' . "\n";
        $this->seoTags .= '<meta property="og:image" content="' . $this->Tags['Image'] . '"/>' . "\n";
        $this->seoTags .= '<meta property="og:url" content="' . $this->Tags['Link'] . '"/>' . "\n";
        $this->seoTags .= '<meta property="og:type" content="article"/>' . "\n";
        $this->seoTags .= "\n";

        //ITEM GROUP (TWITTER)
        $this->seoTags .= '<meta itemprop="name" content="' . $this->Tags['Title'] . '">' . "\n";
        $this->seoTags .= '<meta itemprop="description" content="' . $this->Tags['Content'] . '">' . "\n";
        $this->seoTags .= '<meta itemprop="url" content="' . $this->Tags['Link'] . '">' . "\n";

        $this->Tags = null;
    }

}
