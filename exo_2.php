<?php

$tableauAges = [1900, 1989, 1950, 2022, 2020, 2003, 1950, 1938, 2014];
if (count($tableauAges) !=0) {
    $ageMini = $tableauAges[0];
    $ageMaxi = $tableauAges[0] ;

$anneePair = 0;
echo "<u>Avec foreach:</u> <br><br>";

foreach ($tableauAges as $age) {
    if ($age > $ageMaxi) {
        $ageMaxi = $age;
    }
    if ($age < $ageMini) {
        $ageMini = $age;
    }
    if ($age % 2 == 0) {
        $anneePair++;
    }
}

    echo "L'année la plus ancienne est: " . "<b>" . $ageMaxi . "</b>" . "<br>";
    echo "L'année la plus récente est: " . "<b>" . $ageMini . "</b>" . "<br><br>";
    echo "Le nombre d'années pairs est: " . "<b>" . $anneePair . "</b>" . "<br><br>";

echo "<u>Avec la boucle for:</u> <br><br>";

for ($i=0; $i < count($tableauAges); $i++) {
    if ($tableauAges[$i] > $ageMaxi) {
        $ageMaxi = $tableauAges[$i];
    }
    if ($tableauAges[$i] < $ageMini) {
        $ageMini = $tableauAges[$i];
    }

}

echo "L'année la plus ancienne est: " . "<b>" . $ageMaxi . "</b>" . "<br>";
echo "L'année la plus récente est: " . "<b>" . $ageMini . "</b>" . "<br><br>";
echo "Le nombre d'années pairs est: " . "<b>" . $anneePair . "</b>" . "<br><br>";}

else {echo "Tableau vide";}