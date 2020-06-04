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
            <h2 class="font_title text_center color_title">Choisir une table de multiplication</h2>
            <!-- Formulaire table -->
            <form action="" method="post">

                <?php

                // création d'une ckeckbox en php avec boucle for
                for ($i = 1; $i <= 10; $i++){

                    echo("<INPUT TYPE='checkbox' name='check_list[]' VALUE='$i' />");
                    echo " ".$i." <br />";
                }
                ?>

                <div>
                    <button type="submit">Valider</button>
                </div>
            </form>

            <?php

                //Pour chaque case du tableau
                if (!empty($_POST['check_list'])) {
                    
                    // Pour chaque propriété, une instruction est exécutée.
                    foreach ($_POST['check_list'] as $i) {
                        $nombre = $i;
                        multiplication($nombre);
                    }
                }
            ?>

            </div>
        </section>
    
    </main>

</body>
</html>   