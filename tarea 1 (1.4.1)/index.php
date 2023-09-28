<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tienda Mauri</title>
    <style>
        body{
            background-color: black;
            font-family: sans-serif;
            width: 100%;
        }
        .logo{
            max-width: 150px;
        }
        .header{
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin: 15px;
        }
        a{
            color: aliceblue;
        }
        .container{
            margin: auto;
            width: 90%;
            margin-top: 10px;
        }
        h1{
            font-size: 20pt;
            color: white;
            background-color: black;
            margin: 10px;
        }
        p{
            font-size: 18pt;
            color: wheat;
        }
        input, button{
            padding: 5px;
        }
        h3{
            color: wheat;
        }
        .img-producto{
            width: 200px;
            height: 200px;
            transition: 300ms;
        }
        .img-producto:hover{
            transform:scale(1.5) ;
        }
        .btn-header{
            text-decoration: none;
            margin-left: 5px;
        }
        #buscar{
            width: 300px;
            height: 40px;
            border-radius: 15px;
        }
        button{
            padding: 8px;
            border-radius: 10px;
        }
        h3, form{
            text-align: center;
        }
        input{
            border-radius: 10px;
        }
        textarea{
            width: 64%;
            border-radius: 10px;
            margin: 8px;
        }
        .enviar{
            width: 20%;
        }
        .contact{
            padding: 0px;
            border: 2px solid white;
            border-radius: 10px;
            margin: 10px;
            margin-left: 20px;
        }
        .contact input{
            margin-bottom: 10px;
        }
            </style>
</head>
<body>
<?php
echo "infomacion sobre php" .phpinfo();
echo "Version actual de php:" .phpversion();
?>     

<div class="header" >
    <div class="col-md3">
    <img class="logo" src="snikers/descarga.png" alt="">
    </div>
    <div class="col-md4">
    <form class="nav-header">
        <input type="search" name="search" id="buscar">
        <button type="submit">Buscar</button>
    </form>
    </div>
    <div class="nav-header" >
        <a class="btn-header" href=""> Inicio</a>
        <a class="btn-header"  href="">Tienda</a>
        <a class="btn-header"  href="">Ubicacion</a>
        <a class="btn-header"  href="">Contacto</a>
    </div>
</div>
<div class="container">

<hr>
<h3>Productos Destacados</h3>
<img src="snikers/calzado-dunk-high-retro-1PhQRw.jpg" alt="" class="img-producto">
<img src="snikers/nike-dunk-low-laser-orange-cu1726-901-date-sortie4.webp" alt="" class="img-producto">
<img src="snikers/Scarpe-Nike-Dunk-Low-Retro-QS-Sneakers-Bambini-Jordan-1-small-14852-610.jpg" alt="" class="img-producto">
<img src="snikers/Produktbild-1.jpg" alt="" class="img-producto">
</div>
    </div>
<div class="row">
    <div class="contact col-md-6">
        <h3>Contacto</h3>
        <form action="">
            <input type="text" placeholder="Nombre">
            <input type="text" placeholder="Apellido">
            <br>
            <input type="email" name="" id="" placeholder="Correo electronico">
            <input type="number" name="" id="" placeholder="Numero de telefono">
            <br>
            <textarea name="" id="" cols="30" rows="5" placeholder="Me interesa este producto..."></textarea>
            <br>
            <button class="enviar" type="submit">Enviar</button>
        </form>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>