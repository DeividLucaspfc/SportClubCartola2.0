<?php

require_once ('conexao.php');

$consulta = "SELECT * FROM escalacoes";
$connect = $conn->query($consulta) or die ($conn->error);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oculto</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Formação</td>
            <td>Técnico</td>
            <td>Time</td>
            <td>Jogador 1</td>
            <td>Jogador 2</td>
            <td>Jogador 3</td>
            <td>Jogador 4</td>
            <td>Jogador 5</td>
            <td>Jogador 6</td>
            <td>Jogador 7</td>
            <td>Jogador 8</td>
            <td>Jogador 9</td>
            <td>Jogador 10</td>
            <td>Jogador 11</td>
            <td>Reserva 1</td>
            <td>Reserva 2</td>
            <td>Reserva 3</td>
            <td>Reserva 4</td>
            <td>Reserva 5</td> 
            <td>Edição</td>
            
        </tr>
        <?php while($dado = $connect->fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["id"] ?></td>
            <td><?php echo $dado["formacao"] ?></td>
            <td><?php echo $dado["tecnico"] ?></td>
            <td><?php echo $dado["timef"] ?></td>
            <td><?php echo $dado["jog1"] ?></td>
            <td><?php echo $dado["jog2"] ?></td>
            <td><?php echo $dado["jog3"] ?></td>
            <td><?php echo $dado["jog4"] ?></td>
            <td><?php echo $dado["jog5"] ?></td>
            <td><?php echo $dado["jog6"] ?></td>
            <td><?php echo $dado["jog7"] ?></td>
            <td><?php echo $dado["jog8"] ?></td>
            <td><?php echo $dado["jog9"] ?></td>
            <td><?php echo $dado["jog10"] ?></td>
            <td><?php echo $dado["jog11"] ?></td>
            <td><?php echo $dado["res1"] ?></td>
            <td><?php echo $dado["res2"] ?></td>
            <td><?php echo $dado["res3"] ?></td>
            <td><?php echo $dado["res4"] ?></td>
            <td><?php echo $dado["res5"] ?></td>
            <td><?php echo $dado["created"] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>