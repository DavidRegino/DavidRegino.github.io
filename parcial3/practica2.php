<?php
    $nombre = $_GET["Nombre"];
    echo "Nombre: ".$nombre;
    echo "<br>";

    $edad = $_GET["Edad"];
    echo "Edad: ".$edad;
    echo "<br>";

    $escuela = $_GET["Escuela"];
    echo "Escuela: ".$escuela;
    echo "<br>";

    $fecha_de_ingreso = $_GET["Fecha_de_ingreso"];
    echo "Fecha de ingreso: ".$fecha_de_ingreso;
    echo "<br>";

    $direccion = $_GET["Dirección"];
    echo "Dirección: ".$direccion;
    echo "<br>";

    if($edad >= 18){
        echo "Es Mayor de Edad";
    }else{
        echo "Es Menor de Edad";
    }
    if($escuela == "CETIS 107"){
        echo "<div style= 'background-color: blue;'>CETIS 107</div>";
    }elseif($escuela == "CBTIS 224"){
        echo "<div style= 'background-color: red;' >CBTIS 224</div>";
    }elseif($escuela == "COBAES"){
        echo "<div style= 'background-color: green;'>COBAES</div>";
    }
?>