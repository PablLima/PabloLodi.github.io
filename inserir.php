<?php
	if (isset($_GET['coda'])) {
		include "./classes/Animal.php";
		$a = new Animal();
		$a->insert($_GET['coda'],$_GET['tipo'],$_GET['astatus'],$_GET['dtanasc']);
		header("Location: animais.php?insercao=1");
	} else if (isset($_GET['codal'])) {
		include "./classes/Alimento.php";
		$al = new Alimento();
		$al->insert($_GET['codal'],$_GET['nomeali'],$_GET['tipo'],$_GET['peso'],$_GET['dtaval'],$_GET['produtora'],$_GET['retesper'],$_GET['datau']);
		header("Location: alimentacao.php?insercao=1");
	} else if (isset($_GET['codin'])) {
		include "./classes/Insumo.php";
		$i = new Insumo();
		$i->insert($_GET['codin'],$_GET['dtaqui'],$_GET['inome'],$_GET['finali'],$_GET['obs']);
		header("Location: insumos.php?insercao=1");
	}
	else if (isset($_GET['datae']){
		include "./classes/Lotes.php";
		$lo = new Lote();
		$lo->insert($_GET['datae'],$_GET['qtde'],$_GET['periodo']));
		#var_dump($lo);
		header("Location:lotes.php?insercao=1");
	}
	#header("Location: animais.php?insercao=0");
?>