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
<div class="total">
Total: <input type="text" id="finalTotal" value="0.00"></br>
Number: <input type="text" id="itemCount" value="0"></br>
<input type="submit">
</div>
</br></br>

      <!-- pixelFries order area -->
      <div id="pixelFriesDiv" class="unselected">
      Pixel Fries <input type="checkbox" name="pixelFries" id="pixelFriesCheckbox" value="Yes">
      </br>
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
    </div>
          <!-- polygonFries order area -->
          Polygon Fries <label>Add to order<input type="checkbox" id="polygonFriesCheckbox" name="polygonFries" value="Yes"></br></label>
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
          <!-- terminalTacoFries order area -->
Terminal Taco Fries <input type="checkbox" name="terminalTacoFries" value="Yes" id="terminalTacoFriesCheckbox"></br>
amount: 
</br>
<input type="button" onclick="terminalTacoFriesPlus()" value="+">
</br>
<input type="text" id="terminalTacoFriesCount" name="terminalTacoFriesCount" value="1">
</br>
<input type="button" onclick="terminalTacoFriesMinus()" value="-">
</br>
Price: <input type="text" id="terminalTacoFriesPrice" name="terminalTacoFriesPrice" value="4.00" readonly>
    </br>
    </br>
          <!-- cDOSCheeseFries order area -->
C DOS Cheese Fries <input type="checkbox" name="cDOSCheeseFries" value="Yes" id="cDOSCheeseFriesCheckbox"></br>
amount: 
</br>
<input type="button" onclick="cDOSCheeseFriesPlus()" value="+">
</br>
<input type="text" id="cDOSCheeseFriesCount" name="cDOSCheeseFriesCount" value="1">
</br>
<input type="button" onclick="cDOSCheeseFriesMinus()" value="-">
</br>
Price: <input type="text" id="cDOSCheeseFriesPrice" name="cDOSCheeseFriesPrice" value="4.00" readonly>
    </br>
    </br>
<!--
Pixel Burger Order Area
-->
Pixel Burger  <input type="checkbox" name="pixelBurger" value="Yes" id="pixelBurgCheckbox"></br>
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
Extra Life Pixel Burger <input type="checkbox" name="extraLifePixelBurger" value="Yes" id="extraLifePixelBurgCheckbox"></br>
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
the Big Byte <input type="checkbox" name="theBigByte" value="Yes" id="theBigByteCheckbox"></br>
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
The Texas Download <input type="checkbox" name="theTexasDownload" value="Yes" id="theTexasDownloadCheckbox"></br>
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
      c DOS Cheese Pizza <input type="checkbox" name="cDOSCheesePizza" value="Yes" id="cDOSCheesePizzaCheckbox"></br>
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
The Pepperoni Parser Pizza <input type="checkbox" name="pepperoniParserPizza" value="Yes" id="pepperoniParserPizzaCheckbox"></br>
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
The Hawaii Zone Pizza <input type="checkbox" name="hawaiiZonePizza" value="Yes" id="hawaiiZonePizzaCheckbox"></br>
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
The VEGETAble Pizza <input type="checkbox" name="vegetablePizza" value="Yes" id="vegetablePizzaCheckbox"></br>
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
          <!-- pixelCola order area -->
Pixel Cola <input type="checkbox" name="pixelCola" value="Yes" id="pixelColaCheckbox"></br>
amount: 
</br>
<input type="button" onclick="pixelColaPlus()" value="+">
</br>
<input type="text" id="pixelColaCount" name="pixelColaCount" value="1">
</br>
<input type="button" onclick="pixelColaMinus()" value="-">
</br>
Price: <input type="text" id="pixelColaPrice" name="pixelColaPrice" value="1.00" readonly>
    </br>
    </br>
          <!-- pixelOrange order area -->
Pixel Orange <input type="checkbox" name="pixelOrange" value="Yes" id="pixelOrangeCheckbox"></br>
amount: 
</br>
<input type="button" onclick="pixelOrangePlus()" value="+">
</br>
<input type="text" id="pixelOrangeCount" name="pixelOrangeCount" value="1">
</br>
<input type="button" onclick="pixelOrangeMinus()" value="-">
</br>
Price: <input type="text" id="pixelOrangePrice" name="pixelOrangePrice" value="1.00" readonly>
    </br>
    </br>
          <!-- pixelIceCream order area -->
Pixel Ice Cream <input type="checkbox" name="pixelIceCream" value="Yes" id="pixelIceCreamCheckbox"></br>
amount: 
</br>
<input type="button" onclick="pixelIceCreamPlus()" value="+">
</br>
<input type="text" id="pixelIceCreamCount" name="pixelIceCreamCount" value="1">
</br>
<input type="button" onclick="pixelIceCreamMinus()" value="-">
</br>
Price: <input type="text" id="pixelIceCreamPrice" name="pixelIceCreamPrice" value="3.00" readonly>
    </br>
    </br>
          <!-- pixelCookies order area -->
Pixel Cookies <input type="checkbox" name="pixelCookies" value="Yes" id="pixelCookiesCheckbox"></br>
amount: 
</br>
<input type="button" onclick="pixelCookiesPlus()" value="+">
</br>
<input type="text" id="pixelCookiesCount" name="pixelCookiesCount" value="1">
</br>
<input type="button" onclick="pixelCookiesMinus()" value="-">
</br>
Price: <input type="text" id="pixelCookiesPrice" name="pixelCookiesPrice" value="3.00" readonly>
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