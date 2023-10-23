<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01 Fecha</title>
</head>
<body>
    <h2>Fecha</h2><br><br>
    <?php
        date_default_timezone_get('America/Asuncion');
        $dia_ingles = date('D');
        $var = "El dia: ";
        switch ($dia_ingles) {
            case 'Mon': echo "$var Lunes"; break;
            case 'Tue': echo "$var Martes"; break;
            case 'Wed': echo "$var Miercoles"; break;
            case 'Thu': echo "$var Jueves"; break;
            case 'Fri': echo "$var Viernes"; break;
            case 'Sat': echo "$var Sabado"; break;
            case 'Sun': echo "$var Domingo"; break;
        }
    ?>
</body>
</html>