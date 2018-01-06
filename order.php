<?php

require ("menuitems.include.php");
require ("header.temp.html");

$itemCount = 0;
$totPrice = 0;

echo '<div class="area_title">Review your order.</div>';
echo '<div class="order">';

if (isset($_POST["pixelBurger"]) && $_POST["pixelBurger"] == Yes ) {
    echo pixelBurger();
    $itemCount  = $itemCount + 1;
    $totPrice = $totPrice + 3 * (int)$_POST["pixelBurgCount"];
    echo "<h2> Quantity: " . $_POST["pixelBurgCount"] . ", ";
    echo "Price: &#8364;" . 3 * (int)$_POST["pixelBurgCount"] . ".00</h2>";
}

if (isset($_POST["extraLifePixelBurger"]) && $_POST["extraLifePixelBurger"] == Yes ) {
    echo extraLifePixelBurger();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 4 * (int)$_POST["extraLifePixelBurgCount"];
    echo "<h2> Quantity: " . $_POST["extraLifePixelBurgCount"] . ", ";
    echo "Price: &#8364;" . 4 * (int)$_POST["extraLifePixelBurgCount"] . ".00</h2>";
}

if (isset($_POST["theBigByte"]) && $_POST["theBigByte"] == Yes ) {
    echo theBigByte();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 5 * (int)$_POST["theBigByteCount"];
    echo "<h2> Quantity: " . $_POST["theBigByteCount"] . ", ";
    echo "Price: &#8364;" . 5 * (int)$_POST["theBigByteCount"] . ".00</h2>";
}

if (isset($_POST["theTexasDownload"]) && $_POST["theTexasDownload"] == Yes ) {
    echo theTexasDownload();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 4 * (int)$_POST["theTexasDownloadCount"];
    echo "<h2> Quantity: " . $_POST["theTexasDownloadCount"] . ", ";
    echo "Price: &#8364;" . 4 * (int)$_POST["theTexasDownloadCount"] . ".00</h2>";
}

if (isset($_POST["cDOSCheesePizza"]) && $_POST["cDOSCheesePizza"] == Yes ) {
    echo cDOSCheesePizza();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 8 * (int)$_POST["cDOSCheesePizzaCount"];
    echo "<h2> Quantity: " . $_POST["cDOSCheesePizzaCount"] . ", ";
    echo "Price: &#8364;" . 8 * (int)$_POST["cDOSCheesePizzaCount"] . ".00</h2>";
}

if (isset($_POST["pepperoniParserPizza"]) && $_POST["pepperoniParserPizza"] == Yes ) {
    echo pepperoniParserPizza();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 10 * (int)$_POST["pepperoniParserPizzaCount"];
    echo "<h2> Quantity: " . $_POST["pepperoniParserPizzaCount"] . ", ";
    echo "Price: &#8364;" . 10 * (int)$_POST["pepperoniParserPizzaCount"] . ".00</h2>";
}

if (isset($_POST["hawaiiZonePizza"]) && $_POST["hawaiiZonePizza"] == Yes ) {
    echo hawaiiZonePizza();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 11 * (int)$_POST["hawaiiZonePizzaCount"];
    echo "<h2> Quantity: " . $_POST["hawaiiZonePizzaCount"] . ", ";
    echo "Price: &#8364;" . 11 * (int)$_POST["hawaiiZonePizzaCount"] . ".00</h2>";
}

if (isset($_POST["vegetablePizza"]) && $_POST["vegetablePizza"] == Yes ) {
    echo vegetablePizza();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 11 * (int)$_POST["vegetablePizzaCount"];
    echo "<h2> Quantity: " . $_POST["vegetablePizzaCount"] . ", ";
    echo "Price: &#8364;" . 11 * (int)$_POST["vegetablePizzaCount"] . ".00</h2>";
}

if (isset($_POST["pixelFries"]) && $_POST["pixelFries"] == Yes ) {
    echo pixelFries();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 2 * (int)$_POST["pixelFriesCount"];
    echo "<h2>Quantity: " . $_POST["pixelFriesCount"] . ", ";
    echo "Price: &#8364;" . 2 * (int)$_POST["pixelFriesCount"] . ".00</h2>";
}

if (isset($_POST["polygonFries"]) && $_POST["polygonFries"] == Yes ) {
    echo polygonFries();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 3 * (int)$_POST["polygonFriesCount"];
    echo "<h2> Quantity: " . $_POST["polygonFriesCount"] . ", ";
    echo "Price: &#8364;" . 3 * (int)$_POST["polygonFriesCount"] . ".00</h2>";
}

if (isset($_POST["terminalTacoFries"]) && $_POST["terminalTacoFries"] == Yes ) {
    echo terminalTacoFries();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 4 * (int)$_POST["terminalTacoFriesCount"];
    echo "<h2> Quantity: " . $_POST["terminalTacoFriesCount"] . ", ";
    echo "Price: &#8364;" . 4 * (int)$_POST["terminalTacoFriesCount"] . ".00</h2>";
}

if (isset($_POST["cDOSCheeseFries"]) && $_POST["cDOSCheeseFries"] == Yes ) {
    echo cDOSCheeseFries();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 4 * (int)$_POST["cDOSCheeseFriesCount"];
    echo "<h2> Quantity: " . $_POST["cDOSCheeseFriesCount"] . ", ";
    echo "Price: &#8364;" . 4 * (int)$_POST["terminalTacoFriesCount"] . ".00</h2>";
}

if (isset($_POST["pixelCola"]) && $_POST["pixelCola"] == Yes ) {
    echo pixelCola();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 1 * (int)$_POST["pixelColaCount"];
    echo "<h2> Quantity: " . $_POST["pixelColaCount"] . ", ";
    echo "Price: &#8364;" . 1 * (int)$_POST["pixelColaCount"] . ".00</h2>";
}

if (isset($_POST["pixelOrange"]) && $_POST["pixelOrange"] == Yes ) {
    echo pixelOrange();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 1 * (int)$_POST["pixelOrangeCount"];
    echo "<h2> Quantity: " . $_POST["pixelOrangeCount"] . ", ";
    echo "Price: &#8364;" . 1 * (int)$_POST["pixelOrangeCount"] . ".00</h2>";
}

if (isset($_POST["pixelIceCream"]) && $_POST["pixelIceCream"] == Yes ) {
    echo pixelIceCream();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 3 * (int)$_POST["pixelIceCreamCount"];
    echo "<h2> Quantity: " . $_POST["pixelIceCreamCount"] . ", ";
    echo "Price: &#8364;" . 3 * (int)$_POST["pixelIceCreamCount"] . ".00</h2>";
}

if (isset($_POST["pixelCookies"]) && $_POST["pixelCookies"] == Yes ) {
    echo pixelCookies();
    $itemCount = $itemCount + 1;
    $totPrice = $totPrice + 3 * (int)$_POST["pixelCookiesCount"];
    echo "<h2> Quantity: " . $_POST["pixelCookiesCount"] . ", ";
    echo "Price: &#8364;" . 3 * (int)$_POST["pixelCookiesCount"] . ".00</h2>";
}

echo '</div>';

echo '<div class="total_price_complete">';

if ( $itemCount > 3) {
    echo "Your total is: &#8364;" . number_format($totPrice = $totPrice / 100 * 90, 2, '.', ' ');
} else {
    echo "Your total is: &#8364;" . number_format($totPrice, 2, '.', ' ');
}

echo '</div>';



require ("footer.temp.html");
?>