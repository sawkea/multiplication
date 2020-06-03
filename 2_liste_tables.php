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
            <form action="2_liste_tables.php" method="post">
            <select name="table">
            <option value="1">Table N°1</option>
            <option value="2">Table N°2</option>
            <option value="3">Table N°3</option>
            <option value="4">Table N°4</option>
            <option value="5">Table N°5</option>
            <option value="6">Table N°6</option>
            <option value="7">Table N°7</option>
            <option value="8">Table N°8</option>
            <option value="9">Table N°9</option>
            <option value="10">Table N°10</option>
            </select>
            <input type="submit" value="OK">
            </form>

         
                <?php
                // if ( (isset($_POST['table'])) {
                // $choix = $_POST['table'];
                // } else {
                // $choix = 1; 
                $choix = (isset($_POST['table'])) ? $_POST['table']: 1;
                for( $j= 1; $j < 11; $j++){
                    echo $choix . " X ". $j. " = ".($choix*$j).
                     "<br/>";
                    }

                ?>
                 <!-- for( $j= 2; $j < 11; $j++){
                    echo $choix . " X ". $j. " = ".($choix*$j).
                     "<br/>";
                } -->
      


<!--         
            // // Variable qui ajoutera l'attribut selected de la liste déroulante
            // $selected = '';
    
            // // Parcours du tableau
            // echo '<select name="demande">',"\n";
            // for($i=1;$i<=10;$i++)
            // {
        
            // // Affichage de la ligne
            // echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
            // // Remise à zéro de $selected
            // $selected='';
            // }
            // echo '</select>',"\n";
            //  -->

    </main>
           

</body>
</html>