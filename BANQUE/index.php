<h1>POO BANQUE</h1>

<?php

// Code pour l'autochargement des classes
spl_autoload_register(function ($class_name) {
    // Le dossier 'classes/' doit contenir les fichiers de classe 'Titulaire.php' et 'Compte.php'
    require 'classes/' . $class_name . '.php';
});

// Création des titulaires
$titulaire1 = new Titulaire("Domingo", "Maria", new DateTime("1990-01-01"), "Madrid");
$titulaire2 = new Titulaire("Marchand", "André", new DateTime("1978-02-02"), "Bordeaux");


// Création de plusieurs comptes
$compte1 = new Compte("Compte Courant", 1100, "€", $titulaire1);
$compte2 = new Compte("Livret A", 8500, "€", $titulaire1);
$compte3 = new Compte("Compte Courant", 11330.55, "€", $titulaire2);

// Opération d'un compte à un autre
// Affichage des soldes avant l'opération
echo "<p style='font-size: 1.5em;'>Solde avant opérations :</p>";
echo "<p style='font-size: 1.5em; color: blue;'>Compte 1 : " . $compte1->afficherInfos() . "</p>";
echo "<p style='font-size: 1.5em; color: blue;'>Compte 2 : " . $compte2->afficherInfos() . "</p>";

// Effectuer le virement de 200 euros de compte1 à compte2
$compte1->virement($compte2, 200);

// Affichage des soldes après l'opération
echo "<p style='font-size: 1.5em;'>Solde après opérations :</p>";
echo "<p style='font-size: 1.5em; color: green;'>Compte 1 : " . $compte1->afficherInfos() . "</p>";
echo "<p style='font-size: 1.5em; color: green;'>Compte 2 : " . $compte2->afficherInfos() . "</p>";

// AFFICHAGE
// Afficher les infos titulaires et leurs comptes bancaires
echo $titulaire1->afficherInfos();
echo $titulaire1->afficherComptes();

echo $titulaire2->afficherInfos();
echo $titulaire2->afficherComptes();

// Créditer et débiter des comptes
$compte1->crediter(800); // Créditer 800 euros
$compte2->debiter(500); // Débiter 500 euros

// Afficher les comptes après opérations de crédit et de débit
echo "<p style='font-size: 1.5em; color: green;'>Solde après crédit et débit :</p>";
echo "<p style='font-size: 1.5em; color: green;'>Compte 1 : " . $compte1->afficherInfos() . "</p>";
echo "<p style='font-size: 1.5em; color: green;'>Compte 2 : " . $compte2->afficherInfos() . "</p>";

?>
