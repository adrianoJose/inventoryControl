<div class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" id="add-contato" name="add_frm" action="" method="post" enctype="multipart/form-data">
            <div class="form-group afastamento-prod">
                <label for="txtCodigo" class="col-sm-3 control-label">Busca: </label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input type="text" id="descricao" class="form-control" name="txt_descricao" title="Descrição do produto" required placeholder="Digite o nome do produto que deseja pesquisar" />
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-success" name="buscar" value="Buscar">
                        </span>
                    </div>
                </div>
            </div>
        </form>    
    </div>


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
        $butao = $_POST["buscar"];
        if ($butao == true):
            $nomeProduto = (string) $_POST['txt_descricao'];

            foreach ($produto->findName($nomeProduto) as $key => $resul):
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
                       <!-- <th>
                            <button type="button" value="add" class="btn btn-success glyphicon glyphicon-arrow-up" id="adicionar" name="btn_adicionar" data-toggle="modal" data-target="#addAcao"></button>
                            <button type="button" value="remover" class="btn btn-danger glyphicon glyphicon-arrow-down" id="remover" name="btn_remover" data-toggle="modal" data-target="#addAcao"></button>	
                        </th>-->
                    </tr>
                </tbody>
                <?php
            endforeach;
        endif;
        ?>
    </table>

</div>    