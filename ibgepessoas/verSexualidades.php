<?php
// Conexão com banco de dados
$conexao = new PDO('mysql:host=localhost;dbname=ibge', 'root', '');

// Cria o SQL para buscar os produtos
$sql = "SELECT * FROM sexualidades WHERE id = :id";

// Pega o ID da URL
$id = $_GET['id'];

// Prepara a SQL para evitar Invasões
$con = $conexao->prepare($sql);

// Executa a SQL com os parametros
$con->execute([':id' => $id]);

// Guarda o produto na variável
$sexualidade = $con->fetch();
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <title>Lista Sexualidades - Sexualidade - #<?= $sexualidade['id'] ?></title>
</head>

<body>
    <div class="container">
        <p class="display-3">Sexualidade: <?= $sexualidade['id'] ?></p>
        <div class="border p-2">
            <p>Id: <?= $sexualidade['id'] ?></p>
            <p>Sexualidade: <?= $sexualidade['titulo'] ?></p>
        </div>

        <div class="mt-3 d-flex gap-2">
            <a class="btn btn-outline-primary btn-sm" href="listaSexualidade.php">Voltar</a>
            <a class="ms-auto btn btn-warning btn-sm" href="#">Editar</a>
            <a class="btn btn-danger btn-sm" href="#">Apagar</a>
        </div>
    </div>
</body>

</html>