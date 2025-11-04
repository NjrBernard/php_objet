<?php

class compteBancaire
{
    public $proprietaire;
    public $solde;
    public $annee;

    public function __construct($proprietaire, $solde, $annee)
    {
        $this->proprietaire = $proprietaire;
        $this->solde = $solde;
        $this->annee = $annee;
    }

    public function afficheProprietaire()
    {
        echo "Le propriétaire: " . $this->proprietaire . "<br>";

    }

    public function afficheSolde()
    {
        echo "Le solde: " . $this->solde ."<br>";
    }
}
class compteEpargne extends compteBancaire{
     public $soldeBloque;
     public function __construct($proprietaire, $solde, $annee, $soldeBloque) {
         parent::__construct($proprietaire, $solde, $annee);
         $this->soldeBloque = $soldeBloque;
     }
    public function afficheCompteBloque(){
         echo "Le montant bloqué: " . $this->soldeBloque;
    }
}



$compte1 = new compteBancaire("Nicolas", 2000000, 2025);
$compte1 -> afficheProprietaire();
$compte1 -> afficheSolde();
echo "<br>";

$compte2 = new compteEpargne("Nicolas", 2000000, 2025, 1000000);
$compte2 -> afficheProprietaire();
$compte2 -> afficheSolde();
$compte2 -> afficheCompteBloque();

?>