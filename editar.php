<?php
    if (isset($_POST['id'])) {
        # code...
        $id = $_POST['id'];
        include 'model.php';
        $model = new Model();

        if ($row = $model->editar($id)) {
            # code...
            $data = array('result' => 'success', 'row' => $row);
        }else {
            # code...
            $data = array('result' => 'error');
        }

        echo json_encode($data);
    }
?>