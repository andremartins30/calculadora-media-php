<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Calculadora de Média</title>
</head>
<body>
    
    <h1>Calculadora de Média</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nota1">Nota 1:</label>
        <input type="text" name="nota1" id="nota1"><br>

        <label for="nota2">Nota 2:</label>
        <input type="text" name="nota2" id="nota2"><br>

        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];

        // Validar se os campos não estão vazios
        if (empty($nota1) || empty($nota2)) {
            echo '<p class="error">Por favor, preencha todos os campos de nota.</p>';
        } else {
            $nota1 = floatval($nota1);
            $nota2 = floatval($nota2); 

            $media = ($nota1 + $nota2) / 2;

            echo '<p class="result">';

                if ($media >= 6) {
                    echo 'Parabéns! A média é ' . $media . ', e o aluno está Aprovado';
                } else {
                    echo 'Que pena! A média é ' . $media . ', e o aluno está Reprovado';
                }

                echo '</p>';

    }}
    ?>
</body>
</html>
