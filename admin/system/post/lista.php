<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Lista</span> - Posts</h4>
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
                    <a href="painel.php?exe=post/lista" class="breadcrumb-item">Post</a>
                    <span class="breadcrumb-item active">Lista</span>
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


    <!-- Content area -->
    <div class="content">

        <!-- Column selectors -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Lista de Posts</h5>
                
                <div class="header-elements">
                    <div class="list-icons">
                        <a href="painel.php?exe=post/cadastra"><button class="btn bg-teal-400">Cadastrar Novo</button></a>
                    </div>
                </div>
            </div>


 <?php
                    $empty = filter_input(INPUT_GET, 'empty', FILTER_VALIDATE_BOOLEAN);

                    If ($empty):
                        ZTErro('Você tentou editar uma materia não existente no sistema!', ZT_INFOR);
                    endif;

                    $action = filter_input(INPUT_GET, 'action', FILTER_DEFAULT);
                    if ($action):
                        $postAction = filter_input(INPUT_GET, 'postid', FILTER_VALIDATE_INT);
                        require_once ('model/AdminPost.class.php');
                        $postUpdate = new AdminPost;

                        switch ($action):
                            case 'active';
                                $postUpdate->ExeStatus($postAction, 'on');
                                ZTErro("O status da Postagem foi atualizado para <b>ativo</b>. Patagem publicada!", ZT_ACCEPT);
                                break;
                            case 'inative';
                                $postUpdate->ExeStatus($postAction, 'of');
                                ZTErro("O status da Postagem foi atualizado para <b>inativo</b>. Postagem agora é um rascunho!", ZT_INFOR);
                                break;
                            case 'delete';
                                require_once ('model/AdminPost.class.php');
                                $deletar = new AdminPost;
                                $deletar->DeletaPost($postAction);
                                if ($deletar->getResult()):
                                    ZTErro($deletar->getError()[0], $deletar->getError()[1]);
                                endif;
                                break;
                            default :
                                ZTErro("Ação não foi identificada pelo sistema, favor utilize os botões!", ZT_ALERT);
                        endswitch;
                    endif;
                    ?>
            <table class="table datatable-button-html5-columns ">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Data</th>
                        <th>Autor</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $readPost = new Read;
                    $readPost->ExeRead("post", "WHERE post_id > '0'");

                    foreach ($readPost->getResult() AS $post):
                        ?>
                        <tr>
                            <td><?= Check::Words($post['post_titulo'], 5) ?></td>
                            <td><?= $post['post_data']; ?></td>
                            <td><?= $post['post_autor']; ?></td>
                            <td><?= $post['post_categoria']; ?></td>
                            <?php if ($post['post_status'] == 'on'): ?>
                            <td><a href="painel.php?exe=post/lista&postid=<?= $post['post_id']; ?>&action=inative"><span class="badge badge-success">Ativo</span></a></td>
                            <?php elseif ($post['post_status'] == 'of'): ?>
                            <td><a href="painel.php?exe=post/lista&postid=<?= $post['post_id']; ?>&action=active"><span class="badge badge-secondary">Inativo</span></a></td>
                            <?php else: ?>
                                <td><span class="badge badge-danger">Verificar</span></td>
                            <?php endif; ?>
                            <td class="text-center">
                                <a href="painel.php?exe=post/edita&postid=<?= $post['post_id'] ?>"><span class="badge badge-info">Edita</span></a>
                            </td>
                        </tr>
                        <?php
                    endforeach;
                    ?>

                </tbody>
            </table>
        </div>
        <!-- /column selectors -->




    </div>
    <!-- /content area -->




</div>
<!-- /main content -->