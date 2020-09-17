<?php 
session_start();
require_once 'conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperação de Login</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="4_3_3.css">
</head>
<body>
<?php require_once 'header.php';?>

<h1> Vamos iniciar o processo de recuperação de Login! </h1>  
<h2> Preencha as informações abaixo com os dados que se pede. </h2> 

<div class="corpo_form">
    <form method="POST" action="recuperando.php">
        <input type="text" name="nome" maxlength="40" placeholder="Nome e Sobrenome" required><br><br>
            <input type="text" name="telefone" maxlength="30" placeholder="Seu telefone" required><br><br>
            <input type="email" name="email" maxlength="40" placeholder="E-mail Cadastrado" required><br><br>
            <input type="text" name="senha" id="senha" maxlength="20" placeholder="Insira sua nova senha" required><br><br>
            <input type="text" name="confsenha" id="confsenha" maxlength="20" placeholder="Confirmar Senha" onmouseout="validarSenha()" required><br><br>
            <input type="submit" value="Editar Dados"><br>
    </form>
   </div>

<script>
  function validarSenha(){
    NovaSenha = document.getElementById('senha').value;
    CNovaSenha = document.getElementById('confsenha').value;
    if (NovaSenha != CNovaSenha) {
        alert("Senha e Confirmação não conferem!\nFavor digitar senha iguais!");
  }
</script>
    
</body>
<footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html>