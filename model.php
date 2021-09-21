<?php
    Class Model {
        private $host = 'localhost';
        private $nomeUsuario = 'root';
        private $senha = 'root';
        private $nomeBanco = 'db_vuejs_crud_with_php_mysql';
        private $conexao;

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

            if ($sql = $this->conexao->query($query)) {
                # code...
                return true;
            } else {
                # code...
                return;
            }
            
        }
    }
?>