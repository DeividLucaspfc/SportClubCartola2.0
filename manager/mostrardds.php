<?php

require_once ('conexao.php');

$consulta = "SELECT * FROM rodadas";
$connect = $conn->query($consulta) or die ($conn->error);

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oculto</title>
</head>
<body>
    
    <table>
        <tr>
            
            <td>SQL</td>
            
            
            
        </tr>
        <?php while($dado = $connect->fetch_array()){ ?>
        <tr>
            
            <td><?php $rdd1 = $dado["total"] - $dado["7"] - $dado["6"] - $dado["5"] - $dado["4"] - $dado["3"] - $dado["2"]; 
            
            
            $antes = "Pontos  ".$rdd1;
            $meio = "  Time  ". $dado["time"];
            echo $antes . $meio;

            ?></td>
            
            
        </tr>
        <?php } ?>
    </table>
</body>
</html>