<?php

class Realisateur extends Personne {
    private array $films;

    public function  __construct(string $nom, string $prenom, string $sexe, DateTime $dateN) {
        parent::__construct($nom, $prenom, $sexe, $dateN);
        $this->films = [];
    }

    public function ajouterFilm(Film $film) {
        $this->films[] = $film;
    }

    public function afficherFilms(): string {
        $result = "<h2>Filmographie de " . $this->getPrenom() . " " . $this->getNom() . ":</h2><ul>";
        foreach ($this->films as $film) {
            $result .= "<li>" . $film->getTitre() . " (" . $film->getDateS()->format('Y') . ")</li>";
        }
        $result .= "</ul>";
        return $result;
    }
}
?>
