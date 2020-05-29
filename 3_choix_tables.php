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
            <li><a href="4_revision">Révision</a></li>
            <li><a href="5_super_revision.php">Super mode révision</a></li>
            <li><a href="6_revision_ajax.php">Révision avec Ajax</a></li>
        </nav>
    </header>
    <!-- Main -->
    <main>  
    <div>
            <h2>Choisir une ou plusieurs table(s) de multiplication</h2>
            <form action="" method="post">
 
                <label>Chiffre</label>
                <input type="number" value="" name="monchiffre" /><br /><br />
                <button id="mysubmit" type="submit">Submit</button><br />
 
            </form>
        </div>
 
        <?php
            if(isset($_POST['monchiffre'])){
                $monchiffre = $_POST['monchiffre'];
                echo "Table du : <br />" ;
                for($i = 0; $i<11; $i++){
                    echo $monchiffre . " X " . $i . " = " . $monchiffre * $i . "<br />";
                }
            }else{
                echo "pas encore de chiffre entrée";
            }
        ?>
    
    </main>


</body>
</html>