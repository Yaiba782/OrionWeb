<?php

    $pins = array();
    $pins[3] = 8;
    $pins[5] = 9;
    $pins[7] = 7;
    $pins[11] = 0;
    $pins[13] = 2;
    $pins[15] = 3;
    $pins[19] = 12;
    $pins[21] = 13;
    $pins[23] = 14;
    $pins[8] = 15;
    $pins[10] = 16;
    $pins[12] = 1;
    $pins[16] = 4;
    $pins[18] = 5;
    $pins[22] = 6;
    $pins[24] = 10;
    $pins[26] = 11;

    $materials = array(
        "Entree"=>11,
        "Salon"=>15,
        "Chambre"=>7,
    );


    $id = int($_POST['id']);

    $state = exec("gpio read ".$pins[$id]);

    //Definis le PIN en tant que sortie
    system("gpio mode ".$pins[$id]." out");
    //Active/désactive le pin (en mettant l'inverse de l'état actuel)
    system("gpio write ".$pins[$id]." ".!$state);