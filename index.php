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
            <li><a href="test.php">page de test</a></li>

        </nav>
    </header>
    <!-- Main -->
    <main>
        <?php
            echo "<h2>Voici la table X 3</h2>";

            $mult=3;
            for($i=1;$i<=10;$i++)
            {
                echo $i." X ".$mult." = ".$i*$mult."<br>";
            }
        ?>
    
    
    </main>


</body>
</html>