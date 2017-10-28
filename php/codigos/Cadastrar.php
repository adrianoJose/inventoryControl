<?php
require_once 'Produtos.php';

$produto = new Produtos();

if (isset($_POST['btn_adicionar'])):
    
    $nomeProduto = $_POST['txt_descricao'];
    $precoUnit = (double) $_POST['txt_preco'];
    $categoria = $_POST['slc_categoria'];
    $quantidade = $_POST['txt_quantidade'];
    $data = $_POST['txt_data'];
    

    $produto->setNomeProduto($nomeProduto);
    $produto->setPrecoUnitario($precoUnit);
    $produto->setCategoria($categoria);
    $produto->setQuantidade($quantidade);
    $produto->setDataCadastro($data);
    if ($produto->insert()) {
        echo '
                    <script type="text/javascript">
                        alert("Cadastrado com Sucesso");
                    </script>
                    <meta http-equiv="Refresh" content = "0;URL = ../../home.php">
                ';
    }
endif;
       