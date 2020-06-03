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
            echo "<h2>Super révision</h2>";
    ?>
    <?php
$nom='Mickaël';
$age=17;
$gars=true;
$taille=1.75;
?>
<?php
echo'<p>Bonjour à tous.<br/>
Mon vrai nom n\'est pas Toto.<br/>
Mon vrai nom est '.$nom.'<br/>
J\'ai '.$age.' ans et je mesure '.$taille.'m.<br/>
Et comme mon nom l\'indique, je suis ';
if ($gars==true){
    echo 'un garçon.</p>';
}
else{
    echo 'une fille. </p>';
}
?>

    </main>


</body>
</html>