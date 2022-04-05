<?php 
require ('helpers/database.php');
class User{
    public $id;
    public $name;
    public $email;
    public $pass;
    function __construct($id, $name, $email, $pass) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
    }
    function create(){
        $db = new Database();
        try {
            $stmt = $db->conn->prepare("INSERT INTO users (name, email, pass)
            VALUES (:name, :email, :pass)");
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':pass', $this->pass);
            $stmt->execute();
            echo 'Cadastrado com sucesso!';
        }catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    function delete(){
    $db = new Database();
    try {
        $stmt = $db->conn->prepare("DELETE 
        FROM users WHERE id = :id;");
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        echo 'Deletado com sucesso!';
    }catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
  }

  function update() {
      $db = new Database();
      try {
        $stmt = $db->conn->prepare("UPDATE users SET name = :name, email = :email, pass = :pass WHERE id = :id");
        $stmt -> bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pass', $this->pass);
        $stmt->execute();
        echo 'User atualizado com sucesso';
      }catch(PDOException $e) {
          echo 'Error: '.$e->getMessage();
      }
  }
  function selectALL(){
      $db = new Database();
      try {
          $stmt = $db->conn->prepare("SELECT * FROM users;");
          $stmt -> execute();
          $result = $stmt ->fetchALL(PDO::FETCH_ASSOC);
          
          $response = new Output();
          $response->out($result);
          header('Content-Type: application/json; charset=utf-8');
      } catch(PDOException $e) {
        $result['message'] = "Error Select All User: " . $e->getMessage();
        $response = new Output();
        $response->out($result, 500);
        } 
  }
}
?>