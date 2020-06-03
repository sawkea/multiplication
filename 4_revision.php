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
            echo "<h2>Révision</h2>";
        
        session_start();
if (isset($_GET['nombre'])) {
    $_SESSION['nombre'] = $_GET['nombre'];
}
if (isset($_GET['signe'])) {
    $_SESSION['signe'] = $_GET['signe'];
}    ?>

	<div id="page">
	<nav> 
	<ul id="choix_table">
		<p> La table selectionnée</p>
                <?php
                    for ($i = 1; $i < 10; ++$i) {
                        $classe = (isset($_SESSION['nombre']) && $_SESSION['nombre'] == $i) ? ' style="background: red;"' : '';
		        echo '<a href="?nombre=' . $i . '" id="table' . $i . '"><button' . $classe . '>' . $i . '</button></a>';
                    }
                 ?>
		
	</nav>
	<section>
		<?php
                if (isset($_SESSION['nombre'], $_SESSION['signe'])) {
		  if  ($_SESSION['signe']=="fois"){
		 	for ($i=1; $i<=10;$i++)
             echo $_SESSION["nombre"]. " X " .$i. " = " .$i * $_SESSION["nombre"] ."<br>";
         
            }
        }
		?>    
    


    </main>


</body>
</html>