<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>		
	<main class="access">
		<form>
			<h3>Animais</h3><br>
			<label>Pesquisar: <input type="text" name="search" size=50></label>
			<button>OK</button>
			<a href="#" onclick="toggleHidden()">Filtros</a>
			<br><br>
			<fieldset id="hiddenId" hidden>
						<legend class="access">Pesquisar por</legend>
						<label>
                        <input type="radio" name="searchtype" value="codigo">Código
						</label>
						<label>
							<input type="radio" name="searchtype" value="nome" checked>Nome
						</label>
						<label>
							<input type="radio" name="searchtype" value="funcao">Função
						</label>
						<label>
							<input type="radio" name="searchtype" value="idade">Idade
						</label>
						<label>
							<input type="radio" name="searchtype" value="estado">Estado
						</label>
						
					</fieldset>
			<br><br>
			<table class="access" style="width:100%">
			  <tr>
			    <th>Código</th>
			    <th>Nome</th> 
			    <th>Função</th>
			    <th>Idade (em anos)</th>
			    <th>Estado</th>
			    <th>Registro Médico</th>
			  </tr>
				<?php

				include "./classes/Animal.php";
				$a = new Animal();

				if (!isset($_GET['search']) || $_GET['search'] == NULL) $data = $a->queryAll();
					else if(isset($_GET['searchtype'])) $data = $a->queryOne($_GET['searchtype'],$_GET['search']);
					if (isset($data) && $data != NULL) {
						foreach($data as $d){
							?>
							<tr>
								<td><?=$d['codigo']?></td>
								<td><?=$d['nome']?></td> 
								<td><?=$d['funcao']?></td>
								<td><?=$d['idade']?></td>
								<td><?=$d['estado']?></td>
							</tr>
							<?php
							}
					}
				?>
			</table>
		</form>
	</main>
</body>
<script src="./js/grabber.js"></script>
<script src="./js/main.js"></script>
<?php 
if (isset($_SESSION['audio'])) {
	if ($_SESSION['audio'] == 1) {
		echo '<script type="text/javascript">',
		'grabber()',
		'</script>';
	}
}?>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>
