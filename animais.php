<!DOCTYPE html>
<html>
<head>
	<title>2milk</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<style type="text/css">
		* {
			font-family: Arial;
			margin: 0;
			box-sizing: border-box;
			border-radius: 5px;
		}

		header a {
			color: white;
		}

		i {
			display: block;
		}
		main {
			margin-top: 125px;
			margin-left: 150px;
		}
		main div {
			background-color: white;
			font-size: 1.2em;
		}

		aside {
			background-color: #EEEEEE;
			position: fixed;
			margin-top: 86px;
			width: 130px;
		}

		main, aside {
			float: left; /* para layout flexbox, retirar esta linha */
			padding: 5px;
			text-align: center;
			height: 100%;
		}

		header {
			background-color: #BB2222;
			padding: 20px;
			color: white;
			position: fixed;
			width: 100%;
			height: 86px;
		}

		div {
			background-color: #EEEEEE;
		}

		header {
			text-align: right;
			padding-left: 3%;
		}

		header p {
			display: inline;
			padding-left: 1px;
		}

		h2 {
			text-align: left;
		}
		a {
			color: black;
			text-decoration: none;
		}

		a:hover {
			background-color: darkgray;
		}

		button:focus {
			background-color: black;
			color: white;
		}

		input:focus {
			background-color: black;
			color: white;
		}

		select:focus {
			background-color: black;
			color: white;
		}

		textarea:focus {
			background-color: black;
			color: white;
		}

		ul {
			background-color: #EEEEEE;
			list-style-type: none;
		}
		ul li {
			margin-top: 3px;
			margin-left: -40px;
			padding-top: 10px;
			height: 60px;
		}
		ul li:hover {
			background-color: white;
		}

		li a:hover {
			background-color: white;
		}

		@media only screen and (max-width: 1100px) {
		    /* para desktop: */
		    aside {width: 100%; position: initial; margin-top:0;}
		    header {width: 100%; position: initial; }
		    main {width: 100%;margin-left: 0;margin-top: 20px}
		}


		table {
		  border: 1px solid black;
		}

		th, td {
		  padding-bottom: 15px;
		  text-align: center;
		}

		th, td {
		  border-bottom: 1px solid #ddd;
		}

	</style>
</head>
<body>
	<header>
		<h2>Milk Manager 2019</h2>
		<a href="adm/cadastro.html">Usuários</a>
		<a href="preferencias.html">Preferências</a>
		<a href="login.html">Fazer logoff</a>
	</header>
	<aside>
		<nav>
			<ul>
				<li>
					<a href="animais.html">
						<i class="fas fa-paw"></i><br>
						<p>Animais</p>
					</a>
				</li>
				<li>
					<a href="insumos.html">
						<i class="fas fa-bacon"></i><br>
						<p>Insumos</p>
					</a>
				</li>
				<li>
					<a href="alimentacao.html">
						<i class="fas fa-utensils"></i><br>
						<p>Alimentação</p>
					</a>
				</li>
				<li>
					<a href="lotes.html">
						<i class="fas fa-car"></i><br>
						<p>Produtividade</p>
					</a>
				</li>
				<li>
					<a href="estatisticas.html">
						<i class="fas fa-chart-pie"></i><br>
						<p>Estatísticas</p>
					</a>
				</li>				
			</ul>
		</nav>
		
	</aside>
	<main>
		<div style="overflow-x:auto;">
			<h3>Animais</h3><br>
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
			<table style="width:100%">
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

			  <tr>
			    <td>0001</td>
			    <td></td> 
			    <td>Lactante</td>
			    <td>5</td>
			   	<td>Produzindo</td>
			   	<td><a href="#">Acessar</a></td>
			  </tr>
			  <tr>
			    <td>0003</td>
			    <td>Madalena</td> 
			    <td>Lactante</td>
			    <td>3</td>
			   	<td>Produzindo</td>
			   	<td>N/A</td>
			  </tr>
			  <tr>
			    <td>0012</td>
			    <td>Gertrudes</td> 
			    <td>Lactante</td>
			    <td>4</td>
			   	<td>Doente</td>
			   	<td><a href="#">Acessar</a></td>
			  </tr>
			  <tr>
			    <td>0001</td>
			    <td></td> 
			    <td>Lactante</td>
			    <td>5</td>
			   	<td>Produzindo</td>
			   	<td><a href="#">Acessar</a></td>
			  </tr>
			  <tr>
			    <td>0001</td>
			    <td></td> 
			    <td>Lactante</td>
			    <td>5</td>
			   	<td>Produzindo</td>
			   	<td><a href="#">Acessar</a></td>
			  </tr>
			  <tr>
			    <td>0062</td>
			    <td></td> 
			    <td>Lactante</td>
			    <td>5</td>
			   	<td>Produzindo</td>
			   	<td><a href="#">Acessar</a></td>
			  </tr>
			  <tr>
			    <td>0011</td>
			    <td></td> 
			    <td>Lactante</td>
			    <td>5</td>
			   	<td>Produzindo</td>
			   	<td><a href="#">Acessar</a></td>
			  </tr>
			  <tr>
			    <td>0002</td>
			    <td>Amarelinha</td> 
			    <td>Lactante</td>
			    <td>5</td>
			   	<td>Produzindo</td>
			   	<td><a href="#">Acessar</a></td>
			  </tr>
			  <tr>
			    <td>0031</td>
			    <td></td> 
			    <td>Lactante</td>
			    <td>5</td>
			   	<td>Produzindo</td>
			   	<td><a href="#">Acessar</a></td>
			  </tr>
			  <tr>
			    <td>0005</td>
			    <td></td> 
			    <td>Lactante</td>
			    <td>5</td>
			   	<td>Produzindo</td>
			   	<td><a href="#">Acessar</a></td>
			  </tr>
			  
			</table>
		</div>
	</main>
</body>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>
