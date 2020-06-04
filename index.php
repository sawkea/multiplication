<?php
    include 'header.html';

    echo "<h2>Voici la table X 3</h2>";

    // Création de la fonction de multiplication
    function multiplication($nombre){ // nom de fontion "multi" avec son paramètre "nombre"
        for ($i = 1; $i <= 10; $i++){
            echo $nombre . " X " . $i . " = " . $nombre * $i . "<br>";
        }
    }
    // Afficher la table du 3
    $nombre = 3; // variable "nombre" avec le paramètre 3
		echo multiplication ($nombre); // afficher la fonction multi avec le paramètre 
    
    
    
    
