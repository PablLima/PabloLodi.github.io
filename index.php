<!DOCTYPE html>
<html>
<?php session_start() ?>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>	
	<main>
		<div>			
			<h3>Selecione a operação no menu esquerdo</h3><br><br>
			<br><h3>Bem vindo, <?=$_SESSION['nome']?> </h3><br><br>
			<dl>
			  <dt>Percentual atual de serviço:</dt>
			  <br>
			  <dd class="percentage percentage-7">
			    <span class="text">
			      Máquinas: 7%
			    </span>
			  </dd>
			  <dd class="percentage percentage-20">
			    <span class="text">
			      Refrigeração: 100%
			    </span>
			  </dd>
			  <dd class="percentage percentage-2">
			    <span class="text">
			      Consumo de ração: 2%
			    </span>
			  </dd>
			</dl>

		</div>
	</main>
</body>
<script src="./js/grabber.js"></script>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>
