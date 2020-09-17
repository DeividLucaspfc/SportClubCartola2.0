<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sport Club Cartola, Desenvolvimento de Jogos e Campeonatos.">
    <meta name="theme-color" content="#099e6e">
    <meta name="keywords" content="cartola, campeonatos, manager, sites">
    <meta name="robots" content= "index, follow">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="manager/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="manager/4_3_3.css">
</head>
<body>
    <?php require_once 'header.php'; ?>
    
    <div id="status"
    style="color: #fff;
    font-size: 14pt;
    text-align: center; 
    margin: auto;">
    
    <?php
    
        $url = "https://api.cartolafc.globo.com/mercado/status";
        
        $json = exec("curl -X GET ".$url);
        $texto = json_decode($json);
        
        //Mostrar data e hora de fechar
        $array = explode('fechamento":{',$json); //split das planilhas
        $meio = explode('"timestamp"',$array[1]);
        $fim = explode(',',$meio[0]);
        
        $dia = substr($fim[0], -2); //right das planilhas
        $mes = substr($fim[1], -1);
        $ano = substr($fim[2], -2);
        $hora = substr($fim[3], -2);
        $minuto = substr($fim[4], -2);
        
        if ($texto->{'status_mercado'} == 1 ){
            echo "Mercado aberto até ".$dia."/".$mes."/".$ano." às ".$hora."h".$minuto.'<br />';
            echo "Já são ".$texto->{'times_escalados'}." times escalados!".'<br />';
        } else {
            print "MERCADO FECHADO!". '<br />';
            print "Ao todo foram ".$texto->{'times_escalados'}." times escalados!".'<br/>';
        }
    ?></div>
    
  <h2>Notícia de última hora: <br></h2>
   <h3>
   <?php
      //URL DO SITE
      $url = 'https://joga10news.com/';
      
      //PEGAR CONTEUDO
      $dadosSite = file_get_contents($url);
      
      $var1 = explode('<div class="elementor-post__text">',$dadosSite);
      $var2 = explode("</p>",$var1[1]);
      
      
      echo $var2[0];
  
  
 ?> </h3> <br> <br> <br>
 
 
 
  <img src="manager/img/banner.jpg" alt="banner" style=""> <br> <br>
  <a href="manager/login.php" class="loginhome">Efetue login para acesso restrito!</a> <br> <br>
  <a href="https://play.google.com/store/apps/details?id=appinventor.ai_centraldaliga.MANAGER_SCC" id="app">  Faça download do app SCC clicando AQUI  </a> <br> <br> <br> <br>
  
</body>
<footer></footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html>