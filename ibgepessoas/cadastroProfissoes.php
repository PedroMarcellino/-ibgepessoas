<?php
    // Recebe as informações do formulário

    $titulo = $_POST['titulo']; // Pega o valor do campo nome do POST e armazena na variável $nome


    // Variavel para mensagem de retorno
    $mensagem = '';

    // Verifica se as informações estão corretas
    if (empty($titulo)) {
        $mensagem = "O campo nome é obrigatório"; // Mensagem de erro
        header("Location: index.php?msg=$mensagem"); // Volta para a tela de cadastro
    } 



    // Conectar ao banco de dados
    $conexao = new PDO('mysql:host=localhost;dbname=ibge', 'root', '');

    // Cria a SQL para inserir o produto
    $sql = "INSERT INTO profissoes (
                titulo
                
            ) VALUES (
                :titulo
            )";

    // Prepara a SQL
    $state = $conexao->prepare($sql);

    // Executa a SQL
    $state->execute([
        ':titulo' => $titulo,
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