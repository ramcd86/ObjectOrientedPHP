
<?php

/** 
 * Package Name: PIXEL PIZZA, WEBELEVATE 6.0 ASSIGNMENT 1.
 * Author: ROSS MCDERMOTT
 * Required Package Files: footer.temp.html, header.temp.html, menu.temp.html, style.css, evaulator.js, burger.class.php, extras.class.php, fries.class.php, pizza.class.php, menu.class.php, index.php, menuitems.include.php, order.php, order_action.php, background.jpg, pgbh.png, pplogo.svg.
*/



// Build ingredient list object for Pixel Pizza Fries, individual fries will be assembled from ingredients listed below.

class Fries {

    private $friesType;
    private $fries;
    private $largeFries;
    private $cheese;
    private $pixelPepperSeasoning;
    private $emeraldHillChilli;
    private $gitGarlicMayo;

    public function __construct($friesType) {
    $this->friesType = $friesType;
    $this->fries = $fries;
    $this->largeFries = $largeFries;
    $this->cheese = $cheese;
    $this->pixelPepperSeasoning = $pixelPepperSeasoning;
    $this->emeraldHillChilli = $emeraldHillChilli;
    $this->gitGarlicMayo = $gitGarlicMayo;
    }

    public function echoFriesType() {
        echo "<h1>You have ordered the ".$this->friesType." which contains:</h1>  ";
    }

    public function echoCheese() {
        $this->cheese = "<h3>A topping of melted C DOS Cheddar,</h3>  ";
        echo $this->cheese;
    }

    public function echoSeasoning() {
        $this->pixelPepperSeasoning = "<h3>A hearty sprinkling of our famous Pixel Pepper Seasoning,</h3>  ";
        echo $this->pixelPepperSeasoning;
    }

    public function echoChilli() {
        $this->emeraldHillChilli = "<h3>A heap of our eye-watering Emerald Hill Chilli,</h3>  ";
        echo $this->emeraldHillChilli;
    }

    public function echoGarlic() {
        $this->gitGarlicMayo = "<h3>A pull request of our Git Garlic Mayo</h3>  ";
        echo $this->gitGarlicMayo;
    }

    public function echoFries() {
        $this->fries = "<h3>On top of our freshly cut Pixel Fries!</h3>  ";
        echo $this->fries;
    }

    public function echoLargeFries() {
        $this->largeFries = "<h3>On top of a generous double portion of our Pixel Fries!</h3>";
        echo $this->largeFries;
    }

}

?>