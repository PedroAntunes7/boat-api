<?php

class PraiaController{

    function create(){
        $response = new Output();
        $response->allowedMethod('POST');

        $auth = new Auth();
        $user_session = $auth->allowedRole('admin');

        //Entradas
        $foto = $_POST['foto'];
        $nome = $_POST['nome'];
        $local = $_POST['local'];
        $descricao = $_POST['descricao'];


        
        //Processamento ou Persistencia
        $praia = new Praia(null, $foto, $nome, $local, $descricao);
        $id = $praia->create();
        //Saída
        $result['message'] = "Praia Cadastrado com sucesso!";
        $result['praia']['id'] = $id;
        $result['praia']['foto'] = $foto;
        $result['praia']['nome'] = $nome;
        $result['praia']['local'] = $local;
        $result['praia']['descricao'] = $descricao;
        $response->out($result);
    }

    function delete(){
        $response = new Output();
        $response->allowedMethod('POST');

        $auth = new Auth();
        $user_session = $auth->allowedRole('admin');

        $id = $_POST['id'];
        $praia = new Praia($id, null, null, null, null);
        $praia->delete();
        $result['message'] = "Praia deletada com sucesso!";
        $result['praia']['id'] = $id;
        $response->out($result);
    }

    function update(){
        $response = new Output();
        $response->allowedMethod('POST');

        $auth = new Auth();
        $user_session = $auth->allowedRole('admin');

        $id = $_POST['id'];
        $foto = $_POST['foto'];
        $nome = $_POST['nome'];
        $local = $_POST['local'];
        $descricao = $_POST['descricao'];;
        $praia = new Praia($id, $foto, $nome, $local, $descricao);
        $praia->update();
        $result['message'] = "Praia atualizada com sucesso!";
        $result['praia']['id'] = $id;
        $result['praia']['foto'] = $foto;
        $result['praia']['local'] = $local;
        $result['praia']['nome'] = $nome;
        $result['praia']['descricao'] = $descricao;
        $response->out($result);
    }

    function selectAll(){
        $response = new Output();
        $response->allowedMethod('GET');
        $praia = new Praia(null, null, null, null, null);
        $result = $praia->selectAll();
        $response->out($result);
    }

    function selectById(){
        $response = new Output();
        $response->allowedMethod('GET');
        $id = $_GET['id'];
        $praia = new Praia($id, null, null, null, null);
        $result = $praia->selectById();
        $response->out($result);
    }

}
?>