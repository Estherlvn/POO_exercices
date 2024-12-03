<?php

class Role {
    private string $nom;
    private array $castings = [];

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

    public function ajouterCasting(Casting $casting): void {
        $this->castings[] = $casting;
    }

    public function afficherActeurs(): string {
        $result = "<h2>Acteurs ayant joué le rôle de " . $this->nom . ":</h2><ul>";
        foreach ($this->castings as $casting) {
            $acteur = $casting->getActeur();
            $result .= "<li>" . $acteur->getPrenom() . " " . $acteur->getNom() . " dans le film " . $casting->getFilm()->getTitre() . "</li>";
        }
        $result .= "</ul>";
        return $result;
    }
    
    public function __toString(): string {
        return $this->nom;
    }
}

?>
