<?php

class Genre {
    private string $nom;
    private array $films = [];

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): self {
        $this->nom = $nom;
        return $this;
    }

    public function ajouterFilm(Film $film): void {
        $this->films[] = $film;
    }

    public function afficherFilms(): string {
        $result = "<h2>Films du genre " . $this->nom . ":</h2><ul>";
        foreach ($this->films as $film) {
            $result .= "<li>" . $film->getTitre() . " (" . $film->getDateS()->format('Y') . ")</li>";
        }
        $result .= "</ul>";
        return $result;
    }
}

?>
