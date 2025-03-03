<?php
    // Conectar ao banco de dados
    $conexao = new PDO('mysql:host=localhost;dbname=ibge', 'root', '');

    // Cria o SQL para buscar os produtos
    $sql = "SELECT id, titulo  FROM etnias";

    // Prepara a SQL para evitar SQL Injection
    $con = $conexao->prepare($sql);

    // Executa a SQL
    $con->execute();

    // Armazena os produtos em uma variável
    $etnias = $con->fetchAll();
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
            <h1>Lista de Etinias </h1>
            
        
            <table class="table">
                <tr>
                    <th>*</th>
                    <th>Etnias </th>
                    
                    
                </tr>

                <?php
                    // Executa uma vez para cada produto encontrado na lista de produtos
                    foreach ($etnias as $etnia) {
                        echo "<tr>
                                <td>{$etnia["id"]}</td>
                                <td>{$etnia["titulo"]}</td>
                                


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