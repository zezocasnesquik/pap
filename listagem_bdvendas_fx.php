<!DOCTYPE html>
<html>
    <head>
        <meta />
        <title>Listagem</title>
    </head>
    <body>
         <?php
            include "config.php";
            $pesquisa = "SELECT * FROM Clientes WHERE morada LIKE '%Funchal%' ORDER BY codigo";
            $resultado = $ligacao_bd->query($pesquisa);
            $numero_registos=$resultado->num_rows;

            if ($numero_registos>0){

        ?>
            <table border="1">
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>Morada</td>
                    <td>Telefone</td>
                </tr>
    
        <?php

            while ($registo = $resultado->fetch_assoc()) {
                $codigo = $registo['codigo'];
                $nome = $registo['nome'];
                $morada = $registo['morada'];
                $telefone = $registo['telefone'];
                echo "<tr>
                    <td>$codigo</td>
                    <td>$nome</td>
                    <td>$morada</td>
                    <td>$telefone</td>
                </tr>";
            }
            } else echo "Não existe registos na base de dados!";

        ?>
        
        </table>
    </body>
</html>