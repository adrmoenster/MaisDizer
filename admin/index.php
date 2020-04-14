<?php
ob_start();
session_start();
require ('../_app/Config.inc.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">

        <!-- DO TEMA - INICIO -->

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
	<script src="js/app.js"></script>
	<!-- /theme JS files -->

        <!-- DO TEMA - FIM -->





    </head>
    <body>



        <?php
        $login = new Login(2); //Aqui instancia metodo que irá validar login, verificando nível, não deixa logar se nível do usuário for menor que definido

        if ($login->CheckLogin())://Verificando Login através do metodo CheckLogin, se passar nas validações do metodo então direciona para o painel.
            header('Location: painel.php');
        endif;


        $dataLogin = filter_input_array(INPUT_POST, FILTER_DEFAULT); //Pegando os dados array do formulario
        if (!empty($dataLogin['AdminLogin']))://Verificando negação de não existe e não é nulo
            $login->ExeLogin($dataLogin); //Executando o metodo ExeLogin da Classe Login
            if (!$login->getResult())://Verificando a negação de retorno no metodo ExeLogin executado anteriormente, ou seja, não deu certo o login
                ZTErro($login->getError()[0], $login->getError()[1]); //Este é retorno da mensagem informando de não ser possível fazer login
            else://Depois de todas as negações então a seguir autentica na página painel.php
                header('Location: painel.php?exe=home'); //Direcionando para página painel.php
            endif;
        endif;

        $get = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT); //Buscando com segurança uma string de nome 'exe' na url
        if (!empty($get))://Se não ocorreu retorno na busca anterior realizada entra nesse if
            if ($get == 'restrito')://verificando se na url ocorreu retorno da palavra 'restrito' na exe, assim: exe=restrito
                ZTErro('<b>Oppsss:</b> Acesso negado. Favor efetue login para acessar o painel!', ZT_ALERT); //Se verificação anterior retornar positivo apresenta então essa mensagem
            elseif ($get == 'logoff')://verificando se na url ocorreu retorno da palavra 'logoff' na exe, assim: exe=logoff
                ZTErro('<b>Sucesso ao deslogar:</b> Sua sessão foi finalizada. Volte sempre!', ZT_ACCEPT); //Se retornou positvo para verificação anterior então apresenta essa mensagem
            endif;
        endif;
        ?>




   

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->
				<form class="login-form" name="AdminLoginForm" action="" method="post">
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Login to your account</h5>
								<span class="d-block text-muted">Enter your credentials below</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="email" class="form-control" placeholder="seu e-mail" name="user">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" class="form-control" placeholder="sua senha" name="pass">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button class="btn btn-primary btn-block" name="AdminLogin" value="Logar" type="submit">Entrar <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="text-center">
								<a href="login_password_recover.html">Esqueceu a senha?</a>
							</div>
						</div>
					</div>
				</form>
				<!-- /login form -->

			</div>
			<!-- /content area -->


			

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


    </body>
</html>