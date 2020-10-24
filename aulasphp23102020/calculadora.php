<?php

     $valorA = $_GET["valorA"];
     $valorB = $_GET["valorB"];

    if(isset($_GET["somar"])){
        $operação = $valorA + $valorB;
        print("soma: ".$operação);
    }

    if(isset($_GET["subtrair"])){
        $operação = $valorA - $valorB;
        print("subtração: ".$operação);
    }

    if(isset($_GET["multiplicar"])){
        $operação = $valorA * $valorB;
        print("multiplicação]: ".$operação);
    }

    if(isset($_GET["dividir"])){
        $operação = $valorA / $valorB;
        print("divisão: ".$operação);
    }
    
    
?>