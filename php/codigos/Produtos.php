<?php

require_once 'Crud.php';

class Produtos extends Crud {

    protected $table = 'produtos';
    protected $table2 = 'entrada_Produto';
    protected $table3 = 'saida_Produto';
    protected $table4 = 'codigo';
    private $nomeProduto;
    private $precoUnitario;
    Private $categoria;
    private $quantidade;
    private $dataCadastro;
    private $dataEntrada;
    private $dataSaida;

    function getNomeProduto() {
        return $this->nomeProduto;
    }

    function getPrecoUnitario() {
        return $this->precoUnitario;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function setNomeProduto($nomeProduto) {
        $this->nomeProduto = $nomeProduto;
    }

    function setPrecoUnitario($precoUnitario) {
        $this->precoUnitario = $precoUnitario;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function getDataEntrada() {
        return $this->dataEntrada;
    }

    function getDataSaida() {
        return $this->dataSaida;
    }

    function setDataEntrada($dataEntrada) {
        $this->dataEntrada = $dataEntrada;
    }

    function setDataSaida($dataSaida) {
        $this->dataSaida = $dataSaida;
    }

    public function cod() {
        $sql = "select * from $this->table4";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function findFist() {
        $sql = "SELECT * FROM $this->table order by id_Produto asc limit 1";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function findBack($id) {
        $sql = "SELECT * FROM $this->table WHERE id_Produto < :id order by id_Produto desc limit 1";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function findNext($id) {
        $sql = "SELECT * FROM $this->table WHERE id_Produto > :id order by id_Produto asc limit 1";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function findEnd() {
        $sql = "SELECT * FROM $this->table order by id_Produto desc limit 1";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findName($nome) {
        $nome = "%" . $nome . "%";
        $sql = "SELECT * FROM $this->table WHERE nome_Produto LIKE :nome ";
        $stmt = DB::prepare($sql);
        $nome = "%" . $nome . "%";
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id) {
        $sql = "SELECT * FROM $this->table WHERE id_Produto = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function relatorioEntrada($dt1, $dt2) {
        $sql = "SELECT * FROM $this->table WHERE data_Cadastro between :dt1 and :dt2";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':dt1', $dt1);
        $stmt->bindParam(':dt2', $dt2);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function relatorioSaida($dt1, $dt2) {
        $sql = "SELECT * FROM $this->table3 WHERE data_Saida between :dt1 and :dt2";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':dt1', $dt1);
        $stmt->bindParam(':dt2', $dt2);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addProduto($id, $nome, $qtdEntrada, $dtEntrada) {
        $sql = "INSERT INTO $this->table2 (id_Produto,nome_Produto,quantidade_Entrada,data_Entrada) VALUES (:id, :nome, :qtd, :data)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':qtd', $qtdEntrada);
        $stmt->bindParam(':data', $dtEntrada);
        $stmt->execute();

        $sql2 = "UPDATE $this->table SET quantidade_Produto = quantidade_Produto + $qtdEntrada WHERE id_Produto = :id";
        $stmt2 = DB::prepare($sql2);
        $stmt2->bindParam(':id', $id);

        return $stmt2->execute();
    }

    public function retirarProduto($id, $nome, $qtdSaida, $dtSaida) {
        $sql = "INSERT INTO $this->table3 (id_Produto,nome_Produto,quantidade_Saida,data_Saida) VALUES (:id, :nome, :qtd, :data)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':qtd', $qtdSaida);
        $stmt->bindParam(':data', $dtSaida);
        $stmt->execute();

        $sql2 = "UPDATE $this->table SET quantidade_Produto = quantidade_Produto - $qtdSaida WHERE id_Produto = :id";
        $stmt2 = DB::prepare($sql2);
        $stmt2->bindParam(':id', $id);

        return $stmt2->execute();
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (nome_Produto, preco_Unitario,categoria ,quantidade_Produto,data_Cadastro) VALUES (:nome, :preco,:categoria ,:quantidade, :data)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nomeProduto);
        $stmt->bindParam(':preco', $this->precoUnitario);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':quantidade', $this->quantidade);
        $stmt->bindParam(':data', $this->dataCadastro);
        return $stmt->execute();
    }

    public function update($id) {
        $sql = "UPDATE $this->table SET nome_Produto = :nome, preco_Unitario = :preco, categoria = :categoria ,quantidade_Produto = :quantidade ,data_Cadastro = :data WHERE id_Produto = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nomeProduto);
        $stmt->bindParam(':preco', $this->precoUnitario);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':quantidade', $this->quantidade);
        $stmt->bindParam(':data', $this->dataCadastro);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM $this->table WHERE id_Produto = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

}
