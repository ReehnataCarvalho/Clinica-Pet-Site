
<?php 

	$paginaDestaque = @$_GET["ds"];

	if($paginaDestaque == NULL){require_once("destaque/listar-destaque.php");}

	if($paginaDestaque == "adicionar-destaque"){require_once("adicionar-destaque.php");}	
		
	if($paginaDestaque == "atualizar-destaque"){require_once("atualizar-destaque.php");}
		
	if($paginaDestaque == "deletar-destaque"){require_once("deletar-destaque.php");}	
?>
