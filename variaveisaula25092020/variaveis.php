<?php

         $acesa = FALSE;
        if($acesa){
    print("Primeiro IF, Acessa");
    }   


         $acesa = TRUE;
        if($acesa){
    print("Segundo IF, Acesa");
    }

    $variavelInteira = -1234;

    echo $variavelInteira;


#tipo de ponto flutuante
    echo "<br/>";
    $notaAvUm = 4.5;
    $notaAvDois = 9.5;
    echo $notaAvUm + $notaAvDois;

#array
    echo "<br/>";
    $listacpf = array("fuji"=>"013046", "kaio"=>"754858");

    echo $listacpf["fuji"];
    echo "<br/>";

    echo $listacpf["kaio"];

?>