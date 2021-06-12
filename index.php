<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$fecha = $_POST['fecha_nacimiento'];
$color = $_POST['color'];
$rango = $_POST['rango'];
$pass = $_POST['pass'];
$mail = $_POST['correo'];
$url = $_POST['url'];
$telefono = $_POST['telefono'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="formulario">
            <div><?php echo($nombre); ?></div>
            <div><?php echo($edad); ?></div>
            <div><?php echo($fecha); ?></div>
            <div><?php echo($color); ?></div>
            <div><?php echo($rango); ?></div>
            <div><?php echo($pass); ?></div>
            <div><?php echo($mail); ?></div>
            <div><?php echo($url); ?></div>
            <div><?php echo($telefono); ?></div> 
    
    </div>
        </div>
    
    <p></p>
</body>
</html>