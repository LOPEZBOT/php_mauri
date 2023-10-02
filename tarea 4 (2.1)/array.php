<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
    <?php
    $dia[0]="domingo";
    $dia[1]="lunes";
    $dia[2]="martes";
    $dia[3]="miercoles";
    $dia[4]="jueves";
    $dia[5]="viernes";
    $dia[6]="sabado";

    $mes = array("enero", "febrero", "marzo");

    echo "Dia: ", $dia[5], "</p>";
    echo "Mes: ", $mes[1], "</p>";
    ?>
<?php
$autos=array("Volvo", "BMW", "Toyota");
$arrayLongitud= count($autos);
for ($x=0; $x < $arrayLongitud; $x++) { 
    echo $autos[$x];
    echo "<br>";  
}
?>


</body>
</html>