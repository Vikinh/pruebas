<?php
    $usuario=$_POST['usuario'];
    $correo=$_POST['correo'];
    $fecha=$_POST['fecha'];
    $telefono=$_POST['telefono'];
    $prefijo=$_POST['prefijo'];
    $cliente=$_POST['cliente'];
    echo $usuario;
    echo "<br>";
    echo $correo;
    echo "<br>";
    echo $fecha;
    echo "<br>";
    echo "(",$prefijo,") ",$telefono;
    echo "<br>";
    echo $cliente;
?>