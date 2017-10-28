<?php
$teste = $_GET["op2"];
$opc = -1;

if ($teste == 'primeiro') {
    $opc = 1;
} else if ($teste == 'anterior') {
    $opc = 2;
} else if ($teste == 'proximo') {
    $opc = 3;
} else if ($teste == 'ultimo') {
    $opc = 4;
}
?> 

<div class="panel">
    <div class="panel-heading"><?php include_once("view/navegacao.php"); ?></div>
</div>
<form class="form-horizontal" id="add-contato" name="add_frm" action="php/codigos/Remover.php" method="post" enctype="multipart/form-data">
    <div class="form-group afastamento-prod">
        <label for="txtCodigo" class="col-sm-3 control-label">Código: </label>
        <div class="col-sm-9">
            <input type="hidden" name='txt_codigo' value="<?php echo $value->id_Produto; ?>" />
            <input type="text" class="form-control" id="txtCodigo" placeholder="Código" id="codigo" class="form-control" name="" value="<?php echo $value->id_Produto; ?>" disabled>
        </div>
    </div>
    <div class="form-group afastamento-prod">
        <label for="txtDescricao" class="col-sm-3 control-label">Descrição: </label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="txtCodigo" placeholder="Descrição" id="descricao" class="form-control" name="txt_descricao" value="<?php echo $value->nome_Produto; ?>" disabled>
        </div>
    </div>
    <div class="form-group afastamento-prod">
        <label for="txtPreco" class="col-sm-3 control-label">Preço unitário: </label>
        <div class="col-sm-9">
            <input type="double" class="form-control" id="txtCodigo" placeholder="Preço unitário" id="preco" class="form-control" name="txt_preco" value="<?php echo $value->preco_Unitario; ?>" disabled>
        </div>
    </div>
    <div class="form-group afastamento-prod">
        <label for="quantidade" class="col-sm-3 control-label">Quantidade </label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="txtCodigo" placeholder="Quantidade" id="quantidade" class="form-control" name="txt_quantidade" value="<?php echo $value->quantidade_Produto; ?>" disabled>
        </div>
    </div>
    <div class="form-group afastamento-prod">
        <label for="categoria" class="col-sm-3 control-label">Categoria </label>
        <div class="col-sm-9">
            <select id="categoria" class="form-control" name="slc_categoria" disabled>
                <?php
                require_once 'php/codigos/Categorias.php';
                $categoria = new Categorias();
                $resultadoC = $categoria->findId($value->categoria);
                ?>
                <option value='<?php echo $resultadoC->id_Categoria; ?>'><?php echo $resultadoC->nome_Categoria; ?></option>
            </select>
        </div>
    </div>
    <div class="form-group afastamento-prod">
        <label for="categoria" class="col-sm-3 control-label">Data de Cadastro </label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="txtCodigo" placeholder="Preço unitário" id="data" class="form-control" name="txt_data" value="<?php echo $value->data_Cadastro; ?>" disabled>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="posicionamento-btn">
            <div class="panel-body">
                <?php include_once("view/botoes-form.php"); ?>
            </div>
        </div>
    </div>          
</form>
 