<?php

require_once("Conexao.php");

class Contato{
	/* Atributos */
    public $nome;
    public $email;
    public $msg;
	/*Fim de Atributos*/

    /*Metodo Inserir*/
    public function Inserir(){
		
        $query = "INSERT INTO contato (nome, email, msg) VALUES ('".$this->nome."','".$this->email."','".$this->msg."')";    
        $conn  = Conexao::LigarConexao();
        $conn  ->exec($query);
    }
    /*Fim Metodo Inseriri */

    /*Meto Listar */
    public function Listar(){
        $conn       = Conexao::LigarConexao();         
        $buscar     = $conn->prepare("SELECT * FROM contato ORDER BY contato.id DESC"); /* Selecionar a tabela Contato e lista-la em ordem Desc -> Decrescente ... sendo que toda esa ação esta na var BUSCAR*/
        $buscar     ->execute();
        $resultado  = $buscar->fetchAll(PDO::FETCH_ASSOC);
        return($resultado);
    }
    /*Fim Metodo Listar */
}




?>