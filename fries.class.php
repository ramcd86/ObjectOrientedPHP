
<?php

// Burger object spawn template for pixel.Pizza burgers!

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
        echo "<h1>You have ordered the ".$this->burgerType." which contains:</h1> </br>";
    }

    public function echoBeefPatty() {
        $this->beefPatty = "<h3>A fresh ground Pixel Patty,</h3> </br>";
        echo $this->beefPatty;
    }

    public function echoDoubleBeefPatty() {
        $this->doubleBeefPatty = "<h3>A set of Two Pixel patties,</h3> </br>";
        echo $this->doubleBeefPatty;
    }

    public function echoCheese() {
        $this->cheese = "<h3>A slice of C DOS Cheddar,</h3> </br>";
        echo $this->cheese;
    }

    public function echoLettuce() {
        $this->lettuce = "<h3>A sprinkle of crisp Digitized Iceberg Lettuce,</h3> </br>";
        echo $this->lettuce;
    }

    public function echoBurgerSauce() {
        $this->burgerSauce = "<h3>A tablespoon of our home made Open Source Burger Sauce,</h3> </br>";
        echo $this->burgerSauce;
    }

    public function echoBBQSauce() {
        $this->bbqSauce = "<h3>A tablespoon of our authentic Binary BBQ sauce,</h3> </br>";
        echo $this->bbqSauce;
    }

    public function echoBurgerBun() {
        $this->burgerBun = "<h3>And encapsulated in a Sesame Sprite Bun!</h3>";
        echo $this->burgerBun;
    }

}

?>