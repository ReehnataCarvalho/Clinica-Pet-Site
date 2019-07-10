<?php 
	require_once("class/Banner.php");
	$id = $_GET["id"];
	$ban = new Banner();
	$ban->id =$id;
	$ban->Deletar();		
?>
