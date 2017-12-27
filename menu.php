<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <title>PHP</title>
    <?php
include ('menuitems.include.php');
?>


    <link href="style.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Work+Sans" rel="stylesheet">
</head>

<body>

<form action="order.php" method="POST">
      <!-- polygonFries order area -->
      Polygon Fries <input type="checkbox" name="polygonFries" value="Yes"></br>
amount: 
</br>
<input type="button" onclick="polygonFriesPlus()" value="+">
</br>
<input type="text" id="polygonFriesCount" name="polygonFriesCount" value="1">
</br>
<input type="button" onclick="polygonFriesMinus()" value="-">
</br>
Price: <input type="text" id="polygonFriesPrice" name="polygonFriesPrice" value="3.00" readonly>
    </br>
    </br>
      <!-- pixelFries order area -->
      Pixel Fries <input type="checkbox" name="pixelFries" value="Yes"></br>
amount: 
</br>
<input type="button" onclick="pixelFriesPlus()" value="+">
</br>
<input type="text" id="pixelFriesCount" name="pixelFriesCount" value="1">
</br>
<input type="button" onclick="pixelFriesMinus()" value="-">
</br>
Price: <input type="text" id="pixelFriesPrice" name="pixelFriesPrice" value="2.00" readonly>
    </br>
    </br>
<!--
Pixel Burger Order Area
-->
Pixel Burger  <input type="checkbox" name="pixelBurger" value="Yes"></br>
Amount: 
</br>
<input type="button" onclick="pixelBurgPlus()" value="+">
</br>
<input type="text" id="pixelBurgCount" name="pixelBurgCount" value="1" readonly>
</br>
<input type="button" onclick="pixelBurgMinus()" value="-">
Price: <input type="text" id="pixelBurgPrice" name="pixelBurgPrice" value="3.00" readonly>
</br>
</br>
<!--
Extra Life Pixel Burger Order Area
-->
Extra Life Pixel Burger <input type="checkbox" name="extraLifePixelBurger" value="Yes"></br>
amount: 
</br>
<input type="button" onclick="extraLifePixelBurgPlus()" value="+">
</br>
<input type="text" id="extraLifePixelBurgCount" name="extraLifePixelBurgCount" value="1">
</br>
<input type="button" onclick="extraLifePixelBurgMinus()" value="-">
</br>
Price: <input type="text" id="extraLifePixelBurgPrice" name="extraLifePixelBurgPrice" value="4.00" readonly>
</br>
</br>
<!-- big byte order area -->
the Big Byte <input type="checkbox" name="theBigByte" value="Yes"></br>
amount: 
</br>
<input type="button" onclick="theBigBytePlus()" value="+">
</br>
<input type="text" id="theBigByteCount" name="theBigByteCount" value="1">
</br>
<input type="button" onclick="theBigByteMinus()" value="-">
</br>
Price: <input type="text" id="theBigBytePrice" name="theBigBytePrice" value="5.00" readonly>
</br>
    </br>
<!-- theTexasDownload order area -->
The Texas Download <input type="checkbox" name="theTexasDownload" value="Yes"></br>
amount: 
</br>
<input type="button" onclick="theTexasDownloadPlus()" value="+">
</br>
<input type="text" id="theTexasDownloadCount" name="theTexasDownloadCount" value="1">
</br>
<input type="button" onclick="theTexasDownloadMinus()" value="-">
</br>
Price: <input type="text" id="theTexasDownloadPrice" name="theTexasDownloadPrice" value="4.00" readonly>
    </br>
    </br>
      <!-- cDOSCheesePizza order area -->
      c DOS Cheese Pizza <input type="checkbox" name="cDOSCheesePizza" value="Yes"></br>
amount: 
</br>
<input type="button" onclick="cDOSCheesePizzaPlus()" value="+">
</br>
<input type="text" id="cDOSCheesePizzaCount" name="cDOSCheesePizzaCount" value="1">
</br>
<input type="button" onclick="cDOSCheesePizzaMinus()" value="-">
</br>
Price: <input type="text" id="cDOSCheesePizzaPrice" name="cDOSCheesePizzaPrice" value="8.00" readonly>
    </br>
    </br>
          <!-- pepperoniParserPizza order area -->
The Pepperoni Parser Pizza <input type="checkbox" name="pepperoniParserPizza" value="Yes"></br>
amount: 
</br>
<input type="button" onclick="pepperoniParserPizzaPlus()" value="+">
</br>
<input type="text" id="pepperoniParserPizzaCount" name="pepperoniParserPizzaCount" value="1">
</br>
<input type="button" onclick="pepperoniParserPizzaMinus()" value="-">
</br>
Price: <input type="text" id="pepperoniParserPizzaPrice" name="pepperoniParserPizzaPrice" value="10.00" readonly>
    </br>
    </br>
          <!-- hawaiiZonePizza order area -->
The Hawaii Zone Pizza <input type="checkbox" name="hawaiiZonePizza" value="Yes"></br>
amount: 
</br>
<input type="button" onclick="hawaiiZonePizzaPlus()" value="+">
</br>
<input type="text" id="hawaiiZonePizzaCount" name="hawaiiZonePizzaCount" value="1">
</br>
<input type="button" onclick="hawaiiZonePizzaMinus()" value="-">
</br>
Price: <input type="text" id="hawaiiZonePizzaPrice" name="hawaiiZonePizzaPrice" value="11.00" readonly>
    </br>
    </br>
          <!-- vegetablePizza order area -->
The VEGETAble Pizza <input type="checkbox" name="vegetablePizza" value="Yes"></br>
amount: 
</br>
<input type="button" onclick="vegetablePizzaPlus()" value="+">
</br>
<input type="text" id="vegetablePizzaCount" name="vegetablePizzaCount" value="1">
</br>
<input type="button" onclick="vegetablePizzaMinus()" value="-">
</br>
Price: <input type="text" id="vegetablePizzaPrice" name="vegetablePizzaPrice" value="11.00" readonly>
    </br>
    </br>
<!-- Submit --> 
<input type="submit">
</form>
</br> 
</br> 

<script type="text/javascript" src="evaulator.js"></script>

</body>

</html>