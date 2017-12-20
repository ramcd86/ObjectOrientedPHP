<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>
<link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Work+Sans" rel="stylesheet">
<body>

<?php

include ('menuitems.include.php');

if (isset($_POST["pixelBurger"]) && $_POST["pixelBurger"] == Yes ) {
    echo pixelBurger();
    echo "<h2></br>Quantity: " . $_POST["pixelBurgCount"] . "</br></h2>";
    echo "<h2>Price: &#8364;" . 3 * (int)$_POST["pixelBurgCount"] . ".00</h2>";
}

if (isset($_POST["extraLifePixelBurger"]) && $_POST["extraLifePixelBurger"] == Yes ) {
    echo extraLifePixelBurger();
    echo "<h2></br>Quantity: " . $_POST["extraLifePixelBurgCount"] . "</br></h2>";
    echo "<h2>Price: &#8364;" . 4 * (int)$_POST["extraLifePixelBurgCount"] . ".00</h2>";
}

if (isset($_POST["theBigByte"]) && $_POST["theBigByte"] == Yes ) {
    echo theBigByte();
    echo "<h2></br>Quantity: " . $_POST["theBigByteCount"] . "</br></h2>";
    echo "<h2>Price: &#8364;" . 5 * (int)$_POST["theBigByteCount"] . ".00</h2>";
}

if (isset($_POST["theTexasDownload"]) && $_POST["theTexasDownload"] == Yes ) {
    echo theTexasDownload();
    echo "<h2></br>Quantity: " . $_POST["theTexasDownloadCount"] . "</br></h2>";
    echo "<h2>Price: &#8364;" . 5 * (int)$_POST["theTexasDownloadCount"] . ".00</h2>";
}

?>

</body>

</html>