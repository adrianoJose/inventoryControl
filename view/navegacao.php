<!DOCTYPE html>
<html>
    <body>    

        <?php
        $ac = $_GET['acao'];
        require_once 'php/codigos/Produtos.php';
        $produto = new Produtos();
        if ($ac == "atualizar") {
            if ($opc == 1) {

                foreach ($produto->findFist() as $key => $value) :
                    $code = $value->id_Produto;
                    $sql = "update codigo set cod = :cod";
                    $stmt = DB::prepare($sql);
                    $stmt->bindParam(":cod", $code);
                    $stmt->execute();

                    include_once 'view/produto/atualizar.php';

                endforeach;
            } elseif ($opc == 2) {
                $backCode;
                foreach ($produto->cod() as $key => $value) :
                    $backCode = $value->cod;
                endforeach;
                foreach ($produto->findBack($backCode) as $key => $value) :
                    $code = $value->id_Produto;
                    $sql = "update codigo set cod = :cod";
                    $stmt = DB::prepare($sql);
                    $stmt->bindParam(":cod", $code);
                    $stmt->execute();
                    include_once 'view/produto/atualizar.php';
                endforeach;
            } elseif ($opc == 3) {
                $nextCode;
                foreach ($produto->cod() as $key => $value) :
                    $nextCode = $value->cod;
                endforeach;
                foreach ($produto->findNext($nextCode) as $key => $value) :
                    $code = $value->id_Produto;
                    $sql = "update codigo set cod = :cod";
                    $stmt = DB::prepare($sql);
                    $stmt->bindParam(":cod", $code);
                    $stmt->execute();
                    include_once 'view/produto/atualizar.php';
                endforeach;
            } elseif ($opc == 4) {

                foreach ($produto->findEnd() as $key => $value) :
                    $code = $value->id_Produto;
                    $sql = "update codigo set cod = :cod";
                    $stmt = DB::prepare($sql);
                    $stmt->bindParam(":cod", $code);
                    $stmt->execute();
                    include_once 'view/produto/atualizar.php';
                endforeach;
            }?>
            <div class="btn-group btn-group-justified" role="group">
            <div class="btn-group" role="group">
                <a href="?acao=atualizar&op=produto&op2=primeiro">
                    <button type="button" name="primeiro" class="btn btn-primary"><<</button>
                </a>
            </div>
            <div class="btn-group" role="group">
                <a href="?acao=atualizar&op=produto&op2=anterior">
                    <button type="button" name="primeiro"  class="btn btn-primary"><</button>
                </a>
            </div>
            <div class="btn-group" role="group">
                <a href="?acao=atualizar&op=produto&op2=proximo">
                    <button type="button" name="primeiro" class="btn btn-primary">></button>
                </a>
            </div>
            <div class="btn-group" role="group">
                <a href="?acao=atualizar&op=produto&op2=ultimo">
                    <button type="button" name="primeiro" class="btn btn-primary">>></button>
                </a>
            </div>
                <?php
        }elseif($ac == "remover"){
            if ($opc == 1) {

                foreach ($produto->findFist() as $key => $value) :
                    $code = $value->id_Produto;
                    $sql = "update codigo set cod = :cod";
                    $stmt = DB::prepare($sql);
                    $stmt->bindParam(":cod", $code);
                    $stmt->execute();

                    include_once 'view/produto/remover.php';

                endforeach;
            } elseif ($opc == 2) {
                $backCode;
                foreach ($produto->cod() as $key => $value) :
                    $backCode = $value->cod;
                endforeach;
                foreach ($produto->findBack($backCode) as $key => $value) :
                    $code = $value->id_Produto;
                    $sql = "update codigo set cod = :cod";
                    $stmt = DB::prepare($sql);
                    $stmt->bindParam(":cod", $code);
                    $stmt->execute();
                    include_once 'view/produto/remover.php';
                endforeach;
            } elseif ($opc == 3) {
                $nextCode;
                foreach ($produto->cod() as $key => $value) :
                    $nextCode = $value->cod;
                endforeach;
                foreach ($produto->findNext($nextCode) as $key => $value) :
                    $code = $value->id_Produto;
                    $sql = "update codigo set cod = :cod";
                    $stmt = DB::prepare($sql);
                    $stmt->bindParam(":cod", $code);
                    $stmt->execute();
                    include_once 'view/produto/remover.php';
                endforeach;
            } elseif ($opc == 4) {

                foreach ($produto->findEnd() as $key => $value) :
                    $code = $value->id_Produto;
                    $sql = "update codigo set cod = :cod";
                    $stmt = DB::prepare($sql);
                    $stmt->bindParam(":cod", $code);
                    $stmt->execute();
                    include_once 'view/produto/remover.php';
                endforeach;
            }
        
        ?>
        <div class="btn-group btn-group-justified" role="group">
            <div class="btn-group" role="group">
                <a href="?acao=remover&op=produto&op2=primeiro">
                    <button type="button" name="primeiro" class="btn btn-primary"><<</button>
                </a>
            </div>
            <div class="btn-group" role="group">
                <a href="?acao=remover&op=produto&op2=anterior">
                    <button type="button" name="primeiro"  class="btn btn-primary"><</button>
                </a>
            </div>
            <div class="btn-group" role="group">
                <a href="?acao=remover&op=produto&op2=proximo">
                    <button type="button" name="primeiro" class="btn btn-primary">></button>
                </a>
            </div>
            <div class="btn-group" role="group">
                <a href="?acao=remover&op=produto&op2=ultimo">
                    <button type="button" name="primeiro" class="btn btn-primary">>></button>
                </a>
            </div>
        </div>
        <?php } ?>
    </body>
</html>
