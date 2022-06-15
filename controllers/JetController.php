<?php
class JetController{

    function create(){
        $response = new Output();
        $response->allowedMethod('POST');

        $auth = new Auth();
        $user_session = $auth->allowedRole('admin');

        //Entradas
        $img = $_POST['img'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $tipo = $_POST['tipo'];
        $estado = $_POST['estado'];
        $ano_fab = $_POST['ano_fab'];
        $tamanho = $_POST['tamanho'];
        $local = $_POST['local'];

        
        //Processamento ou Persistencia
        $jet = new Jet(null, $img, $name, $price, $tipo, $estado, $ano_fab, $tamanho, $local);
        $id = $jet->create();
        //Saída
        $result['message'] = "Barco Cadastrado com sucesso!";
        $result['product']['id'] = $id;
        $result['product']['img'] = $img;
        $result['product']['name'] = $name;
        $result['product']['price'] = $price;
        $result['product']['tipo'] = $tipo;
        $result['product']['estado'] = $estado;
        $result['product']['ano_fab'] = $ano_fab;
        $result['product']['tamanho'] = $tamanho;
        $result['product']['local'] = $local;
        $response->out($result);
    }

    function delete(){
        $response = new Output();
        $response->allowedMethod('POST');

        $auth = new Auth();
        $user_session = $auth->allowedRole('admin');

        $id = $_POST['id'];
        $jet = new Jet($id, null, null, null, null, null, null, null, null);
        $jet->delete();
        $result['message'] = "Barco deletado com sucesso!";
        $result['jet']['id'] = $id;
        $response->out($result);
    }

    function update(){
        $response = new Output();
        $response->allowedMethod('POST');

        $auth = new Auth();
        $user_session = $auth->allowedRole('admin');

        $id = $_POST['id'];
        $img = $_POST['img'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $tipo = $_POST['tipo'];
        $estado = $_POST['estado'];
        $ano_fab = $_POST['ano_fab'];
        $tamamho = $_POST['tamanho'];
        $trip = $_POST['trip'];
        $local = $_POST['local'];
        $jet = new Jet($id, $img, $name, $price, $tipo, $estado, $ano_fab, $tamanho, $local);
        $jet->update();
        $result['message'] = "Barco atualizado com sucesso!";
        $result['jet']['id'] = $id;
        $result['jet']['name'] = $name;
        $result['jet']['img'] = $img;
        $response->out($result);
    }

    function selectAll(){
        $response = new Output();
        $response->allowedMethod('GET');
        $jet = new Jet(null, null, null, null, null, null, null, null, null);
        $result = $jet->selectAll();
        $response->out($result);
    }

    function destaques(){
        $response = new Output();
        $response->allowedMethod('GET');
        $jet = new Jet(null, null, null, null, null, null, null, null, null);
        $result = $jet->selectAll();
        $response->out($result);
    }

    function selectById(){
        $response = new Output();
        $response->allowedMethod('GET');
        $id = $_GET['id'];
        $jet = new Jet($id, null, null, null, null, null, null, null, null);
        $result = $jet->selectById();
        $response->out($result);
    }

}
?>