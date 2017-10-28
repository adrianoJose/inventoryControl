<?php
//esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.
session_start();
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:index.php');
    
}
$logado = $_SESSION['login'];
?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$op = $_GET["op"];
switch ($op) {
    case "usuario":
        $conteudo = "view/usuario/usuario.php";
        $titulo = "Adicionar Contatos";
        break;
    case "mensagem":
        $conteudo = "";
        $titulo = "Apagar Contatos";
        break;
    case "produto":
        $conteudo = "view/produto/home-produto.php";
        $titulo = "Produto";
        break;
    case "relatorio":
        $conteudo = "view/relatorio/home-relatorio.php";
        $titulo = "Relatório";
        break;
    case "home":
        $conteudo = "view/inicial/conteudo_home.php";
        $titulo = "Inventory Control";
        break;
    case "logout":
        session_destroy();
        header("location: index.php");
        exit;
    default:
        $conteudo = "view/inicial/conteudo_home.php";
        $titulo = "Inventory Control";
        break;
}
?>
    <!DOCTYPE html>
    <head>
        <title><?php echo $titulo; ?></title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
        <link href="css/estilo-produto.css" rel="stylesheet">
        <link href="css/estilo-relatorio.css" rel="stylesheet">
        <script src="js/js.js"></script>
        <script src="js/acoes.js"></script>
        <script src="js/produto.js"></script>
    </head>
    <body>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- uncomment code for absolute positioning tweek see top comment in css -->
        <!-- <div class="absolute-wrapper"> </div> -->
        <!-- Menu -->
        <div class="side-menu">    
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <div class="brand-wrapper">
                        <!-- Hamburger -->
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Brand -->
                        <div class="brand-name-wrapper">
                            <a class="navbar-brand" href="#">
                                Inventory Control
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Main Menu -->
                <div class="side-menu-container">
                    <ul class="nav navbar-nav">

                        <li><a href="?op=home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="?op=usuario"><span class="glyphicon glyphicon-user"></span> Usuário</a></li>
                        <li><a href="?op=mensagem"><span class="glyphicon glyphicon-envelope"></span> Mensagens</a></li>
                        <li><a href="?op=produto"><span class="glyphicon glyphicon-tasks"></span> Produto</a></li>
                        <li><a href="?op=relatorio"><span class="glyphicon glyphicon-file"></span> Relatórios</a></li>
                        <li><a href="?op=logout " onclick="return confirm('Deseja realmente sair?');"><span class="glyphicon glyphicon-remove"></span> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
        <!--A PARTIR DAQUI VAI FICAR A TELA-->
        <!-- Main Content -->
        <div>
            <section class="side-body" style="margin-right: 5px; background-color: #ecf0f1;">
                <?php
                if ($conteudo != "") {
                    include($conteudo);
                }
                ?>
        </section>
    </div>

</body>
</html>