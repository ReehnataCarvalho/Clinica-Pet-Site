<?php 


	$paginaDepoimento = @$_GET["d"];

	if($paginaDepoimento == NULL){require_once("depoimento/listar-depoimento.php");}

	if($paginaDepoimento == "adicionar-depoimento"){require_once("depoimento/adicionar-depoimento.php");}	
		
	if($paginaDepoimento == "atualizar-depoimento"){require_once("depoimento/atualizar-depoimento.php");}
		
	if($paginaDepoimento == "deletar-depoimento"){require_once("depoimento/deletar-depoimento.php");}	
?>


				
				
				
				
				
				
