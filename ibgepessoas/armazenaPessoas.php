<html>
    <head>
        <title>Cadastro Pessoas</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Cadastro Pessoas</h1>

            <?php
                if (isset($_GET['msg'])) {
                    $msg = $_GET['msg'];

                    echo "<div class='alert alert-info'>$msg</div>";
                }
            ?>

            <form action="cadastroPessoas.php" method="POST">
                <div class="mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>

                <div class="mb-3">
                    <label for="cpf">CPF</label>
                    <input type="number" step="0.01" class="form-control" id="cpf" name="cpf">
                </div>

                <div class="mb-3">
                    <label for="rg">RG</label>
                    <input type="number" step="0.01" class="form-control" id="rg" name="rg">
                </div>

                <div class="mb-3">
                    <label for="data_nascimento">Nascimento</label>
                    <input type="date" step="0.01" class="form-control" id="data_nascimento" name="data_nascimento">
                </div>


                

                <div class="text-end">
                    <a class="btn btn-danger" href="index.php">Voltar</a>
                    <input type="submit" class="btn btn-success" value="Cadastrar">
                </div>
            </form>
        </div>
    </body>
</html>