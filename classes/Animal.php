<?php
require_once ("BD.php");
class Animal
{
    private $conexao;

    function __construct() {
        $this->conexao = new BD();
    }

    function query($sql) {
        $result = $this->conexao->query($sql);
        return var_dump(pg_fetch_all($result));
    }

    function queryOne($type,$search) {
        $sql = "select * from animal where {$type}='$search'";
        $result = $this->conexao->select($sql);
        return $result;
    }

    function queryAll() {
        $sql = "select * from animal";
        $result = $this->conexao->select($sql);
        return $result;
    }

    function remove($coda) {
        $sql = "delete from animal where coda=$coda";
        $result = $this->conexao->query($sql);
        return $result;
    }

    function insert($coda,$tipo,$status,$dtanasc,$codp) {
        $sql = "insert into animal values($coda,'$tipo','$status','$dtanasc',$codp)";
        $result = $this->conexao->query($sql);
        return $result;
    }

    function update($coda,$tipo,$status,$dtanasc) {
        $sql = "update animal set tipo='$tipo', status='$status', dtanasc='$dtanasc' where coda=$coda";
        $result = $this->conexao->query($sql);
        return $result;
    }
    
    // $cobra-criada = new Animal;
    // $lista = $cobra-criada->query('select * from animal')
    // foreach($lista as $n => $v){}

    // https://github.com/asebben/rent/blob/master/views/listaProdutos.php

   //
   //  function filtroNovidades() {
   //      $sql = "SELECT * FROM produto ORDER BY id desc limit 10";
   //      $result = $this->conexao->select($sql);
   //      return $result;
   //  }
   //
   //  function filtroBusca($palavraChave) {
   //      $sql = "SELECT * FROM produto where nome like '%{$palavraChave}%' ORDER BY nome";
   //      $result = $this->conexao->select($sql);
   //      return $result;
   //  }
   //
   //  function consultaProduto($id) {
   //      $sql = "SELECT produto.id as idProduto, produto.nome as nomeProduto, imagem, descricao, tensao, catMarcenaria, catJardinagem, catLimpeza, catEscritorio, catMecanica, catOutros, qtde, valor, desconto, (valor - desconto) as valorFinal, fabricante.id as idFabricante, fabricante.nome as nomeFabricante FROM produto LEFT JOIN fabricante ON produto.idFabricante = fabricante.id WHERE produto.id = $id";
   //      $result = $this->conexao->select($sql);
   //      return $result;
   //  }
   //
   //  function listarTodos($campo = "produto.nome", $ordem = "asc") {
   //      $sql = "SELECT produto.id as idProduto, produto.nome as nomeProduto, imagem, descricao, tensao, catMarcenaria, catJardinagem, catLimpeza, catEscritorio, catMecanica, catOutros, qtde, valor, desconto, (valor - desconto) as valorFinal, fabricante.id as idFabricante, fabricante.nome as nomeFabricante FROM produto LEFT JOIN fabricante ON produto.idFabricante = fabricante.id ORDER BY $campo $ordem";
   //      $result = $this->conexao->select($sql);
   //      return $result;
   //  }
   //
   // function cadastrar($dados) {
   //      $sql = "INSERT INTO produto (nome, idFabricante, imagem, descricao, tensao, catMarcenaria, catJardinagem, catLimpeza, catEscritorio, catMecanica, catOutros, qtde, valor, desconto)
   //      	VALUES ('{$dados['nome']}',
   //      	{$dados['idFabricante']},
   //      	'{$dados['imagem']}',
   //      	'{$dados['descricao']}',
   //      	{$dados['tensao']},
   //      	{$dados['catMarcenaria']},
   //      	{$dados['catJardinagem']},
   //      	{$dados['catLimpeza']},
   //      	{$dados['catEscritorio']},
   //      	{$dados['catMecanica']},
   //      	{$dados['catOutros']},
   //      	{$dados['qtde']},
   //      	{$dados['valor']},
   //      	{$dados['desconto']})";
   //      return $this->conexao->query($sql);
   //  }
   //
   //  function alterar($dados) {
   //      $sql = "UPDATE produto SET
   //      nome = '{$dados['nome']}',
   //      idFabricante = {$dados['idFabricante']},
   //      imagem = '{$dados['imagem']}',
   //      descricao = '{$dados['descricao']}',
   //      tensao = {$dados['tensao']},
   //      catMarcenaria = {$dados['catMarcenaria']},
   //      catJardinagem = {$dados['catJardinagem']},
   //      catLimpeza = {$dados['catLimpeza']},
   //      catEscritorio = {$dados['catEscritorio']},
   //      catMecanica = {$dados['catMecanica']},
   //      catOutros = {$dados['catOutros']},
   //      qtde =  {$dados['qtde']} ,
   //      valor = {$dados['valor']},
   //      desconto = {$dados['desconto']}
   //      WHERE id = {$dados['id']}";
   //      return $this->conexao->query($sql);
   //  }
   //
   //  function excluir($id) {
   //      $sql = "DELETE FROM produto WHERE id = $id";
   //      return $this->conexao->query($sql);
   //  }
   //
   //  function erro(){
   //      return $this->conexao->erro();
   //  }
}
?>
