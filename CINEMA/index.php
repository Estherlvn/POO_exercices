<h1>POO CINEMA</h1>

<?php

// Code pour l'autochargement des classes
spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

// création d'une liste de réalisateurs
$real1 = new Realisateur("Lucas", "George", "H", new DateTime("1944-05-14"));
$real2 = new Realisateur("Jackson", "Peter", "H", new DateTime("1961-10-31"));

/*
// création d'une liste de personnes 
$acteur1 = new Acteur("Portman", "Nathalie", "F", new DateTime("1981-06-09"));
$acteur2 = new Acteur("McGregor", "Ewan", "H", new DateTime("1971-03-31"));
$acteur3 = new Acteur("Lee", "Christopher", "H", new DateTime("1922-05-27"));
$acteur4 = new Acteur("Mortensen", "Viggo", "H", new DateTime("1958-10-20"));
*/

// création d'une liste de genre
$genre1 = new Genre("Science-Fiction");
$genre2 = new Genre("Médiéval-Fantastique");

// création d'une liste de films
$film1 = new Film("Star Wars: L'Attaque des clones", new DateTime("2002-05-16"), 142, "Depuis le blocus de la planète Naboo, la République,
gouvernée par le Chancelier Palpatine, connaît une crise. Un groupe de dissidents, mené par le sombre Jedi comte Dooku,
manifeste son mécontentement. Le Sénat et la population intergalactique se montrent pour leur part inquiets.
Certains sénateurs demandent à ce que la République soit dotée d'une armée pour empêcher que la situation ne se détériore.
Padmé Amidala, devenue sénatrice, est menacée par les séparatistes et échappe à un attentat.", $real1, $genre1);

$film2 = new Film("Le Seigneur des anneaux: La Communauté de l'anneau", new DateTime("2001-12-19"), 178, "Un jeune et timide hobbit, Frodon Sacquet, hérite d'un anneau magique.
Sous ses apparences de simple bijou, il s'agit en réalité d'un instrument de pouvoir absolu qui permettrait à Sauron,
le Seigneur des ténèbres, de régner sur la Terre du Milieu et de réduire en esclavage ses peuples.
Frodon doit parvenir, avec l'aide de la Communauté de l'Anneau, composée de huit compagnons venus de différents royaumes,
jusqu'à la Montagne du Destin pour le détruire.", $real2, $genre2);

$film3 = new Film("The Hobbit", new DateTime("2013-12-11"), 161, "Synopsis", $real2, $genre2);

// AFFICHAGE
echo $real1->afficherFilms();
echo $real2->afficherFilms();
echo $genre1->afficherFilms();
echo $genre2->afficherFilms();


?>

