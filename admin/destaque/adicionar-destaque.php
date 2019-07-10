<?php


if(isset($_POST["titulo"])){ //  esta linha esta verificando se o titulo for passado faça algo .. 
	
    $titulo		= $_POST["titulo"];
	$texto		= $_POST["texto"];
	$linkUrl 	= $_POST["linkUrl"];
	
	 // Receber Img
	$img		=$_FILES["img"];
	
	if(move_uploaded_file($img[tmp_name],"../img/".$img[name])){
		
		$endImg = $img[name]; // "http://localhost:8080/site-clinicapet/img/".
		
	}else{
		echo "Erro: de Imagem";		
	}
	
    require_once("class/Destaque.php");

    $dest	            = new Destaque();
	$dest->img			= $endImg;
	$dest->titulo      	= $titulo;
    $dest->texto      	= $texto;
	$dest->linkUrl		= $linkUrl;
    $dest->Adicionar();		
}
?>

<h2>Adicionar Destaque</h2>

<form action="index.php?p=destaque&ds=adicionar-destaque" method="post" class="form-group" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" ... serve para envio de imagens pois para subir ela inteira é mto ruim, sendo assim subir em pedaços é bem melhor-->
			<div>
			<input name="img" class="form-control" type="file" placeholder="insira sua imagem:" required>
			</div>
			<div>
				<input name="titulo" class="form-control" type="text" placeholder="Digite o Titulo:" required>
			</div>
			
			<div>
				<textarea name="texto" class="form-control" cols="10" rows="20" placeholder="Digite o texto:" required></textarea>
			</div>
			<div>
				<input name="linkUrl" class="form-control" type="text" placeholder="Digite o linkUrl:" required>
			</div>
			<div>
				<input type="submit" value="ENVIAR"> 	
			</div>
			
	</form>
