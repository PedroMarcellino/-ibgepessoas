<html>
    <head>
        <title>Cadastro Cidades</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Cadastro Cidades</h1>

            <?php
                if (isset($_GET['msg'])) {
                    $msg = $_GET['msg'];

                    echo "<div class='alert alert-info'>$msg</div>";
                }
            ?>

            <form action="cadastroCidades.php" method="POST">
                <div class="mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>

                <div class="mb-3">
                    <label for="estados">Estados</label>
                    <input type="text"  class="form-control" id="estados" name="estados">
                </div>

                <div class="mb-3">
                    <label for="pais">Pais</label>
                    <input type="text"  class="form-control" id="pais" name="pais">
                </div>

                <div class="mb-3">
                    <label for="cep">Cep</label>
                    <input type="number" step="0.01" class="form-control" id="cep" name="cep">
                </div>


                

                <div class="text-end">
                    <a class="btn btn-danger" href="index.php">Voltar</a>
                    <input type="submit" class="btn btn-success" value="Cadastrar">
                </div>
            </form>
        </div>
    </body>
</html>