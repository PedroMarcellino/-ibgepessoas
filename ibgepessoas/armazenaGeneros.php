<html>
    <head>
        <title>Cadastro Pessoas</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Cadastro de Generos</h1>

            <?php
                if (isset($_GET['msg'])) {
                    $msg = $_GET['msg'];

                    echo "<div class='alert alert-info'>$msg</div>";
                }
            ?>

            <form action="cadastroGeneros.php" method="POST">
                <div class="mb-3">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo">
                </div>

                

                <div class="text-end">
                    <a class="btn btn-danger" href="index.php">Voltar</a>
                    <input type="submit" class="btn btn-success" value="Cadastrar">
                </div>
            </form>
        </div>
    </body>
</html>