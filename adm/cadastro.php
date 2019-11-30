<!DOCTYPE html>
<html>
<head>
	<title>2milk</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/all.css">
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
			text-align: center;
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

		header h2 {
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

		@media only screen and (max-width: 900px) {
		    /* para desktop: */
		    aside {width: 100%; position: initial; margin-top:0;}
		    header {width: 100%; position: initial; }
		    main {width: 100%;margin-left: 0;margin-top: 20px}
		}

		@media only screen and (min-width: 901px) {
		    /* para desktop: */
		    aside {
		    	width: 110px;
		    	height: 100%;
		    	position: fixed;
		    	margin-top: 86px;}
		    header {
		    	width: 100%; 
		    	position: fixed;}
		    main {
		    	width: 80%;
		    	margin-top: 115px;
		    	margin-left: 150px;
		    }
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
		<a href="../adm/cadastro.html">Usuários</a>
		<a href="../preferencias.html">Preferências</a>
		<a href="../login.html">Fazer logoff</a>
	</header>
	<aside>
		<nav>
			<ul>
				<li>
					<a href="../animais.html">
						<i class="fas fa-paw"></i><br>
						<p>Animais</p>
					</a>
				</li>
				<li>
					<a href="../insumos.html">
						<i class="fas fa-bacon"></i><br>
						<p>Insumos</p>
					</a>
				</li>
				<li>
					<a href="../alimentacao.html">
						<i class="fas fa-utensils"></i><br>
						<p>Alimentação</p>
					</a>
				</li>
				<li>
					<a href="../lotes.html">
						<i class="fas fa-car"></i><br>
						<p>Produtividade</p>
					</a>
				</li>
				<li>
					<a href="../estatisticas.html">
						<i class="fas fa-chart-pie"></i><br>
						<p>Estatísticas</p>
					</a>
				</li>					
			</ul>
		</nav>
		
	</aside>
	<main>
		<h2>Modificar usuários</h2><br>
		<div>			
			<form action="../sincronizar.html">
				<label>Usuário</label>
				<input type="text" name="login"><br>
				<label>Nova senha</label>
				<input type="text" name="senha"><br>
				<label>Repetir nova senha</label>
				<input type="text" name="rsenha"><br><br>
				<button>Cadastrar</button><br><br>
			</form>
        </div>
        <form>
		<label>Pesquisar: <input type="text" name="search" size=50></label>
			<button>OK</button>
			<a href="#">Filtros</a>
            <button>Salvar</button>
            <fieldset>
                <legend>Pesquisar por</legend>
                    <label>
                        <input type="radio" name="searchtype" value="login">Login
                    </label>
                    <label>
                        <input type="radio" name="searchtype" value="senha" >Senha
                    </label>
                    <label>
                        <input type="radio" name="searchtype" value="email">Email
                    </label>
                    <label>
                        <input type="radio" name="searchtype" value="funcao">Funcao
                    </label>
            </fieldset>
			</form>
        </form>
			<br><br>
			<table style="width:100%">
			  <tr>
			    <th>Código</th>
			    <th>Usuário</th> 
			    <th>Data de registro</th>
			    <th>Permissões</th>
              </tr>
              <?php

                include "../classes/Cliente.php";
                $c = new Cliente();

                if (!isset($_GET['search']) || $_GET['search'] == NULL) $data = $c->queryAll();
                    else if(isset($_GET['searchtype'])) $data = $c->queryOne($_GET['searchtype'],$_GET['search']);
                    if (isset($data) && $data != NULL) {
                        foreach($data as $d){
                            ?>
                            <tr>
                                <td><?=$d['login']?></td>
                                <td><?=$d['senha']?></td> 
                                <td><?=$d['email']?></td>
                                <td><?=$d['funcao']?></td>
                            </tr>
                            <?php
                            }
                    }
                ?>
			  
			</table>
	</main>
</body>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>