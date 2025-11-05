<?php
require_once "guerrier.php";
require_once "mage.php";
require_once "archer.php";
require_once "combat.php";

//Création de 3 personnages, et les affiche

$guerrier1 = new Guerrier("Guerrier de la mort qui tue", 0, 0, 0, 0);
$attributionCaracteristique = $guerrier1->attributionCaracteristique();
$guerrier1->afficheGuerrier();

$mage1 = new Mage("Mage, ô grand Mage", 0, 0, 0, 0);
$attributionCaracteristique = $mage1->attributionCaracteristique();
$mage1->afficheMage();

$archer1 = new Archer("Archer, ourir, auter", 0, 0, 0, 0);
$attributionCaracteristique = $archer1->attributionCaracteristique();
$archer1->afficheArcher();


// Test d'une attaque d'un archer sur un mage
echo "Test attaque<br><br>";
$archer1->attaquer($mage1);
$mage1->afficheMage();



