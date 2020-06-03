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
        <!-- Formulaire table -->
        <form action="?exo=3" method="post">
            <input type="checkbox" name="table[]" value="1"/>1 <br>
            <input type="checkbox" name="table[]" value="2"/>2 <br>
            <input type="checkbox" name="table[]" value="3"/>3 <br>
            <input type="checkbox" name="table[]" value="4"/>4 <br>
            <input type="checkbox" name="table[]" value="5"/>5 <br>
            <input type="checkbox" name="table[]" value="6"/>6 <br>
            <input type="checkbox" name="table[]" value="7"/>7 <br>
            <input type="checkbox" name="table[]" value="8"/>8 <br>
            <input type="checkbox" name="table[]" value="9"/>9 <br>
            <input type="checkbox" name="table[]" value="10"/>10 

            <div>
                <button type="submit">Valider</button>
            </div>
        </form>

        <?php
            if( isset($_POST["table"])){
                for( $i = 0; $i < count($_POST["table"]); $i++){
                    for( $j= 0; $j < 11; $j++){
                        echo $_POST["table"][$i] . " X ". $j. " = ".($_POST["table"][$i]*$j).
                        "<br/>";
                    }
                }
            }
        ?>


            
      
      
    
    </main>


</body>
</html>