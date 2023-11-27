<?php
    namespace POO\Projeto2\DAO;

    class Conexao{
        public function Conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','bancoPhp');
                if($conn){
                    echo "Conectado com sucesso!";
                    return $conn;
                }

            }catch(Except $erro){
                echo $erro;
            }
        }// fim do método
    }// fim da classe



?>