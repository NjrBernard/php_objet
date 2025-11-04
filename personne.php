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
}
$voiture1 = new Voiture();
$voiture1->marque = "Ferrari";
$voiture1->couleur = "Rosso";
$voiture1->annee = "2025";
$voiture1 -> afficheCarat();




?>
