var pixelFriesPrice = parseInt(document.getElementById("pixelFriesPrice").value);
var pixelFriesCount = parseInt(document.getElementById("pixelFriesCount").value);
var pixelFriesTotal = 0;
var pixelFriesTotalCount = 0;
var polygonFriesPrice = parseInt(document.getElementById("polygonFriesPrice").value);
var polygonFriesCount = parseInt(document.getElementById("polygonFriesCount").value);
var polygonFriesTotal = 0;
var polygonFriesTotalCount = 0;
var terminalTacoFriesPrice = parseInt(document.getElementById("terminalTacoFriesPrice").value);
var terminalTacoFriesCount = parseInt(document.getElementById("terminalTacoFriesCount").value);
var terminalTacoFriesTotal = 0;
var terminalTacoFriesTotalCount = 0;
var cDOSCheeseFriesPrice = parseInt(document.getElementById("cDOSCheeseFriesPrice").value);
var cDOSCheeseFriesCount = parseInt(document.getElementById("cDOSCheeseFriesCount").value);
var cDOSCheeseFriesTotal = 0;
var cDOSCheeseFriesTotalCount = 0;
var pixelBurgPrice = parseInt(document.getElementById("pixelBurgPrice").value);
var pixelBurgCount = parseInt(document.getElementById("pixelBurgCount").value);
var pixelBurgTotal = 0;
var pixelBurgTotalCount = 0;
var extraLifePixelBurgPrice = parseInt(document.getElementById("extraLifePixelBurgPrice").value);
var extraLifePixelBurgCount = parseInt(document.getElementById("extraLifePixelBurgCount").value);
var extraLifePixelBurgTotal = 0;
var extraLifePixelBurgTotalCount = 0;
var theBigBytePrice = parseInt(document.getElementById("theBigBytePrice").value);
var theBigByteCount = parseInt(document.getElementById("theBigByteCount").value);
var theBigByteTotal = 0;
var theBigByteTotalCount = 0;
var theTexasDownloadPrice = parseInt(document.getElementById("theTexasDownloadPrice").value);
var theTexasDownloadCount = parseInt(document.getElementById("theTexasDownloadCount").value);
var theTexasDownloadTotal = 0;
var theTexasDownloadTotalCount = 0;
var cDOSCheesePizzaPrice = parseInt(document.getElementById("cDOSCheesePizzaPrice").value);
var cDOSCheesePizzaCount = parseInt(document.getElementById("cDOSCheesePizzaCount").value);
var cDOSCheesePizzaTotal = 0;
var cDOSCheesePizzaTotalCount = 0;
var pepperoniParserPizzaPrice = parseInt(document.getElementById("pepperoniParserPizzaPrice").value);
var pepperoniParserPizzaCount = parseInt(document.getElementById("pepperoniParserPizzaCount").value);
var pepperoniParserPizzaTotal = 0;
var pepperoniParserPizzaTotalCount = 0;
var hawaiiZonePizzaPrice = parseInt(document.getElementById("hawaiiZonePizzaPrice").value);
var hawaiiZonePizzaCount = parseInt(document.getElementById("hawaiiZonePizzaCount").value);
var hawaiiZonePizzaTotal = 0;
var hawaiiZonePizzaTotalCount = 0;
var vegetablePizzaPrice = parseInt(document.getElementById("vegetablePizzaPrice").value);
var vegetablePizzaCount = parseInt(document.getElementById("vegetablePizzaCount").value);
var vegetablePizzaTotal = 0;
var vegetablePizzaTotalCount = 0;
var pixelColaPrice = parseInt(document.getElementById("pixelColaPrice").value);
var pixelColaCount = parseInt(document.getElementById("pixelColaCount").value);
var pixelColaTotal = 0;
var pixelColaTotalCount = 0;
var pixelOrangePrice = parseInt(document.getElementById("pixelOrangePrice").value);
var pixelOrangeCount = parseInt(document.getElementById("pixelOrangeCount").value);
var pixelOrangeTotal = 0;
var pixelOrangeTotalCount = 0;
var pixelIceCreamPrice = parseInt(document.getElementById("pixelIceCreamPrice").value);
var pixelIceCreamCount = parseInt(document.getElementById("pixelIceCreamCount").value);
var pixelIceCreamTotal = 0;
var pixelIceCreamTotalCount = 0;
var pixelCookiesPrice = parseInt(document.getElementById("pixelCookiesPrice").value);
var pixelCookiesCount = parseInt(document.getElementById("pixelCookiesCount").value);
var pixelCookiesTotal = 0;
var pixelCookiesTotalCount = 0;
var finalTotal = 0;
var itemCount = 0;
var totalComp = document.getElementById("finalTotal");
var totalItem = document.getElementById("itemCount");


document.onclick = function() {
    if (document.getElementById("pixelFriesCheckbox").checked == true) {
        document.getElementById("pixelFriesDiv").classList = "selected";
        pixelFriesTotalCount = 1;
        pixelFriesTotal = parseInt(document.getElementById("pixelFriesPrice").value);
    } else if (document.getElementById("pixelFriesCheckbox").checked == false) {
        document.getElementById("pixelFriesDiv").className = "unselected";
        pixelFriesTotalCount = 0;
        pixelFriesTotal = 0;
    }
    if (document.getElementById("polygonFriesCheckbox").checked == true) {
        polygonFriesTotalCount = 1;
        polygonFriesTotal = parseInt(document.getElementById("polygonFriesPrice").value);
    } else if (document.getElementById("polygonFriesCheckbox").checked == false) {
        polygonFriesTotalCount = 0;
        polygonFriesTotal = 0;
    }
    if (document.getElementById("terminalTacoFriesCheckbox").checked == true) {
        terminalTacoFriesTotalCount = 1;
        terminalTacoFriesTotal = parseInt(document.getElementById("terminalTacoFriesPrice").value);
    } else if (document.getElementById("terminalTacoFriesCheckbox").checked == false) {
        terminalTacoFriesTotalCount = 0;
        terminalTacoFriesTotal = 0;
    }
    if (document.getElementById("cDOSCheeseFriesCheckbox").checked == true) {
        cDOSCheeseFriesTotalCount = 1;
        cDOSCheeseFriesTotal = parseInt(document.getElementById("cDOSCheeseFriesPrice").value);
    } else if (document.getElementById("cDOSCheeseFriesCheckbox").checked == false) {
        cDOSCheeseFriesTotalCount = 0;
        cDOSCheeseFriesTotal = 0;
    }
    if (document.getElementById("pixelBurgCheckbox").checked == true) {
        pixelBurgTotalCount = 1;
        pixelBurgTotal = parseInt(document.getElementById("pixelBurgPrice").value);
    } else if (document.getElementById("pixelBurgCheckbox").checked == false) {
        pixelBurgTotalCount = 0;
        pixelBurgTotal = 0;
    }
    if (document.getElementById("extraLifePixelBurgCheckbox").checked == true) {
        extraLifePixelBurgTotalCount = 1;
        extraLifePixelBurgTotal = parseInt(document.getElementById("extraLifePixelBurgPrice").value);
    } else if (document.getElementById("extraLifePixelBurgCheckbox").checked == false) {
        extraLifePixelBurgTotalCount = 0;
        extraLifePixelBurgTotal = 0;
    }
    if (document.getElementById("theBigByteCheckbox").checked == true) {
        theBigByteTotalCount = 1;
        theBigByteTotal = parseInt(document.getElementById("theBigBytePrice").value);
    } else if (document.getElementById("theBigByteCheckbox").checked == false) {
        theBigByteTotalCount = 0;
        theBigByteTotal = 0;
    }

    if (document.getElementById("theTexasDownloadCheckbox").checked == true) {
        theTexasDownloadTotalCount = 1;
        theTexasDownloadTotal = parseInt(document.getElementById("theTexasDownloadPrice").value);
    } else if (document.getElementById("theTexasDownloadCheckbox").checked == false) {
        theTexasDownloadTotalCount = 0;
        theTexasDownloadTotal = 0;
    }

    if (document.getElementById("cDOSCheesePizzaCheckbox").checked == true) {
        cDOSCheesePizzaTotalCount = 1;
        cDOSCheesePizzaTotal = parseInt(document.getElementById("cDOSCheesePizzaPrice").value);
    } else if (document.getElementById("cDOSCheesePizzaCheckbox").checked == false) {
        cDOSCheesePizzaTotalCount = 0;
        cDOSCheesePizzaTotal = 0;
    }

    if (document.getElementById("pepperoniParserPizzaCheckbox").checked == true) {
        pepperoniParserPizzaTotalCount = 1;
        pepperoniParserPizzaTotal = parseInt(document.getElementById("pepperoniParserPizzaPrice").value);
    } else if (document.getElementById("pepperoniParserPizzaCheckbox").checked == false) {
        pepperoniParserPizzaTotalCount = 0;
        pepperoniParserPizzaTotal = 0;
    }

    if (document.getElementById("hawaiiZonePizzaCheckbox").checked == true) {
        hawaiiZonePizzaTotalCount = 1;
        hawaiiZonePizzaTotal = parseInt(document.getElementById("hawaiiZonePizzaPrice").value);
    } else if (document.getElementById("hawaiiZonePizzaCheckbox").checked == false) {
        hawaiiZonePizzaTotalCount = 0;
        hawaiiZonePizzaTotal = 0;
    }

    if (document.getElementById("vegetablePizzaCheckbox").checked == true) {
        vegetablePizzaTotalCount = 1;
        vegetablePizzaTotal = parseInt(document.getElementById("vegetablePizzaPrice").value);
    } else if (document.getElementById("vegetablePizzaCheckbox").checked == false) {
        vegetablePizzaTotalCount = 0;
        vegetablePizzaTotal = 0;
    }

    if (document.getElementById("pixelColaCheckbox").checked == true) {
        pixelColaTotalCount = 1;
        pixelColaTotal = parseInt(document.getElementById("pixelColaPrice").value);
    } else if (document.getElementById("pixelColaCheckbox").checked == false) {
        pixelColaTotalCount = 0;
        pixelColaTotal = 0;
    }

    if (document.getElementById("pixelOrangeCheckbox").checked == true) {
        pixelOrangeTotalCount = 1;
        pixelOrangeTotal = parseInt(document.getElementById("pixelOrangePrice").value);
    } else if (document.getElementById("pixelOrangeCheckbox").checked == false) {
        pixelOrangeTotalCount = 0;
        pixelOrangeTotal = 0;
    }

    if (document.getElementById("pixelIceCreamCheckbox").checked == true) {
        pixelIceCreamTotalCount = 1;
        pixelIceCreamTotal = parseInt(document.getElementById("pixelIceCreamPrice").value);
    } else if (document.getElementById("pixelIceCreamCheckbox").checked == false) {
        pixelIceCreamTotalCount = 0;
        pixelIceCreamTotal = 0;
    }

    if (document.getElementById("pixelCookiesCheckbox").checked == true) {
        pixelCookiesTotalCount = 1;
        pixelCookiesTotal = parseInt(document.getElementById("pixelCookiesPrice").value);
    } else if (document.getElementById("pixelCookiesCheckbox").checked == false) {
        pixelCookiesTotalCount = 0;
        pixelCookiesTotal = 0;
    }

    finalTotal = parseInt(pixelFriesTotal + polygonFriesTotal + terminalTacoFriesTotal + cDOSCheeseFriesTotal + pixelBurgTotal + extraLifePixelBurgTotal + theBigByteTotal + theTexasDownloadTotal + cDOSCheesePizzaTotal + pepperoniParserPizzaTotal + hawaiiZonePizzaTotal + vegetablePizzaTotal + pixelColaTotal + pixelOrangeTotal + pixelIceCreamTotal + pixelCookiesTotal);

    itemCount = parseInt(pixelFriesTotalCount + polygonFriesTotalCount + terminalTacoFriesTotalCount + cDOSCheeseFriesTotalCount + pixelBurgTotalCount + extraLifePixelBurgTotalCount + theBigByteTotalCount + theTexasDownloadTotalCount + cDOSCheesePizzaTotalCount + pepperoniParserPizzaTotalCount + hawaiiZonePizzaTotalCount + vegetablePizzaTotalCount + pixelColaTotalCount + pixelOrangeTotalCount + pixelIceCreamTotalCount + pixelCookiesTotalCount);

    if (itemCount > 3) {
        totalComp.value = (finalTotal / 100 * 90).toFixed(2);
    } else {
        totalComp.value = totalComp.value = finalTotal;
    }

    totalItem.value = itemCount;
};


function pixelFriesPlus(value) {
    pixelFriesPrice = document.getElementById("pixelFriesPrice").value;
    document.getElementById("pixelFriesCount").value++;
    document.getElementById("pixelFriesPrice").value = parseInt(pixelFriesPrice) + 2 + ".00";
};

function pixelFriesMinus(value) {
    pixelFriesPrice = document.getElementById("pixelFriesPrice").value;
    pixelFriesCount = document.getElementById("pixelFriesCount").value;
    document.getElementById("pixelFriesCount").value--;
    document.getElementById("pixelFriesPrice").value = parseInt(pixelFriesPrice) - 2 + ".00";
    if (pixelFriesCount <= 1) {
        document.getElementById("pixelFriesCount").value = 1;
        document.getElementById("pixelFriesPrice").value = 2 + ".00";
    };
};

function polygonFriesPlus(value) {
    polygonFriesPrice = document.getElementById("polygonFriesPrice").value;
    document.getElementById("polygonFriesCount").value++;
    document.getElementById("polygonFriesPrice").value = parseInt(polygonFriesPrice) + 3 + ".00";
};

function polygonFriesMinus(value) {
    polygonFriesPrice = document.getElementById("polygonFriesPrice").value;
    polygonFriesCount = document.getElementById("polygonFriesCount").value;
    document.getElementById("polygonFriesCount").value--;
    document.getElementById("polygonFriesPrice").value = parseInt(polygonFriesPrice) - 3 + ".00";
    if (polygonFriesCount <= 1) {
        document.getElementById("polygonFriesCount").value = 1;
        document.getElementById("polygonFriesPrice").value = 3 + ".00";
    };
};

function terminalTacoFriesPlus(value) {
    terminalTacoFriesPrice = document.getElementById("terminalTacoFriesPrice").value;
    document.getElementById("terminalTacoFriesCount").value++;
    document.getElementById("terminalTacoFriesPrice").value = parseInt(terminalTacoFriesPrice) + 4 + ".00";
};

function terminalTacoFriesMinus(value) {
    terminalTacoFriesPrice = document.getElementById("terminalTacoFriesPrice").value;
    terminalTacoFriesCount = document.getElementById("terminalTacoFriesCount").value;
    document.getElementById("terminalTacoFriesCount").value--;
    document.getElementById("terminalTacoFriesPrice").value = parseInt(terminalTacoFriesPrice) - 4 + ".00";
    if (terminalTacoFriesCount <= 1) {
        document.getElementById("terminalTacoFriesCount").value = 1;
        document.getElementById("terminalTacoFriesPrice").value = 4 + ".00";
    };
};

function cDOSCheeseFriesPlus(value) {
    cDOSCheeseFriesPrice = document.getElementById("cDOSCheeseFriesPrice").value;
    document.getElementById("cDOSCheeseFriesCount").value++;
    document.getElementById("cDOSCheeseFriesPrice").value = parseInt(cDOSCheeseFriesPrice) + 4 + ".00";
};

function cDOSCheeseFriesMinus(value) {
    cDOSCheeseFriesPrice = document.getElementById("cDOSCheeseFriesPrice").value;
    cDOSCheeseFriesCount = document.getElementById("cDOSCheeseFriesCount").value;
    document.getElementById("cDOSCheeseFriesCount").value--;
    document.getElementById("cDOSCheeseFriesPrice").value = parseInt(cDOSCheeseFriesPrice) - 4 + ".00";
    if (cDOSCheeseFriesCount <= 1) {
        document.getElementById("cDOSCheeseFriesCount").value = 1;
        document.getElementById("cDOSCheeseFriesPrice").value = 4 + ".00";
    };
};

// Pixel Burger Count Evaulator
function pixelBurgPlus(value) {
    pixelBurgPrice = document.getElementById("pixelBurgPrice").value;
    document.getElementById("pixelBurgCount").value++;
    document.getElementById("pixelBurgPrice").value = parseInt(pixelBurgPrice) + 3 + ".00";
};

function pixelBurgMinus(value) {
    pixelBurgPrice = document.getElementById("pixelBurgPrice").value;
    pixelBurgCount = document.getElementById("pixelBurgCount").value;
    document.getElementById("pixelBurgCount").value--;
    document.getElementById("pixelBurgPrice").value = parseInt(pixelBurgPrice) - 3 + ".00";
    if (pixelBurgCount <= 1) {
        document.getElementById("pixelBurgCount").value = 1;
        document.getElementById("pixelBurgPrice").value = 3 + ".00";
    };
};


// Extra Life Pixel Burger Count Evaulator
function extraLifePixelBurgPlus(value) {
    extraLifePixelBurgPrice = document.getElementById("extraLifePixelBurgPrice").value;
    document.getElementById("extraLifePixelBurgCount").value++;
    document.getElementById("extraLifePixelBurgPrice").value = parseInt(extraLifePixelBurgPrice) + 4 + ".00";
};

function extraLifePixelBurgMinus(value) {
    extraLifePixelBurgPrice = document.getElementById("extraLifePixelBurgPrice").value;
    extraLifePixelBurgCount = document.getElementById("extraLifePixelBurgCount").value;
    document.getElementById("extraLifePixelBurgCount").value--;
    document.getElementById("extraLifePixelBurgPrice").value = parseInt(extraLifePixelBurgPrice) - 4 + ".00";
    if (extraLifePixelBurgCount <= 1) {
        document.getElementById("extraLifePixelBurgCount").value = 1;
        document.getElementById("extraLifePixelBurgPrice").value = 4 + ".00";
    };
};

//theBigByte count evaulator
function theBigBytePlus(value) {
    theBigBytePrice = document.getElementById("theBigBytePrice").value;
    document.getElementById("theBigByteCount").value++;
    document.getElementById("theBigBytePrice").value = parseInt(theBigBytePrice) + 5 + ".00";
};

function theBigByteMinus(value) {
    theBigBytePrice = document.getElementById("theBigBytePrice").value;
    theBigByteCount = document.getElementById("theBigByteCount").value;
    document.getElementById("theBigByteCount").value--;
    document.getElementById("theBigBytePrice").value = parseInt(theBigBytePrice) - 5 + ".00";
    if (theBigByteCount <= 1) {
        document.getElementById("theBigByteCount").value = 1;
        document.getElementById("theBigBytePrice").value = 4 + ".00";
    };
};

//theTexasDownload count evaulator
function theTexasDownloadPlus(value) {
    theTexasDownloadPrice = document.getElementById("theTexasDownloadPrice").value;
    document.getElementById("theTexasDownloadCount").value++;
    document.getElementById("theTexasDownloadPrice").value = parseInt(theTexasDownloadPrice) + 4 + ".00";
};

function theTexasDownloadMinus(value) {
    theTexasDownloadPrice = document.getElementById("theTexasDownloadPrice").value;
    theTexasDownloadCount = document.getElementById("theTexasDownloadCount").value;
    document.getElementById("theTexasDownloadCount").value--;
    document.getElementById("theTexasDownloadPrice").value = parseInt(theTexasDownloadPrice) - 4 + ".00";
    if (theTexasDownloadCount <= 1) {
        document.getElementById("theTexasDownloadCount").value = 1;
        document.getElementById("theTexasDownloadPrice").value = 4 + ".00";
    };
};

function cDOSCheesePizzaPlus(value) {
    cDOSCheesePizzaPrice = document.getElementById("cDOSCheesePizzaPrice").value;
    document.getElementById("cDOSCheesePizzaCount").value++;
    document.getElementById("cDOSCheesePizzaPrice").value = parseInt(cDOSCheesePizzaPrice) + 8 + ".00";
};

function cDOSCheesePizzaMinus(value) {
    cDOSCheesePizzaPrice = document.getElementById("cDOSCheesePizzaPrice").value;
    cDOSCheesePizzaCount = document.getElementById("cDOSCheesePizzaCount").value;
    document.getElementById("cDOSCheesePizzaCount").value--;
    document.getElementById("cDOSCheesePizzaPrice").value = parseInt(cDOSCheesePizzaPrice) - 8 + ".00";
    if (cDOSCheesePizzaCount <= 1) {
        document.getElementById("cDOSCheesePizzaCount").value = 1;
        document.getElementById("cDOSCheesePizzaPrice").value = 8 + ".00";
    };
};

function pepperoniParserPizzaPlus(value) {
    pepperoniParserPizzaPrice = document.getElementById("pepperoniParserPizzaPrice").value;
    document.getElementById("pepperoniParserPizzaCount").value++;
    document.getElementById("pepperoniParserPizzaPrice").value = parseInt(pepperoniParserPizzaPrice) + 10 + ".00";
};

function pepperoniParserPizzaMinus(value) {
    pepperoniParserPizzaPrice = document.getElementById("pepperoniParserPizzaPrice").value;
    pepperoniParserPizzaCount = document.getElementById("pepperoniParserPizzaCount").value;
    document.getElementById("pepperoniParserPizzaCount").value--;
    document.getElementById("pepperoniParserPizzaPrice").value = parseInt(pepperoniParserPizzaPrice) - 10 + ".00";
    if (pepperoniParserPizzaCount <= 1) {
        document.getElementById("pepperoniParserPizzaCount").value = 1;
        document.getElementById("pepperoniParserPizzaPrice").value = 10 + ".00";
    };
};

function hawaiiZonePizzaPlus(value) {
    hawaiiZonePizzaPrice = document.getElementById("hawaiiZonePizzaPrice").value;
    document.getElementById("hawaiiZonePizzaCount").value++;
    document.getElementById("hawaiiZonePizzaPrice").value = parseInt(hawaiiZonePizzaPrice) + 11 + ".00";
};

function hawaiiZonePizzaMinus(value) {
    hawaiiZonePizzaPrice = document.getElementById("hawaiiZonePizzaPrice").value;
    hawaiiZonePizzaCount = document.getElementById("hawaiiZonePizzaCount").value;
    document.getElementById("hawaiiZonePizzaCount").value--;
    document.getElementById("hawaiiZonePizzaPrice").value = parseInt(hawaiiZonePizzaPrice) - 11 + ".00";
    if (hawaiiZonePizzaCount <= 1) {
        document.getElementById("hawaiiZonePizzaCount").value = 1;
        document.getElementById("hawaiiZonePizzaPrice").value = 11 + ".00";
    };
};

function vegetablePizzaPlus(value) {
    vegetablePizzaPrice = document.getElementById("vegetablePizzaPrice").value;
    document.getElementById("vegetablePizzaCount").value++;
    document.getElementById("vegetablePizzaPrice").value = parseInt(vegetablePizzaPrice) + 11 + ".00";
};

function vegetablePizzaMinus(value) {
    vegetablePizzaPrice = document.getElementById("vegetablePizzaPrice").value;
    vegetablePizzaCount = document.getElementById("vegetablePizzaCount").value;
    document.getElementById("vegetablePizzaCount").value--;
    document.getElementById("vegetablePizzaPrice").value = parseInt(vegetablePizzaPrice) - 11 + ".00";
    if (vegetablePizzaCount <= 1) {
        document.getElementById("vegetablePizzaCount").value = 1;
        document.getElementById("vegetablePizzaPrice").value = 11 + ".00";
    };
};

function pixelColaPlus(value) {
    pixelColaPrice = document.getElementById("pixelColaPrice").value;
    document.getElementById("pixelColaCount").value++;
    document.getElementById("pixelColaPrice").value = parseInt(pixelColaPrice) + 1 + ".00";
};

function pixelColaMinus(value) {
    pixelColaPrice = document.getElementById("pixelColaPrice").value;
    pixelColaCount = document.getElementById("pixelColaCount").value;
    document.getElementById("pixelColaCount").value--;
    document.getElementById("pixelColaPrice").value = parseInt(pixelColaPrice) - 1 + ".00";
    if (pixelColaCount <= 1) {
        document.getElementById("pixelColaCount").value = 1;
        document.getElementById("pixelColaPrice").value = 1 + ".00";
    };
};

function pixelOrangePlus(value) {
    pixelOrangePrice = document.getElementById("pixelOrangePrice").value;
    document.getElementById("pixelOrangeCount").value++;
    document.getElementById("pixelOrangePrice").value = parseInt(pixelOrangePrice) + 1 + ".00";
};

function pixelOrangeMinus(value) {
    pixelOrangePrice = document.getElementById("pixelOrangePrice").value;
    pixelOrangeCount = document.getElementById("pixelOrangeCount").value;
    document.getElementById("pixelOrangeCount").value--;
    document.getElementById("pixelOrangePrice").value = parseInt(pixelOrangePrice) - 1 + ".00";
    if (pixelOrangeCount <= 1) {
        document.getElementById("pixelOrangeCount").value = 1;
        document.getElementById("pixelOrangePrice").value = 1 + ".00";
    };
};

function pixelIceCreamPlus(value) {
    pixelIceCreamPrice = document.getElementById("pixelIceCreamPrice").value;
    document.getElementById("pixelIceCreamCount").value++;
    document.getElementById("pixelIceCreamPrice").value = parseInt(pixelIceCreamPrice) + 3 + ".00";
};

function pixelIceCreamMinus(value) {
    pixelIceCreamPrice = document.getElementById("pixelIceCreamPrice").value;
    pixelIceCreamCount = document.getElementById("pixelIceCreamCount").value;
    document.getElementById("pixelIceCreamCount").value--;
    document.getElementById("pixelIceCreamPrice").value = parseInt(pixelIceCreamPrice) - 3 + ".00";
    if (pixelIceCreamCount <= 1) {
        document.getElementById("pixelIceCreamCount").value = 1;
        document.getElementById("pixelIceCreamPrice").value = 3 + ".00";
    };
};

function pixelCookiesPlus(value) {
    pixelCookiesPrice = document.getElementById("pixelCookiesPrice").value;
    document.getElementById("pixelCookiesCount").value++;
    document.getElementById("pixelCookiesPrice").value = parseInt(pixelCookiesPrice) + 3 + ".00";
};

function pixelCookiesMinus(value) {
    pixelCookiesPrice = document.getElementById("pixelCookiesPrice").value;
    pixelCookiesCount = document.getElementById("pixelCookiesCount").value;
    document.getElementById("pixelCookiesCount").value--;
    document.getElementById("pixelCookiesPrice").value = parseInt(pixelCookiesPrice) - 3 + ".00";
    if (pixelCookiesCount <= 1) {
        document.getElementById("pixelCookiesCount").value = 1;
        document.getElementById("pixelCookiesPrice").value = 3 + ".00";
    };
};