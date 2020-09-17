<?php 
require_once 'conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <meta name="theme-color" content="#099e6e">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="4_3_3.css">
    <!-- lib de icons -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>
<body>
<?php require_once 'header.php';?>

    <div class="corpo_form">
    <h1>Faça seu Login</h1>
    <form method="POST" action="verifica.php">
        <input type="email" name="email" placeholder="Usuário" required><br><br>
        <input type="password" id="senha" name="senha" placeholder="Insira sua senha" required>
        <span class="lnr lnr-eye" style="color: orange;"></span><br><br>
        <input type="submit" value="Acessar" class="btn-botton">
        <br><br>
        <a href="cadastrar.php" class="loginhome">Ainda não é inscrito? <strong>Cadastre-se</strong> </a> <br> <br>
        <a href="recuperar.php" class="loginhome">Esqueceu a senha?</a>
    </form>
   </div>
   <script>
    var btn = document.querySelector('.lnr-eye');
        btn.addEventListener('click', function() {
            var input = document.querySelector('#senha');
            if(input.getAttribute('type') == 'password') {
                input.setAttribute('type', 'text');
            } else {
                input.setAttribute('type', 'password');
            }
        });
   </script>
</body>
<footer>
    <?php
        require_once 'footer.php';
    ?> 
</footer>
</html>