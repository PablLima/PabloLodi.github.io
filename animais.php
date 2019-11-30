<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>		
	<main class="access">
		<form>
			<h3>Animais</h3><br>
			<label>Pesquisar: <input type="text" name="searchinput" size=50></label>
			<button>OK</button>
			<a href="#">Filtros</a>
			<br><br>
			<fieldset>
						<legend class="access">Pesquisar por</legend>
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
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Idade
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Estado
						</label>
						<label>
							<input type="checkbox" id="addb" name="addborda" value="5" onchange="">Registro médico
						</label>
						
						
					</fieldset>
			<br><br>
			<table class="access" style="width:100%">
			  <tr>
			    <th>Código</th>
			    <th>Nome</th> 
			    <th>Função</th>
			    <th>Idade (em anos)</th>
			    <th>Estado</th>
			    <th>Registro Médico</th>
			  </tr>
			  <!-- https://github.com/asebben/rent/blob/master/views/listaProdutos.php -->
						<?php
				if(empty($lista)) {
					echo "<p>Nenhum produto encontrado</p>";
				}
				else {
					foreach($lista as $n => $v){
					?>
					<!-- um produto -->
					<div class="produto">    
						<a href="produto.php?id=<?=$lista[$n]['id'];?>">                  
							<figure>                           
								<img src="img/produtos/<?=mostraImagem($lista[$n]['imagem']);?>" alt="<?=$lista[$n]['nome'];?>">
								<figcaption><?=$lista[$n]['nome'];?>
								<br>
								<?php
								if($lista[$n]['desconto'] == 0){
								?>
								<span class="precoFinal">
									<?=formataPreco($lista[$n]['valor']);?>
								</span>
								<?php
								}
								else {
									?>
									De <span class="precoInicial">
									<?=formataPreco($lista[$n]['valor']);?>
									</span> por 
									<span class="precoFinal">
									<?=formataPreco($lista[$n]['valor'] - $lista[$n]['desconto']);?>
									</span>
									<?php
								}
								?>
								</figcaption>                          
							</figure>      
						</a>
						<?php
						if(@array_key_exists($lista[$n]['id'], $_SESSION['carrinho'])){
							echo "<p class='noCarrinho'>no carrinho!</p>";
						}
						else{
							$preco = $lista[$n]['valor'] - $lista[$n]['desconto'];
							echo "<p class='rapida' id='{$lista[$n]['id']}' 
							onclick=\"compraRapida({$lista[$n]['id']}, '{$lista[$n]['nome']}', $preco)\">compra rápida</p>";
						}
						?>               
					</div>   
					<!-- fim produto -->       
					<?php  
					}
				}
				?>
				<?php

				include "./classes/Animal.php";
				$a = new Animal();

				if (!isset($_GET['search']) || $_GET['search'] == NULL) $data = $a->queryAll();
					else if(isset($_GET['searchtype'])) $data = $a->queryOne($_GET['searchtype'],$_GET['search']);
					if (isset($data) && $data != NULL) {
						foreach($data as $d){
							?>
							<tr>
								<td><?=$d['codigo']?></td>
								<td><?=$d['nome']?></td> 
								<td><?=$d['funcao']?></td>
								<td><?=$d['idade']?></td>
								<td><?=$d['estado']?></td>
							</tr>
							<?php
							}
					}
				?>
			</table>
		</form>
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
}?>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>
