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
	} else if (isset($_GET['codp'])) {
		include "./classes/Propriedade.php";
		$p = new Propriedade();
		$p->remove($_GET['codp']);
		header("Location: propriedades.php?remocao=1");
	} else if (isset($_GET['datae'])) {
		include "./classes/Lote.php";
		$lo = new Lote();
		$lo->remove($_GET['datae']);
		header("Location: lotes.php?remocao=1");
	} else if (isset($_GET['periodo'])) {
		include "./classes/Avaliacao.php";
		$av = new Avaliacao();
		$av->remove($_GET['periodo']);
		header("Location: avaliacao.php?remocao=1");
	}
?>