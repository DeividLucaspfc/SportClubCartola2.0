<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
    
    $url = "https://api.cartolafc.globo.com/mercado/status";
        
    $json = exec("curl -X GET ".$url);
    
    echo json_encode($json);
    
    
    /*$texto = json_decode($json);
        
    //Mostrar data e hora de fechar
    $array = explode('fechamento":{',$json); //split das planilhas
    $meio = explode('"timestamp"',$array[1]);
    $fim = explode(',',$meio[0]);
        
    $dia = substr($fim[0], -2); //right das planilhas
    $mes = substr($fim[1], -1);
    $ano = substr($fim[2], -2);
    $hora = substr($fim[3], -2);
    $minuto = substr($fim[4], -2);
        
    $times_esc = $texto->{'times_escalados'};
        
    echo "O mercado fecha dia ".$dia."/".$mes."/".$ano.'<br />';
    echo "Às ".$hora."h".$minuto.'<br />';
        
    print "Estamos na ".$texto->{'rodada_atual'}."ª Rodada". '<br />';
    if ($texto->{'status_mercado'} == 1 ){
        print "O mercado está aberto!". '<br />';
        print "Já são ".$times_esc." times escalados!".'<br />';
    } else {
        print "O mercado está fechado!". '<br />';
        print "Ao todo foram ".$times_esc." times escalados!".'<br/>';
    }*/
?>
