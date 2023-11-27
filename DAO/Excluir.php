<?php
    namespace POO\Projeto2\DAO;

    require_once('Conexao.php');

    use POO\Projeto2\DAO\Conexao;

    class Excluir{
        public function Deletar(Conexao $conexao, string $nomeTabela, int $cpf){
            try{
                $conn = $conexao->Conectar();
                $sql = "delete from $nomeTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "<br><br> Excluido com sucesso!";
                }else{
                    echo "<br><br> Não foi possivel excluir!";
                }// fim do if é do else
                mysqli_close($conn); // fechando a conexão com o Banco de Dados 

            }catch(Except $erro){
                echo $erro;
            }// fim do try é do catch
        }// fim do metodo excluir
    }// fim do excluir
?>