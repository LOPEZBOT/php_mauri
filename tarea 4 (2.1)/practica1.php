<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar 2 numeros en php</title>
</head>
<body>
<?php
    $num1="";    
    $num2="";
    if ($_POST){
        $num1=$_POST['numero1'];
        $num2=$_POST['numero2'];
    }
?>
<h2>Suma de 2 numeros en php</h2>
<form action="practica1.php" method="post">
    <table>
     <tr><td>
        <input type="text" name="numero1" placeholder="Teclee un numero" value="<?php echo $num1;?>">
     </td></tr>
     <tr><td>
        <input type="text" name="numero2" placeholder="Teclee un numero" value="<?php echo $num2;?>">
     </td></tr>
     <tr><td>
        <input type="submit" value="sumar">
     </td></tr>
    </table>
</form>
<?php
if ($_POST){
       $suma= $num1 + $num2;
       echo 'La suma de '. $num1 . ' y '. $num2 . ' es: '. $suma;
    }
?>
</body>
</html>