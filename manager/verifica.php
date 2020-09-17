<?php

require_once ('conexao.php');

$email = addslashes($_POST['email']); //addslashes evita hackers
$senha = $_POST['senha'];
$criptsenha = md5($senha);

            
$consulta = "SELECT * FROM cadastros WHERE email='{$email}' and senha='{$criptsenha}'";
$resultado = mysqli_query($conn, $consulta);



if (mysqli_num_rows($resultado) > 0) {
    $dado = $resultado->fetch_array();
    session_start();
    
    $_SESSION['id'] = $dado['id'];
    $_SESSION['nome'] = $dado['nome'];
    $_SESSION['time'] = $dado['timef'];
    $_SESSION['imgtime'] = $dado['imgtime'];
    $_SESSION['situacao'] = $dado['situacao'];
    header("location: 4-3-3.php");

} else {
    ?> <div class= "text"> <?php
    echo "EMAIL E SENHA NÃO CORRESPONDEM!";?>
    <a href="login.php">Voltar</a>
    </div><?php
    }   
?>