<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>		
	<main class="access">
		<form>
			<h3>Lotes</h3><br>
			<label>Pesquisar: <input type="text" name="search" size=50></label>
			<button>OK</button>
			<a href="#" onclick="toggleHidden()">Mais opções</a>
			<br><br>

			<fieldset class="teste" hidden>

				<legend class="access">Pesquisar por</legend>
				<label>
					<input type="date" name="searchtype" value="datae">Data de entrega
				</label>
				<label>
					<input type="number" name="searchtype" value="qtde">Quantidade
				</label>
				<label>
					<input type="date" name="searchtype" value="pinicial">
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
			  <tr style="width:100%">
			  	<form action="inserir.php">
					<td><input type="date" name="datae" required></td>
					<td><input type="number" name="qtde" required></td>
					<td><input type="date" name="pinicial" required></td> 
					<td><button>Inserir</button></td>
				</form>
			</tr>
				<?php

				include "./classes/Lotes.php";
				$a = new Lote();

				if (!isset($_GET['search']) || $_GET['search'] == NULL) $data = $a->queryAll();
					else if(isset($_GET['searchtype'])) $data = $a->queryOne($_GET['searchtype'],$_GET['search']);
					if (isset($data) && $data != NULL) {
						foreach($data as $d){
							?>
								<form action='remover.php'>
									<tr>
										<td><?=$d['datae']?></td>
										<td><?=$d['qtde']?></td> 
										<td><a class="teste" href="remover.php?datae=<?=$d['datae']?>" hidden>Remover</a></td>
									</tr>
								</form>
							<?php
							}
					}
				?>
			</table>

	</main>
</body>
<?php require "./includes/footer.php" ?>	