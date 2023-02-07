<?php 

// Ici, on vois une caracteristique importante des objets.
// Les objets contiennent des méthodes (fonctions), et ces méthodes ne sont rattaché qu'a un seul objet
// On ne peut pas utiliser une méthode de la classe PdoStatement, sur un objet de la classe PDO

$db1 = new PDO('mysql:host=localhost;dbname=voiture-webstart', "root", "");


$db2 = new PDO('mysql:host=localhost;dbname=voiture', "root", "");

$

$requetePreparee = $db1->prepare("SELECT * FROM voiture");



$requetePreparee->execute();

$premiereLigne = $requetePreparee->fetch();

$db2->execute(); // Impossible
?>