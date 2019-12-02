<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>		
	<main class="access">
		<form>
			<h3>Propriedades</h3><br>
			<label>Pesquisar: <input type="text" name="search" size=50></label>
			<button>OK</button>
			<a href="#" onclick="toggleHidden()">Mais opções</a>
			<br><br>

			<fieldset class="teste" hidden>

				<legend class="access">Pesquisar por</legend>
				<label>
					<input type="date" name="searchtype" value="codp">Código
				</label>
				<label>
					<input type="number" name="searchtype" value="nomed">Nome do dono
                </label>
				<label>
					<input type="date" name="searchtype" value="locali">Localização
				</label>
				
			</fieldset>
			</form>
			<br><br>
			<table class="access" style="width:100%">
			  <tr>
			    <th>Código</th>
			    <th>Nome do dono</th> 
			    <th>Localização</th>
			  </tr>
			  <tr style="width:100%">
			  	<form action="inserir.php">
					<td><input type="number" name="codp" required></td>
					<td><input type="text" name="nomed" required></td>
					<td><input type="text" name="locali" required></td> 
					<td><button>Inserir</button></td>
				</form>
			</tr>
				<?php

				include "./classes/Propriedades.php";
				$a = new Propriedade();

				if (!isset($_GET['search']) || $_GET['search'] == NULL) $data = $a->queryAll();
					else if(isset($_GET['searchtype'])) $data = $a->queryOne($_GET['searchtype'],$_GET['search']);
					if (isset($data) && $data != NULL) {
						foreach($data as $d){
							?>
								<form action='remover.php'>
									<tr>
										<td><?=$d['codp']?></td>
										<td><?=$d['nomed']?></td> 
										<td><a class="teste" href="remover.php?codp=<?=$d['codp']?>" hidden>Remover</a></td>
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