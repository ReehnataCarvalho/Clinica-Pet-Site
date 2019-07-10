<?php

class conexao{

    public static function LigarConexao(){

        $conn = new PDO("mysql:dbname=clinicapet;host:localhost","root","");
        return $conn;
    }

}


?>