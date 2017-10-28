<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>IC Login</title>
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/style.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilo.css" rel="stylesheet">
  <link href="css/estilo-produto.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <form class="form-signin" method="post" action="php/codigos/Login.php">       
        <h2 class="form-signin-heading">Dados de acesso</h2>
        <input type="text" class="form-control" name="email" placeholder="Seu email" required="" autofocus="" />
        <input type="password" class="form-control" name="senha" placeholder="Sua senha" required=""/>            
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
        <button class="btn btn-lg btn-success btn-block" type="button" id="btnNovoUser" name="btn_novoUser" data-toggle="modal" data-target="#novoUsuario">Cadastre-se</button>
      </form>
    </div>

<div class="modal fade" id="novoUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastro de Usuário</h4>
            </div>
            <div class="modal-body">
              <div class="panel">
                <div class="panel-body">
                  <form class="form-horizontal" id="add-contato" name="add_frm" action="php/codigos/Cadastrar_Usuario.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="txtNome" class="col-sm-3 control-label">Nome*: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txtNome" placeholder="Seu nome" id="nome" class="form-control" name="txt_nome">
                        </div>                        
                    </div>
                    <div class="form-group">                      
                        <label for="txtSobreNome" class="col-sm-3 control-label">Último nome*: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txtSobreNome" placeholder="Seu último nome" id="ultimoNome" class="form-control" name="txt_ultimonome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtTel" class="col-sm-3 control-label">Telefone*: </label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="txtTel" placeholder="Seu telefone" id="tell" class="form-control" name="txt_tel">
                        </div>                      
                    </div>
                    <div class="form-group">
                        <label for="txtCelular" class="col-sm-3 control-label">Celular*: </label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="txtCelular" placeholder="Seu celular" id="cell" class="form-control" name="txt_cell">
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading cor-fundo"> Endereço</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="txt" class="col-sm-3 control-label">Rua*: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="txtRua" placeholder="Nome da rua" id="rua" class="form-control" name="txt_rua">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtNumero" class="col-sm-3 control-label">Número*: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="txtNumero" placeholder="Número da rua" id="numero" class="form-control" name="txt_numero">
                                </div>
                            </div>
                            <div class="form-group">                              
                                <label for="txtComplemento" class="col-sm-3 control-label">Complemento: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="txtComplemento" placeholder="Complemento" id="complemento" class="form-control" name="txt_complemento">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtBairro" class="col-sm-3 control-label">Bairro*: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="txtBairro" placeholder="Bairro onde mora" id="bairro" class="form-control" name="txt_bairro">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtCidade" class="col-sm-3 control-label">Cidade*: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="txtCidade" placeholder="Cidade onde mora" id="cidade" class="form-control" name="txt_cidade">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txCep" class="col-sm-3 control-label">CEP*: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="txtBairro" placeholder="CEP" id="bairro" class="form-control" name="txt_cep">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtPais" class="col-sm-3 control-label">País*: </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="txtPais" placeholder="País" id="pais" class="form-control" name="txt_pais">
                                </div>
                            </div>
                        </div>
                    </div>                  
                    <div class="panel panel-info">
                      <div class="panel-heading cor-fundo"> Acesso ao Sistema</div>
                      <div class="panel-body">
                          <div class="form-group">
                              <label for="txtLogin" class="col-sm-3 control-label">Login*: </label>
                              <div class="col-sm-9">
                                  <input type="email" class="form-control" id="txtLogin" placeholder="Seu email" id="login" class="form-control" name="txt_login">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="txtSenha" class="col-sm-3 control-label">Senha*: </label>
                              <div class="col-sm-9">
                                  <input type="password" class="form-control" id="txtSenha" placeholder="Sua senha" id="senha" class="form-control" name="txt_senha">
                              </div>
                          </div>
                          <!--<div class="form-group">
                              <label for="txtRepSenha" class="col-sm-3 control-label">Confirmar Senha*: </label>
                              <div class="col-sm-9">
                                  <input type="password" class="form-control" id="txtRepSenha" placeholder="Repetir sua senha" id="repSenha" class="form-control" name="txt_repSenha">
                              </div>
                          </div>-->
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="posicionamento-btn">
                        <div class="panel-body">
                          <button type="submit" class="btn btn-success" id="adicionar" name="btn_adicionar">Adicionar</button>  
                          <button type="reset" class="btn btn-danger" id="limpar" name="btn_limpar">Limpar</button>  
                        </div>
                      </div>
                    </div>                              
                  </form>
                </div>
              </div>    
            </div>
        </div>
    </div>
</div>
</body>
</html>