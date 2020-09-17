<?php

        $json = exec("curl -X GET ".$url);
        $texto = json_decode($json);
        
        $array = explode('"pontos":',$json); //split das planilhas
        $meio = explode(',',$array[1]);
        
        $right_total = $meio[1];
        $camp = str_replace( ":", "", $right_total);
        $totalesp = "|".str_replace('"pontos_campeonato"', "", $camp);
        $total = trim($totalesp);
        
        $right_time = $meio[20];
        $aspas = str_replace( '"nome":"', "", $right_time);
        $timeesp = "|".str_replace( '"', "", $aspas);//Substitute planilhas
        $time = trim($timeesp);
        
        $pontosesp = $meio[0];
        $pontos = "|".trim($pontosesp);
        
    /*?>
        <tr>
            <td><?php echo $time; ?></td>  
            <td><?php echo $pontos; ?></td>
            <td><?php echo $total; ?></td> 
        </tr>
        
    <?php*/ 
    
    echo $time;
    echo $pontos;
    echo $total;
    
?>