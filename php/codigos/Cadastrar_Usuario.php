<?php

require_once 'Usuarios.php';
$usuario = new Usuarios();

if (isset($_POST['btn_adicionar'])):
    $nome = $_POST['txt_nome'];
    $ultimo_nome = $_POST['txt_ultimonome'];
    $telefone = $_POST['txt_tel'];
    $celular = $_POST['txt_cell'];
    $rua = $_POST['txt_rua'];
    $numero = $_POST['txt_numero'];
    $complemento = $_POST['txt_complemento'];
    $bairro = $_POST['txt_bairro'];
    $cidade = $_POST['txt_cidade'];
    $cep = $_POST['txt_cep'];
    $pais = $_POST['txt_pais'];
    $email = $_POST['txt_login'];
    $senha = $_POST['txt_senha'];

    $usuario->setNome($nome);
    $usuario->setUltimo_nome($ultimo_nome);
    $usuario->setTelefone($telefone);
    $usuario->setCelular($celular);
    $usuario->setRua($rua);
    $usuario->setNumero($numero);
    $usuario->setComplemento($complemento);
    $usuario->setBairro($bairro);
    $usuario->setCidade($cidade);
    $usuario->setCep($cep);
    $usuario->setPais($pais);
    $usuario->setEmail($email);
    $usuario->setSenha($senha);


    if ($usuario->insert()) {
        echo '
                    <script type="text/javascript">
                        alert("Cadastrado com Sucesso");
                    </script>
                    <meta http-equiv="Refresh" content = "0;URL = ../../home.php">
                ';
    }
            endif;
