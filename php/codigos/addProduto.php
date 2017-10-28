<?php
require_once 'Produtos.php';
$produto = new Produtos();
$bt = $_POST['cadastrar'];
if ($bt == true):
    $id = $_POST['id_Produto'];
    $nome = $_POST['nome'];
    $qtdEntrada = $_POST['txtQtd'];
    $dtEntrada = $_POST['txtData'];

    if ($produto->addProduto($id, $nome, $qtdEntrada, $dtEntrada)) {
        header("Location: ../../home.php");
    }
endif;
?>