<?php 
	require_once("class/Destaque.php");
	$id = $_GET["id"];
	$dest = new Destaque();
	$dest->id =$id;
	$dest->Deletar();		
?>
