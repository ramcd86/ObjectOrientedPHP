<?php

/** 
 * Package Name: PIXEL PIZZA, WEBELEVATE 6.0 ASSIGNMENT 1.
 * Author: ROSS MCDERMOTT
 * Required Package Files: footer.temp.html, header.temp.html, menu.temp.html, style.css, evaulator.js, burger.class.php, extras.class.php, fries.class.php, pizza.class.php, menu.class.php, index.php, menuitems.include.php, order.php, order_action.php, background.jpg, pgbh.png, pplogo.svg.
*/




// Build ingredient list object for Pixel Pizza Extras, individual extras will be assembled from ingredients listed below.

class Extras {

    private $extrasType;
    private $pixelCola;
    private $pixelOrange;
    private $pixelIceCream;
    private $pixelCookies;

    public function __construct($extrasType) {
    $this->extrasType = $extrasType;
    $this->pixelCola = $pixelCola;
    $this->pixelOrange = $pixelOrange;
    $this->pixelIceCream = $pixelIceCream;
    $this->pixelCookies = $pixelCookies;
    }

    public function echoExtrasType() {
        echo "<h1>You have ordered the ".$this->extrasType." which contains:</h1>  ";
    }

    public function echoCola() {
        $this->pixelCola = "<h3>A 500ml cup of our own-brand poppin' Pixel Cola!</h3>  ";
        echo $this->pixelCola;
    }

    public function echoOrange() {
        $this->pixelOrange = "<h3>A 500ml cup of our hand-fizzed Pixel Orange!</h3>  ";
        echo $this->pixelOrange;
    }

    public function echoIceCream() {
        $this->pixelIceCream = "<h3>A pint of our Iced, then de-iced, then re-iced Pixel Ice Cream, that's double Iced!</h3>  ";
        echo $this->pixelIceCream;
    }

    public function echoCookies() {
        $this->pixelCookies = "<h3>A portion of our gooey chooey kablooey Pixel Cookies!</h3>  ";
        echo $this->pixelCookies;
    }

}

?>