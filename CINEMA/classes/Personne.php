<?php

class Personne {

    // ATTRIBUTS
    protected string $nom;
    protected string $prenom;
    protected string $sexe;
    protected DateTime $dateN;

    // CONSTRUCTEURS
    public function __construct(string $nom, string $prenom, string $sexe, DateTime $dateN) {
        $this->nom = $nom;    
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateN = $dateN;
    }

    // GETTERS AND SETTERS

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): self {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self {
        $this->prenom = $prenom;
        return $this;
    }

    public function getSexe(): string {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self {
        $this->sexe = $sexe;
        return $this;
    }

    public function getDateN(): DateTime {
        return $this->dateN;
    }

    public function setDateN(DateTime $dateN): self {
        $this->dateN = $dateN;
        return $this;
    }

    public function __toString(): string {
        return "<strong>" . $this->nom . "</strong><br>
                Prénom: " . $this->prenom . "<br>
                Sexe: " . $this->sexe . "<br>
                Date de naissance: " . $this->dateN->format('Y-m-d') . "<br>";
    }
}

?>
