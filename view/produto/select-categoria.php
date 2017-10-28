<?php
require_once 'php/codigos/Categorias.php';
$categoria = new Categorias();
foreach ($categoria->findAll() as $key => $value2) :
    ?>
    <option value='<?php echo $value2->id_Categoria ?>'><?php echo $value2->nome_Categoria ?></option>";
    <?php
endforeach;
?>