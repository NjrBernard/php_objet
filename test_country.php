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

$tableau = [$Vietnam, $Italie, $EtatsUnis, $Perou, $Suede, $Kenya];
$i=1;
echo "<u>Exercice 4</u><br><br>";
echo "<i>Tableau des pays</i>";
echo "<table>
<tr>
<th>Pays</th>
<th>Capitale</th>
<th>Population</th>
<th>Continent</th>
</tr>";

foreach ($tableau as $country) {

    echo "<tr><td>" . "Pays " . $i . ": " . "</td><td>" . $country->name . "</td><td>" . $country->population . "</td><td>" . $country->continent . "</td></tr><br>";
    $i++;
}
echo "</table>";

echo "<br><br>";



