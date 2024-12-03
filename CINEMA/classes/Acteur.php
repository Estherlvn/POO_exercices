<?php

class Acteur extends Personne {
    private array $castings;

    // CONSTRUCTEUR
    public function __construct(string $nom, string $prenom, string $sexe, DateTime $dateN) {
        parent::__construct($nom, $prenom, $sexe, $dateN);
        $this->castings = [];
    }

    // MÉTHODE
    public function ajouterCasting(Casting $casting) {
        $this->castings[] = $casting;
    }

    public function afficherFilms(): string {
        $result = "<h2>Films avec " . $this->prenom . " " . $this->nom . ":</h2><ul>";
        foreach ($this->castings as $casting) {
            $result .= "<li>" . $casting->getFilm()->getTitre() . " (" . $casting->getFilm()->getDateS()->format('Y') . ") : dans le rôle de " . $casting->getRole()->getNom() . "</li>";
        }
        $result .= "</ul>";
        return $result;
    }
}

?>
