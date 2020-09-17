<?php

  session_start();

  require_once ('conexao.php');
  

  if (!isset($_SESSION['nome'])){
    header("location: login.php");
  }
  else if ($_SESSION['situacao'] == "inativo"){
    header("location: inativo.php");
  } 
  
  else {
  ?> <h1 class="login"> Olá <?php echo $_SESSION['nome']; ?>! Bem vindo ao manager 2020!!! </h1>  <?php
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Escalação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sport Club Cartola, Desenvolvimento de Jogos e Campeonatos.">
    <meta name="theme-color" content="#099e6e">
    <meta name="keywords" content="cartola, campeonatos, manager, sites">
    <meta name="robots" content= "index, follow">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="4_4_2.css">
</head>
<body>
    
<?php require_once 'header.php';

$time = $_SESSION['time'];

$consulta = "SELECT * FROM escalacoes WHERE timef='{$time}'";
$connect = $conn->query($consulta) or die ($conn->error);
$dado = $connect->fetch_array();

if (isset($dado["id"])){
    ?><!-- Mostra dados do DB -->
    <div class="escalado_completo">
        <div class="esc1">
            <?php echo $dado['jog1']; ?>
        </div>
        <div class="esc2">
            <?php echo $dado['jog2']; ?>
        </div>
        <div class="esc3">
            <?php echo $dado['jog3']; ?>
        </div>
        <div class="esc4">
            <?php echo $dado['jog4']; ?>
        </div>
        <div class="esc5">
            <?php echo $dado['jog5']; ?>
        </div>
        <div class="esc6">
            <?php echo $dado['jog6']; ?>
        </div>
        <div class="esc7">
            <?php echo $dado['jog7']; ?>
        </div>
        <div class="esc8">
            <?php echo $dado['jog8']; ?>
        </div>
        <div class="esc9">
            <?php echo $dado['jog9']; ?>
        </div>
        <div class="esc10">
            <?php echo $dado['jog10']; ?>
        </div>
        <div class="esc11">
            <?php echo $dado['jog11']; ?>
        </div>
        <div class="escr1">
            <?php echo $dado['res1']; ?>
        </div>
        <div class="escr2">
            <?php echo $dado['res2']; ?>
        </div>
        <div class="escr3">
            <?php echo $dado['res3']; ?>
        </div>
        <div class="escr4">
            <?php echo $dado['res4']; ?>
        </div>
        <div class="escr5">
            <?php echo $dado['res5']; ?>
        </div>
    </div>
<?php } ?>
<img class="campo_escalacao" src="img/campo_escalacao.png" alt="campo">
  
<div class="img_banco">
        <img class="logo_time" src="imagens/<?php echo $_SESSION['imgtime']; ?>" alt="time">
        <img class="banco_reserva" src="img/banco.png" alt="reservas">
        <h1 class="nome_time"><?php echo $_SESSION['time'];?></h1>
        <h1 class="nome_tecnico"><?php echo $_SESSION['nome'];?></h1>
</div>      
<h1> Sucesso na Mitagem!</h1>
<a href="4-3-3.php">Escalar novamente</a></br>
<a href="sair.php">Logout</a>
</body>
<footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html>