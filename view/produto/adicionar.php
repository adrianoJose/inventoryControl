	<form class="form-horizontal" id="add-contato" name="add_frm" action="php/codigos/Cadastrar.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="txtCodigo" class="col-sm-3 control-label">Código: </label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="txtCodigo" placeholder="Código" id="codigo" class="form-control" name="txt_codigo" disabled>
        </div>
    </div>
    <div class="form-group">
        <label for="txtDescricao" class="col-sm-3 control-label">Descrição: </label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="txtCodigo" placeholder="Descrição" id="descricao" class="form-control" name="txt_descricao" required>
        </div>
    </div>
    <div class="form-group">
        <label for="txtPreco" class="col-sm-3 control-label">Preço unitário: </label>
        <div class="col-sm-9">
            <input type="double" class="form-control" id="txtCodigo" placeholder="Preço unitário" id="preco" class="form-control" name="txt_preco" required>
        </div>
    </div>
    <div class="form-group">
        <label for="quantidade" class="col-sm-3 control-label">Quantidade </label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="txtCodigo" placeholder="Quantidade" id="quantidade" class="form-control" name="txt_quantidade" required>
        </div>
    </div>
    <div class="form-group">
        <label for="categoria" class="col-sm-3 control-label">Categoria </label>
        <div class="col-sm-9">
            <div class="input-group">
                <select id="categoria" class="form-control" name="slc_categoria" required>
                    <option value="">- - -</option>
                    <?php include("view/produto/select-categoria.php"); ?>
                </select>
                <div class="input-group-btn">
                    <button type="button" class="btn btn-success" id="btnNovaCat" name="btn_addCategoria" data-toggle="modal" data-target="#addCategoria">Add Categoria</button>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="categoria" class="col-sm-3 control-label">Data de Cadastro </label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="txtCodigo" placeholder="Preço unitário" id="data" class="form-control" name="txt_data" required>
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
</div>  
</div>

<div class="modal fade" id="addCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Nova Categoria</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="add-contato" name="add_frm" action="php/codigos/CadastrarCat.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="txtCat" class="col-sm-3 control-label">Descrição: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txtCat" placeholder="Descrição da categoria" id="cat" class="form-control" name="txtCat">
                        </div>
                    </div>
                    <div class="modal-footer">

                        <input type="submit" name="cadastrar" class="btn btn-success" value ="Salvar"/>
                        <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar"/>


                    </div>
                </form>
            </div>

        </div>
    </div>
</div>