<?php

// Burger object spawn template for pixel.Pizza Extras!

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