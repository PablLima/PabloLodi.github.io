 <!-- Renomear Proutividade para Lotes de leite/algo q se encaixe-->

 <!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>	
	<main>
	<div class="access" style="overflow-x:auto;">
			<h3>Produtividade</h3><br>
			<label>Pesquisar: <input type="text" name="searchInput" size=50></label>
			<button>OK</button>
			<a href="#">Filtros</a>
			<br><br>
			<fieldset>
						<legend>Pesquisar por</legend>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Quantidade de Litros
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Proporções dos nutrientes
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Valor recebido por litros
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
			    <th>Quantidade de Litros</th>
			    <th>Proporções dos nutrientes</th> 
			    <th>Valor recebido por litro</th>
			    <th>Possíveis observações</th>
			  </tr>
			  <tr>
			    <td>122</td>
			    <td>12/5/6</td> 
			    <td>R$ 2</td>
			   	<td>Alta qualidade</td>
			  </tr>
			  <tr>
			    <td>512</td>
			    <td>12/5/6</td> 
			    <td>R$ 1</td>
			   	<td></td>
			  </tr>
			  <tr>
			    <td>55</td>
			    <td>12/5/6</td> 
			    <td>R$ 0.50</td>
			   	<td>Qualidade aceitável</td>
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
