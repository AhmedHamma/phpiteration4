<?php
function displayitem1(){
    echo "voiture rouge";
    echo '<img src="https://cdn.laredoute.com/products/680by680/8/7/c/87c975315ac46e0ddc16e09aa70000aa.jpg" alt="voiturerouge"/>';
    echo '12345';
}

function displayitem2()
{
    $nom2 = "voiture blanche";
    $photo2 = '<img src="https://static.wikia.nocookie.net/initiald/images/b/be/Ryosuke_Project_D_Spec_II_Manga.png/revision/latest?cb=20200615022146" alt="voitureblanche"/>';
    $prix2 = 32216;
    echo $nom2;
    echo $photo2;
    echo $prix2;
}

function displayitem3(){
    echo "Voiture noire";
    echo '<img src="https://static.wikia.nocookie.net/initiald/images/8/85/Nightkids_R32_manga.png/revision/latest?cb=20200628155945" alt="voiture noire"/>';
    echo 65465;
}

function displayitem($nom,$prix,$image){
    echo $nom . '<br/>';
    echo $prix . '<br/>';
    echo '<img src="' . $image . '"alt="image"/> <br/>';
}


