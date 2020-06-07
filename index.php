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

              <div class="container text_center color size-div">
              <h2 class="font_title text_center color_title">Voici la table X 3</h2>
                <div class="color-text line-height-text font_title">
                  <?php
                  include 'fonction.php';
                      
                  // Afficher la table du 3
                  $nombre = 3; // variable "nombre" avec le paramètre 3
                  echo multiplication ($nombre); // afficher la fonction multiplication avec le paramètre nombre ici affecté 3
                  ?>
                </div>

              </div>
        </section>
    
    </main>
    <script src="script.js"></script>

</body>
</html>   