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
        <li><a href="index.php">Home</a></li>
        <li><a href="competicoes/sccvip.php">SCCvip</a></li>
        <li><a href="manager/4-3-3.php">Manager</a></li>
        <li><a href="hall.php">Gramado da fama</a></li>
        <li><a href="admins.php">Quem somos</a></li>
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
    
    