/*$.get( "busca.php", function( data ) {
  $(".container").html(data);
  
});
*/
$.get( "busca.php", function( data ) {
    var dados = data;
    //tratamento do ID
    var ini = dados.indexOf('rodada_atual');
    var fim = dados.indexOf('url_escudo_svg');
    var corta = dados.slice(ini, fim);
    var separa = corta.split(",");
      
    $(".container").append(separa[24] + "<br>"); 
    $(".container").append(separa[18] + "<br>");
    $(".container").append(separa[25] + "<br>");
    $(".container").append(separa[4] + "<br>");
    $(".container").append(separa[5] + "<br>");
      
});