<?php
#echo print_r ($_POST);
include "classes/Cliente.php";
$client = new Cliente();
$dados = $client->autenticar($_POST['usuario']);
var_dump($_POST['usuario']);
var_dump($dados);

if(empty($dados)){
	header("Location: login.php?erro=1");
}

else{
	$pass = md5($_POST['senha']);
	#echo ' - ';
	#echo print_r ($pass);
	#echo print_r ($dados);
	var_dump($pass);
	var_dump($dados);
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
	
		header("Location: index.php");
	}
}
?>