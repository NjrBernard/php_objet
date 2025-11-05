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

    public function getInfo() :void {
        echo "Le " . $this->name . " a pour capitale " . $this->capital . ". Sa population est de  " . $this->population . " millions d'habitants. Il se situe sur le continent: " .  $this->continent ;
    }

    //Mes getters
    public function getName() {
        return $this->name;
    }
    public function getCapital() {
        return $this->capital;
    }
    public function getPopulation() {
        return $this->population;
    }
    public function getContinent() {
        return $this->continent;
    }

//Fin des getters

// Mes setters

    public function modifName($nouveauNom) {
        return $this->name = $nouveauNom;
    }
    public function modifCapital($nouvelleCapital) {
        return $this->capital = $nouvelleCapital;
    }

    public function modifPop($nouvellePop) { /* Augmente de 10 la population*/
        return $this->population = $nouvellePop;
        /*echo "Le " . $this->name . " a pour capitale " . $this->capital . ". Sa population est de  " . ($this->population + 10) . " millions d'habitants. Il se situe sur le continent: " .  $this->continent . ".";*/
    }

    public function afficheContinent() :void
    {
        switch ($this->continent) {
            case "Europe":
                echo "Le " . $this->name . " a pour capitale " . $this->capital . ". Sa population est de  " . $this->population . " millions d'habitants. Il se situe sur le continent européen";
                //$this->continent = "européen";
                break;
            case "Amérique du Nord":
                echo "Le " . $this->name . " a pour capitale " . $this->capital . ". Sa population est de  " . $this->population . " millions d'habitants. Il se situe sur le continent nord-américain";
                //$this->continent = "nord-américain";
                break;
            case "Amérique du Sud":
                echo "Le " . $this->name . " a pour capitale " . $this->capital . ". Sa population est de  " . $this->population . " millions d'habitants. Il se situe sur le continent sud-américain";
                //$this->continent = "sud-américain";
                break;
            case "Asie":
                echo "Le " . $this->name . " a pour capitale " . $this->capital . ". Sa population est de  " . $this->population . " millions d'habitants. Il se situe sur le continent asiatique";
                //$this->continent = "asiatique";
                break;
            case "Afrique":
                echo "Le " . $this->name . " a pour capitale " . $this->capital . ". Sa population est de  " . $this->population . " millions d'habitants. Il se situe sur le continent africain";
                //$this->continent = "africain";
                break;
        }


    }

//Fin des setters

}

class DevelopedCountry extends country {
    public $gdp;

    public function __construct($name, $capital, $population, $continent, $gdp) {
        parent::__construct($name, $capital, $population, $continent);
        $this->gdp = $gdp;
    }

    public function getGdp() : void{
        parent::getInfo();
        echo " Son PIB est de " . $this->gdp . " Mds€";
    }

}



echo "<u>Exercice 3</u><br><br>";
$pays1 = new country("France", "Paris", 70, "Europe");
echo "   <i>   Affichage sans modification</i><br>";
$pays1->getInfo(); echo "<br><br>";
echo "   <i>   Affichage avec modifPop()</i>";
$pays1->modifPop(541); echo "<br><br>";
$pays1->getInfo(); echo "<br><br>";
echo "   <i>   Affichage avec transformation de la syntaxe pour l'écriture du continent</i><br>";
$pays1->afficheContinent();echo "<br><br>";


echo "<br>";
echo "<u>Exercice 2</u><br><br>";

$pays2 = new DevelopedCountry("Allemagne", "Berlin", 80, "Europe", 4300);

$pays2->getInfo(); echo "<br><br>";
echo "<i> Affichage avec le PIB </i><br>";
$pays2->getGdp(); echo "<br><br>";