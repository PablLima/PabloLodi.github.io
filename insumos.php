<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>	
	<main>
		<div class="access" style="overflow-x:auto;">
			<h3>Insumos</h3><br>
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
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Finalidade
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Data de aquisição
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Possíveis observações
						</label>
					</fieldset>
					<br>
					<button>Salvar</button>
			<br><br>
			<table style="width:100%">
			  <tr>
			    <th>Código</th>
			    <th>Nome</th> 
			    <th>Finalidade</th>
			    <th>Data de aquisição</th>
			    <th>Possíveis observações</th>
			  </tr>
			  <tr>
			    <td>0002</td>
			    <td>Esterco</td> 
			    <td>Adubação</td>
			    <td>20/02/2018</td>
			   	<td>Alta qualidade</td>
			  </tr>
			  <tr>
			    <td>0103</td>
			    <td>Esterco</td> 
			    <td>Adubação</td>
			    <td>20/02/2011</td>
			   	<td></td>
			  </tr>
			  <tr>
			    <td>0005</td>
			    <td>Esterco</td> 
			    <td>Adubação</td>
			    <td>20/02/2014</td>
			   	<td></td>
			  </tr>
			  <tr>
			    <td>0008</td>
			    <td>Vacina contra gripe</td> 
			    <td>Veterinária</td>
			    <td>20/02/2002</td>
			   	<td>Checar validade no verso</td>
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
