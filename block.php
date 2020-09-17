<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>BLOCK</title>
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
   <h1>Faça seu Login</h1>
    <form action="block.php" method="POST">
        <input type="password" name="senha" placeholder="Digite a senha de acesso" ><br><br>
        <input type="submit" value="Acessar" class="btn-botton">
    </form>   
</body>
<?php
    
    $senha = $_POST['senha'];
    
    if($senha == "scc20") {
        header('Location: https://forms.gle/bCZDsbyyp9pUYKxi6');
    } else {
        echo  "<script>alert('Senha incorreta. Digite novamente.');</script>";
    }
    
?>
<footer></footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html>