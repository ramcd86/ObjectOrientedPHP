<?php

/** 
 * Package Name: PIXEL PIZZA, WEBELEVATE 6.0 ASSIGNMENT 1.
 * Author: ROSS MCDERMOTT
 * Required Package Files: footer.temp.html, header.temp.html, menu.temp.html, style.css, evaulator.js, burger.class.php, extras.class.php, fries.class.php, pizza.class.php, menu.class.php, index.php, menuitems.include.php, order.php, order_action.php, background.jpg, pgbh.png, pplogo.svg.
*/


// Include dependencies

include ('burger.class.php');
include ('pizza.class.php');
include ('fries.class.php');
include ('extras.class.php');


// Create a class template which builds individual menu items from ingredient classes.

class Menu {



    // Burger Functions

    public function pixelBurger() {
        $pixelBurgerArray = array(
            $pixelBurger = new Burger("Pixel Cheese Burger"),
            $pixelBurger->echoBurgerType(),
            $pixelBurger->echoBeefPatty(),
            $pixelBurger->echoCheese(),
            $pixelBurger->echoLettuce(),
            $pixelBurger->echoBurgerBun()
        );
    }
    
    public function extraLifePixelBurger() {
        $extraLifePixelBurgerArray = array(
            $extraLifePixelBurger = new Burger("Extra Life Pixel Burger"),
            $extraLifePixelBurger->echoBurgerType(),
            $extraLifePixelBurger->echoDoubleBeefPatty(),
            $extraLifePixelBurger->echoCheese(),
            $extraLifePixelBurger->echoLettuce(),
            $extraLifePixelBurger->echoBurgerBun()
        );
    }
    
    public function theBigByte() {
        $theBigByteArray = array(
            $theBigByte = new Burger("The Big Byte"),
            $theBigByte->echoBurgerType(),
            $theBigByte->echoDoubleBeefPatty(),
            $theBigByte->echoCheese(),
            $theBigByte->echoLettuce(),
            $theBigByte->echoBurgerSauce(),
            $theBigByte->echoBurgerBun()
        );
    }
    
    public function theTexasDownload() {
        $theTexasDownloadArray = array(
            $theTexasDownload = new Burger("The Texas Download"),
            $theTexasDownload->echoBurgerType(),
            $theTexasDownload->echoBeefPatty(),
            $theTexasDownload->echoCheese(),
            $theTexasDownload->echoLettuce(),
            $theTexasDownload->echoBBQSauce(),
            $theTexasDownload->echoBurgerBun()
        );
    }

    

    // Pizza Functions

    public function cDOSCheesePizza() {
    $cDOSCheesePizzaArray = array(
        $cDOSCheesePizza = new Pizza("C DOS Cheese Pizza"),
        $cDOSCheesePizza->echoPizzaType(),
        $cDOSCheesePizza->echoCheese(),
        $cDOSCheesePizza->echoTomatoSauce(),
        $cDOSCheesePizza->echoPizzaBase()
    );
}

public function pepperoniParserPizza() {
    $pepperoniParserPizzaArray = array(
        $pepperoniParserPizza = new Pizza("Pepperoni Parser Pizza"),
        $pepperoniParserPizza->echoPizzaType(),
        $pepperoniParserPizza->echoPepperoni(),
        $pepperoniParserPizza->echoCheese(),
        $pepperoniParserPizza->echoTomatoSauce(),
        $pepperoniParserPizza->echoPizzaBase()
    );
}

public function hawaiiZonePizza() {
    $hawaiiZonePizzaArray = array(
        $hawaiiZonePizza = new Pizza("Hawaii Zone Pizza"),
        $hawaiiZonePizza->echoPizzaType(),
        $hawaiiZonePizza->echoCheese(),
        $hawaiiZonePizza->echoHam(),
        $hawaiiZonePizza->echoPineapple(),
        $hawaiiZonePizza->echosweetCorn(),
        $hawaiiZonePizza->echoPizzaBase()
    );
}

public function vegetablePizza() {
    $vegetablePizzaArray = array(
        $vegetablePizza = new Pizza("VEGETAble Pizza"),
        $vegetablePizza->echoPizzaType(),
        $vegetablePizza->echoPineapple(),
        $vegetablePizza->echoSweetCorn(),
        $vegetablePizza->echoTomatoSauce(),
        $vegetablePizza->echoPizzaBase()
    );
}



// Fries Functions

public function pixelFries() {
    $pixelFriesArray = array(
        $pixelFries = new Fries("Pixel Fries"),
        $pixelFries->echoFriesType(),
        $pixelFries->echoSeasoning(),
        $pixelFries->echoFries()
    );
}

public function polygonFries() {
    $polygonFriessArray = array(
        $polygonFries = new Fries("Polygon Fries"),
        $polygonFries->echoFriesType(),
        $polygonFries->echoSeasoning(),
        $polygonFries->echoLargeFries()
    );
}

public function terminalTacoFries() {
    $terminalTacoFriesArray = array(
        $terminalTacoFries = new Fries("Terminal Taco Fries"),
        $terminalTacoFries->echoFriesType(),
        $terminalTacoFries->echoCheese(),
        $terminalTacoFries->echoChilli(),
        $terminalTacoFries->echoFries()
    );
}

public function cDOSCheeseFries() {
    $cDOSCheeseFriesArray = array(
        $cDOSCheeseFries = new Fries("C DOS Cheese Fries"),
        $cDOSCheeseFries->echoFriesType(),
        $cDOSCheeseFries->echoCheese(),
        $cDOSCheeseFries->echoGarlic(),
        $cDOSCheeseFries->echoFries()
    );
}



// Extras Functions

public function pixelCola() {
    $pixelColaArray = array(
        $pixelCola = new Extras("Pixel Cola"),
        $pixelCola->echoExtrasType(),
        $pixelCola->echoCola()
    );
}

public function pixelOrange() {
    $pixelOrangeArray = array(
        $pixelOrange = new Extras("Pixel Orange"),
        $pixelOrange->echoExtrasType(),
        $pixelOrange->echoOrange()
    );
}

public function pixelIceCream() {
    $pixelIceCreamArray = array(
        $pixelIceCream = new Extras("Pixel Ice Cream"),
        $pixelIceCream->echoExtrasType(),
        $pixelIceCream->echoIceCream()
    );
}

public function pixelCookies() {
    $pixelCookiesArray = array(
        $pixelCookies = new Extras("Pixel Cookies"),
        $pixelCookies->echoExtrasType(),
        $pixelCookies->echoCookies()
    );
}

}

?>