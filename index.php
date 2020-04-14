<?php
ob_start();
require_once '_app/Config.inc.php';

$Sessao = new Session;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">

        <?php
        $Link = new Link;
        $Link->getTags();
//        var_dump($Link);
        ?>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


    </head>
    <body>
        <?php
        require(REQUIRE_PATH . '/inc/header.inc.php');

        if (!require ($Link->getPatch())):
            ZTErro('Erro ao incluir arquivo de navegação!', ZT_ERROR, true);
        endif;

        require(REQUIRE_PATH . '/inc/footer.inc.php');
        ?>


<!-- jQuery Plugins -->
	<script src="<?= INCLUDE_PATH; ?>/js/jquery.min.js"></script>
	<script src="<?= INCLUDE_PATH; ?>/js/bootstrap.min.js"></script>
	<script src="<?= INCLUDE_PATH; ?>/js/jquery.stellar.min.js"></script>
	<script src="<?= INCLUDE_PATH; ?>/js/main.js"></script>

    </body>

</html>
<?php
ob_end_flush();
