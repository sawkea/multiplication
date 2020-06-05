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
                    <h2 class="font_title text_center color_title">Super révision</h2>
                    <p>Essai de répondre aux 5 questions</p>
                    <?php
                        include 'fonction.php';
                    ?>
                    <!-- Formulaire "des questions" et bouton "valider"-->
                    <form action="" method="post">
                  
                    <?php
                    // boucle : POUR avec ses paramètres (la variable i = 0; la variable i est inférieure à 5; la variable i est incrémentée){
                        // dans cette boucle on appel la fonction superRevision(avec deux valeur aleatoire entre 0 et 10)
                    
                    for ($i = 0; $i < 5; $i++){
                        superRevision(mt_rand(0 , 10), mt_rand(0, 10));
                    }
                    ?>
                    <!-- bouton valider -->
                    <button type="submit">Valider</button>
                    </form>

                    <!-- Boucle SI(la variable du formulaire aléatoire est déclarée et est différente de null
                                   POUR (la variable i = 0; la variable i est inférieure à 5; la variable i est incrémentée){
                                       AFFICHE la variable du formulaire dans le tableau :[var aléatoire] [ensuite incrémenter] X [var nombre] [ensuite incrémenter] = au calcul de la multiplication
                                   } 
                                        SI la multiplication est égale à la bonne réponse {
                                            Affiche "super......"
                                        }
                                        SINON {
                                            Affiche "Dommage...."
                                        } 
                                        -->
                    <?php 
                        if (isset($_POST['aleatoire'])){
                            for ($i = 0; $i < 5; $i++){
                                echo $_POST['aleatoire'][$i]." X ".$_POST['nombre'][$i]." = " .$_POST['aleatoire'][$i]*$_POST['nombre'][$i]." <br>";

                                if ($_POST['aleatoire'][$i]*$_POST['nombre'][$i]==$_POST['reponse'][$i]){
                                    echo "Super ! C'est juste ! <br> <br> ";
                                }
                                else {
                                    echo "Dommage, c'est faux ! <br> <br>";
                                }
                            }
                        }
                    ?>
        </section>
    
    </main>

</body>
</html>   




