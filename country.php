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

    public function afficheName() {
        echo $this->name;
    }

    public function afficheCapital() {
        echo $this->capital;
    }

    public function modifPop() { /* Augmente de 10 la population*/
        echo "Le " . $this->name . " a pour capitale " . $this->capital . ". Sa population est de  " . ($this->population + 10) . " millions d'habitants. Il se situe sur le continent: " .  $this->continent;
    }

    public function afficheContinent()
    {
        switch ($this->continent) {
            case "Europe":
                $this->continent = "européen";
                break;
            case "Amérique du Nord":
                $this->continent = "nord-américain";
                break;
            case "Amérique du Sud":
                $this->continent = "sud-américain";
                break;
            case "Asie":
                $this->continent = "asiatique";
                break;
            case "Afrique":
                $this->continent = "africain";
                break;
        }

        echo "Le " . $this->name . " a pour capitale " . $this->capital . ". Sa population est de  " . ($this->population + 10) . " millions d'habitants. Il se situe sur le continent " . $this->continent;

    }



}

echo "<u>Exercice 3</u><br><br>";
$pays1 = new country("France", "Paris", 70, "Europe");
echo "   <i>   Affichage sans modification</i><br>";
$pays1->getInfo(); echo "<br><br>";
echo "   <i>   Affichage avec + 10 millions d'habitants grâce à la fonction modifPop()</i><br>";
$pays1->modifPop(); echo "<br><br>";
echo "   <i>   Affichage avec transformation de la syntaxe pour l'écriture du continent</i><br>";
$pays1->afficheContinent();echo "<br><br>";


echo "<br>";
echo "<u>Exercice 2</u><br><br>";
