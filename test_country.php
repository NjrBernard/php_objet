<?php
require "country.php";

$pays1 = new Country("Italie", "Rome", 50, "Europe");
$pays1->getInfo();
echo "<br>";

$pays2 = new Country("Etats-Unis", "Washington D.C.", 400, "Amérique du Nord");
$pays2->getInfo();