
<?php

include_once __DIR__ . "/database.php";


?>


<?php foreach($dischi as $singoloElemento) { ?>  
    <img src="<?php echo $singoloElemento["poster"]; ?>" alt="">
    <h3> Titolo: <?php echo $singoloElemento["title"]; ?> </h3> 
    <h4> <strong> Autore: </strong> <?php echo $singoloElemento["author"]; ?>  </h4>
    <h4> <strong> Genere: </strong> <?php echo $singoloElemento["genre"]; ?> </h4>
    <p> <strong> year: </strong><?php echo $singoloElemento["year"]; ?>  </p>
    <br>
    <hr>
<?php }  ?>


