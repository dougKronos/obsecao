<?php 
	// Aqui é verificado se a sessão ativa está cadastrada no banco

	// Se sim, entra direto em app.php

	// Se não, entra na página de 'index.php', que apresentará 
	// a página inicial com um pequeno menu com os submenus 
	// signin.php e signup.php

	// Por enquanto somente entra em signin.php
	include_once 'app/signin.php';
?>