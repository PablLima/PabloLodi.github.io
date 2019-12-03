<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>		
	<main>
		<?php 

			include "./classes/Alimento.php";
			$al = new Alimento();
			$data = $al->graph();
			
		?>
    	<div id="chartContainer" style="height: 370px; width: 100%;"></div>
	</main>
</body>

<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "Distribuição Alimentícia"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			<?php
				foreach($data as $d) {
					echo "{y: {$d['count']}, label: '{$d['tipo']}'},";
				}
			?>
		]
	}]
});

console.log(chart);
chart.render();

}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<?php require "./includes/footer.php" ?>	