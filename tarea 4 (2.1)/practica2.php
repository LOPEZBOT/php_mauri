<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica2</title>
</head>
<body>
    <?php
     $dia= date('d');
     $mes= date('M');
     if($dia < 15){
        echo 'Falta Poco para la quincena';
     }else{
        echo 'Ya nos adelantamos de la quincena hoy es: '. $dia . ' De '. $mes;
     }
     ?>
</body>
</html>