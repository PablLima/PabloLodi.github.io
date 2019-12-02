<?php
	if (isset($_GET['coda']) && 
		isset($_GET['tipo']) && 
		isset($_GET['astatus']) && 
		isset($_GET['dtanasc'])) {

			include "./classes/Animal.php";
			$a = new Animal();
			$a->insertAnimal($_GET['coda'],$_GET['tipo'],$_GET['astatus'],$_GET['dtanasc']);
			header("Location: animais.php");
	}
	#header("Location: animais.php?insercao=0");
?>