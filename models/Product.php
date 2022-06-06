<?php 
class Product{
    public $id;
    public $img;
    public $name;
    public $price;
    public $tipo;
    public $estado;
    public $ano_fab;
    public $tamanho;
    public $trip;
    public $local;
    public $comb;
    function __construct($id, $img, $name, $price, $tipo, $estado, $ano_fab, $tamanho, $trip, $local, $comb) {
        $this->id = $id;
        $this->img = $img;
        $this->name = $name;
        $this->price = $price;
        $this->tipo = $tipo;
        $this->estado = $estado;
        $this->ano_fab = $ano_fab;
        $this->tamanho = $tamanho;
        $this->trip = $local;
        $this->comb = $comb;
    }
    function create(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("INSERT INTO boat ($id, $img, $name, $price, $tipo, $estado, $ano_fab, $tamanho, $trip, $local, $comb)
            VALUES (:id, :img, `:name`, :price, :tipo, :estado, :ano_fab, :tamanho, `:local`, :comb);");
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':img', $this->img);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':price', $this->price);
            $stmt->bindParam(':tipo', $this->tipo);
            $stmt->bindParam(':estado', $this->estado);
            $stmt->bindParam(':ano_fab', $this->ano_fab);
            $stmt->bindParam(':tamanho',  $this->tamanho);
            $stmt->bindParam(':local', $this->trip);
            $stmt->bindParam(':comb', $this->comb);
            $stmt->execute();
            $id = $db->conn->lastInsertId();
            return $id;
        }catch(PDOException $e) {
            $result['message'] = "Error Select All Boats: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function delete(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("DELETE FROM boat WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            return $stmt->rowCount();
        }catch(PDOException $e) {
            $result['message'] = "Error Delete Boat: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function update(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("UPDATE boat SET img = :img, `name` = `:name`, price = :price WHERE id = :id;");
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':photo', $this->photo);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':price', $this->price);
            $stmt->execute();
            return true;
        }catch(PDOException $e) {
            $result['message'] = "Error Update Product: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }
    function selectAll(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT * FROM products;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e) {
            $result['message'] = "Error Select All Products: " . $e->getMessage();
            $response = new Output();
            $response->out($result, 500);
        }
    }

    function selectById(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("SELECT * FROM products WHERE id = :id;");
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