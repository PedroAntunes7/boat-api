<?php
class BoatController{

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
        $trip = $_POST['trip'];
        $local = $_POST['local'];
        $comb = $_POST['comb'];

        
        //Processamento ou Persistencia
        $boat = new Boat(null, $img, $name, $price, $tipo, $estado, $ano_fab, $tamanho, $trip, $local, $comb );
        $id = $boat->create();
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
        $result['product']['trip'] = $trip;
        $result['product']['local'] = $local;
        $result['product']['comb'] = $comb;
        $response->out($result);
    }

    function delete(){
        $response = new Output();
        $response->allowedMethod('POST');

        $auth = new Auth();
        $user_session = $auth->allowedRole('admin');

        $id = $_POST['id'];
        $boat = new boat($id, null, null, null, null, null, null, null, null, null, null);
        $boat->delete();
        $result['message'] = "Barco deletado com sucesso!";
        $result['boat']['id'] = $id;
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
        $comb = $_POST['comb'];
        $boat = new Boat($id, $img, $name, $price, $tipo, $estado, $ano_fab, $tamanho, $trip, $local, $comb );
        $boat->update();
        $result['message'] = "Barco atualizado com sucesso!";
        $result['boat']['id'] = $id;
        $result['boat']['name'] = $name;
        $result['boat']['img'] = $img;
        $response->out($result);
    }

    function selectAll(){
        $response = new Output();
        $response->allowedMethod('GET');
        $boat = new Boat(null, null, null, null, null, null, null, null, null, null, null);
        $result = $boat->selectAll();
        $response->out($result);
    }

    function selectById(){
        $response = new Output();
        $response->allowedMethod('GET');
        $id = $_GET['id'];
        $boat = new Boat($id, null, null, null, null, null, null, null, null, null, null);
        $result = $boat->selectById();
        $response->out($result);
    }

}
?>