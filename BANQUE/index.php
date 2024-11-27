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

// Afficher les infos titulaires et leurs comptes bancaires
echo $titulaire1->afficherInfos();
echo $titulaire1->afficherComptes();

echo $titulaire2->afficherInfos();
echo $titulaire2->afficherComptes();

// Crédite et débite des comptes
$compte1->crediter(200); // Créditer 200 euros
$compte2->debiter(500); // Débiter 500 euros

// Afficher les comptes après opérations
echo $compte1->afficherInfos();
echo $compte2->afficherInfos();

?>
