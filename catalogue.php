
<?php include("article.php"); ?>
<?php


    foreach($articles as $product){
        echo $product["nom"];
        echo $product["prix"];
        echo '<img src="'.$product["photo"].'" alt="'.$product["alt"].'"/><br>';
    }

?>
