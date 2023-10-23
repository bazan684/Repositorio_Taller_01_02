<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <div>
        <h3>Bucle FOR</h3>
    </div>
    <div>
        <?php
        for ($indice=1; $indice<=100; $indice++) {
            echo 'Valor del Índice: ';
            echo $indice;
            echo '<br>';
        }
        ?>
    </div>
</body>
</html>