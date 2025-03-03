<?php
    // Conectar ao banco de dados
    $conexao = new PDO('mysql:host=localhost;dbname=ibge', 'root', '');

    // Cria o SQL para buscar os produtos
    $sql = "SELECT id, nome, estados, pais, cep FROM cidades";

    // Prepara a SQL para evitar SQL Injection
    $con = $conexao->prepare($sql);

    // Executa a SQL
    $con->execute();

    // Armazena os produtos em uma variável
    $cidades = $con->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <title>Lista de Cidades</title>
    </head>

    <body>
        <div class="container">
            <h1>Lista de Cidades</h1>
            
        
            <table class="table">
                <tr>
                    <th>*</th>
                    <th>Nome</th>
                    <th>estado</th>
                    <th>pais</th>
                    <th>cep</th>
                </tr>

                <?php
                    // Executa uma vez para cada produto encontrado na lista de produtos
                    foreach ($cidades as $cidade) {
                        echo "<tr>
                                <td>{$cidade["id"]}</td>
                                <td>{$cidade["nome"]}</td>
                                <td> {$cidade["estados"]}</td>
                                <td> {$cidade["pais"]}</td>
                                <td> {$cidade["cep"]}</td>


                                <td>
                                    <a class='btn btn-sm btn-success' href='#'>Ver</a>
                                </td>


                            </tr>";
                    }
                ?>
            </table>
        </div>
    </body>
</html>