<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
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
    <input type="button" value="Dado">

    </div>
</body>
</html>