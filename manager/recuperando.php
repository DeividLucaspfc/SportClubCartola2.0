<?php 
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="4_4_2.css">
</head>
<body>

<?php require_once 'header.php';

$nome = addslashes($_POST['nome']);
$telefone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']); //addslashes evita hackers
$senha = $_POST['senha'];
$criptsenha = md5($senha);
$messege = "Ao efetuar a edição de dados, sua nova senha é: ".$senha.". Caso não tenha sido você, entre em contato imediatamente com os administradores do sccartola.com";
            
$consulta = "SELECT * FROM cadastros WHERE nome='{$nome}' and telefone='{$telefone}' and email='{$email}'";
$resultado = mysqli_query($conn, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    $dado = $resultado->fetch_array();

    $result_edit_cad = "UPDATE `cadastros` SET `senha` = '$criptsenha' WHERE `cadastros`.`email` = '{$email}';";
	$resultado = mysqli_query ($conn, $result_edit_cad);

	$to ="$email";
	$subject = "Contato - SCCartola.com";
	$header .= "MINE-VERSION:1.0/n";
    $header .= "content-type:text/html; charset=iso-8859-1/n";
    $header .= "from: $email/n";
    mail($to, $subject, $messege, $header);

	?><h1>Seus Dados foram editados com sucesso!</h1><?php
	?><h2>Enviamos um email para você, favor <br> verificar também a caixa de spam e/ou lixo eletrônico!</h2><?php


} else {

	?><h1>E-mail não encontrado no banco de dados!</h1><br><br>
	<a href="cadastrar.php" class="loginhome">Ainda não é inscrito? <strong>Cadastre-se</strong> </a> <br> <br><?php

}

?>

</body>
<footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html>