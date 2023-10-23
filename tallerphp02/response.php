<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESPONSE</title>
</head>
<body>
    <div>
        <h3>Respuesta PHP a Petición</h3>
    </div>
    <div>
        <?php
            if (isset($_POST['numero']) && !empty($_POST['numero'])) {
                $numero = $_POST['numero'];
                $inicio=1;
                while ($inicio<=$numero) {
                    echo'Valor generado: ' . $inicio;
                    $inicio++;
                }
            } else {
                echo'Valor no válido. ';
            }
        ?>
    </div>
</body>
</html>