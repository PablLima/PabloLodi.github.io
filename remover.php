<?php
	if (isset($_GET['coda'])) {
			include "./classes/Animal.php";
			$a = new Animal();
			$a->removeAnimal($_GET['coda']);
			header("Location: animais.php?insercao=1");
	}
	header("Location: animais.php?insercao=0");
	#header("Location: animais.php?insercao=0");
	#header("Location: animais.php?insercao=0");
	#header("Location: animais.php?insercao=0");
	#header("Location: animais.php?insercao=0");
?>