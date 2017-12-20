
<?php

// Pizza object spawn template for pixel.Pizza Pizzas!
/**
 * 	Cheese Pizza: Contains ‘Pizza Base, Tomato Sauce, Cheese’
	Pepperoni Pizza: Contains ‘Pizza Base, Tomato Sauce, Cheese, Pepperoni’
	Hawaiian Pizza: Contains ‘Pizza Base, Tomato Sauce, Cheese, Pineapple, Ham’
	Vegetarian Pizza: Contains ‘Pizza Base, Tomato Sauce, Pineapple, Sweetcorn’
 */

class Pizza {

    private $pizzaType;
    private $pizzaBase;
    private $tomatoSauce;
    private $cheese;
    private $pepperoni;
    private $pineapple;
    private $ham;
    private $sweetCorn;

    public function __construct($pizzaType) {
    $this->pizzaType = $pizzaType;
    $this->pizzaBase = $pizzaBase;
    $this->tomatoSauce = $tomatoSauce;
    $this->cheese = $cheese;
    $this->pepperoni = $pepperoni;
    $this->pineapple = $pineapple;
    $this->ham = $ham;
    $this->sweetCorn = $sweetCorn;
    }

    public function echoPizzaType() {
        echo "You have ordered the ".$this->pizzaType." which contains: </br>";
    }

    public function echoTomatoSauce() {
        $this->tomatoSauce = "A helping of our Cyber Tomato Sauce, </br>";
        echo $this->tomatoSauce;
    }

    public function echoCheese() {
        $this->cheese = "A handful of our grated C DOS Cheedar, </br>";
        echo $this->cheese;
    }

    public function echoPepperoni() {
        $this->pepperoni = "An invasion of our Object Oriented Pepperoni Discs, </br>";
        echo $this->pepperoni;
    }

    public function echoPineapple() {
        $this->pineapple = "An array of Pineapple Blocks, </br>";
        echo $this->pineapple;
    }

    public function echoHam() {
        $this->ham = "An upload of Ham, </br>";
        echo $this->ham;
    }

    public function echoSweetCorn() {
        $this->sweetCorn = "A loot crate full of our Super Sweet Sweet Corn, </br>";
        echo $this->sweetCorn;
    }

    public function echoPizzaBase() {
        $this->pizzaBase = "All laid down on our secret receipie Pixel Pizza base!";
        echo $this->pizzaBase;
    }

}

?>