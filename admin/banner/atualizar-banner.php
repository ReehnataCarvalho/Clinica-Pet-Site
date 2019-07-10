<?php
// Carregar as Informações do form pelo id 
require_once("class/Banner.php");
$id 	= $_GET["id"];
$ban 	= new Banner($id);

// Atualizar
if(isset($_POST["img"])){
	
	$titulo		= $_POST["titulo"];
	$texto		= $_POST["texto"];	
	// Receber Img
	$endImg		=$_FILES["img"];
	
	if(move_uploaded_file($img[tmp_name],"../img/".$img[name])){
		
		$endImg = $img[name]; // "http://localhost:8080/site-clinicapet/img/".
		
	}else{
		echo "Erro: de Imagem";	
	}
	
    $ban	            = new Banner($id);
	$ban->img			= $endImg;
	$ban->titulo      	= $titulo;
    $ban->texto      	= $texto;
    $ban->Atualizar();		
}

?>
<h2>Atualizar Banner</h2>

<form action="index.php?p=banner&b=atualizar-banner" method="post" class="form-group" enctype="multipart/form-data">
		
	<input type="hidden" name="id" value="<?php echo $ban->id?>">	
	
		<div>
		<img src="<?php echo '../img/'.$ban->img ?>" alt="<?php echo $ban->titulo?>">
		</div>	
		<div>
			<input name="img" class="form-control" type="file" placeholder="Nova imagem:"  	required>
		</div>
		<div>
			<input name="titulo" class="form-control" type="text" placeholder="Novo Titulo:"  value="<?php echo $ban->titulo?>" required>
		</div>
		<div>
			<input name="texto" class="form-control" type="text" cols="10" rows="20" placeholder="Novo texto:" value="<?php echo $ban->texto?>" required>
		</div>
		<div>
			<input type="submit" value="ENVIAR"> 	
		</div>
</form>
















