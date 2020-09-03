<!-- ████████╗ ██████╗██╗  ██╗███████╗    ██████╗ ██████╗  ██████╗      ██╗███████╗ ██████╗████████╗
     ╚══██╔══╝██╔════╝╚██╗██╔╝██╔════╝    ██╔══██╗██╔══██╗██╔═══██╗     ██║██╔════╝██╔════╝╚══██╔══╝
        ██║   ██║      ╚███╔╝ ███████╗    ██████╔╝██████╔╝██║   ██║     ██║█████╗  ██║        ██║   
        ██║   ██║      ██╔██╗ ╚════██║    ██╔═══╝ ██╔══██╗██║   ██║██   ██║██╔══╝  ██║        ██║   
        ██║   ╚██████╗██╔╝ ██╗███████║    ██║     ██║  ██║╚██████╔╝╚█████╔╝███████╗╚██████╗   ██║   
        ╚═╝    ╚═════╝╚═╝  ╚═╝╚══════╝    ╚═╝     ╚═╝  ╚═╝ ╚═════╝  ╚════╝ ╚══════╝ ╚═════╝   ╚═╝   -->
<!-- @Gorpo Orko - 2020 -->

<?php
require '../../../database.php';
//Acompanha os erros de validação
//id titulo descricao content_id imagem_db imagem link
// Processar so quando tenha uma chamada post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tituloErro = null;
    $descricaoErro = null;
    $content_idErro = null;
    $imagemErro = null;
    $linkErro = null;

    if (!empty($_POST)) {
        $validacao = True;
        $novoUsuario = False;
        if (!empty($_POST['titulo'])) {
            $titulo = $_POST['titulo'];
        } else {
            $tituloErro = 'Por favor digite o seu titulo!';
            $validacao = False;
        }


        if (!empty($_POST['descricao'])) {
            $descricao = $_POST['descricao'];
        } else {
            $descricaoErro = 'Por favor digite a descricao!';
            $validacao = False;
        }


        if (!empty($_POST['content_id'])) {
            $content_id = $_POST['content_id'];
        } else {
            $content_idErro = 'Por favor digite o número do content_id!';
            $validacao = False;
        }


        if (!empty($_POST['imagem'])) {
            $imagem = $_POST['imagem'];
        } else {
            $imagemErro = 'Por favor digite o imagem!';
            $validacao = False;
        }


       
        if (!empty($_POST['link'])) {
            $link = $_POST['link'];
        } else {
            $linkErro = 'Por favor digite link!';
            $validacao = False;
        }



    }

//Inserindo no database:
    if ($validacao) {
        $pdo = Database::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO playstation_ps2 (titulo, descricao, content_id, imagem,cadastro, link) VALUES(?,?,?,?,NOW(),? )";
        $q = $pdo->prepare($sql);
        $q->execute(array($titulo, $descricao, $content_id, $imagem, $link));
        database::desconectar();
        header("Location: index.php");
    }
}
?>



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
      <title>TCXS Project | ADD PS2 GAME</title>
</head>
<body>
<div class="container">

<!-- ============= MENUS PARA PC E CELULAR ======== --->
    <caption>
            <div class="barraTopo">
              <img class="logo" src="../assets/images/logo_ps2.png"><br>
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
                         <li class="item-menu"> <a href="index.php" class="link-menu">PlayStation2</a></li>
                         <li class="item-menu"> <a href="../ps3/index.php" class="link-menu">PlayStation3</a></li>
                         <li class="item-menu"> <a href="../emuladores/index.php" class="link-menu">Emuladores</a></li>
                </ul></label></div>
            </div>
          </caption>



    

<div class="barraBase">
  <h3 class="tituloRed"> Cadastrar PlayStation PS2 na Database </h3>
        <form class="form-horizontal" action="create.php" method="post"  autocomplete="off">
           <!-- <h3 class="tituloRed"> Adicionar Jogo PSP </h3> -->


          <!-- =====   TITULO ======   -->
          <div class="wrap-input100 validate-input m-b-16" >
            <div class="control-group  <?php echo !empty($tituloErro) ? 'error ' : ''; ?>">
            <label class="titulo">Titulo PS2</label>
             <div class="controls">
            <input class="input100" type="text" name="titulo" type="text" placeholder="Insira o titulo do jogo"
                                   value="<?php echo !empty($titulo) ? $titulo : ''; ?>">
                                   <?php if (!empty($tituloErro)): ?>
                                <span class="text-danger"><?php echo $tituloErro; ?></span>
                            <?php endif; ?>
            <span class="focus-input100"></span>
            </span>
          </div></div></div>

          <!-- =====   ~descricao ======   -->
          <div class="wrap-input100 validate-input m-b-16" >
             <div class="control-group <?php echo !empty($descricaoErro) ? 'error ' : ''; ?>">
                        <label class="titulo">descricao PS2</label>
                        <div class="controls">
                            <input class="input100" name="descricao" type="text" placeholder="Insira a descricao do jogo."
                                   value="<?php echo !empty($descricao) ? $descricao : ''; ?>">
                            <?php if (!empty($imagem_dbErro)): ?>
                                <span class="text-danger"><?php echo $descricaoErro; ?></span>
                            <?php endif; ?>
            <span class="focus-input100"></span>
            </span>
          </div></div></div>



          <!-- =====   descricao ======   -->
          <div class="wrap-input100 validate-input m-b-16" >
                    <div class="control-group <?php echo !empty($content_idErro) ? 'error ' : ''; ?>">
                        <label class="titulo">Content_id PS2</label>
                        <div class="controls">
                            <input class="input100" name="content_id" type="text" placeholder="Insira a content_id do jogo"
                                   value="<?php echo !empty($content_id) ? $content_id : ''; ?>">
                            <?php if (!empty($content_idErro)): ?>
                                <span class="text-danger"><?php echo $content_idErro; ?></span>
                            <?php endif; ?>
                        <span class="focus-input100"></span>
            </span>
          </div></div></div>


          <!-- =====   IMAGEM ======   -->
          <div class="wrap-input100 validate-input m-b-16" >
                    <div class="control-group <?php echo !empty($imagemErro) ? 'error ' : ''; ?>">
                        <label class="titulo">Imagem PS2</label>
                        <div class="controls">
                            <input class="input100" name="imagem" type="text" placeholder="Insira o nome da imagem"
                                   value="<?php echo !empty($imagem) ? $imagem : ''; ?>">
                            <?php if (!empty($imagemErro)): ?>
                                <span class="text-danger"><?php echo $imagemErro; ?></span>
                            <?php endif; ?>
                        <span class="focus-input100"></span>
            </span>
          </div></div></div>


                    

          <!-- =====  LINK  ======   -->
          <div class="wrap-input100 validate-input m-b-16" >
                    <div class="control-group <?php echo !empty($linkErro) ? 'error ' : ''; ?>">
                        <label class="titulo">Link do jogo</label>
                        <div class="controls">
                            <input class="input100"  name="link" type="text" placeholder="Insira o nome da imagem"
                                   value="<?php echo !empty($link) ? $link : ''; ?>">
                            <?php if (!empty($linkErro)): ?>
                                <span class="text-danger"><?php echo $linkErro; ?></span>
                            <?php endif; ?>
                        <span class="focus-input100"></span>
            </span>
          </div></div></div>
                  


                    <div class="form-actions">
                        <br/>
                        <button type="submit" class="login100-form-btn m-b-16">Adicionar</button>
                        <a href="index.php" type="btn" class="login100-form-btn m-b-16">Voltar</a>
                    </div>
                </form>
            </div></div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>

