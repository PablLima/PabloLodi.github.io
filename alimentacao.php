<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>	
	<main>
		<div style="overflow-x:auto;">
			<h3>Alimentação</h3><br>
			<label>Pesquisar: <input type="text" name="search" size=50></label>
			<button>OK</button>
			<a href="#" onclick="toggleHidden()">Filtros</a>
			<br><br>
			<fieldset id="hiddenId" hidden>
						<legend class="access">Pesquisar por</legend>
						<label>
                        <input type="radio" name="searchtype" value="cod">Código
						</label>
						<label>
							<input type="radio" name="searchtype" value="nome" checked>Nome
						</label>
						<label>
							<input type="radio" name="searchtype" value="func">Função
						</label>
						<label>
							<input type="radio" name="searchtype" value="peso">Peso(em gramas)
						</label>
						<label>
							<input type="radio" name="searchtype" value="prodtor">Produtor
						</label>
						<label>
							<input type="radio" name="searchtype" value="dtaval">Validade estimada
						</label>
						<label>
							<input type="radio" name="searchtype" value="retesp">Retorno esperado (R$)
						</label>
						
					</fieldset>
			<br><br>
			<table style="width:100%">
			  <tr>
			    <th>Código</th>
			    <th>Nome</th> 
			    <th>Função</th>
			    <th>Peso (em gramas)</th>
			    <th>Produtor</th>
			    <th>Data de validade estimada</th>
			    <th>Retorno esperado (em R$)</th>
			  </tr>
			  <tr>
			    <td>0002</td>
			    <td>Sementes</td> 
			    <td>Fermentação</td>
			    <td>5000g</td>
			   	<td>Arcor</td>
			   	<td>20/09/2022</td>
			   	<td>50</td>
			  </tr>
			  <tr>
			    <td>0032</td>
			    <td>Trigo</td> 
			    <td>Fermentação</td>
			    <td>3500g</td>
			   	<td>Orquidea</td>
			   	<td>24/02/2021</td>
			   	<td>54</td>
			  </tr>
			</table>
		</div>
	</main>
</body>
<?php require "./includes/footer.php" ?>