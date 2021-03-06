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
        <?php
            include 'headerNav.html';
        ?>
    </div>
    <main>
        <section>

            <div class="container text_center color">
            <?php
                include 'fonction.php';
            ?>
            <h2 class="font_title text_center color_title">Choisi une table</h2>
            <!-- Formulaire table -->
            <div class="color-text line-height-text font_title">
                <form action="" method="post">
    
                    <?php
    
                    // création d'une ckeckbox en php avec boucle for
                    for ($i = 1; $i <= 10; $i++){
    
                        echo("<INPUT TYPE='checkbox' id='ckeckstyle' name='check_list[]' VALUE='$i' />");
                        echo " ".$i." ";
                    }
                    ?>
    
                    <div>
                        <br>
                        <button type="submit" class="styled">Valider</button> 
                    </div>
                </form>
                <br>
    
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

            </div>
        </section>
    
    </main>
    <script src="script.js"></script>
</body>
</html>   