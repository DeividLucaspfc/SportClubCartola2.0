
<?php 

date_default_timezone_set('America/Recife');


$dia = date('d');
$hora = date('H');
$minutos = date('i');
$finalmin = substr($minutos, -1);

echo "O dia de hoje é ".$dia.'<br />';
echo "São ".$hora." horas.".'<br />';
echo "e ".$finalmin." minutos.".'<br />';


if($finalmin == 5){
    
    $result_att = "UPDATE `rodadas` SET `1` = '20.5' WHERE `rodadas`.`time` = 'First Place FC'";	 
    $resultado = mysqli_query ($conn, $result_att);
};

require_once ('../manager/conexao.php');

//Verificar mercado
$url = "https://api.cartolafc.globo.com/mercado/status";
$json = exec("curl -X GET ".$url);
$texto = json_decode($json);
    
//Verificar se já foi att
$verifica = "First Place FC";


if ($texto->{'status_mercado'} == 1 ){
            $rdd = $texto->{'rodada_atual'}-1;
            $rodada = $rdd.'</br>';
            echo "SQL da rodada ".$rodada.'</br>';
        } else {
            $rdd = $texto->{'rodada_atual'};
            echo "Parciais da rodada ".$rdd.'</br>';
        }



$parcial = $_REQUEST['parcial']."|FIM|FIM|FIM";

$org = explode("|", $parcial);

$count1 = 1;
$count2 = 2;
$count3 = 3;

$consulta = "SELECT id FROM rodadas WHERE time = '{$verifica}'";
$connect = $conn->query($consulta) or die ($conn->error);
$dado = $connect->fetch_array();


if (isset($dado["id"])){
    
    while ($org[$count1] != 'FIM'){ 
        
        $result_att = "UPDATE `rodadas` SET `8` = '$org[$count2]', `total` = '$org[$count3]' WHERE `rodadas`.`time` = '$org[$count1]'";	 
        $resultado = mysqli_query ($conn, $result_att);
        
    $count1 = $count1 + 3;
    $count2 = $count2 + 3;
    $count3 = $count3 + 3;
    }
    echo "Rodada ".$rdd." atualizada com sucesso".'</br>';

    
} else {
        
    while ($org[$count1] != 'FIM'){
    
    echo "('$org[$count1]', '$org[$count2]', '$org[$count3]')";

    $result_att = "INSERT INTO `rodadas` (`time`, `{$rdd}`, `total`) 
    VALUES ('$org[$count1]', '$org[$count2]', '$org[$count3]')";
    $resultado = mysqli_query ($conn, $result_att);
    ?> <div class= "text"> <?php
    
    $count1 = $count1 + 3;
    $count2 = $count2 + 3;
    $count3 = $count3 + 3;
    }
    echo "<script language=javascript>alert( 'Rodada atualizada com sucesso!' );</script>";
}

?>
