<?php
class UserController{

function create(){
    //Entradas
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //Processamento ou Persistencia
    $user = new User(null, $name, $email, $pass);
    $user->create();
    //Saida
    $result['message'] = "Cadastrado com sucesso!";
    $result['user']['id'] = $id;
    $result['user']['name'] = $name;
    $result['user']['email'] = $email;
    $result['user']['pass'] = $pass;
    $response = new Output();
    $response->out($result);
}

function delete(){
    //Entradas
    $id = $_POST['id'];
    //Processamento ou Persistencia
    $user = new User($id, null, null, null);
    $user->delete();
    //Saida
    $result['message'] = "User deletado com sucesso!";
    $result['user']['id'] = $id;
    $response = new Output();
    $response->out($result);

}

function update(){
    //Entradas
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //Processamento ou Persistencia 
    $user = new User($id, $name, $email, $pass);
    $user->update();
    //Saida
    $result['message'] = "User atualizado com sucesso!";
    $result['user']['id'] = $this->id;
    $result['user']['name'] = $this->name;
    $result['user']['email'] = $this->email;
    $result['user']['pass'] = $this->pass;
    $response = new Output();
    $response->out($result);
}

function selectAll(){
    //Entradas
    $user = new User(null, null, null, null);
    $user->selectAll();
    //Processamento ou Persistencia 
    //____________________________
    //Saida
    $response = new Output();
    $response->out($result, 500);
}
}
    
?>