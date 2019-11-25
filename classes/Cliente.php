<?php 
require_once ("BD.php");
class Cliente
{
    private $conexao;

    function __construct() {
        $this->conexao = new BD();
    }    
    
    function autenticar($usuario) {
        $sql = 'SELECT * FROM usuario';
        $result = $this->conexao->select($sql);
        return $result;
    }

    // or email = '$usuario'
}
?>