<?php

require_once 'Crud.php';

class Usuarios extends Crud{
    protected $table = 'usuarios';
    protected $table2 = 'nome';
    private $nome;
    private $ultimo_nome;
    private $telefone;
    private $celular;
    private $rua;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $cep;
    private $pais;
    private $email;
    private $senha;
    
    function getNumero() {
        return $this->numero;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

        function getUltimo_nome() {
        return $this->ultimo_nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCelular() {
        return $this->celular;
    }

    function getRua() {
        return $this->rua;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getCep() {
        return $this->cep;
    }

    function getPais() {
        return $this->pais;
    }

    function setUltimo_nome($ultimo_nome) {
        $this->ultimo_nome = $ultimo_nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setPais($pais) {
        $this->pais = $pais;
    }

        public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
    }
    
    public function getSenha() {
        return $this->senha;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function Login($email, $senha){
        $sql  = "SELECT * FROM $this->table WHERE email = :email AND senha = :senha";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':email',$email , PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha);
        $stmt-> execute();
        return $stmt->fetch();
    }
    public function findName($nome){
        $sql  = "SELECT * FROM $this->table WHERE email = :nome";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome',$nome , PDO::PARAM_STR);
        $stmt-> execute();
        return $stmt->fetchAll();
    }
    public function findId($id){
        $sql  = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt-> execute();
        return $stmt->fetch();
    }
    public function insert() {
        $sql  = "INSERT INTO $this->table (nome,ultimo_nome,telefone,celular,rua,numero_casa,complemento,bairro,cidade,cep,pais,email,senha) VALUES (:nome,:ultimo,:telefone,:celular,:rua,:numero,:complemento,:bairro,:cidade,:cep,:pais, :email, :senha)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':ultimo', $this->ultimo_nome);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':celular', $this->celular);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':complemento', $this->complemento);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':cep', $this->cep);
        $stmt->bindParam(':pais', $this->pais);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        return $stmt->execute();
    }

    public function update($id) {
        $sql  = "UPDATE $this->table SET nome = :nome,ultimo_nome = :ultimo,telefone = :telefone,celular = :celular,rua = :rua,numero_casa = :numero,complemento = :complemento,bairro = :bairro,cidade = :cidade,cep = :cep,pais = :pais,email = :email,senha = :senha WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':ultimo', $this->ultimo_nome);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':celular', $this->celular);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':complemento', $this->complemento);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':cep', $this->cep);
        $stmt->bindParam(':pais', $this->pais);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}