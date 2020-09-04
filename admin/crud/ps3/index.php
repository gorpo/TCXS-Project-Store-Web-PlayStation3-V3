<!-- ████████╗ ██████╗██╗  ██╗███████╗    ██████╗ ██████╗  ██████╗      ██╗███████╗ ██████╗████████╗
     ╚══██╔══╝██╔════╝╚██╗██╔╝██╔════╝    ██╔══██╗██╔══██╗██╔═══██╗     ██║██╔════╝██╔════╝╚══██╔══╝
        ██║   ██║      ╚███╔╝ ███████╗    ██████╔╝██████╔╝██║   ██║     ██║█████╗  ██║        ██║   
        ██║   ██║      ██╔██╗ ╚════██║    ██╔═══╝ ██╔══██╗██║   ██║██   ██║██╔══╝  ██║        ██║   
        ██║   ╚██████╗██╔╝ ██╗███████║    ██║     ██║  ██║╚██████╔╝╚█████╔╝███████╗╚██████╗   ██║   
        ╚═╝    ╚═════╝╚═╝  ╚═╝╚══════╝    ╚═╝     ╚═╝  ╚═╝ ╚═════╝  ╚════╝ ╚══════╝ ╚═════╝   ╚═╝   -->
<!-- @Gorpo Orko - 2020 -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
      <meta http-equiv="refresh" content="120">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta property="og:site_name" content="TCXS Project PlayStation3"/>
      <meta property="og:title" content="TCXS Project PlayStation3"/>
      <meta property="og:url" content="https://tcxsproject.com.br/"/>
      <meta property="og:description" content="Sistema de administração TCXS Project"/>
      <meta property="og:image" content="../assets/images/logo.png"/>
      <link rel="shortcut icon" href="../assets/images/icon.png" />
      <script src="https://kit.fontawesome.com/a80232805f.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
      <title>TCXS Project STORE</title>
</head>
<body>

<div class="container">

        <!-- inicio da tabela -->




        <table>
          <caption>
            <div class="barraTopo">
              <img class="logo" src="../assets/images/logo_ps3.png"><br>
                <!-- BARRA DE NAVEGAÇÃO DOS MENUS -->
                <div class="menu-content"> <label class="open-menu-all" for="open-menu-all">
                     <input class="input-menu-all" id="open-menu-all" type="checkbox" name="menu-open" />
                        <div class="navegacao-mobile">
                          <span class="linha-menu"></span>
                          <span class="linha-menu"></span>
                          <span class="linha-menu"></span>
                        </div>
                <ul class="list-menu">
                        <li class="item-menu"> <a href="../cadastro_usuarios.php" class="link-menu">CADASTRO USUARIO</a></li>
                        <li class="item-menu"> <a href="../consulta_usuarios.php" class="link-menu">VERIFICA USUARIO</a></li>
                         <li class="item-menu"> <a href="../psp/index.php" class="link-menu">PlayStation PSP</a></li>
                         <li class="item-menu"> <a href="../ps1/index.php" class="link-menu">PlayStation1</a></li>
                         <li class="item-menu"> <a href="../ps2/index.php" class="link-menu">PlayStation2</a></li>
                         <li class="item-menu"> <a href="index.php" class="link-menu">PlayStation3</a></li>
                         <li class="item-menu"> <a href="../emuladores/index.php" class="link-menu">Emuladores</a></li>
						 <li class="item-menu"> <a href="../extras/index.php" class="link-menu">Extras</a></li>
                </ul></label></div>
            </div>
            <a href="create.php" type="btn" class="login100-form-btn m-b-16">ADICIONAR JOGO PS3</a>
          </caption>

        <!-- colunas do topo -->
          <thead>
              <tr>
                  <td scope="col">Id</td>
                  <td scope="col">TITULO</td>
                  <td scope="col">DESCRIÇÃO</td>
                  <td scope="col">CONTENT_ID</td>
                  <td scope="col">IMAGEM</td>
                  <td scope="col">DATA</td>
                  <td scope="col">LINK1</td>
                  <td scope="col">LINK2</td>
                  <td scope="col">LINK3</td>
                  <td scope="col">LINK4</td>
                  <td scope="col">LINK5</td>
                  <td scope="col">LINK6</td>
                  <td scope="col">LINK7</td>
                  <td scope="col">LINK8</td>
                  <td scope="col">LINK9</td>
                  <td scope="col">LINK10</td>
                  <td scope="col">LINK11</td>
                  <td scope="col">LINK12</td>
                  <td scope="col">LINK13</td>
                  <td scope="col">LINK14</td>
                  <td scope="col">LINK15</td>
                  <td scope="col">CRUD</td>
              </tr>
          </thead>
          <tbody>

        <!-- codigo php que chama as tabelas -->                      
        <?php
        include '../../../database.php';
        $pdo = Database::conectar();
        $sql = 'SELECT * FROM playstation_ps3 ORDER BY id DESC';

        foreach($pdo->query($sql)as $row)
        {
            echo '<tr>'; 
            echo '<td data-label="ID" scope="row">'. $row['id'] . '</td>';
            echo '<td data-label="Titulo">'. $row['titulo'] . '</td>';
            echo '<td data-label="descricao">'. $row['descricao'] . '</td>';
            echo '<td  data-label="Content ID">'. $row['content_id'] . '</td>';
            echo '<td data-label="Imagem">'. $row['imagem'] . '</td>';
            echo '<td data-label="Data">'. $row['cadastro'] . '</td>';
            echo '<td  data-label="Link 1">'. $row['link1'] . '</td>';
            echo '<td  data-label="Link 2">'. $row['link2'] . '</td>';
            echo '<td  data-label="Link 3">'. $row['link3'] . '</td>';
            echo '<td  data-label="Link 4">'. $row['link4'] . '</td>';
            echo '<td  data-label="Link 5">'. $row['link5'] . '</td>';
            echo '<td  data-label="Link 6">'. $row['link6'] . '</td>';
            echo '<td  data-label="Link 7">'. $row['link7'] . '</td>';
            echo '<td  data-label="Link 8">'. $row['link8'] . '</td>';
            echo '<td  data-label="Link 9">'. $row['link9'] . '</td>';
            echo '<td  data-label="Link 10">'. $row['link10'] . '</td>';
            echo '<td  data-label="Link 11">'. $row['link11'] . '</td>';
            echo '<td  data-label="Link 12">'. $row['link12'] . '</td>';
            echo '<td  data-label="Link 13">'. $row['link13'] . '</td>';
            echo '<td  data-label="Link 14">'. $row['link14'] . '</td>';
            echo '<td  data-label="Link 15">'. $row['link15'] . '</td>';
            echo '<td  data-label="crud">';
            echo '<a class="botaoIcones" href="read.php?id='.$row['id'].'"><i class="fas fa-info" aria-hidden="true"></i></a>';
            echo ' ';
            echo '<a class="botaoIcones" href="update.php?id='.$row['id'].'"><i class="fas fa-pencil-square-o" aria-hidden="true" ></i></a>';
            echo ' ';
            echo '<a  class="botaoIcones" href="delete.php?id='.$row['id'].'"><i class="fas fa-trash" aria-hidden="true"></i></a>';
            echo '</td>';
            echo '</tr>';
        }
        database::desconectar();
        ?>



                    </tbody>
                </table>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>
