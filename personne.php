<?php

class Personne {
    public $nom;
    public $prenom;
    public $age;

    public function monIdentite() {
        echo "Nom: " . $this->nom . " <br>Prénom: " . $this->prenom . " <br>Age: " . $this->age . " <br>";
    }
}
$personne1 = new Personne();
$personne1->nom = "Bernard";
$personne1->prenom = "Nicolas";
$personne1->age = 36;
$personne1 -> monIdentite();
echo "<br><br>";



class Voiture
{
    public $marque;
    public $couleur;
    public $annee;

    public function afficheCarat()
    {
        echo "Marque: " . $this->marque . "<br>Couleur: " . $this->couleur . "<br>Annee: " . $this->annee . "<br>";

    }

    public function __construct($marque, $couleur, $annee) {
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->annee = $annee;
    }
}

class voitureVIP extends Voiture{
    public $roues;
    public function __construct($marque, $couleur, $annee, $roues) {
        parent::__construct($marque, $couleur, $annee);
        $this->roues = $roues;
    }

    public function afficheRoues() {
        echo $this->roues . "<br>";
    }
}

$voiture1 = new Voiture("Ferrari", "Rouge", 2025);
$voiture1 -> afficheCarat();
echo "<br><br>";

$voiture2 = new Voiture("Mercedes", "Grise", 2024);
$voiture2 -> afficheCarat();
echo "<br><br>";

$voiture3 = new voitureVIP("BMW", "Bleue", 2025, 6);
$voiture3 -> afficheCarat();
$voiture3 -> afficheRoues();
?>
