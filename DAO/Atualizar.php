<?php
    namespace POO\Projeto2\DAO;

    require_once('Conexao.php');

    use POO\Projeto2\DAO\Conexao;

    class Atualizar{
        public function Atuali(Conexao $conexao, string $nomeTabela, int $cpf, string $campo, string $valor){
            try{
                $conn = $conexao->Conectar();
                $sql = "Update $nomeTabela set $campo = '$valor' where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "<br><br> Atualizado com sucesso!";
                }else{
                    echo "<br><br> Não atualizado!";
                }// fi, do se é do else

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }// fim do catcj
        }// fim do método
    }// fim da classe

?>