<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>		
	<main>
		<form class="access">
			<h2>Avaliação</h2><br>
			<label>Pesquisar: <input type="text" name="search" size=50></label>
			<button>OK</button>
			<a href="#" onclick="toggleHidden()">Mais opções</a>
			<br><br>

			<fieldset class="teste" hidden>

				<legend class="access">Pesquisar por</legend>
				<label>
					<input type="radio" name="searchtype" value="prote">Proteínas
				</label>
				<label>
					<input type="radio" name="searchtype" value="gord" checked>Gorduras
				</label>
				<label>
					<input type="radio" name="searchtype" value="bacte">Bactérias
				</label>
				<label>
					<input type="radio" name="searchtype" value="celsom">Celúlas Somáticas
				</label>
				<label>
					<input type="radio" name="searchtype" value="periodo">Período
				</label>
				
			</fieldset>
			</form>
			<br><br>
			<table class="access" style="width:100%">
			  <tr class="access">
			    <th>Proteínas</th>
			    <th>Gorduras</th> 
			    <th>Bactérias</th>
				<th>Celúlas Somáticas</th>
				<th>Período</th>
			  </tr>
			  <tr class="access" style="width:100%">
			  	<form action="inserir.php">
					<td><input type="number" name="prote" required></td>
					<td><input type="number" name="gord" required></td> 
					<td><input type="number" name="bacte" required></td>
					<td><input type="number" name="celsom" required></td>
					<td><input type="date" name="periodo" required></td>
					<td><button>Inserir</button></td>
				</form>
			</tr>
				<?php

				include "./classes/Avaliacao.php";
				$av = new Avaliacao();

				if (!isset($_GET['search']) || $_GET['search'] == NULL) $data = $av->queryAll();
					else if(isset($_GET['searchtype'])) $data = $av->queryOne($_GET['searchtype'],$_GET['search']);
					if (isset($data) && $data != NULL) {
						foreach($data as $d){
							?>
								<form action='remover.php'>
									<tr class="access">
										<td><?=$d['prote']?></td>
										<td><?=$d['gord']?></td> 
										<td><?=$d['bacte']?></td>
										<td><?=$d['celsom']?></td>
										<td><?=$d['periodo']?></td>
										<td><a class="teste" href="remover.php?periodo=<?=$d['periodo']?>" hidden>Remover</a></td>
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