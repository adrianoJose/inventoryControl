<?php

require_once 'Produtos.php';

$produto = new Produtos();

$id = (int) $_POST['txt_codigo'];
if ($produto->delete($id)) {
    echo '
                <script type="text/javascript">
                alert("Deletado com Sucesso");
                </script>
                <meta http-equiv="Refresh" content = "0;URL = ../../home.php">';
}
