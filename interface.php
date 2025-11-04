<?php
interface siteWeb{
    public function pageAccueil();
    public function pageContact();
}

class siteDynamique implements siteWeb{

    protected $nom = "Site de voiture";
    public function __construct($nom) {
        $this->nom = $nom;

    }
    public function nomVoiture() {
        echo $this->nom;
    }
}
$s1 = new siteDynamique("Site de voiture");
$s1->nomVoiture();

?>