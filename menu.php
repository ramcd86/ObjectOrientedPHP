<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PHP</title>
    <?php
include ('menuitems.include.php');
?>
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Work+Sans" rel="stylesheet">
</head>

<body>
<script type="text/javascript">
    // Pixel Burger Count Evaulator
      function pixelBurgPlus(value){
        var pixelBurgPrice = document.getElementById("pixelBurgPrice").value;
      document.getElementById("pixelBurgCount").value++;
      document.getElementById("pixelBurgPrice").value = parseInt(pixelBurgPrice) + 3 + ".00";
      };

      function pixelBurgMinus(value){
        var pixelBurgPrice = document.getElementById("pixelBurgPrice").value;
        var pixelBurgCount = document.getElementById("pixelBurgCount").value;
      document.getElementById("pixelBurgCount").value--;
      document.getElementById("pixelBurgPrice").value = parseInt(pixelBurgPrice) - 3 + ".00";
        if  ( pixelBurgCount <= 1 ) { 
          document.getElementById("pixelBurgCount").value = 1;
          document.getElementById("pixelBurgPrice").value = 3 + ".00";
        };
      };
       

    // Extra Life Pixel Burger Count Evaulator
      function extraLifePixelBurgPlus(value){
        var extraLifePixelBurgPrice = document.getElementById("extraLifePixelBurgPrice").value;
      document.getElementById("extraLifePixelBurgCount").value++;
      document.getElementById("extraLifePixelBurgPrice").value = parseInt(extraLifePixelBurgPrice) + 4 + ".00";
      };

      function extraLifePixelBurgMinus(value){
        var extraLifePixelBurgPrice = document.getElementById("extraLifePixelBurgPrice").value;
        var extraLifePixelBurgCount = document.getElementById("extraLifePixelBurgCount").value;
      document.getElementById("extraLifePixelBurgCount").value--;
      document.getElementById("extraLifePixelBurgPrice").value = parseInt(extraLifePixelBurgPrice) - 4 + ".00";
        if  ( extraLifePixelBurgCount <= 1 ) { 
          document.getElementById("extraLifePixelBurgCount").value = 1;
          document.getElementById("extraLifePixelBurgPrice").value = 4 + ".00";
        };
      };

      //theBigByte count evaulator
      function theBigBytePlus(value){
        var theBigBytePrice = document.getElementById("theBigBytePrice").value;
      document.getElementById("theBigByteCount").value++;
      document.getElementById("theBigBytePrice").value = parseInt(theBigBytePrice) + 5 + ".00";
      };

      function theBigByteMinus(value){
        var theBigBytePrice = document.getElementById("theBigBytePrice").value;
        var theBigByteCount = document.getElementById("theBigByteCount").value;
      document.getElementById("theBigByteCount").value--;
      document.getElementById("theBigBytePrice").value = parseInt(theBigBytePrice) - 5 + ".00";
        if  ( theBigByteCount <= 1 ) { 
          document.getElementById("theBigByteCount").value = 1;
          document.getElementById("theBigBytePrice").value = 4 + ".00";
        };
      };

            //theTexasDownload count evaulator
            function theTexasDownloadPlus(value){
        var theTexasDownloadPrice = document.getElementById("theTexasDownloadPrice").value;
      document.getElementById("theTexasDownloadCount").value++;
      document.getElementById("theTexasDownloadPrice").value = parseInt(theTexasDownloadPrice) + 4 + ".00";
      };

      function theTexasDownloadMinus(value){
        var theTexasDownloadPrice = document.getElementById("theTexasDownloadPrice").value;
        var theTexasDownloadCount = document.getElementById("theTexasDownloadCount").value;
      document.getElementById("theTexasDownloadCount").value--;
      document.getElementById("theTexasDownloadPrice").value = parseInt(theTexasDownloadPrice) - 4 + ".00";
        if  ( theTexasDownloadCount <= 1 ) { 
          document.getElementById("theTexasDownloadCount").value = 1;
          document.getElementById("theTexasDownloadPrice").value = 4 + ".00";
        };
      };
</script>
<form action="order.php" method="POST">
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

<!-- Submit --> 
<input type="submit">
</form>
</br> 
</br> 
</body>

</html>