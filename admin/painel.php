<?php
ob_start();
session_start();
require('../_app/Config.inc.php');

$login = new Login(2); //Nivel de acesso necessário
$logoff = filter_input(INPUT_GET, 'logoff', FILTER_VALIDATE_BOOLEAN); //pegando na url a string logoff
$getexe = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);



if (!$login->CheckLogin())://Se retonar resultado é porque não está logado ou não tem permissão
    unset($_SESSION['userlogin']); //Limpa a sessão de nome userlogin
    header('Location: index.php?exe=restrito'); //retorna a tela de login com mensagem de restrito
else://se entrou no else então está logado
    $userlogin = $_SESSION['userlogin']; //Atribui a váriável userlogin as informações da sessão userlogin
endif;

if ($logoff)://se busca na url pela string logoff retornar resultado então entra no if
    unset($_SESSION['userlogin']); //limpa a sessão
    header('Location: index.php?exe=logoff'); //deslogando então direciona para index com o exe igual a logoff
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <link rel="icon" type="image/png" sizes="16x16" href="img/br.jpg"><link rel="icon" type="image/png" sizes="32x32" href="img/br.jpg"><link rel="icon" sizes="192x192" href="img/br.jpg">
        <title><?= SITENAME; ?></title>

        <!-- Do Tema - INICIO -->
       	<!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
        <link href="css/layout.min.css" rel="stylesheet" type="text/css">
        <link href="css/components.min.css" rel="stylesheet" type="text/css">
        <link href="css/colors.min.css" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->

        <!-- Core JS files -->
        <script src="global_assets/js/main/jquery.min.js"></script>
        <script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
        <script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
        <!-- /core JS files -->

        <!-- Theme JS files -->
        <script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
        <script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
        <script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script><!-- form_actions/form_validation/form_checkboxes_radios -->
        <script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script><!-- form_floating_labels -->
        <script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
        <script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

        <script src="global_assets/js/plugins/forms/wizards/steps.min.js"></script><!-- form_wizard -->
        <script src="global_assets/js/plugins/forms/styling/switch.min.js"></script><!-- form_validation/form_checkboxes_radios -->
        <script src="global_assets/js/plugins/forms/inputs/touchspin.min.js"></script><!-- form_validation -->
        <script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script><!-- form_actions/form_wizard/form_validation/form_floating_labels/form_checkboxes_radios -->
        <script src="global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script><!-- form_select2 -->
        <script src="global_assets/js/plugins/forms/selects/select2.min.js"></script><!-- form_actions/form_wizard/form_floating_labels -->
        <script src="global_assets/js/plugins/forms/inputs/inputmask.js"></script><!-- form_wizard/form_floating_labels -->
        <script src="global_assets/js/plugins/forms/validation/validate.min.js"></script><!-- form_wizard/form_validation -->
        <script src="global_assets/js/plugins/extensions/cookie.js"></script><!-- form_wizard -->

        <script src="global_assets/js/plugins/extensions/jquery_ui/core.min.js"></script><!-- form_floating_labels -->
        <script src="global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script><!-- form_floating_labels -->

        <script src="global_assets/js/plugins/forms/tags/tokenfield.min.js"></script><!-- form_floating_labels -->
        <script src="global_assets/js/plugins/forms/inputs/touchspin.min.js"></script><!-- form_floating_labels -->
        <script src="global_assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"></script><!-- form_controls_extended -->
        <script src="global_assets/js/plugins/forms/inputs/passy.js"></script><!-- form_controls_extended -->
        <script src="global_assets/js/plugins/forms/inputs/maxlength.min.js"></script><!-- form_floating_labels/form_controls_extended -->
        <script src="global_assets/js/plugins/forms/inputs/autosize.min.js"></script><!-- form_controls_extended -->
        <script src="global_assets/js/plugins/forms/inputs/formatter.min.js"></script><!-- form_floating_labels/form_controls_extended -->
        <script src="global_assets/js/plugins/notifications/pnotify.min.js"></script><!-- form_multiselect -->

        <script src="global_assets/js/plugins/extensions/rowlink.js"></script><!-- user perfil-->
        <script src="global_assets/js/plugins/visualization/echarts/echarts.min.js"></script><!-- user perfil-->
        <script src="global_assets/js/plugins/ui/fullcalendar/fullcalendar.min.js"></script><!-- user perfil-->

        <script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script><!-- USER LISTA -->

        <script src="global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script><!-- USER LISTA -->
        <script src="global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script><!-- USER LISTA -->
        <script src="global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script><!-- USER LISTA -->
        <script src="global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script><!-- USER LISTA -->
        <script src="global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
        <script src="global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
        <script src="global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>


        <script src="js/app.js"></script>

        <script src="global_assets/js/demo_pages/dashboard.js"></script>
        <script src="global_assets/js/demo_pages/form_actions.js"></script><!-- form_actions -->
        <script src="global_assets/js/demo_pages/form_wizard.js"></script><!-- form_wizard -->
        <script src="global_assets/js/demo_pages/form_validation.js"></script><!-- form_validation -->
        <script src="global_assets/js/demo_pages/form_floating_labels.js"></script><!-- form_floating_labels -->
        <script src="global_assets/js/demo_pages/form_controls_extended.js"></script><!-- form_controls_extended -->
        <script src="global_assets/js/demo_pages/form_input_groups.js"></script><!-- form_input_groups -->
        <script src="global_assets/js/demo_pages/form_multiselect.js"></script><!-- form_multiselect -->
        <script src="global_assets/js/demo_pages/form_select2.js"></script><!-- form_select2 -->
        <script src="global_assets/js/demo_pages/form_checkboxes_radios.js"></script><!-- form_checkboxes_radios -->
        <script src="global_assets/js/demo_pages/user_pages_profile_tabbed.js"></script>  <!-- user perfil-->    
        <script src="global_assets/js/demo_pages/datatables_extension_buttons_html5.js"></script><!-- USER LISTA -->

        <script src="global_assets/js/demo_pages/uploader_bootstrap.js"></script>

        <!-- /theme JS files -->
        <!-- Do Tema - FIM -->


    </head>
    <body >

        <?php include_once './inc/header.inc.php'; ?>
        <div class="page-content">
            <?php include_once './inc/sidebar.inc.php'; ?>
            <div class="content-wrapper">


                <?php
                if (isset($getexe)):
                    $linkto = explode('/', $getexe);

                else:
                    $linkto = array();

                endif;
                ?>


                <?php
                //QUERY STRING
                //Isso é um padrão de projeto chamado front controller - decide qual controlador será executado e carregado no sistema
                if (!empty($getexe)):
                    $includepatch = __DIR__ . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR . strip_tags(trim($getexe) . '.php');

                else:
                    $includepatch = __DIR__ . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR . 'home.php';
                endif;

                if (file_exists($includepatch) && $getexe != 'usuario/cadastra' && $getexe != 'usuario/edita' && $getexe != 'usuario/lista' && $getexe != 'materia-noticia/cadastra' && $getexe != 'materia-noticia/edita' && $getexe != 'materia-noticia/lista' && $getexe != 'anuncio/cadastra' && $getexe != 'anuncio/edita' && $getexe != 'anuncio/lista' && $getexe != 'classificado/cadastra' && $getexe != 'classificado/edita' && $getexe != 'classificado/lista'):
                    require_once $includepatch;
                elseif (file_exists($includepatch) && $getexe == 'usuario/cadastra' || file_exists($includepatch) && $getexe == 'usuario/edita' || file_exists($includepatch) && $getexe == 'usuario/lista' || file_exists($includepatch) && $getexe == 'anuncio/cadastra' || file_exists($includepatch) && $getexe == 'anuncio/edita' || file_exists($includepatch) && $getexe == 'anuncio/lista'):
                    if ($_SESSION['userlogin']['usuario_nivel'] > 3):
                        require_once $includepatch;
                    else:
                        $includepatch = __DIR__ . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR . 'semnivel.php';
                        require_once $includepatch;

                    endif;
                elseif (file_exists($includepatch) && $getexe == 'materia-noticia/cadastra' || file_exists($includepatch) && $getexe == 'materia-noticia/edita' || file_exists($includepatch) && $getexe == 'materia-noticia/lista' || file_exists($includepatch) && $getexe == 'classificado/cadastra' || file_exists($includepatch) && $getexe == 'classificado/edita' || file_exists($includepatch) && $getexe == 'classificado/lista'):
                    if ($_SESSION['userlogin']['usuario_nivel'] > 2):
                        require_once $includepatch;
                    else:
                        $includepatch = __DIR__ . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR . 'semnivel.php';
                        require_once $includepatch;

                    endif;
                else:
                    $includepatch = __DIR__ . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR . '404.php';
                    require_once $includepatch;


                endif;
                ?>


                <?php include_once './inc/footer.inc.php'; ?>




            </div>
        </div>

        <!-- Theme JS files -->
        <script src="global_assets/js/plugins/forms/tags/tagsinput.min.js"></script><!-- POST -->	
        <script src="global_assets/js/demo_pages/form_tags_input.js"></script><!-- POST -->
        <!-- /theme JS files -->
        <script src="__jsc/tinymce2/js/tinymce/tinymce.js"></script>


        <script>
            tinymce.init({
                selector: '.js_editor',
                height: 500,
                theme: 'modern',
                plugins: 'spellchecker print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount  imagetools    contextmenu colorpicker textpattern help',
                toolbar1: 'spellchecker | media | formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
                image_advtab: true,
                templates: [
                    {title: 'Test template 1', content: 'Test 1'},
                    {title: 'Test template 2', content: 'Test 2'}
                ],
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tinymce.com/css/codepen.min.css'
                ],
                image_description: true,
                image_caption: true,
                image_class_list: [
                    {title: 'Responsiva', value: 'img-fluid rounded'},
                ],
                language: 'pt_BR',
                language_url: '__jsc/tinymce2/langs/pt_BR.js'

            });
            tinymce.init({
                selector: '.js_live',
                height: 500,
                theme: 'modern',
                plugins: 'spellchecker print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount  imagetools    contextmenu colorpicker textpattern help',
                toolbar1: 'spellchecker | media | formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
                image_advtab: true,
                templates: [
                    {title: 'Test template 1', content: 'Test 1'},
                    {title: 'Test template 2', content: 'Test 2'}
                ],
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tinymce.com/css/codepen.min.css'
                ],
                image_description: true,
                image_caption: true,
                image_class_list: [
                    {title: 'Responsiva', value: 'img-fluid rounded'}
                ],
                language: 'pt_BR',
                language_url: '__jsc/tinymce2/langs/pt_BR.js'

            });
        </script>

    </body>



</html>