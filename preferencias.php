<!DOCTYPE html>
<html>
<head>
	<script src="../js/ajax.js"></script>
    <?php
		session_start();
		if(!isset($_SESSION['nome'])) header("Location: login.php");
        if (isset($_GET['audio']) && $_GET['audio'] == 1) { 
			$_SESSION['audio'] = true;
		} else {
			unset($_SESSION['audio']);
		}
        if (isset($_GET['cores']) && $_GET['cores'] == 1) { 
			$_SESSION['cores'] = true;
		} else {
			unset($_SESSION['cores']);
		}
	?>
	<title>2milk</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/all.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<header>
		<h2><a href="index.php">Milk Manager 2019</a></h2>
		<a href="adm/cadastro.php">Usuários</a>
		<a href="preferencias.php">Preferências</a>
		<a href="logoff.php">Fazer logoff</a>
	</header>

	<aside class="access">
		<nav>
			<ul>
				<li>
					<a href="animais.php">
						<i class="fas fa-paw"></i><br>
						<p>Animais</p>
					</a>
				</li>
				<li>
					<a href="alimentacao.php">
						<i class="fas fa-utensils"></i><br>
						<p>Alimentação</p>
					</a>
				</li>
				<li>
					<a href="insumos.php">
						<i class="fas fa-bacon"></i><br>
						<p>Insumos</p>
					</a>
				</li>
				<li>
					<a href="lotes.php">
						<i class="fas fa-car"></i><br>
						<p>Lotes</p>
					</a>
				</li>
				<li>
					<a href="estatisticas.php">
						<i class="fas fa-chart-pie"></i><br>
						<p>Estatísticas</p>
					</a>
				</li>				
			</ul>
		</nav>
	</aside>

	<main >
			<div class="access" style="overflow-x:auto;">
			<h2>Preferências</h2><br>
			<br>
			<form class="access">
				<fieldset>
					<legend>Geral</legend>
					<label>
						<input type="checkbox" id="alert" name="alerta" value="1" onchange=""> Receber alertas
					</label>
				</fieldset>
				<br>
				<fieldset>
					<legend>Notificações</legend>
					<label>
						<input type="checkbox" id="sound" name="audio" value="1"> Navegação por áudio
					</label><br>
					<label>
						<input type="checkbox" id="color" name="cores" value="1" onchange=""> Correção de cores para daltonicos
					</label>
				</fieldset>
				<button>Salvar</button>
			</form>
			<br><br>
		</div>
	</main>
</body>
<script src="./js/grabber.js"></script>
<?php 
if (isset($_SESSION['audio'])) {
		echo '<script type="text/javascript">',
		'grabber()',
		'</script>';
}
?>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>
