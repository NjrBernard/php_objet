<?php

class country {
    public $name;
    public $capital;
    public $population; /*en millions d'habitants*/
    public $continent;

    public function __construct($name, $capital, $population, $continent) {
        $this->name = $name;
        $this->capital = $capital;
        $this->population = $population;
        $this->continent = $continent;
    }

    public function getInfo() {
        echo "Le " . $this->name . " a pour capitale " . $this->capital . ". Sa population est de  " . $this->population . " millions d'habitants. Il se situe sur le continent: " .  $this->continent;
    }

}

$pays1 = new country("France", "Paris", 70, "Europe");
$pays1->getInfo();
echo "<br>";