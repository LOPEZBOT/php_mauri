<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calc-style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    $n1 = 0;
    $n2 = 0;
    $res = 0; 
    ?>
    <h1>Calculadora Basica</h1>
    <div class="calculadora">
    <input type="text" id="numero1" placeholder="Numero1" value="<?php echo $n1; ?>">
    <input type="text" id="numero2" placeholder="Numero2" value="<?php echo $n2; ?>">
    <input type="text" id="resultado" placeholder="Resultado"value="<?php echo $res; ?>">
    <br>
    <button id="sumar">+</button>
    <button id="restar">-</button>
    <button class="operador"> / </button>
    <button class="operador"> * </button>
    <button class="operador"> x <sup>y</sup> </button>
    </div>
</body>
</html>