<?php 
	// Aqui é verificado se a sessão ativa está cadastrada no banco

	// Se sim, entra direto em app.php

	// Se não, entra na página de 'index.php', que apresentará 
	// a página inicial com um pequeno menu com os submenus 
	// signin.php e signup.php

	// Por enquanto somente entra em signin.php
	// include_once 'app/signin.php';exit();

?>
<!DOCTYPE html>
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
</head>
<body onload="setTimeout(function(){$('#caoPata2').addClass('caoPata2Go');},1000)">
	<style>
		body{
			background-color:white;
		}
		.logo{
			position:fixed;
			top:20px;
			left:25px;
		}
		.greeting{
			position:fixed;
			top:18px;
			left:286px;
		}
		.menuInitial{
			list-style-type:none;
			margin:0;
			padding:0;
		}
		a:hover{
			text-decoration:none;
		}
		a{
			text-decoration:none;
			width:85px;
			position:fixed;
			top:20px;
			right:0;
			font-size:20px;
			color:blue;
		}
		.caoPata2{
			position:fixed;
			margin:auto;
			left:0;
			right:0;
			opacity:0;
		}
		.caoPata2Go{
			opacity:1;
			right:-500px;
			animation: moveDog 2s;
		}
		/* Chrome, Safari, Opera */
		@-webkit-keyframes moveDog {
		    from {right:0;opacity:0;}
		    to {right: -500px;opacity:1;}
		}

		/* Standard syntax */
		@keyframes moveDog {
			from {right:0;opacity:0;}
			to {right: -500px;opacity:1;}
		}
	</style>
	<header>
		<img class="logo" src="/statics/images/logo.png">	
		<h4 class="greeting">Seja Bem-Vindo</h4>
		<nav>
			<ul class="menuInitial">
				<li>
					<a href="app/signin.php">Login</a>
				</li>
			</ul>
		</nav>
	</header>
	<section class="initial">
		<div>
			<img id="caoPata2" class="caoPata2" src="statics/images/cao-pata2.png" alt="caoPata2">
		</div>
	</section>
</body>
</html>