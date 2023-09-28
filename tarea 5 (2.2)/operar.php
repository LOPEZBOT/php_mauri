<?php
if (isset($_REQUEST["calcular"])){
    if ($_REQUEST["operacion"]=="suma") {
        $suma = empty($_REQUEST["valor1"]) + empty($_REQUEST["valor2"]);
        echo "El resultado es ". $suma ."<br>";
    }elseif ($_REQUEST["operacion"]=="resta") {
        $resta = $_REQUEST["valor1"] + $_REQUEST["valor2"];
        echo "El resultado es ". $resta ."<br>";
    }elseif ($_REQUEST["operacion"]=="multiplicar") {
        $multp = $_REQUEST["valor1"] * $_REQUEST["valor2"];
        echo "El resultado es ". $multp ."<br>";
    }elseif($_REQUEST["operacion"]=="dividir") {
        $div = $_REQUEST["valor1"]/$_REQUEST["valor2"];
        echo "El resultado es ". $div ."<br>";
    }else{
        echo "Valores incorrecto";
    }
}
    ?>