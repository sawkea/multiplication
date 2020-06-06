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
			  	<h2 class="font_title text_center color_title">Révision</h2>
			  	<?php
					include 'fonction.php';
				?>        
  
				<div class="color-text line-height-text font_title">
					<p>Choisi une table de multiplication</p>
					<form action="" method="POST">
						<select name="revision" id="">
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
						if (isset($_POST['revision'])) {
							// Récupère la valeur du tableau form
							$nombre = $_POST['revision'];
							
							//Génère un nombre aléatoire quand on valide le premier form
							$aleatoire = mt_rand (0, 10);
	
							// Affiche pour l'utilisateur
							echo $aleatoire . " x " . $nombre . " = ? " . "<br>";
							
						}
					?>
	
					<form action="" method="post">
						<!-- L'utilisateur entre un nombre -->
						<input type="text" name='resultat' id="resultat" placeholder="Ex: 32">
	
						<!-- Enregistre les $var avec input hidden (caché) -->
						<input type="hidden" name ='aleatoireInput' value ='<?=$aleatoire?>'>
						<input type="hidden" name ='revision' value ="<?=$nombre?>">
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
	
							// Compare les données avec la fonction
							revision($nombre, $resultat, $aleatoire);
						}
						
					?>
				</div>
			
        	</div>
        </section>
    
    </main>

</body>
</html>