<?php

/** 
 * Package Name: PIXEL PIZZA, WEBELEVATE 6.0 ASSIGNMENT 1.
 * Author: ROSS MCDERMOTT
 * Required Package Files: footer.temp.html, header.temp.html, menu.temp.html, style.css, evaulator.js, burger.class.php, extras.class.php, fries.class.php, pizza.class.php, menu.class.php, index.php, menuitems.include.php, order.php, order_action.php, background.jpg, pgbh.png, pplogo.svg.
*/



// Build ingredient list object for Pixel Pizza Burgers, individual burgers will be assembled from ingredients listed below.

class Burger {

    private $burgerType;
    private $burgerBun;
    private $beefPatty;
    private $doubleBeefPatty;
    private $cheese;
    private $lettuce;
    private $burgerSauce;
    private $bbqSauce;

    public function __construct($burgerType) {
    $this->burgerType = $burgerType;
    $this->burgerBun = $burgerBun;
    $this->beefPatty = $beefPatty;
    $this->doubleBeefPatty = $doubleBeefPatty;
    $this->cheese = $cheese;
    $this->lettuce = $lettuce;
    $this->burgerSauce = $burgerSauce;
    $this->bbqSauce = $bbqSauce;
    }

    public function echoBurgerType() {
        echo "<h1>You have ordered the ".$this->burgerType." which contains:</h1>  ";
    }

    public function echoBeefPatty() {
        $this->beefPatty = "<h3>A fresh ground Pixel Patty,</h3>  ";
        echo $this->beefPatty;
    }

    public function echoDoubleBeefPatty() {
        $this->doubleBeefPatty = "<h3>A set of Two Pixel patties,</h3>  ";
        echo $this->doubleBeefPatty;
    }

    public function echoCheese() {
        $this->cheese = "<h3>A slice of C DOS Cheddar,</h3>  ";
        echo $this->cheese;
    }

    public function echoLettuce() {
        $this->lettuce = "<h3>A sprinkle of crisp Digitized Iceberg Lettuce,</h3>  ";
        echo $this->lettuce;
    }

    public function echoBurgerSauce() {
        $this->burgerSauce = "<h3>A tablespoon of our home made Open Source Burger Sauce,</h3>  ";
        echo $this->burgerSauce;
    }

    public function echoBBQSauce() {
        $this->bbqSauce = "<h3>A tablespoon of our authentic Binary BBQ sauce,</h3>  ";
        echo $this->bbqSauce;
    }

    public function echoBurgerBun() {
        $this->burgerBun = "<h3>And encapsulated in a Sesame Sprite Bun!</h3>";
        echo $this->burgerBun;
    }

}

?>