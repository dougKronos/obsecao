<!-- <?php 
	// Aqui é verificado se a sessão ativa está cadastrada no banco

	// Se sim, entra direto em app.php

	// Se não, entra na página de 'index.php', que apresentará 
	// a página inicial com um pequeno menu com os submenus 
	// signin.php e signup.php

	// Por enquanto somente entra em signin.php
	// include_once 'app/signin.php';exit();

?> -->
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" ng-app="Obsecao">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
	<link type="text/css" rel="stylesheet" href="statics/bootstrap/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="statics/css/iframe-style.css" />
	<link type="text/css" rel="stylesheet" href="statics/css/styleSignUp.css" />
	<link type="text/css" rel="stylesheet" href="statics/css/iframe-responsive.css" />
	<link type="text/css" rel="stylesheet" href="statics/css/styles.css" />
	<link type="text/css" rel="stylesheet" href="statics/css/styles/signin.css" />
	<link type="text/css" rel="stylesheet" href="statics/css/styleIndex.css" />
    <title>ObseCão</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="statics/js/jquery.min.js"></script>
    <script src="../statics/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="statics/js/angular.min.js"></script>
	<script type="text/javascript" src="app/frontend/start.js"></script>
	<script type="text/javascript" src="app/frontend/controllers/IndexCtrl.js"></script>
</head>
<body onload="setTimeout(function(){$('#caoPata2').addClass('caoPata2Go');},1000)">
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
              		<img class="logo" src="statics/images/logo.png">	
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">
                        <button type="button" class="btn btn-success" onclick="location.href= 'app/signin.php'">Entrar</button>
                        <button type="button" class="btn btn-success" onclick="location.href= 'app/signup.php'">Cadastrar</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <nav class="navbar navbar-default">
			<div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Brand</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			     	<ul class="nav navbar-nav">
			        <li class="active"><a href="#">HOME<span class="sr-only"></span></a></li>
			        <li><a href="#">Voluntário</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			 </div><!-- /.container-fluid -->
		</nav>


	</header>
	<section class="menuInitial">
		<div>
			<img  id="caoPata2" class="caoPata2go" src="statics/images/cao-pata2.png" alt="caoPata2">
		</div>
	</section>
</body>
</html>