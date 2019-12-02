<!DOCTYPE html>
<html>
<head>
    <?php
        session_start();
        if (isset($_GET['audio'])) { 
			$_SESSION['audio'] = 1;
		} else {
			unset($_SESSION['audio']);
		}
	?>
	<title>2milk</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<style type="text/css">
		* {
			font-family: Arial;
			margin: 0;
			box-sizing: border-box;
			border-radius: 5px;
		}

		header a {
			color: white;
		}

		i {
			display: block;
		}
		main {
			margin-top: 125px;
			margin-left: 150px;
			width: 87%;
		}
		main div {
			background-color: white;
			font-size: 1.2em;
		}

		aside {
			background-color: #EEEEEE;
			position: fixed;
			margin-top: 86px;
			width: 130px;
		}

		main, aside {
			float: left; /* para layout flexbox, retirar esta linha */
			padding: 5px;
			text-align: center;
			height: 100%;
		}

		header {
			background-color: #BB2222;
			padding: 20px;
			color: white;
			position: fixed;
			width: 100%;
			height: 86px;
		}

		div {
			background-color: #EEEEEE;
		}

		header {
			text-align: right;
			padding-left: 3%;
		}

		header p {
			display: inline;
			padding-left: 1px;
		}

		h2 {
			text-align: left;
		}
		a {
			color: black;
			text-decoration: none;
		}

		a:hover {
			background-color: darkgray;
		}

		button:focus {
			background-color: black;
			color: white;
		}

		input:focus {
			background-color: black;
			color: white;
		}

		select:focus {
			background-color: black;
			color: white;
		}

		textarea:focus {
			background-color: black;
			color: white;
		}

		ul {
			background-color: #EEEEEE;
			list-style-type: none;
		}
		ul li {
			margin-top: 3px;
			margin-left: -40px;
			padding-top: 10px;
			height: 60px;
		}
		ul li:hover {
			background-color: white;
		}

		li a:hover {
			background-color: white;
		}

		@media only screen and (max-width: 1100px) {
		    /* para desktop: */
		    aside {width: 100%; position: initial; margin-top:0;}
		    header {width: 100%; position: initial; }
		    main {width: 100%;margin-left: 0;margin-top: 20px}
		}


		table {
		  border: 1px solid black;
		}

		th, td {
		  padding-bottom: 15px;
		  text-align: center;
		}

		th, td {
		  border-bottom: 1px solid #ddd;
		}

	</style>
</head>
<body>
	<header>
		<h2>Milk Manager 2019</h2>
		<a href="adm/cadastro.html">Usuários</a>
		<a href="preferencias.html">Preferências</a>
		<a href="login.html">Fazer logoff</a>
	</header>
	<aside>
		<nav>
			<ul>
				<li>
					<a href="animais.html">
						<i class="fas fa-paw"></i><br>
						<p>Animais</p>
					</a>
				</li>
				<li>
					<a href="insumos.html">
						<i class="fas fa-bacon"></i><br>
						<p>Insumos</p>
					</a>
				</li>
				<li>
					<a href="alimentacao.html">
						<i class="fas fa-utensils"></i><br>
						<p>Alimentação</p>
					</a>
				</li>
				<li>
					<a href="lotes.html">
						<i class="fas fa-car"></i><br>
						<p>Produtividade</p>
					</a>
				</li>
				<li>
					<a href="estatisticas.html">
						<i class="fas fa-chart-pie"></i><br>
						<p>Estatísticas</p>
					</a>
				</li>					
			</ul>
		</nav>
		
	</aside>
	<main>
			<div class="access" style="overflow-x:auto;">
			<h3>Preferências</h3><br>
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
	if ($_SESSION['audio'] == true) {
		echo '<script type="text/javascript">',
		'grabber()',
		'</script>';
	}
}?>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>
