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
			width: 87%;
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

		@media only screen and (max-width: 1100px) {
		    /* para desktop: */
		    aside {width: 100%; position: initial; margin-top:0;}
		    header {width: 100%; position: initial; }
		    main {width: 100%;margin-left: 0;margin-top: 20px}
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
	<main>
		<div style="overflow-x:auto;">
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
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>
