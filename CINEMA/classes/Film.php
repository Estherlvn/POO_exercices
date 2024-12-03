<?php

class Film {
    // ATTRIBUTS
    protected string $titre;
    protected DateTime $dateS;
    protected int $duree;
    protected string $synopsis;
    protected Realisateur $realisateur;
    protected Genre $genre;
    protected array $castings = []; // New attribute to store castings

    // CONSTRUCTEUR
    public function __construct(string $titre, DateTime $dateS, int $duree, string $synopsis, Realisateur $realisateur, Genre $genre) {
        $this->titre = $titre;
        $this->dateS = $dateS;
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->realisateur = $realisateur;
        $this->realisateur->ajouterFilm($this); // Ajout du film au réalisateur
        $this->genre = $genre;
        $this->genre->ajouterFilm($this); // Ajout du film au genre
    }

    // GETTERS ET SETTERS
    public function getTitre(): string {
        return $this->titre;
    }

    public function setTitre(string $titre): self {
        $this->titre = $titre;
        return $this;
    }

    public function getDateS(): DateTime {
        return $this->dateS;
    }

    public function setDateS(DateTime $dateS): self {
        $this->dateS = $dateS;
        return $this;
    }

    public function getDuree(): int {
        return $this->duree;
    }

    public function setDuree(int $duree): self {
        $this->duree = $duree;
        return $this;
    }

    public function getSynopsis(): string {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): self {
        $this->synopsis = $synopsis;
        return $this;
    }

    public function getRealisateur(): Realisateur {
        return $this->realisateur;
    }

    public function setRealisateur(Realisateur $realisateur): self {
        $this->realisateur = $realisateur;
        return $this;
    }

    public function getGenre(): Genre {
        return $this->genre;
    }

    public function setGenre(Genre $genre): self {
        $this->genre = $genre;
        return $this;
    }

    public function ajouterCasting($casting): void {
        $this->castings[] = $casting;
    }

    public function getCastings(): array {
        return $this->castings;
    }


    // Afficher Casting
    public function afficherCasting(): string {
        $result = "<h2>Casting du film " . $this->titre . " :</h2><ul>";
        foreach ($this->castings as $casting) {
            $acteur = $casting->getActeur();
            $role = $casting->getRole();
            $result .= "<li>" . $acteur->getNom() . " " . $acteur->getPrenom() . " : dans le rôle de " . $role->getNom() . "</li>";
        }
        $result .= "</ul>";
        return $result;
    }
    


    // METHODE __toString()
    public function __toString(): string {
        return "<strong>" . $this->titre . "</strong><br>
                Sortie: " . $this->dateS->format('Y-m-d') . "<br>
                Durée: " . $this->duree . " minutes<br>
                Synopsis: " . $this->synopsis . "<br>
                Réalisateur: " . $this->realisateur->getPrenom() . " " . $this->realisateur->getNom() . "<br>
                Genre: " . $this->genre->getNom() . "<br>";
    }
}

?>
