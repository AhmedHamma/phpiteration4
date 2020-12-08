<?php
include("functions.php");
$article1=["voiture rouge",'<img src="voiturerouge.jpg" alt="image"/>',1500];
$article2=["voiture noir",'<img src="voiturenoir.jpg" alt="image"/>',23000];
$article3=["voiture blanche",'<img src="voitureblanche.jpg" alt="image"/>',54500];
$articles=[$article1,$article2,$article3];
for($i=0;$i<count($articles);$i++){
    displayItem($articles[$i][0],$articles[$i][1],$articles[$i][2]);
}
?>