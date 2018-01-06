
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
        echo "<h1>You have ordered the ".$this->pizzaType." which contains:</h1>";
    }

    public function echoTomatoSauce() {
        $this->tomatoSauce = "<h3>A helping of our Cyber Tomato Sauce,  </h3>";
        echo $this->tomatoSauce;
    }

    public function echoCheese() {
        $this->cheese = "<h3>A handful of our grated C DOS Cheedar,  </h3>";
        echo $this->cheese;
    }

    public function echoPepperoni() {
        $this->pepperoni = "<h3>An invasion of our Object Oriented Pepperoni Discs,  </h3>";
        echo $this->pepperoni;
    }

    public function echoPineapple() {
        $this->pineapple = "<h3>An array of Pineapple Blocks,  </h3>";
        echo $this->pineapple;
    }

    public function echoHam() {
        $this->ham = "<h3>An upload of Ham,  </h3>";
        echo $this->ham;
    }

    public function echoSweetCorn() {
        $this->sweetCorn = "<h3>A loot crate full of our Super Sweet Sweet Corn,  </h3>";
        echo $this->sweetCorn;
    }

    public function echoPizzaBase() {
        $this->pizzaBase = "<h3>All laid down on our secret receipie Pixel Pizza base!  </h3>";
        echo $this->pizzaBase;
    }

}

?>