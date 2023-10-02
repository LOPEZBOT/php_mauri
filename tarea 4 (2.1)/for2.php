<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR 2</title>
    <style>
        .div-num{
            display: flex;
            margin: 1px;
            flex-wrap: wrap;
        }
        .estilo_par{
            margin-left: 8px;
            color:red;
        }
        .estilo_impar{
            margin-left: 8px;
            color:green;
        }
    </style>
</head>
<body>
    <div class="div-num">
    <?php
    for ($x=1; $x <= 100 ; $x++) { 
        if($x % 2 == 0){
            echo "<p class='estilo_par'>$x</p>";
        }else{
            echo "<p class='estilo_impar'>$x</p>";
        }
    }
    ?></div>
</body>
</html>