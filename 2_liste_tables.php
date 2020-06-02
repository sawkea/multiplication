<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Les tables de multiplications</h1>
        <!-- Menu -->
        <nav>
            <li><a href="index.php">Table X 3</a></li>
            <li><a href="2_liste_tables.php">Liste des tables</a></li>
            <li><a href="3_choix_tables.php">Choix des tables</a></li>
            <li><a href="4_revision.php">Révision</a></li>
            <li><a href="5_super_revision.php">Super mode révision</a></li>
            <li><a href="6_revision_ajax.php">Révision avec Ajax</a></li>
        </nav>
    </header>
    <!-- Main -->
    <main>
        <?php

            echo "<h2>Choisir une table dans la liste</h2>";
        ?>

        
            

            <form action="action.php" method="post">
            <select name="demande">
            <option selected="selected" value="table">Table N°</option>
        
            <p><input type="submit" value="OK"></p>
            </form>


        <?php
            // Variable qui ajoutera l'attribut selected de la liste déroulante
            $selected = '';
    
            // Parcours du tableau
            echo '<select name="tables">',"\n";
            for($i=1;$i<=10;$i++)
            {
        
            // Affichage de la ligne
            echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
            // Remise à zéro de $selected
            $selected='';
            }
            echo '</select>',"\n";
            ?>

    </main>
           

</body>
</html>