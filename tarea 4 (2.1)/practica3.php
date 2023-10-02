<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica3</title>
</head>
<body>
    <?php
    $x=5;
    function MyTest(){
        echo '<p>Variable dentro de la funcion: '. $GLOBALS['x'] . '</p>';
    }
    MyTest();

    echo'<p>Variable desde fuera de la funcion '. $x . '</p>';
    ?>
</body>
</html>