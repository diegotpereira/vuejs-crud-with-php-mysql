<?php
    if (isset($_POST['nome']) && isset($_POST['autor'])) {
        # code...
        $nome = $_POST['nome'];
        $autor = $_POST['autor'];

        include 'model.php';

        $model = new Model();

        if ($model->inserir($nome, $autor)) {
            # code...
            $data = array('result' => 'success');
        }else {
            # code...
            $data = array('result' => 'error');
        }
        echo json_encode($data);
    }
?>