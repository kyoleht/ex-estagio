<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Verificação de String</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Escreva uma palavra</h1>
            <div class="col-6">
                <form method="POST">
                    <input type="text" class="form-control mt-3" name="palavra" id="palavra" required>
                    <button type="submit" class="btn btn-primary mt-3">Avançar</button>
                </form>

                <?php

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $palavra = (string) $_POST['palavra'];
                    $palavra = strtolower($palavra);
                }

                $letra = 'a';

                $posicao = stripos($palavra, $letra);
                $contagem = substr_count($palavra, $letra);

                if ($posicao === false) {
                    echo "A letra 'A' NÃO foi encontrada na sua palavra " . $palavra;
                } else {
                    echo "Encontrado 'A' em sua palavra " . $contagem . " vez(es)";
                }

                ?>

            </div>
        </div>
    </div>
</body>

</html>