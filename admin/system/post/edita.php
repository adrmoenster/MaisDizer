<script language="javascript" type="text/javascript">

    function OpenPopupCenter(pageURL, title, w, h) {

        var left = (screen.width - w) / 2;

        var top = (screen.height - h) / 4;

        var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    }

</script>
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Post</span> - Cadastra</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="painel.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Inicio</a>
                    <a href="painel.php?exe=post/cadastra" class="breadcrumb-item">Cadastra</a>
                    <span class="breadcrumb-item active">Post</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->






    <!-- INICIO form_inputs -->
    <!-- Content area -->
    <div class="content">

        <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Cadastrar Publicações</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <?php
                $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                $postid = filter_input(INPUT_GET, 'postid', FILTER_VALIDATE_INT);


                if (isset($post)):
                    $post['post_capa'] = ( $_FILES['post_capa']['tmp_name'] ? $_FILES['post_capa'] : 'null' );
                    //Aqui está requerindo o Model, nele que ocorre as validações em geral
                    require_once 'model/AdminPost.class.php';
                    $cadastra = new AdminPost;
                    $cadastra->EditaPost($postid, $post);

                    ZTErro($cadastra->getError()[0], $cadastra->getError()[1]);

                    //Aqui é parar verificar se realmente existe um upload, por isso o tmp_name
                    if (!empty($_FILES['post_galeria']['tmp_name'])):
                        $sendGallery = new AdminPost;
                        $sendGallery->gbSend($_FILES['post_galeria'], $postid);
                    endif;

//                            if(!empty($post['posttags_nome'])):
//                                $enviaTags = new AdminMateria;
//                                $enviaTags->CadastraTag($post['posttags_nome'], $postid);
//                            endif;

                else:
                    $read = new Read;
                    $read->ExeRead("post", "WHERE post_id = :id", "id={$postid}");
                    if (!$read->getResult()):
                        header('Location: painel.php?exe=post/lista&empty=true');
                    else:
                        $post = $read->getResult()[0];
                        $post['post_data'] = date('d/m/Y H:i:s', strtotime($post['post_data']));
                    endif;
                endif;

                //Aqui irá verificar existencia do parametro create na url e exibir a mensagem
                $checkCreate = filter_input(INPUT_GET, 'cadastra', FILTER_VALIDATE_BOOLEAN);
                if ($checkCreate && empty($cadastra)):
                    ZTErro("O Post <b>{$post['post_titulo']}</b> foi cadastrado com sucesso no sistema!", ZT_ACCEPT);
                endif;
                ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3 mb-md-2">
                                <label class="d-block font-weight-semibold">Status <span class="text-danger">*</span></label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input-styled" name="post_status" value="on" data-fouc <?php if (isset($post['post_status']) && $post['post_status'] == 'on') echo 'checked=""'; ?> checked="">
                                        Ativo
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input-styled" name="post_status" value="of" data-fouc <?php if (isset($post['post_status']) && $post['post_status'] == 'of') echo 'checked=""'; ?>>
                                        Inativo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Data <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="post_data" value="<?= $post['post_data']; ?>">
                                <span class="form-text text-muted">99/99/9999</span>
                            </div>      
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3 mb-md-2">
                                <label class="d-block font-weight-semibold">Slide <span class="text-danger">*</span></label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input-styled" name="post_slide" value="on" data-fouc <?php if (isset($post['post_slide']) && $post['post_slide'] == 'on') echo 'checked="""'; ?> checked="">
                                        Ativo
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input-styled" name="post_slide" value="of" data-fouc <?php if (isset($post['post_slide']) && $post['post_slide'] == 'of') echo 'checked="""'; ?>>
                                        Inativo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label font-weight-semibold">Imagem Capa:</label>
                            <div class="col-lg-10">
                                <input type="file" class="file-input" data-show-upload="false" data-show-caption="true" data-show-preview="true" data-fouc name="post_capa">
                                <span class="form-text text-muted">Esta opção permite o Upload de apenas um arquivo, esse arquivo será capa principal da postagem.</span>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Titulo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="post_titulo" value="<?php if (isset($post)) echo $post['post_titulo']; ?>" placeholder="Informe o Titulo para esta publicação">

                            </div>


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label for="message">Conteúdo</label>
                            <textarea class="form-control js_editor" name="post_conteudo" rows="15"><?php if (isset($post)) echo $post['post_conteudo']; ?></textarea>
                        </div>   
                    </div>  
                    <hr/>
                    <!-- Inside form group with addon -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Informe as tags</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-price-tags"></i></span>
                                    </span>
                                    <input type="text" class="form-control tokenfield" value="<?php if (isset($post)) echo $post['post_tag']; ?>" data-fouc name="post_tag">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /inside form group with addon -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="">Categoria <span class="text-danger">*</span></label>

                                <select name="post_categoria" class="form-control form-input-styled" data-fouc>
                                    <option value="">Escolha Categoria</option> 
                                    <?php
                                    $readSes = new Read;
                                    $readSes->ExeRead("categoria", "WHERE categoria_pai IS NULL ORDER BY categoria_titulo ASC");
                                    if ($readSes->getRowCount() >= 1):
                                        foreach ($readSes->getResult() as $ses):
                                            echo "<option disabled=\"disabled\" value=\"\"> {$ses['categoria_titulo']} </option>";
                                            //Somente as categorias que podem ser selecionadas, por isso segue abaixo as categorias
                                            $readCat = new Read;
                                            $readCat->ExeRead("categoria", "WHERE categoria_pai = :pai ORDER BY categoria_titulo ASC", "pai={$ses['categoria_id']}");
                                            //Metodo está verificando se existem categorias cadastradas, se tiver irá listar na tela parar escolha
                                            if ($readCat->getRowCount() >= 1):
                                                foreach ($readCat->getResult() as $cat):
                                                    echo "<option ";

                                                    if ($post['post_categoria'] == $cat['categoria_id']):
                                                        echo "selected=\"selected\" ";
                                                    endif;

                                                    echo "value=\"{$cat['categoria_id']}\"> &raquo;&raquo; {$cat['categoria_titulo']} </option>";
                                                endforeach;
                                            endif;

                                        endforeach;
                                    endif;
                                    ?>
                                </select>

                            </div>
                        </div>

                        <!-- USUÁRIO-->

                        <div class="col-md-6">
                            <label class="" for="heard">Autor <span class="text-danger">*</span></label>
                            <select id="heard" name="post_autor" class="form-control form-input-styled" required>

                                <?php
                                $readUs = new Read;
                                $readUs->ExeRead("usuario", "WHERE usuario_status = 'on' AND usuario_nivel > 2 ORDER BY usuario_nome ASC");
                                if ($readUs->getRowCount() >= 1):

                                    foreach ($readUs->getResult() as $us):
                                        echo "<option ";


                                        echo "selected=\"selected\" ";


                                        echo "value=\"{$us['usuario_id']}\"> {$us['usuario_nome']} {$us['usuario_sobrenome']}</option>";
                                    endforeach;
                                endif;
                                ?>
                            </select>
                        </div>


                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label font-weight-semibold">Galeria de imagens:</label>
                        <div class="col-lg-10">
                            <input type="file" class="file-input" multiple="multiple" data-show-upload="false" data-show-caption="true" data-show-preview="true" data-fouc name="post_galeria[]">
                            <?php
                            $delGb = filter_input(INPUT_GET, 'gbdel', FILTER_VALIDATE_INT); //Verificando na url se existe a string gbdel
                            $upGb = filter_input(INPUT_GET, 'gbup', FILTER_VALIDATE_INT); //Verificando na url se existe a string gbdel
                            if ($delGb)://Se na url existir a string gbdel então entra neste if
                                require_once 'model/AdminPost.class.php'; //Requerindo acesso a classe AdminMateria
                                $DelGallery = new AdminPost; //Instanciando a classe AdminMateria
                                $DelGallery->gbRemove($delGb); //Executando o metodo gbRemove da classe AdminMateria neste metodo passando o resultado encontrado na url em gbdel=
                                ZTErro($DelGallery->getError()[0], $DelGallery->getError()[1]);


                            endif;
                            ?>
                            <br/>


                            <div class="row">
                                <?php
                                $gbi = 0; //Parametro $gbi recebe inicialmente zero
                                $Gallery = new Read; //Estanciando a classe de leitura no banco, classe Read
                                $Gallery->ExeRead("postgaleria", "WHERE post_id = :post", "post={$postid}"); //Executando metodo ExeRead na tabela de galeria de imagens
                                if ($Gallery->getResult())://Se obtiver resultado ao executar o metodo ExeRead entra então neste if
                                    foreach ($Gallery->getResult() as $gb)://Realizando um foreach que percorrerá os resultados obtidos pelo metodo ExeRead
                                        $gbi++; //O parametro $$gbi que inicialmente recebeu zero agora irá receber ele mesmo e mais um a cada vez que percorrer o looping do foreach
                                        ?>
                                        <div class="col-xl-3 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="card-img-actions">
                                                        <img class="card-img-top img-fluid" src="<?= HOME . "/uploads" . $gb['galeria_image']; ?>" alt="">
                                                        <div class="card-img-actions-overlay card-img-top">

                                                            <a href="<?= HOME . "/uploads" . $gb['galeria_image']; ?>" data-popup="lightbox" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                                                <i class="icon-link"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body bg-light text-center">
                                                    <div class="card-body text-center">

                                                        <span class="d-block text-muted"><?= Check::Words($gb['galeria_legenda'], 7) ?></span>

                                                        <div class="list-icons list-icons-extended mt-3">
                                                            <a href="<?= HOME . "/uploads" . $gb['galeria_image']; ?>" class="list-icons-item" data-popup="tooltip" title="Ver no site" data-container="body"><i class="icon-file-eye"></i></a>
                                                            <a href="javascript:void(0)" onclick="OpenPopupCenter('atualiza_imagem.php?postid=<?= $postid ?>&gbup=<?= $gb['galeria_id']; ?>', 'Atualizar', 500, 250);" class="list-icons-item" data-popup="tooltip" title="Editar Legenda" data-container="body"><i class="icon-pencil7"></i></a>
                                                            <a href="painel.php?exe=post/edita&postid=<?= $postid ?>&gbdel=<?= $gb['galeria_id']; ?>" class="list-icons-item" data-popup="tooltip" title="Excluir" data-container="body"><i class="icon-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                          
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Salvar <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form inputs -->

    </div>
    <!-- /content area -->

    <!-- FIM form_inputs -->




</div>
<!-- /main content -->