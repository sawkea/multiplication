<?php
    include 'header.html';

    echo "<h2>Révision</h2>";
        
    session_start();
        if (isset($_GET['nombre'])) {       
        $_SESSION['nombre'] = $_GET['nombre'];
        }
        if (isset($_GET['signe'])) {
        $_SESSION['signe'] = $_GET['signe'];
        }   
?>

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