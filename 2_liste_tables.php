<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.scss">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
          <div class="flex between align_center">
            <p><img src="img/logo_multi.svg" width="150" height="48" alt="Logo multi"></p>
              <h1 class="font_title text_center color_title">Les tables de multiplication</h1>
          </div>
            <!-- Menu -->
            <nav class="flex around align_center">
                <li><a href="index.php">Table du 3</a></li>
                <li><a href="2_liste_tables.php">Liste des tables</a></li>
                <li><a href="3_choix_tables.php">Chexbox des tables</a></li>
                <li><a href="4_revision.php">Révision</a></li>
                <li><a href="5_super_revision.php">Super mode révision</a></li>
                <li><a href="6_revision_ajax.php">Révision avec Ajax</a></li>    
            </nav>
        </header>
    </div>
    <main>
        <section>
        <div class="container text_center color">
            <?php
                include 'fonction.php';
            ?>
            <h2 class="font_title text_center color_title">Choisir une table dans la liste</h2>
            <!-- formulaire pour choisir une table de multilplication -->
            <form action="2_liste_tables.php" method="post">
                <select name="table">
                    <option value="1">Table 1</option>
                    <option value="2">Table 2</option>
                    <option value="3">Table 3</option>
                    <option value="4">Table 4</option>
                    <option value="5">Table 5</option>
                    <option value="6">Table 6</option>
                    <option value="7">Table 7</option>
                    <option value="8">Table 8</option>
                    <option value="9">Table 9</option>
                    <option value="10">Table 10</option>
                </select>
                    <input type="submit" name="valider" value="OK">
            </form>
    
            <?php
    
            //Si la variable table existe et n'est pas vide, alors la variable = table, sinon elle est NULL 
            $nombre = !empty($_POST['table']) ? $_POST['table'] : NULL;
      
            echo multiplication($nombre);
            ?>
        </div>

        </section>
    
    </main>

</body>
</html>  

















