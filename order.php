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

$itemCount = 0;
$totPrice = 0;

if (isset($_POST["pixelBurger"]) && $_POST["pixelBurger"] == Yes ) {
    echo pixelBurger();
    $itemCount + 1;
    $totPrice + 3 * (int)$_POST["pixelBurgCount"];
    echo "<h2></br>Quantity: " . $_POST["pixelBurgCount"] . "</br></h2>";
    echo "<h2>Price: &#8364;" . 3 * (int)$_POST["pixelBurgCount"] . ".00</h2>";
}

if (isset($_POST["extraLifePixelBurger"]) && $_POST["extraLifePixelBurger"] == Yes ) {
    echo extraLifePixelBurger();
    $itemCount + 1;
    $totPrice + 4 * (int)$_POST["extraLifePixelBurgCount"];
    echo "<h2></br>Quantity: " . $_POST["extraLifePixelBurgCount"] . "</br></h2>";
    echo "<h2>Price: &#8364;" . 4 * (int)$_POST["extraLifePixelBurgCount"] . ".00</h2>";
}

if (isset($_POST["theBigByte"]) && $_POST["theBigByte"] == Yes ) {
    echo theBigByte();
    $itemCount + 1;
    $totPrice + 5 * (int)$_POST["theBigByteCount"];
    echo "<h2></br>Quantity: " . $_POST["theBigByteCount"] . "</br></h2>";
    echo "<h2>Price: &#8364;" . 5 * (int)$_POST["theBigByteCount"] . ".00</h2>";
}

if (isset($_POST["theTexasDownload"]) && $_POST["theTexasDownload"] == Yes ) {
    echo theTexasDownload();
    $itemCount + 1;
    $totPrice + 5 * (int)$_POST["theTexasDownloadCount"];
    echo "<h2></br>Quantity: " . $_POST["theTexasDownloadCount"] . "</br></h2>";
    echo "<h2>Price: &#8364;" . 5 * (int)$_POST["theTexasDownloadCount"] . ".00</h2>";
}

if ( $itemCount <= 3) {
    echo "Your total is: " . $totPrice;
} else {
    echo "Your total is: " . $totPrice;
}

?>

</body>

</html>