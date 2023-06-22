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
            <?php
                    if(isset($_POST["carta1"])){
                        $carta1=$_POST["carta1"];
                        $carta2=$_POST["carta2"];
                    }else{
                        $carta1=[];
                        $total=0;
                        while($total<16){
                            $numero=rand(1,54);
                            if(array_search($numero,$carta1)===false){
                                $carta1[$total]=$numero;
                                $total++;
                            }
                        }
                        $carta2=[];
                        $total=0;
                        while($total<16){
                            $numero=rand(1,54);
                            if(array_search($numero,$carta2)===false){
                                $carta2[$total]=$numero;
                                $total++;
                            }
                        }
                    }
                    ?>
            <input type="submit" value="Carta" name="carta" class="btn btn-primary">
            <div class="row">
                <div class="col-6">
                    <div class="row m-1">
                    
                        <?php
                        
                        //cargar tablero
                        $carta;
                        for($i=1; $i<=16; $i++){
                            $numero = rand(1,54);
                            echo "<div class='col-3 p-0'><img  src='fotos_loteria/$numero.jpeg' class='img-thumbnail'></div>";
                            echo "<input type='hidden' name='carta1[]' value='".$carta1[$i]."'>";
                        }
                        ?>
                   </div>
                </div>
                <div class="col-6">
                    <div class="row m-1">
                        <?php
                        //cargar tablero
                    $carta;
                    for($i=1; $i<=16; $i++){
                        $numero = rand(1,54);
                        echo "<div class='col-3 p-0'><img  src='fotos_loteria/$numero.jpeg' class='img-thumbnail'></div>";
                        echo "<input type='hidden' name='carta1[]' value='".$carta1[$i]."'>";
                    }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>