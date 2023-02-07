<?php 

include("JoueurFoot.php");

$zizou = new JoueurFoot("Zinedine", 200, 70, 96);

JoueurFoot::setNombreJoueurTotal(100);
echo "Voici le nombre de joueur de foot : " . JoueurFoot::$nombreJoueurTotal . "<br><br>";

// $zizou->id = 1;
//$zizou->taille = 0;
// $zizou->vitesseMax = 70;
// $zizou->prenom = "Zinedine";
// $zizou->noteGeneral = "96";


echo "Le joueur " . $zizou->prenom . " mesure " . $zizou->getTaille()/100 . "m<br>";
echo "Le joueur " . $zizou->prenom . " mesure " . $zizou->getTailleEnMetre() . "m<br>";

// $zizou->setTaille(400);
// $zizou->taille = 400;

echo "Le joueur " . $zizou->prenom . " mesure " . $zizou->getTaille()/100 . "m<br>";


$mbappe = new JoueurFoot("Killian", 188, 90, 95);

echo "Le joueur " . $mbappe->prenom . " mesure " . $mbappe->getTaille()/100 . "m<br>";

echo "Voice le nombre de joueur de foot : " . JoueurFoot::$nombreJoueurTotal . "<br><br>";
