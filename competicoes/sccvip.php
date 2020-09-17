
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SCCvip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sport Club Cartola, Desenvolvimento de Jogos e Campeonatos.">
    <meta name="theme-color" content="#099e6e">
    <meta name="keywords" content="cartola, campeonatos, manager, sites">
    <meta name="robots" content= "index, follow">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../manager/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../manager/4_3_3.css">
    <script src="direciona.js"></script>
</head>
<body>

<?php require_once 'header.php';?>

<a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vQqr_9yK8LAHfswc8UH9iFX8gnjvuC0wjKAh3303m4gsXljTB6lPMRAn1faq5FhB6CZiDAEnir8zG2t/pub?output=pdf"><button
    onclick="aviso()"
    style="background: linear-gradient(to right, #099e6e, #02583d);
    text-align: center;
    width: 200px;
    height: 70px;
    border-radius: 5px;
    position: relative;
    left: 25%;
    color: orange;
    font-size: 25pt;">Projeto</button></a> <br> <br>
    
<h2> Aguarde o carregamento do iframe abaixo... Geralmente demora cerca de um minuto.</h2> <br>
<iframe 
    src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRXib6lABk7byGmJFl-N1OzM35coUl-B36EAhN5zpxMrRo7a8IG6Wh6-lqGnOHvdyjFWiNzdNTzsbg0/pubhtml" 
    style="height: 820px;
    width: 95%;
    position: relative;
    left: 10px;
    #footer {
    display: none;}"
    frameBorder="0"
    >
    
</iframe>

<img class="calendario" style="margin: auto;" src="img/manager/sccalendario.png" alt="jogos">

<script>
    function aviso() {
        alert ("Baixando projeto em PDF");
    }
</script>
</body>
<footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html>