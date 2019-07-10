<?php
    require_once("class/Contato.php");
    $contato = new Contato();
    $listar = $contato->Listar();
?>
<h2>Listar Contato</h2>

<table class="table" border="1" cellpadding="10" cellspacing="5">

    <caption>Dados de Contato</caption>

    <thead>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Mensagem</td>
        </tr>
    </thead>

    <tbody>
        <?php
            foreach($listar as $row){

                echo "<tr>";
				
                    foreach($row as $key => $value){
                        echo "<td>" .$value. "</td>";
                    }
                echo "</tr>";
            }
        ?>
    </tbody>

    <tfoot>
    </tfoot>

</table>