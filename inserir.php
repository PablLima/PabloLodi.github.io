<?php
	if (isset($_GET['coda']) && 
		isset($_GET['tipo']) && 
		isset($_GET['status']) && 
		isset($_GET['dtanasc'])) {

			include "./classes/Animal.php";
			$a = new Animal();
			$a->insertAnimal($_GET['coda'],$_GET['tipo'],$_GET['status'],$_GET['dtanasc']);
			echo "teste";
			#header("Location: animais.php?insercao=1");
	}
	#header("Location: animais.php?insercao=0");
?>