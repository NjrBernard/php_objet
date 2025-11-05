<?php
require_once "country.php";



$Italie = new Country("Italie", "Rome", 50, "Europe");
$Italie->getInfo();
echo "<br><br>";

$EtatsUnis = new Country("Etats-Unis", "Washington D.C.", 400, "Amérique du Nord");
$EtatsUnis->getInfo(); echo "<br><br>";

$Vietnam = new Country("Vietnam", "Hanoi", 120, "Asie");
$Vietnam->afficheContinent();echo "<br><br>";

$Perou = new Country("Pérou", "Lima", 50, "Amérique du Sud");
$Perou->afficheContinent();echo "<br><br>";

$Suede = new Country("Suede", "Stockholm", 40, "Europe");
$Suede -> afficheContinent();echo "<br><br>";

$Kenya = new Country("Kenya", "Nairobi", 30, "Afrique");
$Kenya->afficheContinent();echo "<br><br>";

$tableau = [$Vietnam, $Italie, $EtatsUnis, $Perou, $Suede, $Kenya, $pays2];
$i=1;


echo "<u>Exercice 4</u><br><br>";
echo "<i>Tableau des pays</i>";
echo "<table>
<tr>
<th>Pays</th>
<th>Capitale</th>
<th>Population</th>
<th>Continent</th>
<th>PIB</th>
</tr>";
foreach ($tableau as $country) {

    echo "<tr><td>" . "Pays " . $i . ": " . "</td><td>" . $country->name . "</td><td>" . $country->population . "</td><td>" . $country->continent . "</td><td>" . (isset($country->gdp)?"$country->gdp":"") . "</td></tr><br>";
    $i++;
}
echo "</table>";

echo "<br><br>";

echo "<u>Exercice 5</u><br><br>";
echo "<i> Affichage avec le PIB </i><br><br>";
$pays2->afficheGdp(); echo "<br><br>";

$i2=1;

echo "<u>Exercice 6</u><br><br>";
echo "<i>Tableau des pays si population supérieure à 100M</i>";
echo "<table>
<tr>
<th>Pays</th>
<th>Capitale</th>
<th>Population</th>
<th>Continent</th>
</tr>";


function afficheDev($tableau) :void{
    $i2=1;
foreach ($tableau as $country) {
    if ($country->population >= 100) {
        echo "<tr><td>" . "Pays " . $i2 . ": " . "</td><td>" . $country->name . "</td><td>" . $country->population . "</td><td>" . $country->continent . "</td></tr><br>";
        $i2++;
    }
}}
echo afficheDev($tableau);
