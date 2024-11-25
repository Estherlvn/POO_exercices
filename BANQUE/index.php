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
$caisseGenerale = new Compte("18888885230E130", "1100", "€", $mariaDomingo);
$caisseEtranger = new Compte("AME155555324558", "8500", "$", $mariaDomingo);

$caisseEpargne = new Compte("BOR3333355411251", "11330.55", "€", $andréMarchand);

// Afficher les comptes bancaires des titulaires
echo $mariaDomingo->afficherComptesBancaires();
echo $andréMarchand->afficherComptesBancaires();

?>