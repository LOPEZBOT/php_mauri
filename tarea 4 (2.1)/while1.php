<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
    <style>
        .container{
            display: flex;
            flex-wrap: wrap;
            flex-grow: 5;
        }
        p{
            margin: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    $temperatura= 0;

    while ($temperatura <=100){
        $Rojo = round(($temperatura / 100) * 255);
        $color = "color: rgb($Rojo, 0,0);"; 
        echo "<p style='$color'>La temperatura es: $temperatura </p>";
        $temperatura++;
    }
    ?></div>
</body>
</html>