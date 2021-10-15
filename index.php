
<?php

include_once __DIR__ . "/database.php";

header("Content-Type: application/json");

echo json_encode($dischi);

?>


<?php foreach($dischi as $singoloElemento) { ?>  
    <h4><?php echo $singoloElemento["title"]; //stampo autore del singolo elemento ?> </h4> 
<?php }  ?>

