<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
	<aside class="access">
		<nav>
			<ul>
				<li>
					<a href="animais.php">
						<i class="fas fa-paw"></i><br>
						<p>Animais</p>
					</a>
				</li>
				<li>
					<a href="alimentacao.php">
						<i class="fas fa-utensils"></i><br>
						<p>Alimentação</p>
					</a>
				</li>
				<li>
					<a href="insumos.php">
						<i class="fas fa-bacon"></i><br>
						<p>Insumos</p>
					</a>
				</li>
				<li>
					<a href="lotes.php">
						<i class="fas fa-car"></i><br>
						<p>Lotes</p>
					</a>
				</li>
				<li>
					<a href="estatisticas.php">
						<i class="fas fa-chart-pie"></i><br>
						<p>Estatísticas</p>
					</a>
				</li>				
			</ul>
		</nav>
	</aside>
	<main>
		<div>			
			<h2>Selecione a operação no menu esquerdo</h2><br><br>
			<br><h3>Bem vindo, <?=$_SESSION['nome']?> </h3><br><br>

		</div>
	</main>
</body>
<?php require "./includes/footer.php" ?>	