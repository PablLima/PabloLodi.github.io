<?php
	if (isset($_GET['coda'])) {
		include "./classes/Animal.php";
		$a = new Animal();
		$a->insert($_GET['coda'],$_GET['tipo'],$_GET['astatus'],$_GET['dtanasc'],$_GET['codp']);
		var_dump($a);
		header("Location: animais.php?insercao=1");

	} else if (isset($_GET['codal'])) {
		include "./classes/Alimento.php";
		$al = new Alimento();
		$al->insert($_GET['codal'],$_GET['nomeali'],$_GET['tipo'],$_GET['peso'],$_GET['dtaval'],$_GET['produtora'],$_GET['retesper'],$_GET['datau']);
		#var_dump($al);
		header("Location: alimentacao.php?insercao=1");

	} else if (isset($_GET['codin'])) {
		include "./classes/Insumo.php";
		$i = new Insumo();
		$i->insert($_GET['codin'],$_GET['dtaqui'],$_GET['inome'],$_GET['finali'],$_GET['obs']);
		header("Location: insumos.php?insercao=1");

	}	else if (isset($_GET['periodo'])){
		include "./classes/Lote.php";
		$lo = new Lote();
		$lo->insert($_GET['datae'],$_GET['qtde'],$_GET['periodo']);
		#var_dump($lo);
		header("Location:lotes.php?insercao=1");

	} else if (isset($_GET['codp'])){
		include "./classes/Propriedade.php";
		$p = new Propriedade();
		$p->insert($_GET['codp'],$_GET['nomed'],$_GET['locali']);
		#var_dump($lo);
		header("Location:propriedades.php?insercao=1");

	} else if (isset($_GET['datae'])){
		include "./classes/Avaliacao.php";
		$av = new Avaliacao();
		$av->insert($_GET['prote'],$_GET['gord'],$_GET['bacte'],$_GET['celsom'],$_GET['datae']);
		#var_dump($av);
		header("Location:avaliacao.php?insercao=1");
	}
	#header("Location: animais.php?insercao=0");
?>