<?php
require_once "liste_persos.php";

class Arene
{

public function lancerCombat($p1,$p2){
while ($p1->estEnVie() && $p2->estEnVie()){
    $p1->attaquer($p2);
    $p2->afficheMage();
        if (!$p2->estEnVie()){
            echo "Victoire de P1";}
        else {
        $p2->attaquer($p1);
        $p1->afficheArcher();
        if (!$p1->estEnVie()) {
            echo "Victoire de P2";
        }}}}}

$combat = new Arene();
$combat->lancerCombat($archer1, $mage1);

/*class Arene {

    public function attaquer($p2)
    {

            $p2->sante -= ($this->force - $p2->defense);
        }
    public function combat($p1, $p2)
{



        while ($p1->sante > 0 && $p2->sante > 0) {
            if ($p1->sante >= 0) {
                $p1->attaquer($p2);
            } else {
                echo $p2->cri;
            }
            if ($p2->sante > 0) {
                $p2->attaquer($p1);
            } else {
                echo $p1->cri;
            }
        }
    }
}*/
