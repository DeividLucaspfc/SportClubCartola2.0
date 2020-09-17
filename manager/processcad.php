<?php 


require_once ('conexao.php');

$nome = $_REQUEST['nome'];
$telefone = $_REQUEST['telefone'];
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];
$criptsenha = md5($senha);
$time = $_REQUEST['time'];

$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
$imgtime = $_FILES['arquivo']['name'];

$destino = 'imagens/' . $imgtime;
 
move_uploaded_file($arquivo_tmp, $destino);

$messege = "Seja bem vindo ao SCCartola! Aqui você joga cartola o ano inteiro!"."\r\n"."Marque essa mensagem como não sendo lixo eletrônico para receber informações vindas do site!";

$consulta = "SELECT id FROM cadastros WHERE email='{$email}'";
$connect = $conn->query($consulta) or die ($conn->error);
$dado = $connect->fetch_array();

if (isset($dado["id"])){
    ?> <div class= "text"> <?php
    echo "JÁ EXISTE CADASTRO COM ESSE EMAIL!";?>
    <a href="login.php">EFETUE SEU LOGIN</a> </div><?php
} else {
    $result_cadastro = "INSERT INTO cadastros (nome, telefone, email, senha, timef, imgtime, situacao) VALUES ('$nome', '$telefone', '$email', '$criptsenha', '$time', '$imgtime', 'ativo')";
    $resultado = mysqli_query ($conn, $result_cadastro);
    ?> <div class= "text"> <?php
    
    $to ="$email";
	$subject = "Cadastro - SCCartola.com";
	$header .= "MINE-VERSION:1.0/n";
    $header .= "content-type:text/html; charset=iso-8859-1/n";
    $header .= "from: $email/n";
    mail($to, $subject, $messege, $header);
    
    echo "Cadastro realizado com sucesso! Verifique em seu email, a caixa de spam e/ou lixo eletrônico. Marque o email como não sendo spam para receber informações importantes do SCCartola.com.";?>
    <a href="login.php">EFETUE SEU LOGIN</a></div><?php
    
    
}

