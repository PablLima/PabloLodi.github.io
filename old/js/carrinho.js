document.getElementById

var valorProduto = 0;
var valorPFinal = 0;

var listaProdutos = document.getElementsByClassName("precoInicial")

function mudaValor() {
  var precoTotal =
  console.log("Deu certo, arrombado")
}

var checks = document.querySelectorAll('.optionBox');

checks.forEach(function(check){
  check.addEventListener('click', checkIndex);
})

function checkIndex(event){
    console.log( Array.from(checks).indexOf(event.target) );
}

var somaTotal = 0;
var valoresTotais = document.getElementsByClassName("precoTotal")

function atualizaSomaTotal(arg){
    // arg tem o elemento
    var valorInicial = arg.getElementsByClassName("precoInicial")[0].innerText
    var valorCampo = arg.getElementsByClassName("campoQuantidade")[0].value
    somaTotal = 0;
    if (valorCampo > -1) {
        arg.getElementsByClassName("precoTotal")[0].innerText = String(valorInicial * valorCampo)
    }
    for (i = 0; i < valoresTotais.length; i++) {
        console.log()
        somaTotal += parseInt(valoresTotais[i].innerText)
    }
    mudaValorFrete()
    atualizaValorTotal()
}

function mudaValorFrete() {
  var freteSelecionado = document.getElementById("perfilP").checked
  if (freteSelecionado) {
    somaTotal += 20;
  } else {
    somaTotal -= 20;
  }
  atualizaValorTotal()
}

function atualizaValorTotal() {
    document.getElementById("valor-totalgeral").innerText = String(somaTotal)
}

var podeApagar = false;

function clicaNoX() {
  podeApagar = true;
}

function deletaElemento(x) {
    if (podeApagar) {
      x.querySelector(".precoInicial").innerText = "0"
      atualizaSomaTotal(x)
      x.style.display = "none";
      podeApagar = false;
    }
}
