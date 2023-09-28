<?php
if (isset($_REQUEST["calcular"])){
switch ($_REQUEST["operacion"]) {
    case "suma":
        $suma = $_REQUEST["valor1"] + $_REQUEST["valor2"];
        echo "El resultado es ". $suma . "<br>";
        break;
    case "resta":
        $resta = $_REQUEST["valor1"] + $_REQUEST["valor2"];
        echo "El resultado es ". $resta . "<br>";
        break;
    case "multiplicar":
        $multp = $_REQUEST["valor1"] * $_REQUEST["valor2"];
        echo "El resultado es ". $multp. "<br>";
        break;
    case "dividir":
        $div = $_REQUEST["valor1"]/$_REQUEST["valor2"];
        echo "El resultado es ". $div ."<br>";
        break;    
}
}?>