<?php
    
    include "platos.php";
    include "cocktail.php";

    $mariscadas = array(new Platos (0, "../../assets/images/mariscada/0.png", "MARISCADA ESPECIAL", 20),
                        new Platos (1, "../../assets/images/mariscada/1.png", "MARISCADA DE LA CASA", 20),
                        new Platos (2, "../../assets/images/mariscada/2.png", "MARISCADA SEAFOOD", 20),
                        new Platos (3, "../../assets/images/mariscada/3.png", "MARISCADA GRANDBLUE", 20));

    $pescados = array(new Platos (0, "../../assets/images/pescados/0.png", "DORADA A LA PRIMAVERA", 10),
                      new Platos (1, "../../assets/images/pescados/1.png", "LA MAR - LUBINA", 10),
                      new Platos (2, "../../assets/images/pescados/2.png", "LA MAR - LUBINA", 10),
                      new Platos (3, "../../assets/images/pescados/3.png", "LA MAR - LUBINA", 10));

    $mariscos = array(new Platos (0, "../../assets/images/mariscos/0.png", "GAMBAS A LA TOMATADA", 14),
                      new Platos (1, "../../assets/images/mariscos/1.png", "MIXTO DE MARISCOS", 14),
                      new Platos (2, "../../assets/images/mariscos/2.png", "MIXTO DE MARISCOS", 14),
                      new Platos (3, "../../assets/images/mariscos/3.png", "MIXTO DE MARISCOS", 14));
    
    $cefalopodos = array(new Platos (0, "../../assets/images/cefalopodos/0.png", "SEPIA AL LIMÓN", 12),
                         new Platos (1, "../../assets/images/cefalopodos/1.png", "PULPOS A LA GALLEGA", 12),
                         new Platos (2, "../../assets/images/cefalopodos/2.png", "PULPOS A LA GALLEGA", 12),
                         new Platos (3, "../../assets/images/cefalopodos/3.png", "PULPOS A LA GALLEGA", 12));
    
    $moluscos = array(new Platos (0, "../../assets/images/moluscos/0.png", "ALMEJAS AL JUGO", 15),
                      new Platos (1, "../../assets/images/moluscos/1.png", "OSTRAS FRESCAS", 15),
                      new Platos (2, "../../assets/images/moluscos/2.png", "OSTRAS FRESCAS", 15),
                      new Platos (3, "../../assets/images/moluscos/3.png", "OSTRAS FRESCAS", 15));
    
    $cocktails = array(new Cocktail (0, "../../assets/images/cocktails/0.png", "COCKTAIL DE GAMBAS", 9, "S, M, L"),
                       new Cocktail (1, "../../assets/images/cocktails/1.png", "COCKTAIL PACÍFICO", 9, "S, M, L"));

?>