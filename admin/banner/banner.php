<?php 

	$paginaBanner = @$_GET["b"];

	if($paginaBanner == NULL){require_once("banner/listar-banner.php");}

	if($paginaBanner == "adicionar-banner"){require_once("adicionar-banner.php");}	
		
	if($paginaBanner == "atualizar-banner"){require_once("atualizar-banner.php");}
		
	if($paginaBanner == "deletar-banner"){require_once("deletar-banner.php");}	
?>