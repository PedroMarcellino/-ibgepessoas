<?php
    // Recebe as informações do formulário

    $nome = $_POST['nome']; // Pega o valor do campo nome do POST e armazena na variável $nome
    $estados = $_POST['estados'];
    $pais = $_POST['pais'];
    $cep = $_POST ['cep'];


    // Variavel para mensagem de retorno
    $mensagem = '';

    // Verifica se as informações estão corretas
    if (empty($nome)) {
        $mensagem = "O campo nome é obrigatório"; // Mensagem de erro
        header("Location: index.php?msg=$mensagem"); // Volta para a tela de cadastro
    } 

    if (empty($estados) || empty($pais))
    {
        $mensagem = "O campo preço e descrição são obrigatórios";
        header("Location: index.php?msg=$mensagem");
    }

    // Conectar ao banco de dados
    $conexao = new PDO('mysql:host=localhost;dbname=ibge', 'root', '');

    // Cria a SQL para inserir o produto
    $sql = "INSERT INTO cidades (
                nome, 
                estados, 
                pais,
                cep
            ) VALUES (
                :nome,
                :estados,
                :pais,
                :cep
            )";

    // Prepara a SQL
    $state = $conexao->prepare($sql);

    // Executa a SQL
    $state->execute([
        ':nome' => $nome,
        ':estados' => $estados,
        ':pais' => $pais,
        ':cep' => $cep
    ]);

    // Verificar se deu certo
    $armazenou = $conexao->lastInsertId();

    // Redirecionar para a tela de cadastro
    if ($armazenou) { // Se armazenou for verdadeiro
        $mensagem = "Produto cadastrado com sucesso!";
        header("Location: index.php?msg=$mensagem");
    } else { // Se armazenou for falso
        $mensagem = "Erro ao cadastrar o produto";
        header("Location: index.php?msg=$mensagem");
    }