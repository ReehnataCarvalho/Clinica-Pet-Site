<?php
// Carregar as Informações do form pelo id 

require_once("class/Usuario.php");
$id 	= $_GET["id"];
$usua 	= new Usuario($id);

// Atualizar
if(isset($_POST["nomeUsua"])){
	
	$id			= $_POST["id"];
    $nomeUsua	= $_POST["nomeUsua"];
	$login		= $_POST["login"]; 	
	$senha		= $_POST["senha"];
	 // Receber Img
	$img		= $_FILES["img"];
	
	if(move_uploaded_file($img[tmp_name],"../img/".$img[name])){
		
		$endImg = $img[name]; // "http://localhost:8080/site-clinicapet/img/".
		
	}else{
		echo "Erro: de Imagem";		
	}	

    $usua	            = new Usuario($id);
	$usua->nomeUsua     = $nomeUsua;
    $usua->login      	= $login;
	$usua->senha		= $senha;	
	$usua->img			= $endImg;
    $usua->Atualizar();		
}

?>

<h2>Atualizar Usuarios</h2>



	<form action="index.php?p=usuario&u=atualizar-usuario" method="post" class="form-group" enctype="multipart/form-data">
		
		<input type="hidden" name="id" value="<?php echo $usua->id?>">
		
			<div>
			<img src="<?php echo '../img/'.$usua->img ?>" alt="<?php echo $usua->nomeUsua?>">
			</div>
			<div>
			<input name="img" class="form-control" type="file" placeholder="Nova imagem:" required>
			</div>
			<div>
				<input name="nomeUsua" class="form-control" type="text" value="<?php echo $usua->nomeUsua?>" required>
			</div>
			<div>
				<input name="login" class="form-control" value="<?php echo $usua->login?>" required>
			</div>
			<div>
				<input name="senha" class="form-control" type="password" placeholder="Nova senha:" required>
			</div>
			<div>
				<input type="submit" value="ENVIAR">
			</div>
	</form>












