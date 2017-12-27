    // Pixel Burger Count Evaulator
    function pixelBurgPlus(value) {
        var pixelBurgPrice = document.getElementById("pixelBurgPrice").value;
        document.getElementById("pixelBurgCount").value++;
        document.getElementById("pixelBurgPrice").value = parseInt(pixelBurgPrice) + 3 + ".00";
    };

    function pixelBurgMinus(value) {
        var pixelBurgPrice = document.getElementById("pixelBurgPrice").value;
        var pixelBurgCount = document.getElementById("pixelBurgCount").value;
        document.getElementById("pixelBurgCount").value--;
        document.getElementById("pixelBurgPrice").value = parseInt(pixelBurgPrice) - 3 + ".00";
        if (pixelBurgCount <= 1) {
            document.getElementById("pixelBurgCount").value = 1;
            document.getElementById("pixelBurgPrice").value = 3 + ".00";
        };
    };


    // Extra Life Pixel Burger Count Evaulator
    function extraLifePixelBurgPlus(value) {
        var extraLifePixelBurgPrice = document.getElementById("extraLifePixelBurgPrice").value;
        document.getElementById("extraLifePixelBurgCount").value++;
        document.getElementById("extraLifePixelBurgPrice").value = parseInt(extraLifePixelBurgPrice) + 4 + ".00";
    };

    function extraLifePixelBurgMinus(value) {
        var extraLifePixelBurgPrice = document.getElementById("extraLifePixelBurgPrice").value;
        var extraLifePixelBurgCount = document.getElementById("extraLifePixelBurgCount").value;
        document.getElementById("extraLifePixelBurgCount").value--;
        document.getElementById("extraLifePixelBurgPrice").value = parseInt(extraLifePixelBurgPrice) - 4 + ".00";
        if (extraLifePixelBurgCount <= 1) {
            document.getElementById("extraLifePixelBurgCount").value = 1;
            document.getElementById("extraLifePixelBurgPrice").value = 4 + ".00";
        };
    };

    //theBigByte count evaulator
    function theBigBytePlus(value) {
        var theBigBytePrice = document.getElementById("theBigBytePrice").value;
        document.getElementById("theBigByteCount").value++;
        document.getElementById("theBigBytePrice").value = parseInt(theBigBytePrice) + 5 + ".00";
    };

    function theBigByteMinus(value) {
        var theBigBytePrice = document.getElementById("theBigBytePrice").value;
        var theBigByteCount = document.getElementById("theBigByteCount").value;
        document.getElementById("theBigByteCount").value--;
        document.getElementById("theBigBytePrice").value = parseInt(theBigBytePrice) - 5 + ".00";
        if (theBigByteCount <= 1) {
            document.getElementById("theBigByteCount").value = 1;
            document.getElementById("theBigBytePrice").value = 4 + ".00";
        };
    };

    //theTexasDownload count evaulator
    function theTexasDownloadPlus(value) {
        var theTexasDownloadPrice = document.getElementById("theTexasDownloadPrice").value;
        document.getElementById("theTexasDownloadCount").value++;
        document.getElementById("theTexasDownloadPrice").value = parseInt(theTexasDownloadPrice) + 4 + ".00";
    };

    function theTexasDownloadMinus(value) {
        var theTexasDownloadPrice = document.getElementById("theTexasDownloadPrice").value;
        var theTexasDownloadCount = document.getElementById("theTexasDownloadCount").value;
        document.getElementById("theTexasDownloadCount").value--;
        document.getElementById("theTexasDownloadPrice").value = parseInt(theTexasDownloadPrice) - 4 + ".00";
        if (theTexasDownloadCount <= 1) {
            document.getElementById("theTexasDownloadCount").value = 1;
            document.getElementById("theTexasDownloadPrice").value = 4 + ".00";
        };
    };

    function cDOSCheesePizzaPlus(value) {
        var cDOSCheesePizzaPrice = document.getElementById("cDOSCheesePizzaPrice").value;
        document.getElementById("cDOSCheesePizzaCount").value++;
        document.getElementById("cDOSCheesePizzaPrice").value = parseInt(cDOSCheesePizzaPrice) + 8 + ".00";
    };

    function cDOSCheesePizzaMinus(value) {
        var cDOSCheesePizzaPrice = document.getElementById("cDOSCheesePizzaPrice").value;
        var cDOSCheesePizzaCount = document.getElementById("cDOSCheesePizzaCount").value;
        document.getElementById("cDOSCheesePizzaCount").value--;
        document.getElementById("cDOSCheesePizzaPrice").value = parseInt(cDOSCheesePizzaPrice) - 8 + ".00";
        if (cDOSCheesePizzaCount <= 1) {
            document.getElementById("cDOSCheesePizzaCount").value = 1;
            document.getElementById("cDOSCheesePizzaPrice").value = 8 + ".00";
        };
    };

    function pepperoniParserPizzaPlus(value) {
        var pepperoniParserPizzaPrice = document.getElementById("pepperoniParserPizzaPrice").value;
        document.getElementById("pepperoniParserPizzaCount").value++;
        document.getElementById("pepperoniParserPizzaPrice").value = parseInt(pepperoniParserPizzaPrice) + 10 + ".00";
    };

    function pepperoniParserPizzaMinus(value) {
        var pepperoniParserPizzaPrice = document.getElementById("pepperoniParserPizzaPrice").value;
        var pepperoniParserPizzaCount = document.getElementById("pepperoniParserPizzaCount").value;
        document.getElementById("pepperoniParserPizzaCount").value--;
        document.getElementById("pepperoniParserPizzaPrice").value = parseInt(pepperoniParserPizzaPrice) - 10 + ".00";
        if (pepperoniParserPizzaCount <= 1) {
            document.getElementById("pepperoniParserPizzaCount").value = 1;
            document.getElementById("pepperoniParserPizzaPrice").value = 10 + ".00";
        };
    };

    function hawaiiZonePizzaPlus(value) {
        var hawaiiZonePizzaPrice = document.getElementById("hawaiiZonePizzaPrice").value;
        document.getElementById("hawaiiZonePizzaCount").value++;
        document.getElementById("hawaiiZonePizzaPrice").value = parseInt(hawaiiZonePizzaPrice) + 11 + ".00";
    };

    function hawaiiZonePizzaMinus(value) {
        var hawaiiZonePizzaPrice = document.getElementById("hawaiiZonePizzaPrice").value;
        var hawaiiZonePizzaCount = document.getElementById("hawaiiZonePizzaCount").value;
        document.getElementById("hawaiiZonePizzaCount").value--;
        document.getElementById("hawaiiZonePizzaPrice").value = parseInt(hawaiiZonePizzaPrice) - 11 + ".00";
        if (hawaiiZonePizzaCount <= 1) {
            document.getElementById("hawaiiZonePizzaCount").value = 1;
            document.getElementById("hawaiiZonePizzaPrice").value = 11 + ".00";
        };
    };

    function vegetablePizzaPlus(value) {
        var vegetablePizzaPrice = document.getElementById("vegetablePizzaPrice").value;
        document.getElementById("vegetablePizzaCount").value++;
        document.getElementById("vegetablePizzaPrice").value = parseInt(vegetablePizzaPrice) + 11 + ".00";
    };

    function vegetablePizzaMinus(value) {
        var vegetablePizzaPrice = document.getElementById("vegetablePizzaPrice").value;
        var vegetablePizzaCount = document.getElementById("vegetablePizzaCount").value;
        document.getElementById("vegetablePizzaCount").value--;
        document.getElementById("vegetablePizzaPrice").value = parseInt(vegetablePizzaPrice) - 11 + ".00";
        if (vegetablePizzaCount <= 1) {
            document.getElementById("vegetablePizzaCount").value = 1;
            document.getElementById("vegetablePizzaPrice").value = 11 + ".00";
        };
    };

    function pixelFriesPlus(value) {
        var pixelFriesPrice = document.getElementById("pixelFriesPrice").value;
        document.getElementById("pixelFriesCount").value++;
        document.getElementById("pixelFriesPrice").value = parseInt(pixelFriesPrice) + 2 + ".00";
    };

    function pixelFriesMinus(value) {
        var pixelFriesPrice = document.getElementById("pixelFriesPrice").value;
        var pixelFriesCount = document.getElementById("pixelFriesCount").value;
        document.getElementById("pixelFriesCount").value--;
        document.getElementById("pixelFriesPrice").value = parseInt(pixelFriesPrice) - 2 + ".00";
        if (pixelFriesCount <= 1) {
            document.getElementById("pixelFriesCount").value = 1;
            document.getElementById("pixelFriesPrice").value = 2 + ".00";
        };
    };

    function polygonFriesPlus(value) {
        var polygonFriesPrice = document.getElementById("polygonFriesPrice").value;
        document.getElementById("polygonFriesCount").value++;
        document.getElementById("polygonFriesPrice").value = parseInt(polygonFriesPrice) + 3 + ".00";
    };

    function polygonFriesMinus(value) {
        var polygonFriesPrice = document.getElementById("polygonFriesPrice").value;
        var polygonFriesCount = document.getElementById("polygonFriesCount").value;
        document.getElementById("polygonFriesCount").value--;
        document.getElementById("polygonFriesPrice").value = parseInt(polygonFriesPrice) - 3 + ".00";
        if (polygonFriesCount <= 1) {
            document.getElementById("polygonFriesCount").value = 1;
            document.getElementById("polygonFriesPrice").value = 3 + ".00";
        };
    };