<?php
    namespace POO\Projeto2\DAO;

    require_once('Conexao.php'); // acessando minha classe de conexão

    use POO\Projeto2\DAO\Conexao;

    class Inserir{
        public function Insert(Conexao $conexao, string $nomeTabela, int $cpf, string $nome, string $telefone, string $endereco, string $email){
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into $nomeTabela(cpf, nome, telefone, endereco, email) value('$cpf','$nome','$telefone','$endereco','$email')";
                $result = mysqli_query($conn, $sql);

                if($result){
                    return "<br><br>Inserido com sucesso!";

                }else{
                    return "<br><br>Não foi possivel inserir!";
                }
                mysqli_close($conn); // fechando a conexão com o Banco de Dados 
            }catch(Except $erro){
                echo $erro;
            }
        }
    }// fim do método inserir

?>