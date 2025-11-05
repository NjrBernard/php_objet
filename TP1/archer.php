<?php

require_once "creatures.php";

class Archer extends Creature
{
    public $cri;

    public function __construct($nom, $sante, $force, $defense, $cri)
    {
        parent::__construct($nom, $sante, $force, $defense);
        $this->cri = $cri;
    }

    public function attributionCaracteristique()
    {
        $this->sante = 120;
        $this->force = 15;
        $this->defense = 8;
        $this->cri = "Prêt à viser !";
    }

    public function afficheArcher()
    {
        echo "<strong>Nom: </strong>" . $this->nom . "<br>"
            . "<strong>Sante: </strong>" . $this->sante . "<br>"
            . "<strong>Force: </strong>" . $this->force . "<br>"
            . "<strong>Defense: </strong>" . $this->defense . "<br>"
            . "<strong>Cri: </strong>" . $this->cri . "<br><br>";}

    }

