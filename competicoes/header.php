<header class="cabecalho">
    <a href="index.php" class="logo"></a>
    <h4 style="color: white;
    font-size: 11pt;
    text-align: center;
    position: absolute;
    left: 30%;">SEJA BEM VINDO AO SCC!</h4>
    <h5 style="color: white;
    font-size: 9pt;
    text-align: center;
    position: absolute;
    left: 26%;
    color: orange;
    margin-top: 15px;
    ">Aqui você joga cartola o ano inteiro!</h5>
    <button class="btn-menu">&#10868;</button>
    <nav class="menu">
      <a class="btn-close">&#10799;</a>
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="ranks.php">RANKs</a></li>
        <li><a href="series.php">Séries</a></li>
        <li><a href="bbc.php">BBC</a></li>
        <li><a href="pentagonos.php">Pentágonos</a></li>
        
        <li><a href="poupanscc.php">PoupanSCC</a></li>
    </ul>
    </nav>
  </header>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script>
    $(".btn-menu").click(function(){
      $(".menu").show();
    });
    $(".btn-close").click(function(){
      $(".menu").hide();
    });
  </script>
    
    