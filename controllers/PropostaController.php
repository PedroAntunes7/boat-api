<?php

class PropostaController{

    function create(){
        $response = new Output();
        $response->allowedMethod('POST');

        $auth = new Auth();
        $user_session = $auth->allowedRole('admin');

        //Entradas
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $proposta = $_POST['proposta'];


        
        //Processamento ou Persistencia
        $proposta = new Proposta(null, $name, $email, $telefone, $proposta);
        $id = $proposta->create();
        //Saída
        $result['message'] = "Proposta Cadastrada com sucesso!";
        $result['proposta']['id'] = $id;
        $result['proposta']['name'] = $name;
        $result['proposta']['email'] = $email;
        $result['proposta']['telefone'] = $telefone;
        $result['proposta']['proposta'] = $proposta;
        $response->out($result);
    }

    function delete(){
        $response = new Output();
        $response->allowedMethod('POST');

        $auth = new Auth();
        $user_session = $auth->allowedRole('admin');

        $id = $_POST['id'];
        $proposta = new Proposta ($id, null, null, null, null);
        $proposta->delete();
        $result['message'] = "Proposta deletada com sucesso!";
        $result['proposta']['id'] = $id;
        $response->out($result);
    }

    function update(){
        $response = new Output();
        $response->allowedMethod('POST');

        $auth = new Auth();
        $user_session = $auth->allowedRole('admin');

        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $proposta = $_POST['proposta'];;
        $proposta = new Proposta($id, $name, $email, $telefone, $proposta);
        $proposta->update();
        $result['message'] = "Proposta atualizada com sucesso!";
        $result['proposta']['id'] = $id;
        $result['proposta']['name'] = $name;
        $result['proposta']['email'] = $email;
        $result['proposta']['telefone'] = $telefone;
        $result['proposta']['proposta'] = $proposta;
        $response->out($result);
    }

    function selectAll(){
        $response = new Output();
        $response->allowedMethod('GET');
        $proposta = new Proposta(null, null, null, null, null);
        $result = $proposta->selectAll();
        $response->out($result);
    }

    function selectById(){
        $response = new Output();
        $response->allowedMethod('GET');
        $id = $_GET['id'];
        $proposta = new Proposta($id, null, null, null, null);
        $result = $proposta->selectById();
        $response->out($result);
    }

}
?>