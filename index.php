
<?php

include_once __DIR__ . "/database.php";


?>


<?php foreach($dischi as $singoloElemento) { ?>  
    <h3> <?php echo $singoloElemento["title"]; ?> </h3> 
    <h4> <?php echo $singoloElemento["author"]; ?>  </h4>
    <h5> <?php echo $singoloElemento["genre"]; ?> </h5>
    <p> <?php echo $singoloElemento["year"]; ?>  </p>
    <br>
    <hr>
<?php }  ?>


