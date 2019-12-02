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
			<a href="#" onclick="toggleHidden()">Mais opções</a>
			<br><br>

			<fieldset class="teste" hidden>

				<legend class="access">Pesquisar por</legend>
				<label>
				<input type="radio" name="searchtype" value="coda">Código
				</label>
				<label>
					<input type="radio" name="searchtype" value="tipo" checked>Tipo
				</label>
				<label>
					<input type="radio" name="searchtype" value="astatus">Status
				</label>
				<label>
					<input type="radio" name="searchtype" value="dtanasc">Data de Nascimento
				</label>
				
			</fieldset>
			</form>
			<br><br>
			<table class="access" style="width:100%">
			  <tr>
			    <th>Código</th>
			    <th>Tipo</th> 
			    <th>Status</th>
			    <th>Data de Nascimento</th>
			  </tr>
			  <tr class="teste" style="width:100%">
			  	<form action="inserir.php">
					<td><input type="text" name="coda"></td>
					<td><input type="text" name="tipo"></td> 
					<td><input type="text" name="astatus"></td>
					<td><input type="text" name="dtanasc"></td>
					<td><button>Inserir</button></td>
				</form>
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
								<td><?=$d['coda']?></td>
								<td><?=$d['tipo']?></td> 
								<td><?=$d['astatus']?></td>
								<td><?=$d['dtanasc']?></td>
								<td><a href="#" onclick="<?=$a->removeAnimal($d['coda'])?>)">Remover</td>
							</tr>
							<?php
							}
					}
				?>
			</table>

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
