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

include ('burger.class.php');
include ('pizza.class.php');

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
        echo "</br></br>";
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
        echo "</br></br>";
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
        echo "</br></br>";
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
        echo "</br></br>";
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
    echo "</br></br>";
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
    echo "</br></br>";
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
    echo "</br></br>";
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
    echo "</br></br>";
}
}

?>