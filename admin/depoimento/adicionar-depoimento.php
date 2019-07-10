<?php


if(isset($_POST["texto"])){
	
    $texto		= $_POST["texto"];
	$nomeCli	= $_POST["nomeCli"];    

    require_once("class/Depoimento.php");

    $depo	            = new Depoimento();
	$depo->nomeCli      = $nomeCli;
    $depo->texto      	= $texto;
    $depo->Inserir();		
}
?>

<h2>Adicionar Depoimento</h2>

	<form action="#" method="post">
			<div>
				<input name="nomeCli" class="form-control" type="text" placeholder="Digite seu nome:" required>
			</div>
			<div>
				<textarea name="texto" class="form-control" cols="10" rows="20" placeholder="Digite sua mensagem" required></textarea>
			</div>
			<div>
				<input type="submit" value="ENVIAR">
			</div>
	</form>