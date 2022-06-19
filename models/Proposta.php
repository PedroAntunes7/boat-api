<?php 
class Proposta{
    public $id;
    public $nome;
    public $email;
    public $telefone;
    public $proposta;

    function __construct($id, $nome, $email, $telefone, $proposta) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->proposta = $proposta;

    }
    function create(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("INSERT INTO proposta (nome, email, telefone, proposta)
            VALUES (:nome, :email, :telefone, :proposta);");
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':telefone', $this->telefone);
            $stmt->bindParam(':proposta', $this->proposta);
            $stmt->execute();
            $id = $db->conn->lastInsertId();
            return $id;
        }catch(PDOException $e) {
            $result['message'] = "Error Select All Propostas: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function delete(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("DELETE FROM proposta WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            return $stmt->rowCount();
        }catch(PDOException $e) {
            $result['message'] = "Error Delete Proposta: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function update(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("UPDATE proposta SET nome = :nome, email = :email, telefone = :telefone, proposta = :proposta WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':telefone', $this->telefone);
            $stmt->bindParam(':proposta', $this->proposta);
            $stmt->execute();
            return true;
        }catch(PDOException $e) {
            $result['message'] = "Error Update Proposta: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function selectAll(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT * FROM proposta;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e) {
            $result['message'] = "Error Select All Propostas: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }

    function selectById(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT * FROM proposta WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e) {
            $result['message'] = "Error Select proposta By Id: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
}
?>