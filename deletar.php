<?php
    if (isset($_POST['id'])) {
        # code...
        $id = $_POST['id'];
        include 'model.php';
        $model = new Model();

        if ($model->deletar($id)) {
            # code...
            $data = array('result' => 'success');
        } else {
            # code...
            $data =  array('result' => 'error');
        }

        echo json_encode($data);
        
    }
?>