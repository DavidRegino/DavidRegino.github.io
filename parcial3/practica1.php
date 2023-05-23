<?php
    echo "<h1>Hola Mundo</h1>";
    echo "<br>";
    $nombre = "David";
    $edad = 16;
    if($edad >= 18){
        echo $nombre . " es mayor de edad";
    }else{
          echo $nombre . " es menor de edad";  
    }
    echo "<br>";
    for($i=0; $i<10; $i++){
        echo $i . "<br>";
    }
?>    