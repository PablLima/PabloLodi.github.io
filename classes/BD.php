<?php
class BD {

    private $conexao;
    //simple check

    function __construct() {
        $this->conexao = pg_connect('host=localhost port=5432 dbname=milk user=2milk password=milk2adm');
    }

    function query($sql) { // outras queries
        return pg_query($this->conexao, $sql);
    }

/*     function select($sql) {
        //recebe um select qualquer, executa e devolve um array de resultados.
        //o resultado será um array com índice numérico, onde cada linha conterá um array associativo com os dados selecionados no BD
        $retorno = mysqli_query($this->conexao, $sql); // $this->conexao->query($sql);
        $arrayResultados = array();   
        if (mysqli_num_rows($retorno) > 0) {
            while($linha = mysqli_fetch_assoc($retorno)) {
                $arrayResultados[] = $linha;
            }
        }
        return $arrayResultados;
    } */
    

    function select($sql) {
        $retorno = pg_query($this->conexao, $sql);
        $array = array();
        if (pg_num_rows($retorno) > 0) {
            while($linha = pg_fetch_assoc($retorno)) {
                $array[] = $linha;
            }
        }
        return $array;
    }

    function test() {
        $result = pg_query($this->conexao, "select * from pg_stat_activity");
        var_dump(pg_fetch_all($result));
    }
    //
    // private $host = "localhost";
    // private $user = "2milk";
    // private $password = "milk2adm";
    // private $database = "rent";
    // private $conexao;
    //
    // function __construct() {
    //     $this->conexao = mysqli_connect($this->host,$this->user,$this->password,$this->database);
    //     mysqli_query($this->conexao, "SET NAMES 'utf8'");
    // }
    //
    // function select($sql) {
    //     //recebe um select qualquer, executa e devolve um array de resultados.
    //     //o resultado será um array com índice numérico, onde cada linha conterá um array associativo com os dados selecionados no BD
    //     $retorno = mysqli_query($this->conexao, $sql); // $this->conexao->query($sql);
    //     $arrayResultados = array();
    //     if (mysqli_num_rows($retorno) > 0) {
    //         while($linha = mysqli_fetch_assoc($retorno)) {
    //             $arrayResultados[] = $linha;
    //         }
    //     }
    //     return $arrayResultados;
    // }
    //
    // function query($sql) { // outras queries
    //     return mysqli_query($this->conexao, $sql);
    // }
    //
    // function erro(){
    //     return mysqli_error($this->conexao);
    // }
}
?>
