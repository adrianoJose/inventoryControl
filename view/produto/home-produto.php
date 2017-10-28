<?php error_reporting(E_ALL ^ E_NOTICE);
$acao = $_GET["acao"];
switch ($acao) {
    case "adicionar":
        $form = "view/produto/adicionar.php";
        $titulo = "Adicionar Produto";
        break;
    case "atualizar":
        $form = "view/produto/atualizar.php";
        $titulo = "Atualizar Produto";
        break;
    case "pesquisar":
        $form = "view/produto/pesquisar.php";
        $titulo = "Pesquisar Produto";
        break;
    case "remover":
        $form = "view/produto/remover.php";
        $titulo = "Remover produto";
        break;
    default:
        $form = "";
        $titulo = "Produto";
        break;
}
?>

<div class="panel panel-primary tamanho-tela">
    <div class="panel-heading cor-fundo"><?php echo $titulo; ?></div>
    <div class="panel-body">
                                
        <div class="panel">
            <div class="panel-heading"><?php require_once("view/acoes.php"); ?></div>
        </div>
                
        <?php 
            if($form != "") {
                include_once($form);        
            }
        ?>