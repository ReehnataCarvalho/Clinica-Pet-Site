<?php

// Carregar as Informações do form pelo id 
require_once("class/Destaque.php");
$id 	= $_GET["id"];
$dest 	= new Destaque($id);

if(isset($_POST["titulo"])){ //  esta linha esta verificando se o titulo for passado faça algo .. 
	
	$id			= $_POST["id"];
    $titulo		= $_POST["titulo"];
	$texto		= $_POST["texto"];
	$linkUrl 	= $_POST["linkUrl"];
	
	 // Receber Img
	$img		= $_FILES["img"];
	
	if(move_uploaded_file($img[tmp_name],"../img/".$img[name])){
		
		$endImg = $img[name]; // "http://localhost:8080/site-clinicapet/img/".
		
	}else{
		echo "Erro: de Imagem";		
	}
	

    $dest	            = new Destaque($id);
	$dest->img			= $endImg;
	$dest->titulo      	= $titulo;
    $dest->texto      	= $texto;
	$dest->linkUrl		= $linkUrl;
    $dest->Atualizar();		
}

?>
<h2>Atualizar Destaque</h2>

<form action="index.php?p=destaque&ds=atualizar-destaque" method="post" class="form-group" enctype="multipart/form-data">
		
	<input type="hidden" name="id" value="<?php echo $dest->id?>">
	
		<div>
			<img src="<?php echo '../img/'.$dest->img ?>" alt="<?php echo $dest->titulo ?>" >
		</div>
		<div>
			<input name="img" class="form-control" type="file" placeholder="Nova imagem:" required>
		</div>

		<div>
			<input name="titulo" class="form-control" type="text" value="<?php echo $dest->titulo?>" required>
		</div>
		<div>
			<textarea name="texto" class="form-control" cols="10" rows="20" required><?php echo $dest->texto?></textarea>
		</div>
		<div>
			<input name="linkUrl" class="form-control" type="text" value="<?php echo $dest->linkUrl?>" required>
		</div>
		<div>
			<input type="submit" value="ENVIAR"> 	
		</div>
</form>













