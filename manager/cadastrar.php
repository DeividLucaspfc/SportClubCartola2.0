<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <a href="https://chat.whatsapp.com/KNNjdigVXGo62ILwUQ1fH9"><img src="img/grupo.png" alt="banner" style=""></a>
    <a href="https://docs.google.com/uc?export=download&id=16wpUvuVJt597cao3PssobAXxtv4JiG3Y"><button
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
    
  <div class="corpo_form-cad" >
        <h1>Cadastre-se</h1>
        <form method="POST" action="processcad.php" class="cadastro" enctype="multipart/form-data">
            <input type="text" name="nome" maxlength="40" placeholder="Nome e Sobrenome" required><br><br>
            <input type="text" name="telefone" maxlength="30" placeholder="Seu telefone com DDD" required><br><br>
            <input type="email" name="email" maxlength="40" placeholder="Seu melhor E-mail" required><br><br>
            <input type="password" name="senha" id="senha" maxlength="20" placeholder="Insira sua senha" required><br><br>
            <input type="password" name="confsenha" id="confsenha" maxlength="20" placeholder="Confirmar" onmouseout="validarSenha()" required><br><br>
            <input type="text" name="time" maxlength="30" placeholder="Nome do seu time" required><br><br>
            <h3 class="img_up">Envie a logo que será usada para seu time </h3>
            <h3 class="img_up">(dê preferência a imagem sem fundo (png):</h3>
            <input name="arquivo" type="file" /><br><br>
            <input type="submit" value="Cadastrar"><br>
            
        </form>
        </div>
            <script>
                function validarSenha(){
                   NovaSenha = document.getElementById('senha').value;
                   CNovaSenha = document.getElementById('confsenha').value;
                   if (NovaSenha != CNovaSenha) {
                      alert("Senha e Confirmação não conferem!\nFavor digitar senha iguais!");
                   }
                }
                 function aviso() {
                    alert ("Baixando projeto em PDF");
                }
                
            </script>
    
</body>
<footer></footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html>

