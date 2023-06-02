<?php
echo "<body style='background-color:black; color:white'>";
    $nombre = $_POST["Nombre"];
    echo "Nombre: ".$nombre;
    echo "<br>";
    $calificacion = 0;
    $p1 = $_POST["p1"];
    $p2 = $_POST["p2"];
    $p3 = $_POST["p3"];
    $p4 = $_POST["p4"];
    $p5 = $_POST["p5"];
    $p6 = $_POST["p6"];
    $p7 = $_POST["p7"];
    $p8 = $_POST["p8"];
    $p9 = $_POST["p9"];
    $p9 = $_POST["p9"];
    $p10 = $_POST["p10"];

    echo "Respuesta: ".$p1;
    if($p1 == "b"){
        $calificacion++;
        echo "<br><img src='bien.png' width='5%px'><hr>";
    }else{
        echo " correcta b<br><img src='mal.gif' width='5%px'><hr>";
    }
echo "<br>";
    echo "Respuesta: ".$p2;
    if($p2 == "a"){
        $calificacion++;
        echo "<br><img src='bien.png' width='5%px'><hr>";
    }else{
        echo " correcta a<br><img src='mal.gif' width='5%px'><hr>";
    }
echo "<br>";
    echo "Respuesta: ".$p3;
    if($p3 == "c"){
        $calificacion++;
        echo "<br><img src='bien.png' width='5%px'><hr>";
    }else{
        echo " correcta c<br><img src='mal.gif' width='5%px'><hr>";
    }
echo "<br>";
    echo "Respuesta: ".$p4;
    if($p4 == "a"){
        $calificacion++;
        echo "<br><img src='bien.png' width='5%px'><hr>";
    }else{
        echo " correcta a<br><img src='mal.gif' width='5%px'><hr>";
    }
echo "<br>";
    echo "Respuesta: ".$p5;
    if($p5 == "b"){
        $calificacion++;
        echo "<br><img src='bien.png' width='5%px'><hr>";
    }else{
        echo " correcta b<br><img src='mal.gif' width='5%px'><hr>";
    }
echo "<br>";
    echo "Respuesta: ".$p6;
    if($p6 == "b"){
        $calificacion++;
        echo "<br><img src='bien.png' width='5%px'><hr>";
    }else{
        echo " correcta b<br><img src='mal.gif' width='5%px'><hr>";
    }
echo "<br>";
    echo "Respuesta: ".$p7;
    if($p7 == "a"){
        $calificacion++;
        echo "<br><img src='bien.png' width='5%px'><hr>";
    }else{
        echo " correcta a<br><img src='mal.gif' width='5%px'><hr>";
    }
echo "<br>";
    echo "Respuesta: ".$p8;
    if($p8 == "a"){
        $calificacion++;
        echo "<br><img src='bien.png' width='5%px'><hr>";
    }else{
        echo " correcta a<br><img src='mal.gif' width='5%px'><hr>";
    }
echo "<br>";
    echo "Respuesta: ".$p9;
    if($p9 == "b"){
        $calificacion++;
        echo "<br><img src='bien.png' width='5%px'><hr>";
    }else{
        echo " correcta b<br><img src='mal.gif' width='5%px'><hr>";
    }
echo "<br>";
    echo "Respuesta: ".$p10;
    if($p10 == "a"){
        $calificacion++;
        echo "<br><img src='bien.png' width='5%px'><hr>";
    }else{
        echo " correcta a<br><img src='mal.gif' width='5%px'><hr>";
    }
echo "<br>";
    echo "Tu calificacion es ".$calificacion;
echo "<br>"; 
    if($calificacion > 5){
        echo "pasaste";
    }else{
        echo "Reprobaste";
    }
?>