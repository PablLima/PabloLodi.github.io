<?php
#echo print_r ($_POST);
include "classes/Cliente.php";
$client = new Cliente();
$dados = $client->autenticar($_POST['usuario']);
#echo print_r ($dados);

if(empty($dados)){
	header("Location: login.php?erro=1");
}

else{
	$pass = $_POST['senha'];
	#echo ' - ';
	#echo print_r ($pass);
	#echo print_r ($dados);
	if($pass != $dados[0]['senha']){
		header("Location: login.php?erro=2");
	}
	else{
		session_start();
		$_SESSION['nome'] = $dados[0]['login']; 
		$_SESSION['funcao'] = $dados[0]['funcao'];
		$expira = time() + 60 * 60 * 24 * 7;
		setcookie("nome", $dados[0]['login'], $expira);
		setcookie("funcao", $dados[0]['funcao'], $expira);
		// if(isset($_POST['lembrar'])){
		// 	$expira = time() + 60 * 60 * 24 * 7;
		// 	setcookie("nome", $dados[0]['nome'], $expira);
		// 	setcookie("id", $dados[0]['id'], $expira);
		// 	setcookie("endereco", $dados[0]['endereco'] .", ".$dados[0]['bairro'], $expira);
		// }
	
		header("Location: index.php");
	}
}
?>