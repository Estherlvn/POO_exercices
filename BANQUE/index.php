<h1>POO BANQUE</h1>

<?php

// Code pour l'autochargement des classes
spl_autoload_register(function ($class_name) {
    // Le dossier 'classes/' doit contenir les fichiers de classe 'Titulaire.php' et 'Compte.php'
    require 'classes/' . $class_name . '.php';
});

// Création des titulaires
$mariaDomingo = new Titulaire("Domingo", "Maria", new DateTime("1990-01-01"),"Madrid");
$andréMarchand = new Titulaire("Marchand", "André", new DateTime("1978-02-02"), "Bordeaux");

// Création de plusieurs comptes
$caisseGenerale = new Compte("Compte Courant", "1100", "€", $mariaDomingo);
$caisseEtranger = new Compte("Livret A", "8500", "€", $mariaDomingo);

$caisseEpargne = new Compte("Compte Courant", "11330.55", "€", $andréMarchand);

// Afficher les comptes bancaires des titulaires
echo $mariaDomingo->afficherComptesBancaires();
echo $andréMarchand->afficherComptesBancaires();

?>