<?php
    namespace POO\Projeto2;

    require_once('Modelo/Pessoa.php');// requisitando o uso do arquivo pessoa 
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');

    use POO\Projeto2\Modelo\Pessoa; // acessar e usar todos os métodos desse arquivo
    use POO\Projeto2\DAO\Conexao; // acessar e usar todos os métodos desse arquivo
    use POO\Projeto2\DAO\Inserir; // acessar e usar todos os métodos desse arquivo
    use POO\Projeto2\DAO\Consultar; // acessar e usar todos os métodos desse arquivo
    use POO\Projeto2\DAO\Atualizar; // acessar e usar todos os métodos desse arquivo
    use POO\Projeto2\DAO\Excluir; // acessar e usar todos os métodos desse arquivo

    $pessoa = new Pessoa("123457","Allan","119984687634","Avenida Senador vergueiro","allan.sobral");


    // banco de dados 
    $conexao = new Conexao(); // acionar banco

    //inserir os dados no banco 
    //$inserir = new Inserir(); // acessando classe Inserir
    //echo $inserir->Insert($conexao,"pessoa",$pessoa->getCPF(),$pessoa->getNome(),$pessoa->getTelefone(),$pessoa->getEndereco(),$pessoa->getEmail());
    
    // consulta no banco de dados 
    $consultar = new Consultar();
    //$consultar->ConsultarIndividual($conexao, "pessoa", "123457");
    $consultar->ConsultarTudo($conexao, "pessoa");
    
    // atualizando 
    $atualizar = new Atualizar();
    //$atualizar->Atuali($conexao, "pessoa", "123457", "nome", "Jaime Torres");
    
    $excluir = new Excluir();
    $excluir->Deletar($conexao, "pessoa", "123457");
    
?>