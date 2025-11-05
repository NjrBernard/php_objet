<?php

require_once "creatures.php";

class Mage extends Creature
{
    public $cri;

    public function __construct($nom, $sante, $force, $defense, $cri)
    {
        parent::__construct($nom, $sante, $force, $defense);
        $this->cri = $cri;
    }

    public function attributionCaracteristique()
    {
        $this->sante = 100;
        $this->force = 30;
        $this->defense = 5;
        $this->cri = "Abracadabra !";
    }

    public function afficheMage()
    {
        echo "<strong>Nom: </strong>" . $this->nom . "<br>"
            . "<strong>Sante: </strong>" . $this->sante . "<br>"
            . "<strong>Force: </strong>" . $this->force . "<br>"
            . "<strong>Defense: </strong>" . $this->defense . "<br>"
            . "<strong>Cri: </strong>" . $this->cri . "<br><br>";
    }
}

