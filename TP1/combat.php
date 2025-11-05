<?php
require_once "liste_persos.php";

class Arene
{

    public function lancerCombat($p1, $p2)
    {
        while ($p1->estEnVie() && $p2->estEnVie()) {
            echo "<strong>Joueur 1 attaque </strong><br><br>";
            $p1->attaquer($p2);
            $p2->affichePerso();
            if (!$p2->estEnVie()) {
                echo "P2 est mort, Victoire de " . $p1->nom . ", " . $p1->cri;
                break;
            } else {
                echo "<strong>Joueur 2 attaque</strong> <br><br>";
                $p2->attaquer($p1);
                $p1->affichePerso();
                if (!$p1->estEnVie()) {
                    echo "P1 est mort, Victoire de " . $p2->nom . ", " . $p2->cri;
                    break;
                }
            }
        }

    }}



echo "Combat 1 <br><br>";
echo "<i>Joueur 1 </i>   <br><br>";
echo $archer1->affichePerso();
echo "<i>Joueur 2 </i><br><br>";
echo $mage1->affichePerso();
$combat = new Arene();
$combat->lancerCombat($archer1, $guerrier1);





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
