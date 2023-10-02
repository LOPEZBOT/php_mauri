<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica4</title>
</head>
<body>
    <?php
    $zonas= array('Asuncion','San Lorenzo','Mariano');
    var_dump($zonas);
    ?>
    <hr>
    <?php
        class Auto{
            public $color;
            public $modelo;
            public function __construct($color, $modelo) {
                $this->color = $color;
                $this->modelo = $modelo;
            }
            public function ver(){
                return 'El auto es de color '. $this->color . ' y modelo '. $this->modelo;;
            }
        }
        $mi_auto= new Auto('Rojo','Tesla');
        echo $mi_auto->ver();
    ?>
    <hr>
    <?php
    $x='Hola Mundo';
    $x=null;
    var_dump($x);
    ?>
</body>
</html>