<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
    <style>
        #dado {
            width: 100px; /* Establecer el ancho deseado */
            height: 100px; /* Establecer la altura deseada */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Serpientes y escaleras</h1>
        <?php

// Colores
$colores = array('#C80606', '#FFA200', '#4BEF4E', '#4BEFED', '#3535FF');

// Dibujar el tablero
echo '<table style="border-collapse: collapse;">';
$numero = 100;
for ($i = 0; $i < 10; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 10; $j++) {
        $color = $colores[array_rand($colores)];
        echo '<td style="width: 60px; height: 60px; text-align: center; background-color: ' . $color . ';">' . $numero . '</td>';
        $numero--;
    }
    echo '</tr>';
}
echo '</table>';
?>
    

    <?php
    //randomizer
    function dado(){
        $dado = array('dado/1.png','dado/2.png','dado/3.png','dado/4.png','dado/5.jpg','dado/6.jpg');
        $numero = $dado [rand(0, count($dado)-1)];
        return $numero;
    }
    //seleccion
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['boton'])) {
        }
    } else {
        $numero = 'dado/1.png'; // Imagen por defecto al cargar la página
    }
    $numero=dado();
    ?>
    
    <form method="POST">
        <input type="submit" value="Dado" name="dado">
    </form>
    <img id="dado" src="<?php echo $numero?>" alt="numero">
    </div>
</body>
</html>