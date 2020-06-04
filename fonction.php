<?php

// Création de la fonction de multiplication
    function multiplication($nombre){ // nom de fontion "multi" avec son paramètre "nombre"
        for ($i = 1; $i <= 10; $i++){
            echo $nombre . " X " . $i . " = " . $nombre * $i . "<br>";
        }
    }


// fonction pour afficher les commentaires de résultat
function super_revision($nombre, $resultat, $aleatoire)
{
    echo "<br>" . $aleatoire . " X " . $nombre . " = " .$resultat . "<br><br>";

    if ($resultat == ($aleatoire * $nombre)){
        echo "Super! Tu es un vrai petit génie !";
    }

    else if ($resultat !== ($aleatoire * $nombre)){
        echo "Dommage, ne lâche pas, continu !";
    }
}