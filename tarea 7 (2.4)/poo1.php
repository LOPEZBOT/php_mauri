<?php
class Automovil {
    public $color;
    public $motor;
    public $marca;

    public function obtener_color()
    {
        return $this->color;
    }
}
$auto1 = new Automovil();
$auto1 -> color = "verde";
$auto1 -> motor = "2.0";
$auto1 -> marca = "toyota";

$auto2= new Automovil();
$auto2 -> color = "gris";
$auto2 -> motor = "1.5";
$auto2 -> marca = "ford";

$auto3 = new Automovil();
$auto3 -> color = "Blanco";
$auto3 -> motor = "1.3";
$auto3 -> marca = "Nissan";
?>
<h3>Imprimir colores de autos disponibles</h3>
<?php 
echo "Primer auto: ". $auto1 -> obtener_color();
echo "<br>Segundo auto: ". $auto2 -> obtener_color();
echo "<br>Tercer auto: ". $auto3 -> obtener_color();
?>