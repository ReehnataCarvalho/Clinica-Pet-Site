<?php 
	@$OK = $_GET["mens"];
	@$nome = $_GET["nome"];
?>

<footer class="rodape wow fadeInUp" id="rodape">
		<article class="rodapeLinhaUm">
			<article>
				<img src="img/logoClinicaPetBr.svg" alt="Logo">
				<p>Nononon ononon ononon noonon onoonnoononon ononon noonon onoonno ononon ononon noonon onoonno ononon ononon noonon onoonno Nononon ononon ononon noonon onoonnoononon ononon noonon onoonno ononon ononon noonon onoonno ononon ononon noonon onoonno Nononon ononon ononon noonon onoonnoononon ononon noonon onoonno ononon ononon noonon onoonno ononon ononon noonon onoonno</p>
				<h2>Telefone: +55 11 98989696</h2>
				<h2>Email:contato@fadamadrinhapet.com.br</h2>
				<h2>Website: www.fadamadrinhapet.com.br</h2>
				<!--article>ul>li*4>a>img-->
				<article class="redeSocialRodape">
					<ul>
						<li>
							<a href="#">
								<img src="img/face.svg" alt="Facebook">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/insta.svg" alt="Instagram">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/twitter.svg" alt="Twitter">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/whats.svg" alt="WhatsApp">
							</a>
						</li>
					</ul>
				</article>
			</article>
			<article class="form">
				<h2>Contato
				</h2>
				<article>
					<form action="envio-email-rodape.php" method="post">
						<div>
							<input name="nome" type="text" placeholder="Digite seu nome:">
						</div>
						<div>
							<input name="email" placeholder="Digite seu e-mail:" type="email" required>
						</div>
						<div>
							<textarea name="msg" cols="10" rows="20" placeholder="Digite sua mensagem"></textarea>
						</div>
						<div>
							<input type="submit" value="ENVIAR">
							<span>
								<?php
		
									if($OK == "OK"){
									
									echo($nome. ", sua mensagem foi enviada com sucesso");
									
									}								
								
								?>
							</span>
						</div>
					</form>
				</article>
			</article>
		</article>
		<h2 class="texto">Programadora WEB Renata Carvalho - TODOS OS DIREITOS RESERVADOS</h2>
	</footer>