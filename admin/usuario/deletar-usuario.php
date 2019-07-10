<?php 
	require_once("class/Usuario.php");
	$id = $_GET["id"];
	$usua = new Usuario();
	$usua->id =$id;
	$usua->Deletar();		
?>