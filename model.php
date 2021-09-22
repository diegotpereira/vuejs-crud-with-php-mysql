<?php
    Class Model {
        private $host = 'localhost';
        private $nomeUsuario = 'root';
        private $senha = 'root';
        private $nomeBanco = 'db_vuejs_crud_with_php_mysql';
        private $connection;

        // Criar Conexão
        public function __construct() 
        {
            try {
                //code...
                $this->connection = new mysqli($this->host, $this->nomeUsuario, $this->senha, $this->nomeBanco);

            } catch (Exception $e) {
                echo "Erro na Conexão" . $e->getMessage();
            }
        }

        // Inserir Registro de Livro no Banco de Dados
        public function inserir($nome, $autor) {
            $query = "INSERT INTO tb_livro (livro_nome, livro_autor) VALUES ('".$nome."', '".$autor."')";

            if ($sql = $this->connection->query($query)) {
                # code...
                return true;
            } else {
                # code...
                return;
            }
            
        }
        public function buscarTodos() {
            $data = [];
            $query =  "SELECT * FROM tb_livro";
            
            if ($sql = $this->connection->query($query)) {
                # code...
                while($rows = mysqli_fetch_assoc($sql)) {
                    $data[] = $rows;
                }
            }
            return $data;
        }
        public function deletar($id) {
            $query = "DELETE FROM tb_livro WHERE livro_id = '".$id."' ";

            if ($sql = $this->connection->query($query)) {
                # code...
                return true;
            } else {
                # code...
                return;
            }
            
        }
        public function editar($id) {
            $data = [];
            $query = "SELECT * FROM tb_livro WHERE livro_id = '".$id."' ";

            if ($sql = $this->connection->query($query)) {
                # code...
                $row = mysqli_fetch_row($sql);
                $data = $row;
            }
            return $data;
        }
        public function atualizar($id, $nome, $autor) {
            $query = "UPDATE tb_livro SET livro_nome = '".$nome."', livro_autor = '".$autor."' WHERE livro_id = '".$id."' ";

            if ($sql = $this->connection->query($query)) {
                # code...
                return true;
            } else {
                # code...
                return;
            }
            
        }
    }
?>