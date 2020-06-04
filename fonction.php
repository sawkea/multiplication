<?php
// création d'un fichier spécifique avec les fonctions plus simple pour des changements ou mises à jour éventuel

// Création de la fonction de multiplication utilisée dans les différentes pages
    function multiplication($nombre){ // nom de fontion "multi" avec son paramètre "nombre"
        for ($i = 1; $i <= 10; $i++){
            echo $nombre . " X " . $i . " = " . $nombre * $i . "<br>";
        }
    }


// fonction pour afficher les commentaires de résultat (dans la )page 4_révision)
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