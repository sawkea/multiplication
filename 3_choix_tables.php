 <?php
    include 'header.html';

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