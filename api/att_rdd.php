<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sport Club Cartola, Desenvolvimento de Jogos e Campeonatos.">
    <meta name="theme-color" content="#099e6e">
    <meta name="keywords" content="cartola, campeonatos, manager, sites">
    <meta name="robots" content= "index, follow">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../manager/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../manager/4_3_3.css">
    
</head>
<body>
  <?php require_once '../header.php';?>
  
    
    
  <div class="form_att" style="position: relative; text-align: center;">
        <h1>Cadastre-se</h1>
        <form method="POST" action="processrdd.php" class="atualizar" enctype="multipart/form-data">
            <input type="text" name="rodada" maxlength="2" value="Rodada a ser atualizada" style="text-align: center;" required><br><br>
            
            <input type="textarea" name="parcial" id="parcial" value="Colar valores aqui" required style="width: 60%; height: 650px; text-align: center;"><br><br>
            
            <input type="submit" value="Atualizar" style="color: white;  text-align: center; background: linear-gradient(to right, #006e81, #012e36); border-radius: 2px; width: 95px;"><br>
            
        </form>
        </div>
            
    
</body>
<footer></footer>
   <?php
   require_once '../footer.php';
   ?> 
</footer>
</html>

