<?php

$anneeNaissance = 2005;
$age = 2025 - $anneeNaissance;


echo "Votre age est ".$age;

if ($age >= 18) {
    echo "Vous êtes majeur";
}

else { echo "Vous êtes mineur";}

?>
