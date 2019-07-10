<?php
require_once("class/Usuario.php");

$errrooouuu = false;
	
session_start();

if(isset($_POST['email'])){
	
	$email		= $_POST["email"]; 	
	$senha		= $_POST["senha"];
	
	$login 			= new Usuario();
	$login->login   = $email;
	$login->senha	= $senha;
		
	$dadosBanco = $login->VerificarLogin();
	
	if($dadosBanco == NULL){
		$errrooouuu = true;
		
	}else{
		$_SESSION['login'] = $dadosBanco['login'];
		$_SESSION['idUser'] = $dadosBanco['id'];	
		
		
		header("Location:index.php");
		
		//echo"<script>document.location='index.php'</script>";
		exit();
	}
	
	
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Instruções do Doc -->
    <title>Clínica PET</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" charset="Alle Palmeira">

    <style>
        * {
            box-sizing: border-box;
        }
        
        a {
            color: #5266DD;
            text-decoration: none;
        }
        
        body {
            background: #F9F9F9;
            font-family: "Lato", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            margin: 0;
        }
        
        .login {
            margin: 0 auto;
            padding: 32px 0 15px;
            width: 300px;
        }
        
        .header {
            text-align: center;
        }
        
        .form {
            background: #FFF;
            border: 1px solid #DDD;
            border-radius: 4px;
            padding: 10px 15px;
            font-size: 15px;
        }
        
        .form label {
            color: #24292e;
            font-size: 12px;
            font-weight: 600;
        }
        
        .form label[for="senha"] span {
            color: #0366d6;
            float: right;
        }
        
        .form input {
            border-radius: 2px;
            margin: 10px 0;
            padding: 9px 7px;
            width: 100%;
        }
        
        .form .field {
            border: 1px solid #ddd;
        }
        
        .form .field:focus {
            border: 1px solid #0366D9;
            outline-color: rgba(37, 149, 255, 0.2);
            outline-style: solid;
            outline-width: 3px;
        }
        
        .form .button {
            background: #2DB84C;
            border: 1px solid #28a444;
            border-radius: 2px;
            color: #FFF;
            cursor: pointer;
            font-weight: 600;
        }
        
        .form .button:hover {
            background: #28a444;
        }
    </style>
</head>

<body>
        
    <div class="login">
        <header class="header">
            <a href="#" class="logo">
                <img alt="logo" src="../img/logoClinicaPet-Padrao.svg">
            </a>
        
        </header>

        <form class="form" method="post" action="#">
            <h2>LOGIN
			<?php
				if($errrooouuu == true){
					echo("Errroouuu");
				}	
			?>			
			</h2>
            
            <label for="user">
                Endereço de Email
                <input class="field" type="text" name="email" id="user" autofocus>
            </label>
        
            <label for="senha">
                Senha
                <input class="field" type="password" name="senha" id="password">
            </label>
        

            <input class="button" type="submit" value="Entrar">
        </form>

    </div>
</body>


</html>