<?php
function validar_numero($x){
if ($x == "" || $x == null) {
   header("Location: calc.html");
   exit();
}
}
function calcular($x,$y,$o){
    if ($o =="suma") {
        echo $x + $y;
    }elseif ($o =="resta") {
        echo $x - $y;
    }elseif ($o =="multiplicar") {
       echo  $x * $y;
    }elseif($o =="dividir") {
        echo $x / $y;
    }else{
        echo "Valores incorrecto";
    }
}
?>