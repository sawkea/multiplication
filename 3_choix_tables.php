<?php
    include 'header.html';
    include 'fonction.php';

    echo "<h2>Choisir une table de multiplication</h2>"
    
?>
    
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