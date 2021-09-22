<?php
     if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['autor'])) {
         # code...
         $id = $_POST['id'];
         $nome = $_POST['nome'];
         $autor = $_POST['autor'];

         include 'model.php';

         $model = new Model();

         if ($model->atualizar($id, $nome, $autor)) {
             # code...
             $data = array('result' => 'success');
         } else {
             # code...
             $data = array('result' => 'error');
         }
         echo json_encode($data);
     }
?>