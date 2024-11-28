<?php

class Realisateur extends Personne {
    private array $films;

    public function __construct(string $nom, string $prenom, string $sexe, DateTime $dateNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->films = [];
    }

    public function ajouterFilm(Film $film): void {
        $this->films[] = $film;
    }

    public function getFilms(): array {
        return $this->films;
    }

    public function afficherFilms(): string {
        $result = "<h2>Films réalisés par {$this->prenom} {$this->nom}</h2><ul>";
        foreach ($this->films as $film) {
            $result .= "<li>" . $film->getTitre() . " (" . $film->getDateS()->format('Y') . ")</li>";
        }
        $result .= "</ul>";
        return $result;
    }
}
