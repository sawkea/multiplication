<?php
    include 'header.html';
    include 'fonction.php';

    echo "<h2>Choisir une table dans la liste</h2>";
?>
        <!-- formulaire pour choisir une table de multilplication -->
        <form action="2_liste_tables.php" method="post">
        <select name="table">
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
        <input type="submit" name="valider" value="OK">
        </form>

         
        <?php

        //Si la variable table existe et n'est pas vide, alors la variable = table, sinon elle est NULL 
        $nombre = !empty($_POST['table']) ? $_POST['table'] : NULL;
  
        echo multiplication($nombre);