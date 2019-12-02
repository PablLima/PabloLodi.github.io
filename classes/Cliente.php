<?php 
require_once ("BD.php");
class Cliente
{
    private $conexao;

    function __construct() {
        $this->conexao = new BD();
    }    
    
    function autenticar($usuario) {
        $sql = 'SELECT * FROM usuario where login=$usuario';
        $result = $this->conexao->select($sql);
        return $result;
    }

    function queryOne($type,$search) {
        $sql = "select * from usuario where $type='$search'";
        $result = $this->conexao->select($sql);
        return $result;
    }

    function queryAll() {
        $sql = "select * from usuario";
        $result = $this->conexao->select($sql);
        return $result;
    }

    function insertUser($login,$senha,$funcao) {
        $sql = "insert into usuario values($login,$senha,$funcao)";
        $result = $this->conexao->query($sql);
        return $result;
    }


    // or email = '$usuario'
}
?>