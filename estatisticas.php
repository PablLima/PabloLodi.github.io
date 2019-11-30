<!DOCTYPE html>
<html>
<?php require "./includes/head.php" ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<body>
<?php require "./includes/header.php" ?>
<?php require "./includes/aside.php" ?>	
	<main>
		<div>
			<h3>Estatísticas</h3><br>
			<h7>Porcentagem de vacas</h7><br><br>
			<canvas id="myChart" width="400" height="100"></canvas>
		</div>
	</main>
</body>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Totalmente pasto', 'Híbrida', 'Totalmente grãos'],
        datasets: [{
            label: 'Quantidade # de vacas',
            data: [12, 19, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    }
});
</script>
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
