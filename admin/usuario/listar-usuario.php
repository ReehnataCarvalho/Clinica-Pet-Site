<?php
    require_once("class/Usuario.php");
	$usua 	= new Usuario;
	$listar = $usua->Listar();
?>

<h2>Listar Usuarios</h2>

<table class="table" border="1" cellpadding="0" cellspacing="0">
	<caption>Dados de Usuarios | <a href="index.php?p=usuario&u=adicionar-usuario">Add - Novo</a></caption>
		<thead>
			<tr>
				<td>Foto</td>
				<td>nome do Usuário</td>
				<td>login</td>
				<td>Atualizar</td>				
				<td>Deletar</td>				
			</tr>
		</thead>
	
	    <tbody>
        <?php foreach($listar as $row):?>			
			<tr>
				<td>
				<img src="<?php echo "../img/".$row['img']?>" alt="<?php echo $row['nomeUsua']?>"> <!--o primeiro echo esta concatenando a pasta img para junto com a variavel img e exibindo a img e o segundo estara exibindo somente o titulo da img-->
				</td>
				<td><?php echo $row['nomeUsua']?></td>
				<td><?php echo $row['login']?></td>		
				<td><a href="index.php?p=usuario&u=atualizar-usuario&id=<?php echo $row['id']?>">Atualizar</a></td>				
				<td><a href="index.php?p=usuario&u=deletar-usuario&id=<?php echo $row['id']?>">Deletar</a></td>			
			</tr>			
		 <?php endforeach ?>            
    	</tbody>
</table>