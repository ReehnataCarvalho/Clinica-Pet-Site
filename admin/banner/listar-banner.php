<?php
    require_once("class/Banner.php");
	$ban 	= new Banner;
	$listar = $ban->Listar();
?>

<h2>Listar Banner</h2>

<table class="table" border="1" cellpadding="0" cellspacing="0">
	<caption>Dados de Banner | <a href="index.php?p=banner&b=adicionar-banner">Add - Novo</a></caption>
		<thead>
			<tr>
				<td>Id</td>
				<td>Imagem</td>
				<td>Titulo</td>
				<td>Texto Banner</td>
				<td>Atualizar</td>				
				<td>Deletar</td>				
			</tr>
		</thead>
	
	    <tbody>
        <?php foreach($listar as $row):?>			
			<tr>
				<td><?php echo $row['id']?></td>
				<td>
				<img src="<?php echo "../img/".$row['img']?>" alt="<?php echo $row['titulo']?>"> <!--o primeiro echo esta concatenando a pasta img para junto com a variavel img e exibindo a img e o segundo estara exibindo somente o titulo da img-->
				</td>
				<td><?php echo $row['titulo']?></td>
				<td><?php echo $row['texto']?></td>		
				<td><a href="index.php?p=banner&b=atualizar-banner&id=<?php echo $row['id']?>">Atualizar</a></td>				
				<td><a href="index.php?p=banner&b=deletar-banner&id=<?php echo $row['id']?>">Deletar</a></td>			
			</tr>			
		 <?php endforeach ?>            
    	</tbody>
</table>