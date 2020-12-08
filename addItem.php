<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>ajout d'objet</title>

</head>

<body>

<?php
if (isset($_GET['error'])&& $_GET['error']==true){
    echo "il manque des champs";
}
elseif (isset($_GET['errNom'])&& $_GET['errNom']==true){
    echo "le Nom est requis";
}
elseif (isset($_GET['errPrix'])&& $_GET['errPrix']==true){
    echo "le prix est requis";
}
elseif (isset($_GET['errImage'])&& $_GET['errImage']==true){
    echo "une url d'image est requise";
}


echo '<form action="displayItem.php" method="POST">
    <p><label>nom de l\'article : <input type="text" name="nom"/></label></p>
    <p><label>prix de l\'article : <input type="number" name="prix"/></label></p>
    <p><label>ajouter l\'url de l\image</label><br/> <input type="text" name="image"/></label></p>
    <p><input type="submit"/></p>
</form>';
?>

</body>
</html>