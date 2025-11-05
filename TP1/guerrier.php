<?php
require_once "creatures.php";

class Guerrier extends Creature {
    public $cri;

    public function __construct($nom, $sante, $force, $defense, /*$pouvoir,*/ $cri) {
        parent::__construct($nom, $sante, $force, $defense);
        //$this->pouvoir = $pouvoir;
        $this->cri = $cri;
    }

    public function attributionCaracteristique() {
        $this->sante = 150;
        $this->force = 20;
        $this->defense = 10;
        $this->cri = "Pour la gloire !";
    }

    public function affichePerso() {
        echo "<strong>Nom: </strong>".$this->nom."<br>"
            ."<strong>Sante: </strong>".$this->sante."<br>"
            ."<strong>Force: </strong>".$this->force."<br>"
            ."<strong>Defense: </strong>".$this->defense."<br>"
            ."<strong>Cri: </strong>".$this->cri."<br><br>";
    }

    public function crier() {
        echo $this->cri;
        }

}
