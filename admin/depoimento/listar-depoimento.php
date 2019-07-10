<?php
    require_once("class/Depoimento.php");
	$depo 	= new Depoimento;
	$listar = $depo->Listar();
?>

<h2>Listar Depoimento</h2>

<table class="table" border="1" cellpadding="0" cellspacing="0">
	<caption>Dados de Depoimento | <a href="index.php?p=depoimento&d=adicionar-depoimento">Add - Novo</a></caption>
		<thead>
			<tr>
				<td>Id</td>
				<td>Texto Depoimento</td>
				<td>Nome</td>
				<td>Atualizar</td>				
				<td>Deletar</td>				
			</tr>
		</thead>
	
	    <tbody>
        <?php foreach($listar as $row):?>			
			<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['texto']?></td>
				<td><?php echo $row['nomeCli']?></td>
				<td><a href="index.php?p=depoimento&d=atualizar-depoimento&id=<?php echo $row['id']?>">Atualizar</a></td>			
				<td><a href="index.php?p=depoimento&d=deletar-depoimento&id=<?php echo $row['id']?>">Deletar</a></td>
			</tr>			
		 <?php endforeach ?>            
    	</tbody>
</table>

	