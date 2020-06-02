<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

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
            echo "<h2>Choisir une table de multiplication</h2>"
        ?>
        <!-- table X 1 -->
        <div>
            <input type="checkbox" id="table_1" name="table_1" checked>
            <label for="table_1">1</label>
        </div>
        <!-- table X 2 -->
        <div>
            <input type="checkbox" id="table_2" name="table_2" checked>
            <label for="table_1">2</label>
        </div>
        <!-- table X 3 -->
        <div>
            <input type="checkbox" id="table_3" name="table_3" checked>
            <label for="table_1">3</label>
        </div>
        <!-- table X 4 -->
        <div>
            <input type="checkbox" id="table_4" name="table_4" checked>
            <label for="table_1">4</label>
        </div>
        <!-- table X 5 -->
        <div>
            <input type="checkbox" id="table_5" name="table_5" checked>
            <label for="table_1">5</label>
        </div>
        <!-- table X 6 -->
        <div>
            <input type="checkbox" id="table_6" name="table_6" checked>
            <label for="table_1">6</label>
        </div>
        <!-- table X 7 -->
        <div>
            <input type="checkbox" id="table_7" name="table_7" checked>
            <label for="table_1">7</label>
        </div>
        <!-- table X 8 -->
        <div>
            <input type="checkbox" id="table_8" name="table_8" checked>
            <label for="table_1">8</label>
        </div>
        <!-- table X 9 -->
        <div>
            <input type="checkbox" id="table_9" name="table_9" checked>
            <label for="table_1">9</label>
        </div>

        <div>
        <button type="submit">Afficher la sélection</button>
        </div>




            
      
      
    
    </main>


</body>
</html>