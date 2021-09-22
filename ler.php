<?php
    include 'model.php';
    $model = new Model();
    $rows = $model->buscarTodos();
    $data = array('rows' => $rows);
    echo json_encode($data);
?>