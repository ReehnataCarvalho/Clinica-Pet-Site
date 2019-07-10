<?php
require_once("admin/class/Destaque.php");
$dest 	= new Destaque;
$listar = $dest->Listar();

?>

<!doctype html>
<html lang="pt-br"> <!--  -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="Description" content="Site clínica pet">
	<meta name="Keywords" content="Pet, Gato, Dog">
	<title>Clínica Fada Madrinha Pet</title>
	<!-- RESET -->
	<link rel="stylesheet" href="css/reset.css">
	<!-- BANNER SLICK  -->
	<link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick-theme-banner.css">
	<!--LITY-->
	<link rel="stylesheet" href="css/lity.css">
	<!--ANIMATE-->
	<link rel="stylesheet" href="css/animate.css">
	<!-- MEU ESTILO -->
	<link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/minha-animacao.css">
    <link rel="stylesheet" href="css/slider-banner.css">
    
	<!-- Favicon - img para Titulo-->
<!--Favicon.ico & App Icon GeneratorFrom Dan's Tools-->

<link rel="apple-touch-icon" sizes="57x57" href="img/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
	<link rel="manifest" href="img/icon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/icon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body>

<!-- INICIO CABECALHO -->    
<?php require_once("header.php") ?>
<!-- FIM CABECALHO -->
	<!-- SECTION BANNER -->
<!-- SLIDER -->
<?php require_once("banner.php") ?>
<!-- FIM SLIDER -->
	<!-- SECTION DESTAQUE 01 -->
	<section class="destaque wow fadeInUp">
		<div class="site">
			<?php foreach($listar as $row):?> <!-- array slice($listar,0,4) -->
			<article>
				<img src="<?php echo "img/".$row['img']?>" alt="<?php echo $row['titulo']?>">
				<h2><?php echo $row['titulo']?></h2>
				<p><?php echo $row['texto']?></p>
				<a href="<?php echo $row['linkUrl']?>">leia mais</a>
			</article>
			<?php endforeach?>
		</div>  
	</section>
	<!-- SECTION DESTAQUE VÍDEO -->
	<section class="destaque video wow fadeInUp">
		<div class="site">
			<article>
				<a href="//www.youtube.com/watch?v=XSGBVzeBUbk" data-lity>
					<img src="img/fundo-video.png" alt="Vídeo">	
				</a>
				<!--
				<video controls autoplay loop>
					<source src="video/web.mp4" type="video/mp4">
				</video>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/JRJj4z-prvM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				-->
			</article>
			<article>
				<h2>Destaque Vídeo</h2>
				<p>Nonono noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon
				noonno ononon onon onon. Nonono noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon
				noonno ononon onon onon. Nonono noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon
				noonno ononon onon onon
				</p>
			</article>
		</div>
	</section>
	<!-- Destaque Serviços -->
	<section class="destaqueServico wow fadeInUp">
		<div class="site">
				<h2>Destaque Serviços</h2>
				<p>Nonono noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon
				</p>
			<article class="servicos">
				<article>
					<img src="img/banho-tosa.svg" alt="Banho e tosa">
					<h2>Banho e Tosa</h2>
				</article>
				<article>
					<img src="img/medicina-felina.svg" alt="Banho e tosa">
					<h2>Medicina Felina</h2>
				</article>
				<article>
					<img src="img/medicina-canina.svg" alt="Banho e tosa">
					<h2>Medicina Canina</h2>
				</article>
				<article>
					<img src="img/clinica-geral.svg" alt="Banho e tosa">
					<h2>Clínica Geral</h2>
				</article>
			</article>
		</div>
	</section> <!-- FIM Destaque Serviços -->
	<section class="depoimento depoimentoCarrocel wow fadeInUp"><!-- Depoimento -->
			<article>
				<p>Nonono noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon ononon onon onon noonno ononon onon onon noonno ononon onon onon
				</p>
				<h2>Medicina Canina</h2>
			</article>
			<article>
				<p>Nonono noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon noonno ononon onon onon ononon onon onon noonno ononon onon onon noonno ononon onon onon
				</p>
				<h2>Medicina Canina</h2>
			</article>
	</section><!-- Fim Depoimento -->
	<!-- LIST INSTAGRAM -->
	<?php require_once("insta.php") ?>

	<!-- Blog -->

<!-- 	<section class="instagram wow fadeInUp">
		<article class="instaCar">
			<img src="img/insta01.png" alt="Img instagram">
			<img src="img/insta02.png" alt="Img instagram">
			<img src="img/insta01.png" alt="Img instagram">
			<img src="img/insta02.png" alt="Img instagram">
			<img src="img/insta01.png" alt="Img instagram">
			<img src="img/insta02.png" alt="Img instagram Teste">
			<img src="img/insta01.png" alt="Img instagram">
			<img src="img/insta02.png" alt="Img instagram">
			<img src="img/insta01.png" alt="Img instagram">
			<img src="img/insta02.png" alt="Img instagram">
			<img src="img/insta01.png" alt="Img instagram">
			<img src="img/insta02.png" alt="Img instagram Teste">
		</article>
	</section> -->
	<!-- FIM LIST INSTAGRAM -->
	
	
	
	

	<section class="depoimento depoimentoCarrocel wow fadeInUp"><!-- Depoimento -->
			
		<?php foreach($listar as $row):?>
			<article>
				<p><?php echo $row['texto']?></p>
				<h2><?php echo $row['nomeCli']?></h2>
			</article>
			<?php endforeach?>
	</section><!-- Fim Depoimento -->
	
	
		
	<?php require_once("footer.php")?>
	<!-- JQUERY-->
	<script src="js/jquery-3.3.1.min.js"></script>
	<!--SLICK-->
	<script src="js/jquery-migrate-1.2.1.min.js"></script>	
	<script src="js/slick.min.js"></script>
	<!--LITY-->
	<script src="js/lity.js"></script>
	<!--WOW-->
	<script src="js/wow.js"></script>
	<!--MINHA ANIMAÇÃO-->
    <script src="js/minha-animacao.js"></script>
   
    
</body>
</html>







