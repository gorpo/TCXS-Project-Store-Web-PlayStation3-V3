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
          //função para pegar so a id do link1
              if(isset(explode('/', $row['link1'])[5])){
                $link1_full = explode('/', $row['link1'])[5];
                $link1 = explode('.', $link1_full)[0];
                    }elseif (!isset(explode('/', $row['link1'])[5])) {
                      $link1 = $row['link1'];}
                      

              //função para pegar so a id do link2
              if(isset(explode('/', $row['link2'])[5])){
                $link2_full = explode('/', $row['link2'])[5];
                $link2 = explode('.', $link2_full)[0];
                    }elseif (!isset(explode('/', $row['link2'])[5])) {
                      $link2 = $row['link2'];}
                      

              //função para pegar so a id do link3
              if(isset(explode('/', $row['link3'])[5])){
                $link3_full = explode('/', $row['link3'])[5];
                $link3 = explode('.', $link3_full)[0];
                    }elseif (!isset(explode('/', $row['link3'])[5])) {
                      $link3 = $row['link3'];}
                      

              //função para pegar so a id do link4
              if(isset(explode('/', $row['link4'])[5])){
                $link4_full = explode('/', $row['link4'])[5];
                $link4 = explode('.', $link4_full)[0];
                    }elseif (!isset(explode('/', $row['link4'])[5])) {
                      $link4 = $row['link4'];}
                      

              //função para pegar so a id do link5
              if(isset(explode('/', $row['link5'])[5])){
                $link5_full = explode('/', $row['link5'])[5];
                $link5 = explode('.', $link5_full)[0];
                    }elseif (!isset(explode('/', $row['link5'])[5])) {
                      $link5 = $row['link5'];}
                      

              //função para pegar so a id do link6
              if(isset(explode('/', $row['link6'])[5])){
                $link6_full = explode('/', $row['link6'])[5];
                $link6 = explode('.', $link6_full)[0];
                    }elseif (!isset(explode('/', $row['link6'])[5])) {
                      $link6 = $row['link6'];}
                      

              //função para pegar so a id do link7
              if(isset(explode('/', $row['link7'])[5])){
                $link7_full = explode('/', $row['link7'])[5];
                $link7 = explode('.', $link7_full)[0];
                    }elseif (!isset(explode('/', $row['link7'])[5])) {
                      $link7 = $row['link7'];}
                      

              //função para pegar so a id do link8
              if(isset(explode('/', $row['link8'])[5])){
                $link8_full = explode('/', $row['link8'])[5];
                $link8 = explode('.', $link8_full)[0];
                    }elseif (!isset(explode('/', $row['link8'])[5])) {
                      $link8 = $row['link8'];}
                      

              //função para pegar so a id do link9
              if(isset(explode('/', $row['link9'])[5])){
                $link9_full = explode('/', $row['link9'])[5];
                $link9 = explode('.', $link9_full)[0];
                    }elseif (!isset(explode('/', $row['link9'])[5])) {
                      $link9 = $row['link9'];}
                      

              //função para pegar so a id do link10
              if(isset(explode('/', $row['link10'])[5])){
                $link10_full = explode('/', $row['link10'])[5];
                $link10 = explode('.', $link10_full)[0];
                    }elseif (!isset(explode('/', $row['link10'])[5])) {
                      $link10 = $row['link10'];}
                      

              //função para pegar so a id do link11
              if(isset(explode('/', $row['link11'])[5])){
                $link11_full = explode('/', $row['link11'])[5];
                $link11 = explode('.', $link11_full)[0];
                    }elseif (!isset(explode('/', $row['link11'])[5])) {
                      $link11 = $row['link11'];}
                      

              //função para pegar so a id do link12
              if(isset(explode('/', $row['link12'])[5])){
                $link12_full = explode('/', $row['link12'])[5];
                $link12 = explode('.', $link12_full)[0];
                    }elseif (!isset(explode('/', $row['link12'])[5])) {
                      $link12 = $row['link12'];}
                      

              //função para pegar so a id do link13
              if(isset(explode('/', $row['link13'])[5])){
                $link13_full = explode('/', $row['link13'])[5];
                $link13 = explode('.', $link13_full)[0];
                    }elseif (!isset(explode('/', $row['link13'])[5])) {
                      $link13 = $row['link13'];}
                      

              //função para pegar so a id do link14
              if(isset(explode('/', $row['link14'])[5])){
                $link14_full = explode('/', $row['link14'])[5];
                $link14 = explode('.', $link14_full)[0];
                    }elseif (!isset(explode('/', $row['link14'])[5])) {
                      $link14 = $row['link14'];}
                      

              //função para pegar so a id do link15
              if(isset(explode('/', $row['link15'])[5])){
                $link15_full = explode('/', $row['link15'])[5];
                $link15 = explode('.', $link15_full)[0];
                    }elseif (!isset(explode('/', $row['link15'])[5])) {
                      $link15 = $row['link15'];}
                      

              //função para pegar so a id do link16
              if(isset(explode('/', $row['link16'])[5])){
                $link16_full = explode('/', $row['link16'])[5];
                $link16 = explode('.', $link16_full)[0];
                    }elseif (!isset(explode('/', $row['link16'])[5])) {
                      $link16 = $row['link16'];}
                      

              //função para pegar so a id do link17
              if(isset(explode('/', $row['link17'])[5])){
                $link17_full = explode('/', $row['link17'])[5];
                $link17 = explode('.', $link17_full)[0];
                    }elseif (!isset(explode('/', $row['link17'])[5])) {
                      $link17 = $row['link17'];}
                      

              //função para pegar so a id do link18
              if(isset(explode('/', $row['link18'])[5])){
                $link18_full = explode('/', $row['link18'])[5];
                $link18 = explode('.', $link18_full)[0];
                    }elseif (!isset(explode('/', $row['link18'])[5])) {
                      $link18 = $row['link18'];}
                      

              //função para pegar so a id do link19
              if(isset(explode('/', $row['link19'])[5])){
                $link19_full = explode('/', $row['link19'])[5];
                $link19 = explode('.', $link19_full)[0];
                    }elseif (!isset(explode('/', $row['link19'])[5])) {
                      $link19 = $row['link19'];}
                      

              //função para pegar so a id do link20
              if(isset(explode('/', $row['link20'])[5])){
                $link20_full = explode('/', $row['link20'])[5];
                $link20 = explode('.', $link20_full)[0];
                    }elseif (!isset(explode('/', $row['link20'])[5])) {
                      $link20 = $row['link20'];}
                      

              //função para pegar so a id do link21
              if(isset(explode('/', $row['link21'])[5])){
                $link21_full = explode('/', $row['link21'])[5];
                $link21 = explode('.', $link21_full)[0];
                    }elseif (!isset(explode('/', $row['link21'])[5])) {
                      $link21 = $row['link21'];}
                      

              //função para pegar so a id do link22
              if(isset(explode('/', $row['link22'])[5])){
                $link22_full = explode('/', $row['link22'])[5];
                $link22 = explode('.', $link22_full)[0];
                    }elseif (!isset(explode('/', $row['link22'])[5])) {
                      $link22 = $row['link22'];}
                      

              //função para pegar so a id do link23
              if(isset(explode('/', $row['link23'])[5])){
                $link23_full = explode('/', $row['link23'])[5];
                $link23 = explode('.', $link23_full)[0];
                    }elseif (!isset(explode('/', $row['link23'])[5])) {
                      $link23 = $row['link23'];}
                      

              //função para pegar so a id do link24
              if(isset(explode('/', $row['link24'])[5])){
                $link24_full = explode('/', $row['link24'])[5];
                $link24 = explode('.', $link24_full)[0];
                    }elseif (!isset(explode('/', $row['link24'])[5])) {
                      $link24 = $row['link24'];}
                      

              //função para pegar so a id do link25
              if(isset(explode('/', $row['link25'])[5])){
                $link25_full = explode('/', $row['link25'])[5];
                $link25 = explode('.', $link25_full)[0];
                    }elseif (!isset(explode('/', $row['link25'])[5])) {
                      $link25 = $row['link25'];}
                      

              //função para pegar so a id do link26
              if(isset(explode('/', $row['link26'])[5])){
                $link26_full = explode('/', $row['link26'])[5];
                $link26 = explode('.', $link26_full)[0];
                    }elseif (!isset(explode('/', $row['link26'])[5])) {
                      $link26 = $row['link26'];}
                      

              //função para pegar so a id do link27
              if(isset(explode('/', $row['link27'])[5])){
                $link27_full = explode('/', $row['link27'])[5];
                $link27 = explode('.', $link27_full)[0];
                    }elseif (!isset(explode('/', $row['link27'])[5])) {
                      $link27 = $row['link27'];}
                      

              //função para pegar so a id do link28
              if(isset(explode('/', $row['link28'])[5])){
                $link28_full = explode('/', $row['link28'])[5];
                $link28 = explode('.', $link28_full)[0];
                    }elseif (!isset(explode('/', $row['link28'])[5])) {
                      $link28 = $row['link28'];}
                      

              //função para pegar so a id do link29
              if(isset(explode('/', $row['link29'])[5])){
                $link29_full = explode('/', $row['link29'])[5];
                $link29 = explode('.', $link29_full)[0];
                    }elseif (!isset(explode('/', $row['link29'])[5])) {
                      $link29 = $row['link29'];}
                      

              //função para pegar so a id do link30
              if(isset(explode('/', $row['link30'])[5])){
                $link30_full = explode('/', $row['link30'])[5];
                $link30 = explode('.', $link30_full)[0];
                    }elseif (!isset(explode('/', $row['link30'])[5])) {
                      $link30 = $row['link30'];}



            echo '<tr>'; 
            echo '<td data-label="ID" scope="row">'. $row['id'] . '</td>';
            echo '<td data-label="Titulo">'. $row['titulo'] . '</td>';
            echo '<td data-label="descricao">'. $row['descricao'] . '</td>';
            echo '<td  data-label="Content ID">'. $row['content_id'] . '</td>';
            echo '<td data-label="Imagem">'.'<a class="linkCrud" href="../../../assets/images/ps3/'.$row['imagem'].'">'. $row['imagem'] . '</a></td>';
            echo '<td data-label="Data">'. $row['cadastro'] . '</td>';
            
            

            echo '<td  data-label="Link1">'.'<a class="linkCrud" href="'. $row['link1'] . '">'. $link1 . '</a></td>';
echo '<td  data-label="Link2">'.'<a class="linkCrud" href="'. $row['link2'] . '">'. $link2 . '</a></td>';
echo '<td  data-label="Link3">'.'<a class="linkCrud" href="'. $row['link3'] . '">'. $link3 . '</a></td>';
echo '<td  data-label="Link4">'.'<a class="linkCrud" href="'. $row['link4'] . '">'. $link4 . '</a></td>';
echo '<td  data-label="Link5">'.'<a class="linkCrud" href="'. $row['link5'] . '">'. $link5 . '</a></td>';
echo '<td  data-label="Link6">'.'<a class="linkCrud" href="'. $row['link6'] . '">'. $link6 . '</a></td>';
echo '<td  data-label="Link7">'.'<a class="linkCrud" href="'. $row['link7'] . '">'. $link7 . '</a></td>';
echo '<td  data-label="Link8">'.'<a class="linkCrud" href="'. $row['link8'] . '">'. $link8 . '</a></td>';
echo '<td  data-label="Link9">'.'<a class="linkCrud" href="'. $row['link9'] . '">'. $link9 . '</a></td>';
echo '<td  data-label="Link10">'.'<a class="linkCrud" href="'. $row['link10'] . '">'. $link10 . '</a></td>';
echo '<td  data-label="Link11">'.'<a class="linkCrud" href="'. $row['link11'] . '">'. $link11 . '</a></td>';
echo '<td  data-label="Link12">'.'<a class="linkCrud" href="'. $row['link12'] . '">'. $link12 . '</a></td>';
echo '<td  data-label="Link13">'.'<a class="linkCrud" href="'. $row['link13'] . '">'. $link13 . '</a></td>';
echo '<td  data-label="Link14">'.'<a class="linkCrud" href="'. $row['link14'] . '">'. $link14 . '</a></td>';
echo '<td  data-label="Link15">'.'<a class="linkCrud" href="'. $row['link15'] . '">'. $link15 . '</a></td>';
echo '<td  data-label="Link16">'.'<a class="linkCrud" href="'. $row['link16'] . '">'. $link16 . '</a></td>';
echo '<td  data-label="Link17">'.'<a class="linkCrud" href="'. $row['link17'] . '">'. $link17 . '</a></td>';
echo '<td  data-label="Link18">'.'<a class="linkCrud" href="'. $row['link18'] . '">'. $link18 . '</a></td>';
echo '<td  data-label="Link19">'.'<a class="linkCrud" href="'. $row['link19'] . '">'. $link19 . '</a></td>';
echo '<td  data-label="Link20">'.'<a class="linkCrud" href="'. $row['link20'] . '">'. $link20 . '</a></td>';
echo '<td  data-label="Link21">'.'<a class="linkCrud" href="'. $row['link21'] . '">'. $link21 . '</a></td>';
echo '<td  data-label="Link22">'.'<a class="linkCrud" href="'. $row['link22'] . '">'. $link22 . '</a></td>';
echo '<td  data-label="Link23">'.'<a class="linkCrud" href="'. $row['link23'] . '">'. $link23 . '</a></td>';
echo '<td  data-label="Link24">'.'<a class="linkCrud" href="'. $row['link24'] . '">'. $link24 . '</a></td>';
echo '<td  data-label="Link25">'.'<a class="linkCrud" href="'. $row['link25'] . '">'. $link25 . '</a></td>';
echo '<td  data-label="Link26">'.'<a class="linkCrud" href="'. $row['link26'] . '">'. $link26 . '</a></td>';
echo '<td  data-label="Link27">'.'<a class="linkCrud" href="'. $row['link27'] . '">'. $link27 . '</a></td>';
echo '<td  data-label="Link28">'.'<a class="linkCrud" href="'. $row['link28'] . '">'. $link28 . '</a></td>';
echo '<td  data-label="Link29">'.'<a class="linkCrud" href="'. $row['link29'] . '">'. $link29 . '</a></td>';
echo '<td  data-label="Link30">'.'<a class="linkCrud" href="'. $row['link30'] . '">'. $link30 . '</a></td>';

            echo '<td  data-label="crud">';
            echo '<a class="botaoIcones" href="read.php?id='.$row['id'].'"><i class="fas fa-info" aria-hidden="true"></i></a>';
            //echo ' ';
            echo '<a class="botaoIcones" href="update.php?id='.$row['id'].'"><i class="fas fa-pencil-square-o" aria-hidden="true" ></i></a>';
            //echo ' ';
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
