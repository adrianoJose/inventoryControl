<?php

require_once 'Categorias.php';
$categoria = new Categorias();
$nomeCategoria = $_POST['txtCat'];

$categoria->setNomeCategoria($nomeCategoria);
if ($categoria->insert()) {
echo '
                    <script type="text/javascript">
                        alert("Cadastrado com Sucesso");
                    </script>
                    <meta http-equiv="Refresh" content = "0;URL = ../../home.php?acao=adicionar&op=produto">
                ';
}
