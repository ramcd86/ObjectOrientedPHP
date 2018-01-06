<?php

/**
 * Pixel Burger = echoBurgerType(); , echoBeefPatty(); , echoCheese(); , echoLettuce(); , echoBurgerBun();
 * Extra Life Pixel Burger = echoBurgerType(); , echoDoublebeefPatty(); , echoCheese(); , echoLettuce (); , echoBurgerBun(); ,
 * The Big Byte = echoBurgerType(); , echoDoubleBeefPatty(); , echoCheese(); , echoBurgerSauce(); , echoBurgerBun();
 * The Texas Download = echoBurgerType(); , echoBeefPatty(); , echoCheese(); , echoBBQSauce(); , echoBurgerBun();  
 */
/**
 * C DOS Cheese Pizza = echoPizzaType(), echoCheese(), echoTomatoSauce(), echoPizzaBase;
 * Pepperoni Parser Pizza = echoPizzaType(), echoPepperoni(), echoCheese(), echoTomatoSauce(), echoPizzaBase();
 * Hawaii Zone Pizza = echoPizzaType(), echoCheese(), echoHam(), echoPineapple(), echoTomatoSauce(), echoPizzaBase();
 * VEGETAble Pizza = echoPizzaType(), echoTomatoSauce(), echoPineapple(), echoSweetcorn();
 */
/**
 * Pixel Fries = echoSeasoning(), echoFries();
 * Polygon Fries = echoSeasoning(), echoLargeFries();
 * Terminal Taco Fries  = echoCheese(), echoChilli(), echoFries();
 * C DOS Cheese Fries = echoCheese(), echoGarlic(), echoLargeFries();
 */

include ('burger.class.php');
include ('pizza.class.php');
include ('fries.class.php');
include ('extras.class.php');

class Menu {

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

/**
 * C DOS Cheese Pizza = echoPizzaType(), echoCheese(), echoTomatoSauce(), echoPizzaBase;
 * Pepperoni Parser Pizza = echoPizzaType(), echoPepperoni(), echoCheese(), echoTomatoSauce(), echoPizzaBase();
 * Hawaii Zone Pizza = echoPizzaType(), echoCheese(), echoHam(), echoPineapple(), echoTomatoSauce(), echoPizzaBase();
 * VEGETAble Pizza = echoPizzaType(), echoTomatoSauce(), echoPineapple(), echoSweetCorn(), echoPizzaBase();
 */
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

/**
 * Pixel Fries = echoSeasoning(), echoFries();
 * Polygon Fries = echoSeasoning(), echoLargeFries();
 * Terminal Taco Fries  = echoCheese(), echoChilli(), echoFries();
 * C DOS Cheese Fries = echoCheese(), echoGarlic(), echoLargeFries();
 */

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