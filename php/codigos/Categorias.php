<?php

require_once 'Crud.php';

class Categorias extends Crud{
    
    protected $table = 'categorias';
    private $nomeCategoria;
    public function getNomeCategoria() {
        return $this->nomeCategoria;
    }

    public function setNomeCategoria($nomeCategoria) {
        $this->nomeCategoria = $nomeCategoria;
    }
    public function findName($nome){
        $sql  = "SELECT * FROM $this->table WHERE nome_Categoria LIKE :nome";
        $stmt = DB::prepare($sql);
        $nome = "%".$nome."%";
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt-> execute();
        return $stmt->fetchAll();
    }
    public function findId($id){
        $sql  = "SELECT * FROM $this->table WHERE id_Categoria = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt-> execute();
        return $stmt->fetch();
    }
    
    public function insert() {
        $sql  = "INSERT INTO $this->table (nome_Categoria) VALUES (:nome)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nomeCategoria);
        return $stmt->execute();        
    }

    public function update($id) {
        $sql  = "UPDATE $this->table SET nome_Categoria = :nome WHERE id_Categoria = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':nome', $this->nomeCategoria);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    public function delete($id){
        $sql  = "DELETE FROM $this->table WHERE id_Categoria = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt-> execute();
        
    }
}