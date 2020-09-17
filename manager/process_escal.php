<?php

/*
date_default_timezone_set('America/Recife');


$dia = date('d');
$hora = date('H');
$minutos = date('i');

echo "O dia de hoje é ".$dia.'<br />';
echo "São ".$hora." horas.".'<br />';
echo "e ".$minutos." minutos.".'<br />';


$dia_fechar = "21";
$hora_fechar = "18";
$min_fechar = "00";

if ($hora >= $hora_fechar){
	header("location: acompanhar.php");	
} else { 
    //Comenta tudo com mercado fechado!
    
    /*
	header("location: acompanhar.php");
	*/
   session_start();
    require_once ('conexao.php');
    
    require_once 'header.php';
     
    
    $time = $_SESSION['time']; 
    
    //TITULARES
    $formacao = $_REQUEST['formacao'];
    $time = $_SESSION['time'];
    $tecnico = $_SESSION['nome'];
    $jog1 = $_REQUEST['jog1'];
    $jog2 = $_REQUEST['jog2'];
    $jog3 = $_REQUEST['jog3'];
    $jog4 = $_REQUEST['jog4'];
    $jog5 = $_REQUEST['jog5'];
    $jog6 = $_REQUEST['jog6'];
    $jog7 = $_REQUEST['jog7'];
    $jog8 = $_REQUEST['jog8'];
    $jog9 = $_REQUEST['jog9'];
    $jog10 = $_REQUEST['jog10'];
    $jog11 = $_REQUEST['jog11'];
    //reservas
    $res1 = $_REQUEST['res1'];
    $res2 = $_REQUEST['res2'];
    $res3 = $_REQUEST['res3'];
    $res4 = $_REQUEST['res4'];
    $res5 = $_REQUEST['res5'];
    
    //Verifique se esses dados já estão no DB
    $consulta = "SELECT * FROM escalacoes WHERE timef='{$time}'";
    $connect = $conn->query($consulta) or die ($conn->error);
    $dado = $connect->fetch_array();
    
    if (isset($dado['timef'])){
    	
    	 $result_escalacao = "UPDATE `escalacoes` SET `jog1` = '$jog1', `jog2` = '$jog2', `jog3` = '$jog3', `jog4` = '$jog4', `jog5` = '$jog5', `jog6` = '$jog6', `jog7` = '$jog7', `jog8` = '$jog8', `jog9` = '$jog9', `jog10` = '$jog10', `jog11` = '$jog11', `res1` = '$res1', `res2` = '$res2', `res3` = '$res3', `res4` = '$res4', `res5` = '$res5' WHERE `escalacoes`.`timef` = '{$time}';";
    	 $resultado = mysqli_query ($conn, $result_escalacao);
    	 ?> <a href="<?php echo $formacao;?>recept.php"> Editado com sucesso! Ir para escalação!</a> <?php
    } else {
        //Jogue a escalação no DB
        $result_escalacao = "INSERT INTO escalacoes (formacao, tecnico, timef, jog1, jog2, jog3, jog4, jog5, jog6, jog7, jog8, jog9, jog10, jog11, res1, res2, res3, res4, res5) VALUES ('$formacao', '$tecnico', '$time', '$jog1', '$jog2', '$jog3', '$jog4', '$jog5', '$jog6', '$jog7', '$jog8', '$jog9', '$jog10', '$jog11', '$res1', '$res2', '$res3', '$res4', '$res5')";
        $resultado = mysqli_query ($conn, $result_escalacao);
        echo $dado['formacao'];
        ?> <a href="<?php echo $formacao;?>recept.php">Time Escalado! Ir para escalação!</a> <?php
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>4-3-3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sport Club Cartola, Desenvolvimento de Jogos e Campeonatos.">
    <meta name="keywords" content="cartola, campeonatos, manager, sites">
    <meta name="robots" content= "index, follow">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="4_3_3.css">
    <script src="direciona.js"></script>
</head>
<body>
<br><br>
<a href="sair.php" class="logout">Logout</a>
</body>
<footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html> 
