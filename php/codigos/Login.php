<?php

require_once 'Usuarios.php';
$usuario = new Usuarios();
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$email = $_POST['email'];
$senha = $_POST['senha'];

$resul = $usuario->Login($email, $senha);
$nome;

    $nome = $resul->nome;

// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
//$con = mysql_connect("127.0.0.1", "root", "digite a senha do banco aqui") or die ("Sem conexão com o servidor");
//$select = mysql_select_db("server") or die("Sem acesso ao DB, Entre em contato com o Administrador, gilson_sales@bytecode.com.br");
// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
//$result = mysql_query("SELECT * FROM `USUARIO` WHERE `NOME` = '$login' AND `SENHA`= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if ($resul > 0) {
    
    $_SESSION['login'] = $email;
    $_SESSION['nome'] = $nome;
    $_SESSION['senha'] = $senha;
    header('location: ../../home.php');
} else {
    unset($_SESSION['login']);
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    header('location: ../../index.php');
}
?>