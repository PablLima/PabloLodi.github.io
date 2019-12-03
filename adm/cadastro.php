<!DOCTYPE html>
<html>
<head>
	<title>2milk</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/all.css">
	<script src="../js/ajax.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php 
		session_start();
		if(!isset($_SESSION['nome'])) header("Location: ../login.php");
	?>
	<header>
		<h2><a href="../index.php">2milk Manager 2019</a></h2>
		<a href="../adm/cadastro.php" onclick="ajaxReload('')">Usuários</a>
		<a href="../preferencias.php" onclick="ajaxReload('')">Preferências</a>
		<a href="../logoff.php" onclick="ajaxReload('')">Fazer logoff</a>
	</header>
	
	<aside class="access">
		<nav>
			<ul>
				<li>
					<a href="../animais.php">
						<i class="fas fa-paw"></i><br>
						<p>Animais</p>
					</a>
				</li>
				<li>
					<a href="../alimentacao.php">
						<i class="fas fa-utensils"></i><br>
						<p>Alimentação</p>
					</a>
				</li>
				<li>
					<a href="../insumos.php">
						<i class="fas fa-bacon"></i><br>
						<p>Insumos</p>
					</a>
				</li>
				<li>
					<a href="../lotes.php">
						<i class="fas fa-car"></i><br>
						<p>Lotes</p>
					</a>
				</li>
				</li>
				<li>
					<a href="propriedades.php">
						<i class="fas fa-chart-pie"></i><br>
						<p>Propriedades</p>
					</a>
				</li>
				<li>
					<a href="../estatisticas.php">
						<i class="fas fa-chart-pie"></i><br>
						<p>Estatísticas</p>
					</a>
				</li>				
			</ul>
		</nav>
	</aside>

	<main>
		<form>
		<h2>Usuários</h2><br>
		<label>Pesquisar: <input type="text" name="search" size=50></label>
			<button>OK</button>
			<a href="#" onclick="toggleHidden()">Filtros</a>
            <fieldset class="teste" hidden>
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
			    <th>Login</th>
			    <th>Hash md5</th> 
			    <th>E-mail</th>
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
			  
			</table><br>
	</main>
</body>
<script src="../js/first.js"></script>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>
