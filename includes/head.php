<head class="access">
	<title>2milk</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" href="./css/style.css">
	<script src="./js/ajax.js"></script>
    <?php
		session_start();
		if(!isset($_SESSION['nome'])) header("Location: login.php");
        if (isset($_GET['audio'])) { 
			$_SESSION['audio'] = true;
			echo "teste";
		}
		if (isset($_GET['color'])) {
			$_SESSION['color'] = true;
			echo 'Teste';
		}
	?>
</head>