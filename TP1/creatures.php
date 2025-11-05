<?php

class Creature
{
    public $nom;
    public $sante;
    public $force;
    public $defense;

    public function __construct($nom, $sante, $force, $defense)
    {
        $this->nom = $nom;
        $this->sante = $sante;
        $this->force = $force;
        $this->defense = $defense;
    }

    public function afficheCreature () {
        echo "Nom: ".$this->nom."<br>"
        ."Sante: ".$this->sante."<br>"
        ."Force: ".$this->force."<br>"
        ."Defense: ".$this->defense."<br>";
    }

    public function attaquer($p2) {
        $p2->sante -= ($this->force - $p2->defense);
    }

    public function estEnVie() {
        $this->sante > 0 ? "true" : "false";
    }

}