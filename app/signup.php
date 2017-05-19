<!DOCTYPE html>
<html lang="en" ng-app="Obsecao">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
	<link type="text/css" rel="stylesheet" href="../statics/bootstrap/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="../statics/css/iframe-style.css" />
	<link type="text/css" rel="stylesheet" href="../statics/css/styles/styleSignUp.css" />
	<link type="text/css" rel="stylesheet" href="../statics/css/iframe-responsive.css" />
	<link type="text/css" rel="stylesheet" href="../statics/css/styles/styles.css" />
	<link type="text/css" rel="stylesheet" href="../statics/css/styles/styleSignUp.css" />
    <title>ObseCão</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../statics/js/jquery.min.js"></script>
    <script src="../statics/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../statics/js/angular.min.js"></script>
	<script type="text/javascript" src="../app/frontend/start.js"></script>
	<script type="text/javascript" src="../app/frontend/controllers/LoginCtrl.js"></script>
	<script type="text/javascript" src="../app/frontend/directives/validatorEmailDrt.js"></script>
</head>
<body style="overflow:scroll; background: url(../statics/images/bg.jpg) no-repeat center center fixed;">
	<section class="container" ng-controller="LoginCtrl">
		<form role="login" name="signForm" class="signUpForm" novalidate autoScroll="true">
			<h1 align="center"><i class="glyphicon glyphicon-globe"></i>Inscreva-se!</h1>
           	
           	<input class="form-control input-lg" name="name" placeholder="Nome" required type="text"/>
           	<input class="form-control input-lg" name="address" placeholder="Endereço" required type="text"/>
           	<select class="form-control input-lg" name="state" required type="text">
           		<option value="">Selecione o Estado...</option>
           	</select>
           	<br>
           	<select class="form-control input-lg" name="city" required type="text">
           		<option value="">Selecione a Cidade...</option>
           	</select>
           	<input class="form-control input-lg" name="phone" placeholder="Fone" data-mask="(00)00000-0000" maxlength="14" required type="text""/>
           	<input class="form-control input-lg" name="alternativePhone" placeholder="Fone alternativo" data-mask="(00)00000-0000" maxlength="14" required type="text""/>	
           	

			<input type="text" name="email" placeholder="Email" required class="form-control input-lg" ng-model="email" email-drt />
			<div class="myInitialHidden errorMsg" ng-show="allowWarningEmail || (signForm.email.$dirty && signForm.email.$invalid)"><img class="errorIcon" src="../statics/images/error.png" alt="errorIcon"> Email inválido!</div>
           	
			<input type="password" name="pass" placeholder="Senha" required class="form-control input-lg" ng-click="test(signForm)" ng-model="password" />
			<div class="myInitialHidden errorMsg" ng-show="allowWarningPass || (signForm.pass.$dirty && signForm.pass.$error.required)"><img class="errorIcon" src="../statics/images/error.png" alt="errorIcon"> Senha Obrigatória!</div>

			<label>Foto</label>
			<input type="file" name="file" id="Arquivo">


			<button name="save" type="submit" class="btn btn-success btn-block" ><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</button>
			<button name="cancel" class="btn btn-danger btn-default pull-left btn-block" onClick="history.go(-1)"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
			<div class="form-links">
				<a>.</a>
			</div>
		</form>
		<div class="form-links">
			<a href="../index.php">www.obsecao.com.br</a>
		</div>
	</section>
	<script type="text/javascript" src="../app/frontend/runFinal.js"></<script type="text/javascript"></script>>
</body>
</html>