<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Sequência de Fibonacci</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <form method="POST">
                <h1>Digite um número</h1>
                <div class="col-2">
                    <input type="number" class="form-control mt-3" name="randomNumber" id="randomNumber" required>
                    <button type="submit" class="btn btn-primary form-control mt-3 mb-3">Verificar</button>
                </div>

                    <?php

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $randomNumber = (int) $_POST['randomNumber'];
                    }

                    $a = 0;
                    $b = 1;
                    $found = false;

                    while ($b <= $randomNumber) {
                        if ($b == $randomNumber) {
                            echo "O número " . $randomNumber . " pertence à sequência de Fibonacci.";
                            $found = true;
                            break;
                        }

                        $sequencia = $a + $b;
                        $a = $b;
                        $b = $sequencia;

                    }


                    if (!$found) {
                        echo "O número " . $randomNumber . " NÃO pertence à sequência de Fibonacci.";
                    }
                    ?>

            </form>
        
    </div>
    </div>
</body>

</html>