<?php
	include 'header.html';
    include 'fonction.php';

    echo "<h2>Révision</h2>";
?>        
  

    <p>Choisi une table de multiplication</p>
    <form action="" method="POST">
		<select name="super_revision" id="">
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
		
		<button>OK</button>
	</form>

	<?php
		if (isset($_POST['super_revision'])) {
			// Récupère la valeur du tableau form
			$nombre = $_POST['super_revision'];
			
			//Génère un nombre aléatoire quand on valide le premier form
			$aleatoire = mt_rand (0, 10);

			// Affiche pour l'utilisateur
			echo $aleatoire . " x " . $nombre . " = ? " . "<br>";
		}
	?>

	
	<form action="" method="post">
		<!-- L'utilisateur entre un nombre -->
		<input type="text" name='resultat' id="resultat" placeholder="Ex: 64">

		<!-- Enregistre les $var avec input hidden (caché) -->
		<input type="hidden" name ='aleatoireInput' value ='<?=$aleatoire?>'>
		<input type="hidden" name ='super_revision' value ="<?=$nombre?>">
		<button>VALIDER</button>

	</form>


	<?php
		// Si le formulaire est validé, va à la suite
		if (isset($_POST['resultat'])) 
		{
			// Récupère la valeur de aléatoire lors de la saisie du deuxième form
			$aleatoire = $_POST['aleatoireInput'];

			// Transforme la valeur de l'input en variable
			$resultat = $_POST['resultat'];

			// Compare les données
			super_revision($nombre, $resultat, $aleatoire);
		}
		
	?>