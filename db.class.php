<?php
    class db {
        /*private $host = 'localhost';
        private $usuario = 'id15704737_root';
        private $senha = '#G6zOwAU]1~|>>*!';
        private $database = 'id15704737_guiadoprogramador';*/
        private $host = 'localhost';
        private $usuario = 'root';
        private $senha = '';
        private $database = 'guia-do-programador';
        public function conecta_mysql(){
            //criar conexao
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
            //ajustar o charset de comunicação entre a aplicação e o banco de dados
            mysqli_set_charset($con, 'utf8');
            //verificar se houve erro de conexão
            if(mysqli_connect_errno()){
               // echo 'Erro ao tentar se conectar com BD MySQL: ' . mysqli_connect_error();
            }
            return $con;
        }
    }
?>