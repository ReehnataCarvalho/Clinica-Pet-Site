<?php

session_start();
	
	if(!isset($_SESSION['login'])){
		header("Location:login.php");
	}

		require_once("class/Usuario.php");
		$usuario 		= new Usuario();
		$usuario->id 	=$_SESSION['idUser'];
		$listarLogin	=$usuario->VerificarLogin();


$pagina = "";
$pagina = @$_GET["p"];

?>


<!doctype html>
<html lang="pt-br">

<head>
	<title>Dashboard | Clínica Pet - Fada Madrinha</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/estilo.css">
		
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	
</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php">
					<img src="../img/logoClinicaPet-Padrao.svg" alt="Clínica Pet" class="img-responsive logo">
				</a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth">
						<i class="lnr lnr-arrow-left-circle"></i>
					</button>
				</div>
				
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo '../img/'.$listarLogin['img'] ?>" class="img-circle" alt="<?php echo $listarLogin['nomeUsua'] ?>"> <span><?php echo $listarLogin['nomeUsua'] ?></span>
								<i class="icon-submenu lnr lnr-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">
										<i class="lnr lnr-user"></i>
										<span>My Profile</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="lnr lnr-envelope"></i>
										<span>Message</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="lnr lnr-cog"></i>
										<span>Settings</span>
									</a>
								</li>
								<li>
									<a href="sair.php">
										<i class="lnr lnr-exit"></i>
										<span>Logout</span>
									</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
							<a href="index.php" <?php if($pagina =="dashboard"){echo 'class="active"';}?>>
								<i class="lnr lnr-home"></i>
								<span>Dashboard</span>
							</a>
						</li>

						<li>
							<a href="index.php?p=banner" <?php if($pagina =="banner"){echo 'class="active"';}?>>
								<i class="lnr lnr-code"></i>
								<span>Banner</span>
							</a>
						</li>
						<li>
							<a href="index.php?p=contato" <?php if($pagina =="contato"){echo 'class="active"';}?>>
								<i class="lnr lnr-chart-bars"></i>
								<span>Contato</span>
							</a>
						</li>
						<li>
							<a href="index.php?p=depoimento" <?php if($pagina =="depoimento"){echo 'class="active"';}?>>
								<i class="lnr lnr-cog"></i>
								<span>Depoimento</span>
							</a>
						</li> 
						<li>
							<a href="index.php?p=destaque" <?php if($pagina =="destaque"){echo 'class="active"';}?>>
								<i class="lnr lnr-alarm"></i>
								<span>Destaque</span>
							</a>
						</li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed">
								<i class="lnr lnr-file-empty"></i>
								<span>Serviços</span>
								<i class="icon-submenu lnr lnr-chevron-left"></i>
							</a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="#" class="">Index Serviços</a></li>
									<li><a href="#" class="">Atendimento Veterinário</a></li>
									<li><a href="#" class="">Vacina para Cães</a></li>
									<li><a href="#" class="">Vacina para Gatos</a></li>
									<li><a href="#" class="">Castração</a></li>
									<li><a href="#" class="">Banho e Tosa</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="index.php?p=redeSocial" <?php if($pagina =="redeSocial"){echo 'class="active"';}?>>
								<i class="lnr lnr-dice"></i>
								<span>redeSocial</span>
							</a>
						</li>
						<li>
							<a href="index.php?p=video" <?php if($pagina =="video"){echo 'class="active"';}?>>
								<i class="lnr lnr-text-format"></i>
								<span>Video</span>
							</a>
						</li>
						<li>
							<a href="index.php?p=usuario" <?php if($pagina =="usuario"){echo 'class="active"';}?>>
								<i class="lnr lnr-linearicons"></i>
								<span>Usuarios</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Sistema Web Clínica Pet</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<p>
											BOTÃO 01
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<p>
											BOTÃO 02
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<p>
											BOTÃO 03
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<p>
											BOTÃO 04
										</p>
									</div>
								</div>
							</div>							
						</div>
						
						<div class="panel-heading">
						<?php
						
						

						if($pagina == NULL){require_once("dashboard/dashboard.php");
						}
							
						if($pagina == "usuario"){require_once("usuario/usuario.php");
						}												
						if($pagina == "banner"){require_once("banner/banner.php");
						}						
						if($pagina == "contato"){require_once("contato/listar-contato.php");
						}
						if($pagina == "depoimento"){require_once("depoimento/depoimento.php");
						}
						if($pagina == "destaque"){require_once("destaque/destaque.php");
						}
						if($pagina == "servicos"){require_once("servicos/servicos.php");
						}
						if($pagina == "video"){require_once("video/video.php");
						}
						if($pagina == "redeSocial"){require_once("redeSocial/redeSocial.php");
						}							
					
						?>
						</div>
						
					</div>
				</div>
			</div>
		</div>




		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2019 <a href="https://www.supremodigital.com.br" target="_blank">Supremo Digital</a>. - AllePalmeira</p>
			</div>
		</footer>
	</div>

	
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>	
</body>
</html>
