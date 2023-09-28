<?php
include ("function.php");
if(isset($_REQUEST)){
    $operacion= $_REQUEST["operacion"];
    $valor_1= $_REQUEST["valor1"];
    $valor_2= $_REQUEST["valor2"];
    validar_numero($valor_1);
    validar_numero($valor_2);
    calcular($valor_1, $valor_2, $operacion);
}

?>
