<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>Loteria</h1>
        <form action="practica8.php" method="POST">
            <input type="submit" value="Carta" name="carta" class="btn btn-primary">
            <div class="row">
                <div class="col-6">
                    <?php
                    //cargar tablero
                    $carta;
                    for($i=1; $i<=16; $i++){
                        $numero = rand(1,54);
                        echo "<img  src='fotos_loteria/$numero.jpeg' class='img-fluid' width='25%'>";
                        if($i==4 || $i==8 || $i==12 || $i==16){
                            echo "<br>";
                        }
                    }
                    
                    ?>
                </div>
                <div class="col-6">

                </div>
            </div>
        </form>
    </div>
</body>
</html>