<?php
	if (isset($_GET['login']) && 
		isset($_GET['senha']) && 
		isset($_GET['funcao'])) {

			include "./classes/Cliente.php";
			$c = new Cliente();
			$c->insertUser($_GET['login'],$_GET['senha'],$_GET['funca']);
			header("Location: clientes.php");
	}
	#header("Location: animais.php?insercao=0");
?>