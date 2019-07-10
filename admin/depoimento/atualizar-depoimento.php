<?php
// Carregar as Informações do form pelo id 

require_once("class/Depoimento.php");
$id 	= $_GET["id"];
$depo 	= new Depoimento($id);

// Atualizar
if(isset($_POST["texto"])){
	
	
    $texto		= $_POST["texto"];
	$nomeCli	= $_POST["nomeCli"];  
	
    $depo	            = new Depoimento($id);								
    $depo->texto      	= $texto;
    $depo->nomeCli      = $nomeCli;
    $depo->Atualizar();		
}

?>

<h2>Atualizar Depoimento</h2>


	<form action="index.php?p=depoimento&d=atualizar-depoimento" method="post" class="form-group">
		
		<input type="hidden" name="id" value="<?php echo $depo->id ?>">	
		
		<div>		
			<textarea name="texto" class="form-control" cols="20" rows="10" placeholder="Mensagem:*" required><?php echo $depo->texto ?></textarea>
		</div>
		<div>
			<input name="nomeCli" class="form-control" type="text" placeholder="Nome:" value="<?php echo $depo->nomeCli ?>" required>
		</div>
		<div>
			<input type="submit" value="ENVIAR EDIÇÃO">
		</div>
	</form>




