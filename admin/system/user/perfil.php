<?php extract($_SESSION['userlogin']) ?>
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Perfil</span> - Usuário</h4>
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
                <a href="painel.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Inicio </a>
                <span class="breadcrumb-item active">Meu Perfil</span>
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
    <?php
    $userDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $userId = $_SESSION['userlogin']['usuario_id'];

    if (isset($userDados)):
        $userDados['usuario_avatar'] = ($_FILES['usuario_avatar']['tmp_name'] ? $_FILES['usuario_avatar'] : 'null');
        extract($userDados);
        require_once 'model/AdminUser.class.php';
        $Edita = new AdminUser;
        $Edita->EditaUsuario($userId, $userDados);
        if ($Edita->getResult()):
            ZTErro($Edita->getError()[0], $Edita->getError()[1]);
        else:
            ZTErro($Edita->getError()[0], $Edita->getError()[1]);
        endif;
    else:
        extract($_SESSION['userlogin']);
    endif;
    var_dump($userDados);
    var_dump($userId);
    ?>
    <!-- Inner container -->
    <div class="d-md-flex align-items-md-start">

        <!-- Left sidebar component -->
        <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Navigation -->
                <div class="card">
                    <div class="card-body bg-indigo-400 text-center card-img-top" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="img-fluid rounded-circle" src="global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
                            <div class="card-img-actions-overlay rounded-circle">
                                <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                    <i class="icon-plus3"></i>
                                </a>
                                <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                    <i class="icon-link"></i>
                                </a>
                            </div>
                        </div>

                        <h6 class="font-weight-semibold mb-0"><?= $usuario_nome; ?> <?= $usuario_sobrenome; ?></h6>


                        <div class="list-icons list-icons-extended mt-3">
                            <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Facebook"><i class="icon-facebook"></i></a>
                            <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Twitter"><i class="icon-twitter"></i></a>
                            <a href="#" class="list-icons-item text-white" data-popup="tooltip" title="" data-container="body" data-original-title="Instagram"><i class="icon-instagram"></i></a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <ul class="nav nav-sidebar mb-2">
                            <li class="nav-item-header">Menu Principal</li>
                            <li class="nav-item">
                                <a href="#profile" class="nav-link active" data-toggle="tab">
                                    <i class="icon-user"></i>
                                    Meu perfil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#schedule" class="nav-link" data-toggle="tab">
                                    <i class="icon-calendar3"></i>
                                    Schedule
                                    <span class="font-size-sm font-weight-normal opacity-75 ml-auto">02:56pm</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#inbox" class="nav-link" data-toggle="tab">
                                    <i class="icon-envelop2"></i>
                                    Inbox
                                    <span class="badge bg-danger badge-pill ml-auto">29</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#orders" class="nav-link" data-toggle="tab">
                                    <i class="icon-cart2"></i>
                                    Orders
                                    <span class="badge bg-success badge-pill ml-auto">16</span>
                                </a>
                            </li>
                            <li class="nav-item-divider"></li>
                            <li class="nav-item">
                                <a href="painel.php?logoff=true" class="nav-link" data-toggle="tab">
                                    <i class="icon-switch2"></i>
                                    Sair
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /navigation -->


                <!-- Online users -->
                <div class="card">
                    <div class="card-header bg-transparent header-elements-inline">
                        <span class="card-title font-weight-semibold">Usuários Online</span>
                        <div class="header-elements">
                            <span class="badge bg-success badge-pill">49</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <ul class="media-list">
                            <li class="media">
                                <a href="#" class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">James Alexander</a>
                                    <div class="font-size-sm text-muted">Santa Ana, CA.</div>
                                </div>
                                <div class="ml-3 align-self-center">
                                    <span class="badge badge-mark border-success"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Jeremy Victorino</a>
                                    <div class="font-size-sm text-muted">Dowagiac, MI.</div>
                                </div>
                                <div class="ml-3 align-self-center">
                                    <span class="badge badge-mark border-danger"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Margo Baker</a>
                                    <div class="font-size-sm text-muted">Kasaan, AK.</div>
                                </div>
                                <div class="ml-3 align-self-center">
                                    <span class="badge badge-mark border-success"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Beatrix Diaz</a>
                                    <div class="font-size-sm text-muted">Neenah, WI.</div>
                                </div>
                                <div class="ml-3 align-self-center">
                                    <span class="badge badge-mark border-warning"></span>
                                </div>
                            </li>

                            <li class="media">
                                <a href="#" class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Richard Vango</a>
                                    <div class="font-size-sm text-muted">Grapevine, TX.</div>
                                </div>
                                <div class="ml-3 align-self-center">
                                    <span class="badge badge-mark border-grey-400"></span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="card-footer d-flex justify-content-between align-items-center py-2">
                        <a href="#" class="text-grey">
                            All users
                        </a>

                        <div>
                            <a href="#" class="text-grey" data-popup="tooltip" title="Conference room"><i class="icon-comment"></i></a>
                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /online users -->


                <!-- Latest updates -->
                <div class="card">
                    <div class="card-header bg-transparent header-elements-inline">
                        <span class="card-title font-weight-semibold">Latest updates</span>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
                                        <i class="icon-git-pull-request"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                    <div class="text-muted font-size-sm">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon">
                                        <i class="icon-git-commit"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    Add full font overrides for popovers and tooltips
                                    <div class="text-muted font-size-sm">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon">
                                        <i class="icon-git-branch"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
                                    <div class="text-muted font-size-sm">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon">
                                        <i class="icon-git-merge"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
                                    <div class="text-muted font-size-sm">Dec 18, 18:36</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
                                        <i class="icon-git-pull-request"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    Have Carousel ignore keyboard events
                                    <div class="text-muted font-size-sm">Dec 12, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /latest updates -->



            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /left sidebar component -->



        <!-- Right content -->
        <div class="tab-content w-100 overflow-auto">
            <div class="tab-pane fade active show" id="profile">



                <!-- Profile info -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Informações do Perfil</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="" name="usuario_perfil">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nome</label>
                                        <input type="text" name="usuario_nome" class="form-control" readonly="readonly" value="<?= $usuario_nome; ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Sobrenome</label>
                                        <input type="text" name="usuario_sobrenome" class="form-control" readonly="readonly" value="<?= $usuario_sobrenome; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-9">
                                        <label>Email</label>
                                        <input type="email" readonly="readonly" name="usuario_email" class="form-control" value="<?= $usuario_email; ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <label>CEP</label>
                                        <input type="text" name="usuario_cep" class="form-control" value="<?= $usuario_cep; ?>">
                                    </div>


                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-9">
                                        <label>Endereço</label>
                                        <input type="text" name="usuario_endereco" class="form-control" value="<?= $usuario_endereco; ?>">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Numero</label>
                                        <input type="text" name="usuario_numero" value="<?= $usuario_numero; ?>" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Pais</label>
                                        <select class="form-control form-control-select2" name="usuario_pais" data-fouc>
                                            <option value="">Escolha..</option>
                                            <?php
                                            $readPais = new Read;
                                            $readPais->ExeRead("pais", "WHERE pais_id != 0");
                                            if ($readPais->getRowCount() >= 1):
                                                foreach ($readPais->getResult() AS $pais):
                                                    ?>
                                                    <option value="<?= $pais['pais_id']; ?>" ><?= $pais['pais_nome']; ?></option>
                                                    <?php
                                                endforeach;

                                            endif;
                                            ?>


                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Estado</label>
                                        <select class="form-control form-control-select2" name="usuario_estado" data-fouc>
                                            <option value="">Escolha..</option>
                                            <?php
                                            $readEstado = new Read;
                                            $readEstado->ExeRead("estado", "WHERE estado_id != 0");
                                            if ($readEstado->getRowCount() >= 1):
                                                foreach ($readEstado->getResult() AS $estado):
                                                    ?>
                                                    <option value="<?= $estado['estado_id']; ?>" ><?= $estado['estado_nome']; ?></option> 
                                                    <?php
                                                endforeach;
                                            endif;
                                            ?>


                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Cidade</label>
                                        <select class="form-control form-control-select2" name="usuario_cidade" data-fouc>
                                            <option value="">Escolha..</option>
                                            <?php
                                            $readCidade = new Read;
                                            $readCidade->ExeRead("cidade", "WHERE cidade_id != 0");
                                            if ($readCidade->getRowCount() >= 1):
                                                foreach ($readCidade->getResult() AS $cidade):
                                                    ?>
                                                     <option value="<?= $cidade['cidade_id'];?>"><?= $cidade['cidade_nome']; ?></option> 
                                                    <?php
                                                endforeach;

                                            endif;
                                            ?>
                                           
                                        </select>
                                    </div>


                                </div>
                            </div>



                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Telefone</label>
                                        <input type="text" value="99-99999-9999" class="form-control" name="usuario_telefone" value="<?= $usuario_telefone; ?>">
                                        <span class="form-text text-muted">99-99999-9999</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Imagem de Perfil</label>
                                        <input type="file" class="form-input-styled" name="usuario_avatar" data-fouc>
                                        <span class="form-text text-muted">Formatos aceitos: gif, png, jpg. Tamanho Máximo 2Mb</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h6 class="font-weight-semibold">Definir nova Senha</h6>
                                            <p class="mb-3">Para realizar alteração de sua senha deve definir nova senha a seguir, caso não informe a senha permanece a mesma.</p>

                                            <div class="form-group">
                                                <div class="badge-indicator-absolute">
                                                    <input type="text" class="form-control" placeholder="Informe nova senha" name="usuario_senha" title = "Informe uma senha [ de 6 a 12 caracteres! ]">
                                                    <span class="badge password-indicator-badge-absolute"></span>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-info generate-badge-absolute">Gerar Nova Senha</button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /profile info -->




            </div>

            <div class="tab-pane fade" id="schedule">

                <!-- Available hours -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Available hours</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="chart-container">
                            <div class="chart has-fixed-height" id="available_hours"></div>
                        </div>
                    </div>
                </div>
                <!-- /available hours -->


                <!-- Schedule -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">My schedule</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="my-schedule"></div>
                    </div>
                </div>
                <!-- /schedule -->

            </div>

            <div class="tab-pane fade" id="inbox">

                <!-- My inbox -->
                <div class="card">
                    <div class="card-header bg-transparent header-elements-inline">
                        <h6 class="card-title">My inbox</h6>

                        <div class="header-elements">
                            <span class="badge bg-blue">25 new today</span>
                        </div>
                    </div>

                    <!-- Action toolbar -->
                    <div class="bg-light">
                        <div class="navbar navbar-light bg-light navbar-expand-lg py-lg-2">
                            <div class="text-center d-lg-none w-100">
                                <button type="button" class="navbar-toggler w-100" data-toggle="collapse" data-target="#inbox-toolbar-toggle-multiple">
                                    <i class="icon-circle-down2"></i>
                                </button>
                            </div>

                            <div class="navbar-collapse text-center text-lg-left flex-wrap collapse" id="inbox-toolbar-toggle-multiple">
                                <div class="mt-3 mt-lg-0">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light btn-icon btn-checkbox-all">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                        </button>

                                        <button type="button" class="btn btn-light btn-icon dropdown-toggle" data-toggle="dropdown"></button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Select all</a>
                                            <a href="#" class="dropdown-item">Select read</a>
                                            <a href="#" class="dropdown-item">Select unread</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">Clear selection</a>
                                        </div>
                                    </div>

                                    <div class="btn-group ml-3 mr-lg-3">
                                        <button type="button" class="btn btn-light"><i class="icon-pencil7"></i> <span class="d-none d-lg-inline-block ml-2">Compose</span></button>
                                        <button type="button" class="btn btn-light"><i class="icon-bin"></i> <span class="d-none d-lg-inline-block ml-2">Delete</span></button>
                                        <button type="button" class="btn btn-light"><i class="icon-spam"></i> <span class="d-none d-lg-inline-block ml-2">Spam</span></button>
                                    </div>
                                </div>

                                <div class="navbar-text ml-lg-auto"><span class="font-weight-semibold">1-50</span> of <span class="font-weight-semibold">528</span></div>

                                <div class="ml-lg-3 mb-3 mb-lg-0">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-light btn-icon disabled"><i class="icon-arrow-left12"></i></button>
                                        <button type="button" class="btn btn-light btn-icon"><i class="icon-arrow-right13"></i></button>
                                    </div>

                                    <div class="btn-group ml-3">
                                        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a href="#" class="dropdown-item">One more line</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /action toolbar -->


                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-inbox">
                            <tbody data-link="row" class="rowlink">
                                <tr class="unread">
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-empty3 text-muted"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <img src="global_assets/images/brands/spotify.png" class="rounded-circle" width="32" height="32" alt="">
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Spotify</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">On Tower-hill, as you go down &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">To the London docks, you may have seen a crippled beggar (or KEDGER, as the sailors say) holding a painted board before him, representing the tragic scene in which he lost his leg</span>
                                    </td>
                                    <td class="table-inbox-attachment">
                                        <i class="icon-attachment text-muted"></i>
                                    </td>
                                    <td class="table-inbox-time">
                                        11:09 pm
                                    </td>
                                </tr>

                                <tr class="unread">
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-empty3 text-muted"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <span class="btn bg-warning-400 rounded-circle btn-icon btn-sm">
                                            <span class="letter-icon"></span>
                                        </span>
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">James Alexander</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject"><span class="badge bg-success mr-2">Promo</span> There are three whales and three boats &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">And one of the boats (presumed to contain the missing leg in all its original integrity) is being crunched by the jaws of the foremost whale</span>
                                    </td>
                                    <td class="table-inbox-attachment">
                                        <i class="icon-attachment text-muted"></i>
                                    </td>
                                    <td class="table-inbox-time">
                                        10:21 pm
                                    </td>
                                </tr>

                                <tr class="unread">
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-full2 text-warning-300"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Nathan Jacobson</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">Any time these ten years, they tell me, has that man held up &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">That picture, and exhibited that stump to an incredulous world. But the time of his justification has now come. His three whales are as good whales as were ever published in Wapping, at any rate; and his stump</span>
                                    </td>
                                    <td class="table-inbox-attachment"></td>
                                    <td class="table-inbox-time">
                                        8:37 pm
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-full2 text-warning-300"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <span class="btn bg-indigo-400 rounded-circle btn-icon btn-sm">
                                            <span class="letter-icon"></span>
                                        </span>
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Margo Baker</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">Throughout the Pacific, and also in Nantucket, and New Bedford &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">and Sag Harbor, you will come across lively sketches of whales and whaling-scenes, graven by the fishermen themselves on Sperm Whale-teeth, or ladies' busks wrought out of the Right Whale-bone</span>
                                    </td>
                                    <td class="table-inbox-attachment"></td>
                                    <td class="table-inbox-time">
                                        4:28 am
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-empty3 text-muted"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <img src="global_assets/images/brands/dribbble.png" class="rounded-circle" width="32" height="32" alt="">
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Dribbble</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">The whalemen call the numerous little ingenious contrivances &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">They elaborately carve out of the rough material, in their hours of ocean leisure. Some of them have little boxes of dentistical-looking implements</span>
                                    </td>
                                    <td class="table-inbox-attachment"></td>
                                    <td class="table-inbox-time">
                                        Dec 5
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-empty3 text-muted"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <span class="btn bg-brown-400 rounded-circle btn-icon btn-sm">
                                            <span class="letter-icon"></span>
                                        </span>
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Hanna Dorman</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">Some of them have little boxes of dentistical-looking implements &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">Specially intended for the skrimshandering business. But, in general, they toil with their jack-knives alone; and, with that almost omnipotent tool of the sailor</span>
                                    </td>
                                    <td class="table-inbox-attachment">
                                        <i class="icon-attachment text-muted"></i>
                                    </td>
                                    <td class="table-inbox-time">
                                        Dec 5
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-empty3 text-muted"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <img src="global_assets/images/brands/twitter.png" class="rounded-circle" width="32" height="32" alt="">
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Twitter</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject"><span class="badge bg-indigo-400 mr-2">Order</span> Long exile from Christendom &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">And civilization inevitably restores a man to that condition in which God placed him, i.e. what is called savagery</span>
                                    </td>
                                    <td class="table-inbox-attachment"></td>
                                    <td class="table-inbox-time">
                                        Dec 4
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-full2 text-warning-300"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <span class="btn bg-pink-400 rounded-circle btn-icon btn-sm">
                                            <span class="letter-icon"></span>
                                        </span>
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Vanessa Aurelius</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">Your true whale-hunter is as much a savage as an Iroquois &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">I myself am a savage, owning no allegiance but to the King of the Cannibals; and ready at any moment to rebel against him. Now, one of the peculiar characteristics of the savage in his domestic hours</span>
                                    </td>
                                    <td class="table-inbox-attachment">
                                        <i class="icon-attachment text-muted"></i>
                                    </td>
                                    <td class="table-inbox-time">
                                        Dec 4
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-empty3 text-muted"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">William Brenson</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">An ancient Hawaiian war-club or spear-paddle &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">In its full multiplicity and elaboration of carving, is as great a trophy of human perseverance as a Latin lexicon. For, with but a bit of broken sea-shell or a shark's tooth</span>
                                    </td>
                                    <td class="table-inbox-attachment">
                                        <i class="icon-attachment text-muted"></i>
                                    </td>
                                    <td class="table-inbox-time">
                                        Dec 4
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-empty3 text-muted"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <img src="global_assets/images/brands/facebook.png" class="rounded-circle" width="32" height="32" alt="">
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Facebook</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">As with the Hawaiian savage, so with the white sailor-savage &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">With the same marvellous patience, and with the same single shark's tooth, of his one poor jack-knife, he will carve you a bit of bone sculpture, not quite as workmanlike</span>
                                    </td>
                                    <td class="table-inbox-attachment"></td>
                                    <td class="table-inbox-time">
                                        Dec 3
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-full2 text-warning-300"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Vicky Barna</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject"><span class="badge bg-pink-400 mr-2">Track</span> Achilles's shield &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">Wooden whales, or whales cut in profile out of the small dark slabs of the noble South Sea war-wood, are frequently met with in the forecastles of American whalers. Some of them are done with much accuracy</span>
                                    </td>
                                    <td class="table-inbox-attachment"></td>
                                    <td class="table-inbox-time">
                                        Dec 2
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-empty3 text-muted"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <img src="global_assets/images/brands/youtube.png" class="rounded-circle" width="32" height="32" alt="">
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Youtube</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">At some old gable-roofed country houses &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">You will see brass whales hung by the tail for knockers to the road-side door. When the porter is sleepy, the anvil-headed whale would be best. But these knocking whales are seldom remarkable as faithful essays</span>
                                    </td>
                                    <td class="table-inbox-attachment">
                                        <i class="icon-attachment text-muted"></i>
                                    </td>
                                    <td class="table-inbox-time">
                                        Nov 30
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-empty3 text-muted"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Tony Gurrano</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">On the spires of some old-fashioned churches &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">You will see sheet-iron whales placed there for weather-cocks; but they are so elevated, and besides that are to all intents and purposes so labelled with "HANDS OFF!" you cannot examine them</span>
                                    </td>
                                    <td class="table-inbox-attachment"></td>
                                    <td class="table-inbox-time">
                                        Nov 28
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-empty3 text-muted"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <span class="btn bg-danger-400 rounded-circle btn-icon btn-sm">
                                            <span class="letter-icon"></span>
                                        </span>
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Barbara Walden</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">In bony, ribby regions of the earth &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">Where at the base of high broken cliffs masses of rock lie strewn in fantastic groupings upon the plain, you will often discover images as of the petrified forms</span>
                                    </td>
                                    <td class="table-inbox-attachment"></td>
                                    <td class="table-inbox-time">
                                        Nov 28
                                    </td>
                                </tr>

                                <tr>
                                    <td class="table-inbox-checkbox rowlink-skip">
                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                    </td>
                                    <td class="table-inbox-star rowlink-skip">
                                        <a href="#">
                                            <i class="icon-star-full2 text-warning-300"></i>
                                        </a>
                                    </td>
                                    <td class="table-inbox-image">
                                        <img src="global_assets/images/brands/amazon.png" class="rounded-circle" width="32" height="32" alt="">
                                    </td>
                                    <td class="table-inbox-name">
                                        <a href="mail_read.html">
                                            <div class="letter-icon-title text-default">Amazon</div>
                                        </a>
                                    </td>
                                    <td class="table-inbox-message">
                                        <div class="table-inbox-subject">Here and there from some lucky point of view &nbsp;-&nbsp;</div>
                                        <span class="text-muted font-weight-normal">You will catch passing glimpses of the profiles of whales defined along the undulating ridges. But you must be a thorough whaleman, to see these sights; and not only that, but if you wish to return to such a sight again</span>
                                    </td>
                                    <td class="table-inbox-attachment">
                                        <i class="icon-attachment text-muted"></i>
                                    </td>
                                    <td class="table-inbox-time">
                                        Nov 27
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /table -->

                </div>
                <!-- /my inbox -->

            </div>

            <div class="tab-pane fade" id="orders">

                <!-- Orders history -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">Orders history</h6>
                        <div class="header-elements">
                            <span><i class="icon-arrow-down22 text-danger"></i> <span class="font-weight-semibold">- 29.4%</span></span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="chart-container">
                            <div class="chart has-fixed-height" id="balance_statistics"></div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th colspan="2">Product name</th>
                                    <th>Size</th>
                                    <th>Colour</th>
                                    <th>Article number</th>
                                    <th>Units</th>
                                    <th>Price</th>
                                    <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                    <td colspan="7" class="font-weight-semibold">New orders</td>
                                    <td class="text-right">
                                        <span class="badge bg-secondary badge-pill">24</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0" style="width: 45px;">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Fathom Backpack</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-grey border-grey mr-1"></span>
                                            Processing
                                        </div>
                                    </td>
                                    <td>34cm x 29cm</td>
                                    <td>Orange</td>
                                    <td>
                                        <a href="#">1237749</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 79.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Mystery Air Long Sleeve T Shirt</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-grey border-grey mr-1"></span>
                                            Processing
                                        </div>
                                    </td>
                                    <td>L</td>
                                    <td>Process Red</td>
                                    <td>
                                        <a href="#">345634</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 38.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Women’s Prospect Backpack</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-grey border-grey mr-1"></span>
                                            Processing
                                        </div>
                                    </td>
                                    <td>46cm x 28cm</td>
                                    <td>Neu Nordic Print</td>
                                    <td>
                                        <a href="#">5739584</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 60.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Overlook Short Sleeve T Shirt</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-grey border-grey mr-1"></span>
                                            Processing
                                        </div>
                                    </td>
                                    <td>M</td>
                                    <td>Gray Heather</td>
                                    <td>
                                        <a href="#">434450</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 35.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table-active">
                                    <td colspan="7" class="font-weight-semibold">Shipped orders</td>
                                    <td class="text-right">
                                        <span class="badge bg-success badge-pill">42</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Infinite Ride Liner</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-success border-success mr-1"></span>
                                            Shipped
                                        </div>
                                    </td>
                                    <td>43</td>
                                    <td>Black</td>
                                    <td>
                                        <a href="#">34739</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 210.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Custom Snowboard</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-success border-success mr-1"></span>
                                            Shipped
                                        </div>
                                    </td>
                                    <td>151</td>
                                    <td>Black/Blue</td>
                                    <td>
                                        <a href="#">5574832</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 600.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Kids' Day Hiker 20L Backpack</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-success border-success mr-1"></span>
                                            Shipped
                                        </div>
                                    </td>
                                    <td>24cm x 29cm</td>
                                    <td>Figaro Stripe</td>
                                    <td>
                                        <a href="#">6684902</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 55.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Lunch Sack</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-success border-success mr-1"></span>
                                            Shipped
                                        </div>
                                    </td>
                                    <td>24cm x 20cm</td>
                                    <td>Junk Food Print</td>
                                    <td>
                                        <a href="#">5574829</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 20.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Cambridge Jacket</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-success border-success mr-1"></span>
                                            Shipped
                                        </div>
                                    </td>
                                    <td>XL</td>
                                    <td>Nomad/Railroad</td>
                                    <td>
                                        <a href="#">475839</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 175.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Covert Jacket</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-success border-success mr-1"></span>
                                            Shipped
                                        </div>
                                    </td>
                                    <td>XXL</td>
                                    <td>Mocha/Glacier Sierra</td>
                                    <td>
                                        <a href="#">589439</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 126.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table-active">
                                    <td colspan="7" class="font-weight-semibold">Cancelled orders</td>
                                    <td class="text-right">
                                        <span class="badge bg-danger badge-pill">9</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Day Hiker Pinnacle 31L Backpack</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-danger border-danger mr-1"></span>
                                            Cancelled
                                        </div>
                                    </td>
                                    <td>42cm x 26.5cm</td>
                                    <td>Blotto Ripstop</td>
                                    <td>
                                        <a href="#">5849305</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 130.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Kids' Gromlet Backpack</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-danger border-danger mr-1"></span>
                                            Cancelled
                                        </div>
                                    </td>
                                    <td>22cm x 20cm</td>
                                    <td>Slime Camo Print</td>
                                    <td>
                                        <a href="#">4438495</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 35.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Tinder Backpack</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-danger border-danger mr-1"></span>
                                            Cancelled
                                        </div>
                                    </td>
                                    <td>42cm x 26cm</td>
                                    <td>Dark Tide Twill</td>
                                    <td>
                                        <a href="#">4759383</a>
                                    </td>
                                    <td>2</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 180.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pr-0">
                                        <a href="#">
                                            <img src="global_assets/images/placeholders/placeholder.jpg" height="60" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="font-weight-semibold">Almighty Snowboard Boot</a>
                                        <div class="text-muted font-size-sm">
                                            <span class="badge badge-mark bg-danger border-danger mr-1"></span>
                                            Cancelled
                                        </div>
                                    </td>
                                    <td>45</td>
                                    <td>Multiweave</td>
                                    <td>
                                        <a href="#">34432</a>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h6 class="mb-0 font-weight-semibold">&euro; 370.00</h6>
                                    </td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-truck"></i> Track parcel</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-wallet"></i> Payment details</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /orders history -->

            </div>
        </div>
        <!-- /right content -->

    </div>
    <!-- /inner container -->

</div>
<!-- /content area -->
