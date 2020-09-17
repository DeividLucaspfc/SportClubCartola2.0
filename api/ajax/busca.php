<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-type: application/json');
    
    $url = "https://api.cartolafc.globo.com/time/id/899880";
    $json = exec("curl -X GET ".$url);
    echo json_encode($json);
    
    
    
    
    
?>