<?php 
class Jet{
    public $id;
    public $img;
    public $name;
    public $price;
    public $tipo;
    public $estado;
    public $ano_fab;
    public $local;
    function __construct($id, $img, $name, $price, $tipo, $estado, $ano_fab, $local) {
        $this->id = $id;
        $this->img = $img;
        $this->name = $name;
        $this->price = $price;
        $this->tipo = $tipo;
        $this->estado = $estado;
        $this->ano_fab = $ano_fab;
        $this->local = $local;
    }
    function create(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("INSERT INTO jet (img, name, price, tipo, estado, ano_fab, local)
            VALUES (:img, :name, :price, :tipo, :estado, :ano_fab, :local);");
            $stmt->bindParam(':img', $this->img);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':price', $this->price);
            $stmt->bindParam(':tipo', $this->tipo);
            $stmt->bindParam(':estado', $this->estado);
            $stmt->bindParam(':ano_fab', $this->ano_fab);
            $stmt->bindParam(':local', $this->local);
            $stmt->execute();
            $id = $db->conn->lastInsertId();
            return $id;
        }catch(PDOException $e) {
            $result['message'] = "Error Select All jets: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function delete(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("DELETE FROM jet WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            return $stmt->rowCount();
        }catch(PDOException $e) {
            $result['message'] = "Error Delete jet: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function update(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("UPDATE jet SET img = :img, name = :name, price = :price, tipo = :tipo, estado = :estado, ano_fab = :ano_fab, local = :local WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':img', $this->img);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':price', $this->price);
            $stmt->bindParam(':tipo', $this->tipo);
            $stmt->bindParam(':estado', $this->estado);
            $stmt->bindParam(':ano_fab', $this->ano_fab);
            $stmt->bindParam(':local', $this->local);
            $stmt->execute();
            return true;
        }catch(PDOException $e) {
            $result['message'] = "Error Update jet: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function selectAll(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT * FROM jet;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e) {
            $result['message'] = "Error Select All jets: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }

    function destaques(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT * FROM jet WHERE destaques = 1 ;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e) {
            $result['message'] = "Error Select All jets: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }

    function selectById(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT * FROM jet WHERE id = :id;");
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