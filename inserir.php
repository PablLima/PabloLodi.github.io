<?php
	if (isset($_GET['coda'])) {
		include "./classes/Animal.php";
		$a = new Animal();
		$a->insert($_GET['coda'],$_GET['tipo'],$_GET['astatus'],$_GET['dtanasc']);
		header("Location: animais.php?insercao=1");
	} else if (isset($_GET['codal'])) {
		include "./classes/Alimento.php";
		$al = new Alimento();
		$al->insert($_GET['codal'],$_GET['nomeali'],$_GET['tipo'],$_GET['peso'],$_GET['dtaval'],$_GET['produtora'],$_GET['retesper'] );
		header("Location: alimentacao.php?insercao=1");
	}
	#header("Location: animais.php?insercao=0");
?>