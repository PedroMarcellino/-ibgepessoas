<?php
    // Conectar ao banco de dados
    $conexao = new PDO('mysql:host=localhost;dbname=ibge', 'root', '');

    // Cria o SQL para buscar os produtos
    $sql = "SELECT id, nome, rg, cpf, data_nascimento FROM pessoas";

    // Prepara a SQL para evitar SQL Injection
    $con = $conexao->prepare($sql);

    // Executa a SQL
    $con->execute();

    // Armazena os produtos em uma variável
    $pessoas = $con->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <title>Lista de Cadastro</title>
    </head>

    <body>
        <div class="container">
            <h1>Lista de Cadastro</h1>
            
        
            <table class="table">
                <tr>
                    <th>*</th>
                    <th>Nome</th>
                    <th>RG</th>
                    <th>CPf</th>
                    <th>Data Nascimento</th>
                </tr>

                <?php
                    // Executa uma vez para cada produto encontrado na lista de produtos
                    foreach ($pessoas as $pessoa) {
                        echo "<tr>
                                <td>{$pessoa["id"]}</td>
                                <td>{$pessoa["nome"]}</td>
                                <td> {$pessoa["rg"]}</td>
                                <td> {$pessoa["cpf"]}</td>
                                <td> {$pessoa["data_nascimento"]}</td>


                                <td>
                                    <a class='btn btn-sm btn-success' href='verPessoas.php?id={$pessoa["id"]}'>Ver</a>
                                </td>


                            </tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>