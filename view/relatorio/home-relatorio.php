<div class="panel panel-primary tamanho-tela">
    <div class="panel-heading"><?php echo $titulo; ?></div>
    <div class="panel-body">
        <form class="form-horizontal" id="add-contato" name="add_frm" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="txtDataDe" class="col-sm-3 control-label">Data de: </label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="txtDataDe" id="dataDe" class="form-control" name="txt_dataDe" required>
                </div>
                <label for="txtDataAte" class="col-sm-3 control-label">Data de: </label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="txtDataAte" id="dataAte" class="form-control" name="txt_dataAte" required>
                </div>
            </div>
            <div class="form-group">
                <label for="txtCodigo" class="col-sm-3 control-label">Categoria: </label>
                <div class="col-sm-3">
                    <select id="categoria" class="form-control" name="slc_categoria" >
                        <option value="">- - -</option>	
                        <?php include("view/produto/select-categoria.php"); ?>
                    </select>
                </div>
                <label for="txtCodigo" class="col-sm-3 control-label">Tipo de relatório: </label>
                <div class="col-sm-3">
                    <select id="tiporel" class="form-control" name="slc_tiporel" required>
                        <option value="" selected>- - -</option>
                        <option value="entrada">Entrada</option>
                        <option value="saida">Saída</option>
                    </select>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="posicionamento-btn">
                    <div class="panel-body">
                        <input type="submit" class="btn btn-success" id="listar" name="btn_listar" value="Listar">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th> Descrição</th>
                        <th> Categoria</th>
                        <th> Quantidade</th>
                        <th> Preço</th>
                    </tr>
                </thead>
                <?php
                require_once 'php/codigos/Produtos.php';
                $produto = new Produtos();
                $butao = $_POST["btn_listar"];
                $slc = $_POST['slc_tiporel'];
                $data1 = $_POST['txt_dataDe'];
                $data2 = $_POST['txt_dataAte'];
                if ($butao == true and $slc == 'entrada'):


                    foreach ($produto->relatorioEntrada($data1, $data2) as $key => $resul):
                        ?>
                        <tbody>
                            <tr>
                                <th>

                                    <?php
                                    if ($resul == null) {
                                        $resul = 0;
                                    } else {
                                        echo $resul->id_Produto;
                                    }
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    if ($resul == null) {
                                        $resul = 0;
                                    } else {
                                        echo $resul->nome_Produto;
                                    }
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    if ($resul == null) {
                                        $resul = 0;
                                    } else {
                                        echo $resul->categoria;
                                    }
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    if ($resul == null) {
                                        $resul = 0;
                                    } else {
                                        echo $resul->quantidade_Produto;
                                    }
                                    ?>
                                </th>
                                <th>
                                    <?php
                                    if ($resul == null) {
                                        $resul = 0;
                                    } else {
                                        echo $resul->preco_Unitario;
                                    }
                                    ?>
                                </th>
                            </tr>
                        </tbody>
                        <?php
                    endforeach;
                endif;
                ?>
            </table>
        </div>
        <div class="panel-footer">
            <form method="post" action="php/codigos/RelatorioEntrada.php"> 
                <input type="hidden" class="form-control" id="txtDataDe" id="dataDe" class="form-control" name="dt1" value="<?php echo $data1 ?>">
                <input type="hidden" class="form-control" id="txtDataAte" id="dataAte" class="form-control" name="dt2"  value="<?php echo $data2 ?>">

                <button type="submit" class="btn btn-primary" id="imprimir" name="btn_imprimir">Imprimir</button>
            </form>
        </div>
    </div>

</div>