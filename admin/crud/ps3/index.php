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
      <meta property="og:image" content="../../../assets/images/logo.png"/>
      <link rel="shortcut icon" href="../../../assets/images/icon.png" />
      <script src="https://kit.fontawesome.com/a80232805f.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css" />
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
              <img class="logo" src="../../../assets/images/logo_ps3.png"><br>
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
                        <li class="item-menu"> <a href="../infos/index.php" class="link-menu">PlayStation Infos</a></li>
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
                  <td scope="col">dl1</td> 
                  <td scope="col">dl2</td> 
                  <td scope="col">dl3</td> 
                  <td scope="col">dl4</td> 
                  <td scope="col">dl5</td> 
                  <td scope="col">dl6</td> 
                  <td scope="col">dl7</td> 
                  <td scope="col">dl8</td> 
                  <td scope="col">dl9</td> 
                  <td scope="col">dl10</td> 
                  <td scope="col">dl11</td> 
                  <td scope="col">dl12</td> 
                  <td scope="col">dl13</td> 
                  <td scope="col">dl14</td> 
                  <td scope="col">dl15</td> 
                  <td scope="col">dl16</td> 
                  <td scope="col">dl17</td> 
                  <td scope="col">dl18</td> 
                  <td scope="col">dl19</td> 
                  <td scope="col">dl20</td> 
                  <td scope="col">dl21</td> 
                  <td scope="col">dl22</td> 
                  <td scope="col">dl23</td> 
                  <td scope="col">dl24</td> 
                  <td scope="col">dl25</td> 
                  <td scope="col">dl26</td> 
                  <td scope="col">dl27</td> 
                  <td scope="col">dl28</td> 
                  <td scope="col">dl29</td> 
                  <td scope="col">dl30</td> 
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
            echo '<td data-label="Imagem">'.'<a class="linkCrud" href="../../../assets/images/ps3/'.$row['imagem'].'">'. $row['imagem'] . '</a></td>';
            echo '<td data-label="Data">'. $row['cadastro'] . '</td>';
            echo '<td  data-label="Link1">'.'<a class="linkCrud" href="'. $row['link1'] . '">'. $row['link1'] . '</a></td>'; 
echo '<td  data-label="Link2">'.'<a class="linkCrud" href="'. $row['link2'] . '">'. $row['link2'] . '</a></td>'; 
echo '<td  data-label="Link3">'.'<a class="linkCrud" href="'. $row['link3'] . '">'. $row['link3'] . '</a></td>'; 
echo '<td  data-label="Link4">'.'<a class="linkCrud" href="'. $row['link4'] . '">'. $row['link4'] . '</a></td>'; 
echo '<td  data-label="Link5">'.'<a class="linkCrud" href="'. $row['link5'] . '">'. $row['link5'] . '</a></td>'; 
echo '<td  data-label="Link6">'.'<a class="linkCrud" href="'. $row['link6'] . '">'. $row['link6'] . '</a></td>'; 
echo '<td  data-label="Link7">'.'<a class="linkCrud" href="'. $row['link7'] . '">'. $row['link7'] . '</a></td>'; 
echo '<td  data-label="Link8">'.'<a class="linkCrud" href="'. $row['link8'] . '">'. $row['link8'] . '</a></td>'; 
echo '<td  data-label="Link9">'.'<a class="linkCrud" href="'. $row['link9'] . '">'. $row['link9'] . '</a></td>'; 
echo '<td  data-label="Link10">'.'<a class="linkCrud" href="'. $row['link10'] . '">'. $row['link10'] . '</a></td>'; 
echo '<td  data-label="Link11">'.'<a class="linkCrud" href="'. $row['link11'] . '">'. $row['link11'] . '</a></td>'; 
echo '<td  data-label="Link12">'.'<a class="linkCrud" href="'. $row['link12'] . '">'. $row['link12'] . '</a></td>'; 
echo '<td  data-label="Link13">'.'<a class="linkCrud" href="'. $row['link13'] . '">'. $row['link13'] . '</a></td>'; 
echo '<td  data-label="Link14">'.'<a class="linkCrud" href="'. $row['link14'] . '">'. $row['link14'] . '</a></td>'; 
echo '<td  data-label="Link15">'.'<a class="linkCrud" href="'. $row['link15'] . '">'. $row['link15'] . '</a></td>'; 
echo '<td  data-label="Link16">'.'<a class="linkCrud" href="'. $row['link16'] . '">'. $row['link16'] . '</a></td>'; 
echo '<td  data-label="Link17">'.'<a class="linkCrud" href="'. $row['link17'] . '">'. $row['link17'] . '</a></td>'; 
echo '<td  data-label="Link18">'.'<a class="linkCrud" href="'. $row['link18'] . '">'. $row['link18'] . '</a></td>'; 
echo '<td  data-label="Link19">'.'<a class="linkCrud" href="'. $row['link19'] . '">'. $row['link19'] . '</a></td>'; 
echo '<td  data-label="Link20">'.'<a class="linkCrud" href="'. $row['link20'] . '">'. $row['link20'] . '</a></td>'; 
echo '<td  data-label="Link21">'.'<a class="linkCrud" href="'. $row['link21'] . '">'. $row['link21'] . '</a></td>'; 
echo '<td  data-label="Link22">'.'<a class="linkCrud" href="'. $row['link22'] . '">'. $row['link22'] . '</a></td>'; 
echo '<td  data-label="Link23">'.'<a class="linkCrud" href="'. $row['link23'] . '">'. $row['link23'] . '</a></td>'; 
echo '<td  data-label="Link24">'.'<a class="linkCrud" href="'. $row['link24'] . '">'. $row['link24'] . '</a></td>'; 
echo '<td  data-label="Link25">'.'<a class="linkCrud" href="'. $row['link25'] . '">'. $row['link25'] . '</a></td>'; 
echo '<td  data-label="Link26">'.'<a class="linkCrud" href="'. $row['link26'] . '">'. $row['link26'] . '</a></td>'; 
echo '<td  data-label="Link27">'.'<a class="linkCrud" href="'. $row['link27'] . '">'. $row['link27'] . '</a></td>'; 
echo '<td  data-label="Link28">'.'<a class="linkCrud" href="'. $row['link28'] . '">'. $row['link28'] . '</a></td>'; 
echo '<td  data-label="Link29">'.'<a class="linkCrud" href="'. $row['link29'] . '">'. $row['link29'] . '</a></td>'; 
echo '<td  data-label="Link30">'.'<a class="linkCrud" href="'. $row['link30'] . '">'. $row['link30'] . '</a></td>'; 
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
    <script src="../../../assets/js/bootstrap.min.js"></script>
</body>

</html>
