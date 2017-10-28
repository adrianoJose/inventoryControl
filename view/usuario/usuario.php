<?php 
    require_once 'php/codigos/Usuarios.php';
    $usuario = new Usuarios();
    $nome = $_SESSION['login'];
    foreach ($usuario->findName($nome) as $key => $valor) :   
    
?>

<div class="panel panel-primary tamanho-tela">
    <div class="panel-heading cor-fundo"><?php echo $titulo; ?></div>
    <div class="panel-body">
                                
        <form class="form-horizontal" id="add-contato" name="add_frm" action="php/codigos/Atualizar_Usuario.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="txt_id" value="<?php echo $valor->id ?>"/>
                <label for="txtNome" class="col-sm-2 control-label">Nome*: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="txtNome" placeholder="Seu nome" id="nome" class="form-control" name="txt_nome" value="<?php echo $valor->nome;?>">
                </div>
                <label for="txtSobreNome" class="col-sm-2 control-label">Último nome*: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="txtSobreNome" placeholder="Seu último nome" id="ultimoNome" class="form-control" name="txt_ultimonome" value="<?php echo $valor->ultimo_nome;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="txtTel" class="col-sm-2 control-label">Telefone*: </label>
                <div class="col-sm-4">
                    <input type="tel" class="form-control" id="txtTel" placeholder="Seu telefone" id="tell" class="form-control" name="txt_tel" value="<?php echo $valor->telefone;?>">
                </div>
                <label for="txtCelular" class="col-sm-2 control-label">Celular*: </label>
                <div class="col-sm-4">
                    <input type="tel" class="form-control" id="txtCelular" placeholder="Seu celular" id="cell" class="form-control" name="txt_cell" value="<?php echo $valor->celular;?>">
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading cor-fundo"> Endereço</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="txt" class="col-sm-2 control-label">Rua*: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtRua" placeholder="Nome da rua" id="rua" class="form-control" name="txt_rua" value="<?php echo $valor->rua;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtNumero" class="col-sm-2 control-label">Número*: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="txtNumero" placeholder="Número da rua" id="numero" class="form-control" name="txt_numero" value="<?php echo $valor->numero_casa;?>">
                        </div>
                        <label for="txtComplemento" class="col-sm-2 control-label">Complemento: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="txtComplemento" placeholder="Complemento" id="complemento" class="form-control" name="txt_complemento" value="<?php echo $valor->complemento;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtBairro" class="col-sm-2 control-label">Bairro*: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="txtBairro" placeholder="Bairro onde mora" id="bairro" class="form-control" name="txt_bairro" value="<?php echo $valor->bairro;?>">
                        </div>
                        <label for="txtCidade" class="col-sm-2 control-label">Cidade*: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="txtCidade" placeholder="Cidade onde mora" id="cidade" class="form-control" name="txt_cidade" value="<?php echo $valor->cidade;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txCep" class="col-sm-2 control-label">CEP*: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="txtBairro" placeholder="CEP" id="bairro" class="form-control" name="txt_cep" value="<?php echo $valor->cep;?>">
                        </div>
                        <label for="txtPais" class="col-sm-2 control-label">País*: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="txtPais" placeholder="País" id="pais" class="form-control" name="txt_pais" value="<?php echo $valor->pais;?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading cor-fundo"> Acesso ao Sistema</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="txtLogin" class="col-sm-2 control-label">Login*: </label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="txtLogin" placeholder="Seu email" id="login" class="form-control" name="txt_login" value="<?php echo $valor->email;?>">
                        </div>
                        <label for="txtSenha" class="col-sm-2 control-label">Senha*: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="txtSenha" placeholder="Sua senha" id="senha" class="form-control" name="txt_senha" value="<?php echo $valor->senha;?>">
                        </div>
                    </div>
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
<?php 
endforeach;
?>