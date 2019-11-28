function compraRapida(idProduto, nomeProduto, valorFinal){
	var req = new XMLHttpRequest(); // novo objeto no browser
	req.open("POST", "alteraQuantidade.php", true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	req.send("idProduto="+codProduto+"&quantidade="+quantidade);

	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){ // retorno OK
			// define o que acontece quando vier o retorno OK do servidor
			document.getElementById("total"+codProduto).innerHTML = (unitario.replace(",", ".") * quantidade).toFixed(2).replace(".", ",");
			document.getElementById("totalPedido").innerHTML = this.responseText;
		}
	}
}

function ajaxReload(page){
	var req = new XMLHttpRequest(); // novo objeto no browser
	req.open("GET", page, true);
	req.send();
	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){ // retorno OK
			// define o que acontece quando vier o retorno OK do servidor
			document.getElementsByTagName("main")[0].innerHTML = this.responseText;
		}
	}
}