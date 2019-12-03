<?php
	if (isset($_GET['coda'])) {
			include "./classes/Animal.php";
			$a = new Animal();
			$a->remove($_GET['coda']);
			header("Location: animais.php?remocao=1");
	} else if (isset($_GET['codal'])) {
		include "./classes/Alimento.php";
		$al = new Alimento();
		$al->remove($_GET['codal']);
		header("Location: alimentacao.php?remocao=1");
	} else if (isset($_GET['codin'])) {
		include "./classes/Insumo.php";
		$i = new Insumo();
		$i->remove($_GET['codin']);
		header("Location: insumos.php?remocao=1");
	}
?>