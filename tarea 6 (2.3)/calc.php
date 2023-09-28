<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        Ingresar su primer valor
        <input type="number" name="valor1"><br>
        Ingresar su segundo valor
        <input type="number" name="valor2"><br>
        <select name="operacion" id="">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br> <input type="submit" value="Calcular" name="calcular">
    </form>
 <?php
 echo "Con if else: ";
 include ("operar.php");
 echo "<br>Con Switch: ";
 include ("operarSwitch.php");
 ?>

</body>
</html>