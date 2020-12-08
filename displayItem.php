<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Mon formulaire</title>
</head>

<body>
<?php

if($_POST['nom'] != "" && $_POST['prix']!="" && $_POST['image'] != ""){
    include("functionsbis.php");
    displayitem(htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prix']), htmlspecialchars($_POST['image']));
}

else{
    header('location: http://localhost/iteration2/addItem.php?error=true');
    exit();
}

?>

</body>
</html>