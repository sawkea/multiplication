<?php
// création d'un fichier spécifique avec les fonctions plus simple pour des changements ou mises à jour éventuel

// Création de la fonction de multiplication utilisée dans les différentes pages

// nom de fontion "multi" avec son paramètre "nombre"
    function multiplication($nombre){ 
        for ($i = 1; $i <= 10; $i++){
            echo $nombre . "<span> X </span>" . $i . "<span> = </span>" . $nombre * $i . "<br>";
        }
    }
        // POUR (la variable i = 0; la variable i est inférieure ouégale à 10; la variable i est incrémentée){
                // AFFICHE  variable nombre X variable i = (le calcul) variable nombre x incrémantation variable i


// fonction pour la page 4_révision)

// nom revision(avec comme paramètres les variables "nombre, resultat et aléatoire")
function revision($nombre, $resultat, $aleatoire)
{
    echo "<br>" . $aleatoire . "<span> X </span>" . $nombre . "<span> = </span>" .$resultat . "<br><br>";
    // affiche la variable aleatoire x la variable nombre = la variable resultat
    if ($resultat == ($aleatoire * $nombre)){
        echo "Super ! Tu es un vrai petit génie !";
    
    }
    // SI la variable resultat est égale (au calcul de la variable aleatoire x nombre)
        // AFFICHE super....

    else if ($resultat !== ($aleatoire * $nombre)){
        echo "Dommage, ne lâche pas, continu !";
    }
    // SINON SI la variable resultat est différente (au calcul de la variable aleatoire x nombre)
        // AFFICHE dommage.....
}


// fonction pour la page 5_super_revision

// nom superRevision(avec comme paramètres les variables "aléatoire" et "nombre")
function superRevision($aleatoire, $nombre) 
{
    echo "<br>" . $aleatoire . "<span> X </span>" . $nombre . "<span> = </span> <input type=\"text\" name=\"reponse[]\"> <br><br>";
    // affiche la variable aléatoire x variable nombre = dans un input text écrit la réponse
    echo "<input type=\"hidden\" value=\"".$aleatoire."\" name=\"aleatoire[]\">";
    // dans un input caché stocke la valeur de la variable aléatoire dans un tableau
    echo "<input type=\"hidden\" value=\"".$nombre."\" name=\"nombre[]\">";  
    // dans un input caché stocke la valeur de la variable nombre dans un tableau

}