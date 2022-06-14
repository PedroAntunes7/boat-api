<?php 
class Praia{
    public $id;
    public $foto;
    public $nome;
    public $local;
    public $descricao;

    function __construct($id, $foto, $nome, $local, $descricao) {
        $this->id = $id;
        $this->foto = $foto;
        $this->nome = $nome;
        $this->local = $local;
        $this->descricao = $descricao;

    }
    function create(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("INSERT INTO praia (foto, nome, local, descricao)
            VALUES (:foto, :nome, :local, :descricao);");
            $stmt->bindParam(':foto', $this->foto);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':local', $this->local);
            $stmt->bindParam(':descricao', $this->descricao);
            $stmt->execute();
            $id = $db->conn->lastInsertId();
            return $id;
        }catch(PDOException $e) {
            $result['message'] = "Error Select All Praias: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function delete(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("DELETE FROM praia WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            return $stmt->rowCount();
        }catch(PDOException $e) {
            $result['message'] = "Error Delete Praia: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function update(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("UPDATE praia SET foto = :foto, nome = :nome, local = :local, descricao = :descricao WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':foto', $this->foto);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':local', $this->local);
            $stmt->bindParam(':descricao', $this->descricao);
            $stmt->execute();
            return true;
        }catch(PDOException $e) {
            $result['message'] = "Error Update Praia: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function selectAll(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT * FROM praia;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e) {
            $result['message'] = "Error Select All praias: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }

    function selectById(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT * FROM praia WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e) {
            $result['message'] = "Error Select product By Id: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
}
?>