<!DOCTYPE html>
<html lang="en" ng-app="Obsecao">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
	<link type="text/css" rel="stylesheet" href="../statics/bootstrap/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="../statics/css/iframe-style.css" />
	<link type="text/css" rel="stylesheet" href="../statics/css/iframe-responsive.css" />
	<link type="text/css" rel="stylesheet" href="../statics/css/styles.css" />
    <title>ObseCão</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../statics/js/angular.min.js"></script>
	<script type="text/javascript" src="../statics/js/start.js"></script>
	<script type="text/javascript" src="frontend/controllers/LoginCtrl.js"></script>
</head>
<body>
	<section class="container" ng-controller="LoginCtrl">
			<section class="login-form">
				<form method="post" action="" role="login" name="signForm">
					<img src="../statics/images/logo.png" class="img-responsive" alt="" />
					<input type="text" name="email" placeholder="Email" required class="form-control input-lg" ng-model="email" ng-blur="changeEmail($event)" email-drt />
					<!-- <div class="exclamation-icon error-date" ng-show="myForm.validityDate.$invalid && myForm.$dirty">!</div> -->

					<input type="password" name="password" placeholder="Senha" required class="form-control input-lg" />
					<button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Entrar</button>
					<div>
						<a href="#">Criar Conta</a> ou <a href="#">Esqueci minha senha</a>
					</div>
				</form>
				<div class="form-links">
					<a href="../index.php">www.obsecao.com.br</a>
				</div>
			</section>
	</section>
</body>
</html>