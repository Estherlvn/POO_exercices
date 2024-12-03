<?php

class Casting {
    private Film $film;
    private Acteur $acteur;
    private Role $role;

    // CONSTRUCTEUR
    public function __construct(Film $film, Acteur $acteur, Role $role) {
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;
        $this->acteur->ajouterCasting($this);
        $this->film->ajouterCasting($this);
        $this->role->ajouterCasting($this);
    }

    // GETTERS ET SETTERS
    public function getFilm(): Film {
        return $this->film;
    }

    public function setFilm(Film $film): string {
        $this->film = $film;
        return $this;
    }

    public function getActeur(): Acteur {
        return $this->acteur;
    }

    public function setActeur(Acteur $acteur): string {
        $this->acteur = $acteur;
        return $this;
    }

    public function getRole(): Role {
        return $this->role;
    }

    public function setRole(Role $role): string {
        $this->role = $role;
        return $this;
    }


    

    public function __toString(): string {
        return $this->acteur->getPrenom() . " " . $this->acteur->getNom() . " as " . $this->role;
    }
}

?>
