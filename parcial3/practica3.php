<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 3 PHP - integrado con html</title>
</head>
<body>
    <h1>Usando PHP dentro de un HTML</h1>
    <?php
    $alumno = "David Regino";
    $edad = 16;
    $escuela = "CETIS107";
    $especialidad = "programación";
    ?>
    <form action="">
        <label for="">Nombre del alumno</label>
        <input type="text" value=<?php echo $alumno ?>>

        <label for="">Edad</label>
        <input type="number" value= <?php echo $edad ?>>

        <label for="">Escuela</label>
        <input type="text" value= <?php echo $escuela ?>>

        <input type="submit" value= <?php echo "'Inscribirse a ",$especialidad."'" ?>>
    </form>
    <br><br>

    <h2>Calificaciones</h2>
    Calculo Integral <?php echo rand(5,10)?><br>
    Física <?php echo rand(5,10)?><br>
    Ibarra <?php echo rand(5,10)?><br>
    Luis Carlos <?php echo rand(5,10)?><br>
    Ecologia <?php echo rand(5,10)?><br>
    Ingles <?php echo rand(5,10)?><br>
</body>
</html>