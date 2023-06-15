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
            echo "<table style='border: 1px solid black;'>";
            $contador = 1;
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr style='border: 1px solid black;'>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td style='position: relative; border: 1px solid black;'>$contador</td>";
                    $contador++;
                }
                echo "</tr>";
            }
                echo "</table>";
        ?>
    </div>
</body>
</html>