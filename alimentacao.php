<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>	
	<main>
		<div style="overflow-x:auto;">
			<h3>Alimentação</h3><br>
			<label>Pesquisar: <input type="text" name="searchInput" size=50></label>
			<button>OK</button>
			<a href="#">Filtros</a>
			<br><br>
			<fieldset>
						<legend>Pesquisar por</legend>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Código
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Nome
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Função
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Peso
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Produtor
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Data de validade estimada
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Retorno esperado
						</label>
					</fieldset>
					<br>
					<button>Salvar</button>
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
<script src="./js/grabber.js"></script>
<?php 
if (isset($_SESSION['audio'])) {
	if ($_SESSION['audio'] == true) {
		echo '<script type="text/javascript">',
		'grabber()',
		'</script>';
	}
}
?>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>
