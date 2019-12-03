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
		<h2>Milk Manager 2019</h2>
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
			<a href="#">Filtros</a>
            <button>Salvar</button><br><br>
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
			<fieldset>
				<legend>Modificar usuários</legend>
					<form action="cadastrar.php">
						<label>Usuário</label><br>
						<input type="text" name="login"><br>
						<label>Senha</label><br>
						<input type="text" name="senha"><br>
						<label>Permissão</label><br>
						<input type="text" name="permissao"><br><br>
						<button>Cadastrar</button><br>
					</form>
			</fieldset>
	</main>
</body>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>
