<?php 

	$paginaUsuario = @$_GET["u"];

	if($paginaUsuario == NULL){require_once("usuario/listar-usuario.php");}

	if($paginaUsuario == "adicionar-usuario"){require_once("usuario/adicionar-usuario.php");}	
		
	if($paginaUsuario == "atualizar-usuario"){require_once("usuario/atualizar-usuario.php");}
		
	if($paginaUsuario == "deletar-usuario"){require_once("usuario/deletar-usuario.php");}	
?>
