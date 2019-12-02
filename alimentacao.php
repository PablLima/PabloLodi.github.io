<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>		
	<main class="access">
		<form>
			<h3>Alimentação</h3><br>
			<label>Pesquisar: <input type="text" name="search" size=50></label>
			<button>OK</button>
			<a href="#" onclick="toggleHidden()">Mais opções</a>
			<br><br>

			<fieldset class="teste" hidden>

				<legend class="access">Pesquisar por</legend>
				<label>
				<input type="radio" name="searchtype" value="codal">Código
				</label>
				<label>
					<input type="radio" name="searchtype" value="nomeali" checked>Nome
				</label>
				<label>
					<input type="radio" name="searchtype" value="tipo">Tipo
				</label>
				<label>
					<input type="radio" name="searchtype" value="peso">Peso
				</label>
				<label>
					<input type="radio" name="searchtype" value="dtaval">Data de Validade
				</label>
				<label>
					<input type="radio" name="searchtype" value="produtora">Produtora
				</label>
				<label>
					<input type="radio" name="searchtype" value="retesper">Retorno esperado
				</label>
			</fieldset>
			</form>
			<br><br>
			<table class="access" style="width:100%">
			  <tr>
			    <th>Código</th>
			    <th>Nome</th> 
			    <th>Tipo</th>
				<th>Peso</th>
				<th>Data de Validade</th>
				<th>Produtora</th>
				<th>Retorno esperado</th>
			  </tr>
			  <tr style="width:100%">
			  	<form action="inserir.php">
					<td><input type="number" name="codal" required></td>
					<td><input type="text" name="nomeali" required></td> 
					<td><input type="text" name="tipo" required></td>
					<td><input type="number" name="peso" required></td>
					<td><input type="date" name="dtaval" required></td>
					<td><input type="text" name="produtora" required></td>
					<td><input type="number" name="retesper" required></td>
					<td><button>Inserir</button></td>
				</form>
			</tr>
				<?php

				include "./classes/Alimento.php";
				$al = new Alimento();

				if (!isset($_GET['search']) || $_GET['search'] == NULL) $data = $al->queryAll();
					else if(isset($_GET['searchtype'])) $data = $al->queryOne($_GET['searchtype'],$_GET['search']);
					if (isset($data) && $data != NULL) {
						foreach($data as $d){
							?>
								<form action='remover.php'>
									<tr>
										<td><?=$d['codal']?></td>
										<td><?=$d['nomeali']?></td> 
										<td><?=$d['tipo']?></td>
										<td><?=$d['peso']?></td>
										<td><?=$d['dtaval']?></td>
										<td><?=$d['produtora']?></td>
										<td><?=$d['retesper']?></td>
										<td><a class="teste" href="remover.php?codal=<?=$d['codal']?>" hidden>Remover</a></td>
									</tr>
								</form>
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
