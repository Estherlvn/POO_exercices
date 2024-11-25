<h1>POO Livres</h1>

<?php

// Code pour l'autochargement des classes
spl_autoload_register(function ($class_name) {
    // Le dossier 'classes/' doit contenir les fichiers de classe 'Livre.php' et 'Auteur.php'
    require 'classes/' . $class_name . '.php';
});

// Création d'un auteur
$stephenKing = new Auteur("Stephen", "King");

// Création de plusieurs livres
$ca = new Livre("Ca", 1138, new DateTime("1986-01-01"), 20, $stephenKing);
$simetierre = new Livre("Simetierre", 374, new DateTime("1983-01-01"), 15, $stephenKing);
$leFleau = new Livre("Le Fléau", 823, new DateTime("1978-01-01"), 14, $stephenKing);
$shining = new Livre("Shining", 447, new DateTime("1977-01-01"), 16, $stephenKing);


// Afficher la bibliographie de Stephen King
echo $stephenKing->afficherBibliographie();

?>