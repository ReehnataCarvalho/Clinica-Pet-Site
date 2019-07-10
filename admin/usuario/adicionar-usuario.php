<?php


if(isset($_POST["login"])){
	
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
		
    require_once("class/Usuario.php");

    $usua	            = new Usuario();
	$usua->nomeUsua     = $nomeUsua;
    $usua->login      	= $login;
	$usua->senha		= $senha;
	$usua->img			= $endImg;
    $usua->Adicionar();		
}
?>


	<form action="index.php?p=usuario&u=adicionar-usuario" method="post" class="form-group" enctype="multipart/form-data">
		
			<div>
			<input name="img" class="form-control" type="file" placeholder="insira sua imagem:" required>
			</div>
			<div>
				<input name="nomeUsua" class="form-control" type="text" placeholder="Nome completo:" required>
			</div>
			<div>
				<textarea name="login" class="form-control" placeholder="Email:" required></textarea>
			</div>
			<div>
				<input name="senha" class="form-control" type="password" placeholder="Senha:" required>
			</div>
			<div>
				<input type="submit" value="ENVIAR">
			</div>
	</form>











