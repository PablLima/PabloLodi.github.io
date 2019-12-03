<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>		
	<main class="access">
		<form>
			<h3>Insumos</h3><br>
			<label>Pesquisar: <input type="text" name="search" size=50></label>
			<button>OK</button>
			<a href="#" onclick="toggleHidden()">Mais opções</a>
			<br><br>

			<fieldset class="teste" hidden>

				<legend class="access">Pesquisar por</legend>
				<label>
				<input type="number" name="searchtype" value="codin">Código
				</label>
				<label>
					<input type="date" name="searchtype" value="dtaqui" checked>Data de aquisição
				</label>
				<label>
					<input type="text" name="searchtype" value="inome">Nome
				</label>
				<label>
					<input type="text" name="searchtype" value="finali">Finalidade
				</label>
				
			</fieldset>
			</form>
			<br><br>
			<table class="access" style="width:100%">
			  <tr>
			    <th>Código</th>
			    <th>Data de aquisição</th> 
			    <th>Nome</th>
			    <th>Finalidade</th>
				<th>Observações</th>
			  </tr>
			  <tr style="width:100%">
			  	<form action="inserir.php">
					<td><input type="number" name="codin" required></td>
					<td><input type="date" name="dtaqui" required></td> 
					<td><input type="text" name="inome" required></td>
					<td><input type="text" name="finali" required></td>
					<td><input type="text" name="obs" required></td>
					<td><button>Inserir</button></td>
				</form>
			</tr>
				<?php

				include "./classes/Insumo.php";
				$a = new Insumo();

				if (!isset($_GET['search']) || $_GET['search'] == NULL) $data = $a->queryAll();
					else if(isset($_GET['searchtype'])) $data = $a->queryOne($_GET['searchtype'],$_GET['search']);
					if (isset($data) && $data != NULL) {
						foreach($data as $d){
							?>
								<form action='remover.php'>
									<tr>
										<td><?=$d['codin']?></td>
										<td><?=$d['dtaqui']?></td> 
										<td><?=$d['inome']?></td>
										<td><?=$d['finali']?></td>
										<td><?=$d['obs']?></td>
										<td><a class="teste" href="remover.php?codin=<?=$d['codin']?>" hidden>Remover</a></td>
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