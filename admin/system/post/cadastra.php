
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
                $postDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                var_dump($postDados);
                
                if(isset($postDados)):
                    $postDados['post_capa'] = ($_FILES['post_capa']['tmp_name'] ? $_FILES['post_capa'] : 'null');
                    require_once 'model/AdminPost.class.php';
                    $cadastra = new AdminPost;
                    $cadastra->CadastraPost($postDados);
                    
                    if($cadastra->getResult()):
                        if(!empty($_FILES['post_galeria']['tmp_name'])):
                            $enviaGaleria = new AdminPost;
                            $enviaGaleria->gbSend($_FILES['post_galeria'], $cadastra->getResult());
                        endif;
                        header('Location: painel.php?exe=post/edita&cadastra=true&postid=' . $cadastra->getResult());
                        else:
                            ZTErro($cadastra->getError()[0], $cadastra->getError()[1]);
                    endif;
                endif;
                ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3 mb-md-2">
                                <label class="d-block font-weight-semibold">Status <span class="text-danger">*</span></label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input-styled" name="post_status" value="on" data-fouc <?php if (isset($CatDados['post_status']) && $CatDados['post_status'] == 'on') echo 'checked="""'; ?> checked="">
                                        Ativo
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input-styled" name="post_status" value="of" data-fouc <?php if (isset($CatDados['post_status']) && $CatDados['post_status'] == 'of') echo 'checked="""'; ?>>
                                        Inativo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Data <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="post_data" value="<?= date('d/m/Y H:i:s'); ?>">
                                <span class="form-text text-muted">99/99/9999</span>
                            </div>      
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3 mb-md-2">
                                <label class="d-block font-weight-semibold">Slide <span class="text-danger">*</span></label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input-styled" name="post_slide" value="on" data-fouc <?php if (isset($CatDados['post_slide']) && $CatDados['post_slide'] == 'on') echo 'checked="""'; ?> checked="">
                                        Ativo
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input-styled" name="post_slide" value="of" data-fouc <?php if (isset($CatDados['post_slide']) && $CatDados['post_slide'] == 'of') echo 'checked="""'; ?>>
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
                                <input type="text" class="form-control" name="post_titulo" value="" placeholder="Informe o Titulo para esta publicação">

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
                                    <input type="text" class="form-control tokenfield" value="<?php if (isset($PostDados)) echo $CatDados['post_tag']; ?>" data-fouc name="post_tag">
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

                                                    if ($ses['categoria_id'] == $cat['categoria_id']):
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
                            <span class="form-text text-muted">Esta opção permite realizar upload de multiplas imagens.</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success">Salvar <i class="icon-paperplane ml-2"></i></button>
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