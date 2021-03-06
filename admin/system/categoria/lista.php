<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Lista</span> - Categorias</h4>
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
                    <a href="painel.php?exe=categoria/lista" class="breadcrumb-item">Categoria</a>
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
                <h5 class="card-title">Lista de Categorias</h5>
                
                <div class="header-elements">
                    <div class="list-icons">
                        <a href="painel.php?exe=categoria/cadastra"><button class="btn bg-teal-400">Cadastrar Novo</button></a>
                    </div>
                </div>
            </div>



            <table class="table datatable-button-html5-columns ">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>Seção</th>
                        <th>Categoria_pai</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $readCat = new Read;
                    $readCat->ExeRead("categoria", "WHERE categoria_id > '0'");

                    foreach ($readCat->getResult() AS $cat):
                        ?>
                        <tr>
                            <td><?= $cat['categoria_nome']; ?></td>
                            <td><?= date('d/m/Y', strtotime($cat['categoria_data'])); ?></td>
                            <td><?= $cat['categoria_titulo']; ?></td>
                            <td><?= $cat['categoria_pai']; ?></td>
                            <?php if ($cat['categoria_status'] == 'on'): ?>
                                <td><span class="badge badge-success">Ativo</span></td>
                            <?php elseif ($cat['categoria_status'] == 'of'): ?>
                                <td><span class="badge badge-secondary">Inativo</span></td>
                            <?php else: ?>
                                <td><span class="badge badge-danger">Verificar</span></td>
                            <?php endif; ?>
                            <td class="text-center">
                                <a href="painel.php?exe=categoria/edita&catid=<?= $cat['categoria_id'] ?>"><span class="badge badge-info">Edita</span></a>
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