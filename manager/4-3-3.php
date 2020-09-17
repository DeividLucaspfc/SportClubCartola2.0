<?php

  session_start();

  require_once ('conexao.php');
  

  if (!isset($_SESSION['nome'])){
    header("location: login.php");
  }
  else if ($_SESSION['situacao'] == "inativo"){
    header("location: inativo.php");
  } 
  
  else {
  ?> <h1 class="login"> Olá <?php echo $_SESSION['nome']; ?>! Bem vindo ao manager 2020!!! </h1>  <?php
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>4-3-3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Sport Club Cartola, Desenvolvimento de Jogos e Campeonatos.">
    <meta name="theme-color" content="#099e6e">
    <meta name="keywords" content="cartola, campeonatos, manager, sites">
    <meta name="robots" content= "index, follow">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="4_3_3.css">
    <script src="direciona.js"></script>
</head>
<body>
<?php require_once 'header.php';
  $time = $_SESSION['time'];
  //Verifique se esses dados já estão no DB
  $consulta = "SELECT * FROM escalacoes WHERE timef='{$time}'";
  $connect = $conn->query($consulta) or die ($conn->error);
  $dado = $connect->fetch_array();

  if (isset($dado['timef'])){
       ?>

    <div class="corpo_form-cad">
    <h1>TIME JÁ ESCALADO</h1>
    <form method="POST" action="process_escal.php">
      <img class="campo_escalacao" src="img/campo_escalacao.png" alt="campo">
      <div class="escalacao_completa">
        <p>
          <select name="jog1" class="jog1" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['goleiros']; ?>">
                            <?php echo $row_jogadores['goleiros']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
          
        <p>
          <select name="jog2" class="jog2" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['zagueiros']; ?>">
                            <?php echo $row_jogadores['zagueiros']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog3" class="jog3" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['zagueiros']; ?>">
                            <?php echo $row_jogadores['zagueiros']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        
        <p>
          <select name="jog4" class="jog4" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['laterais']; ?>">
                            <?php echo $row_jogadores['laterais']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog5" class="jog5" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['laterais']; ?>">
                            <?php echo $row_jogadores['laterais']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        
        <p>
          <select name="jog6" class="jog6" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['meias']; ?>">
                            <?php echo $row_jogadores['meias']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog7" class="jog7" required>
            <option value="" selected="selected" ></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['meias']; ?>">
                            <?php echo $row_jogadores['meias']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog8" class="jog8" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['meias']; ?>">
                            <?php echo $row_jogadores['meias']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog9" class="jog9" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['atacantes']; ?>">
                            <?php echo $row_jogadores['atacantes']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog10" class="jog10" required>
            <option value="" selected="selected" ></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['atacantes']; ?>">
                            <?php echo $row_jogadores['atacantes']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog11" class="jog11" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['atacantes']; ?>">
                            <?php echo $row_jogadores['atacantes']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
      </div> 
      <div class="img_banco">
        <img class="logo_time" src="imagens/<?php echo $_SESSION['imgtime']; ?>" alt="time">
        <img class="banco_reserva" src="img/banco.png" alt="reservas">
        <h1 class="nome_time"><?php echo $_SESSION['time'];?></h1>
        <h1 class="nome_tecnico"><?php echo $_SESSION['nome'];?></h1>
        <p>
          <select name="res1" class="res1" required>
              <option value="" selected="selected"></option>
              <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['goleiros']; ?>">
                            <?php echo $row_jogadores['goleiros']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="res2" class="res2" required>
              <option value="" selected="selected"></option>
              <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['zagueiros']; ?>">
                            <?php echo $row_jogadores['zagueiros']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="res3" class="res3" required>
              <option value="" selected="selected"></option>
              <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['laterais']; ?>">
                            <?php echo $row_jogadores['laterais']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="res4" class="res4" required>
              <option value="" selected="selected"></option>
              <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['meias']; ?>">
                            <?php echo $row_jogadores['meias']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="res5" class="res5" required>
              <option value="" selected="selected"></option>
              <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['atacantes']; ?>">
                            <?php echo $row_jogadores['atacantes']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <input class="btn-enviar" type="submit" value="Enviar" >
      </div>
      <p>
          <select name="formacao" class="formacao" onChange="redirectPage(this.value)" required>
              <option value="4-3-3" selected>4-3-3</option>
              <option value="4-4-2">4-4-2</option>
              <option value="3-5-2" >3-5-2</option>
          </select>
     </p>
    </form>
    </div> 
    <a href="<?php echo $dado['formacao'];?>recept.php">Ir para escalação!</a>
    <div>
        <h2>Jogos da Rodada</h2>
      <img class="rodada" src="img/rddmng.jpg" alt="jogos">
    </div>
    <?php
    } else {
      ?>
      
      <div class="corpo_form-cad">
    <h1>Escale seu time</h1>
    <form method="POST" action="process_escal.php">
      <img class="campo_escalacao" src="img/campo_escalacao.png" alt="campo">
      <div class="escalacao_completa">
         <p>
          <select name="jog1" class="jog1" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['goleiros']; ?>">
                            <?php echo $row_jogadores['goleiros']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
          
        <p>
          <select name="jog2" class="jog2" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['zagueiros']; ?>">
                            <?php echo $row_jogadores['zagueiros']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog3" class="jog3" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['zagueiros']; ?>">
                            <?php echo $row_jogadores['zagueiros']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        
        <p>
          <select name="jog4" class="jog4" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['laterais']; ?>">
                            <?php echo $row_jogadores['laterais']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog5" class="jog5" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['laterais']; ?>">
                            <?php echo $row_jogadores['laterais']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        
        <p>
          <select name="jog6" class="jog6" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['meias']; ?>">
                            <?php echo $row_jogadores['meias']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog7" class="jog7" required>
            <option value="" selected="selected" ></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['meias']; ?>">
                            <?php echo $row_jogadores['meias']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog8" class="jog8" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['meias']; ?>">
                            <?php echo $row_jogadores['meias']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog9" class="jog9" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['atacantes']; ?>">
                            <?php echo $row_jogadores['atacantes']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog10" class="jog10" required>
            <option value="" selected="selected" ></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['atacantes']; ?>">
                            <?php echo $row_jogadores['atacantes']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="jog11" class="jog11" required>
            <option value="" selected="selected"></option>
            <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['atacantes']; ?>">
                            <?php echo $row_jogadores['atacantes']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
      </div> 
      <div class="img_banco">
        <img class="logo_time" src="imagens/<?php echo $_SESSION['imgtime']; ?>" alt="time">
        <img class="banco_reserva" src="img/banco.png" alt="reservas">
        <h1 class="nome_time"><?php echo $_SESSION['time'];?></h1>
        <h1 class="nome_tecnico"><?php echo $_SESSION['nome'];?></h1>
        <p>
          <select name="res1" class="res1" required>
              <option value="" selected="selected"></option>
              <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['goleiros']; ?>">
                            <?php echo $row_jogadores['goleiros']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="res2" class="res2" required>
              <option value="" selected="selected"></option>
              <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['zagueiros']; ?>">
                            <?php echo $row_jogadores['zagueiros']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="res3" class="res3" required>
              <option value="" selected="selected"></option>
              <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['laterais']; ?>">
                            <?php echo $row_jogadores['laterais']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="res4" class="res4" required>
              <option value="" selected="selected"></option>
              <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['meias']; ?>">
                            <?php echo $row_jogadores['meias']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <p>
          <select name="res5" class="res5" required>
              <option value="" selected="selected"></option>
              <?php
                $result_jogadores = "SELECT * FROM jogadores";
                $resultado_jogadores = mysqli_query ($conn, $result_jogadores);
                while($row_jogadores = mysqli_fetch_assoc($resultado_jogadores)){?>
                    <option value="<?php echo $row_jogadores['atacantes']; ?>">
                            <?php echo $row_jogadores['atacantes']; ?>
                    </option> <?php
                }

            ?>
          </select>
        </p>
        <input class="btn-enviar" type="submit" value="Enviar" >
      </div>
      <p>
          <select name="formacao" class="formacao" onChange="redirectPage(this.value)" required>
              <option value="4-3-3" selected>4-3-3</option>
              <option value="4-4-2">4-4-2</option>
              <option value="3-5-2" >3-5-2</option>
          </select>
    </form>
    
    </div>

    <div>
        <h2>Jogos da Rodada</h2>
      <img class="rodada" src="img/rddmng.jpeg" alt="jogos">
    </div>

    <?php  } ?>

    <a href="sair.php" class="logout">Logout</a>
</body>
<footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html>