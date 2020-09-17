
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Acompanhar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sport Club Cartola, Desenvolvimento de Jogos e Campeonatos.">
    <meta name="theme-color" content="#099e6e">
    <meta name="keywords" content="cartola, campeonatos, manager, sites">
    <meta name="robots" content= "index, follow">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="4_3_3.css">
    <script src="direciona.js"></script>
</head>
<body>

<?php require_once 'header.php';?>

<a href="sccvip.php"><button
    style="background: linear-gradient(to right, #099e6e, #02583d);
    text-align: center;
    width: 200px;
    height: 70px;
    border-radius: 5px;
    position: relative;
    left: 25%;
    color: orange;
    font-size: 25pt;">Seja VIP</button></a> <br> <br>

<a href="mng_estaduais.php"><button
    style="background: linear-gradient(to right, #099e6e, #02583d);
    text-align: center;
    width: 200px;
    height: 70px;
    border-radius: 5px;
    position: relative;
    left: 25%;
    color: orange;
    font-size: 25pt;">Tabela</button></a> <br> <br>
    
<h2> Aguarde o carregamento do iframe abaixo... Geralmente demora cerca de um minuto.</h2> <br>
<iframe 
    src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSoTNTyeT6PIyY_ge-TlEp8fg4Sikpa3LlCjwtgB4OumcIksKqHFHtV5Pbbo4H-A9MxFpMqQ_fhA6KH/pubhtml" 
    style="height: 820px;
    width: 95%;
    position: relative;
    left: 10px;"
    frameBorder="0">
    
</iframe>

</body>
<footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html>