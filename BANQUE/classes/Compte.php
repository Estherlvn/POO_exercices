<?php

class Compte {

    // attributs
    private string $libelle;
    private float $soldeInitial;
    private string $devise;
    private Titulaire $titulaire;

    // constructeur

    public function __construct(string $libelle, float $soldeInitial, string $devise, Titulaire $titulaire) {
        $this->libelle = $libelle;
        $this->soldeInitial = $soldeInitial;
        $this->devise = $devise;
        $this->titulaire = $titulaire;

        $this->titulaire->ajouterCompte($this);
    }

    // GETTERS et SETTERS

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getSoldeInitial()
    {
        return $this->soldeInitial;
    }

    public function setSoldeInitial($soldeInitial)
    {
        $this->soldeInitial = $soldeInitial;

        return $this;
    }

    public function getDevise()
    {
        return $this->devise;
    }

    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    public function getTitulaire()
    {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }

    // Fonction méthode __toString

    public function __toString() {
        return "Libelle du compte: " . $this->libelle . "\n" .
               "Solde Initial: " . $this->soldeInitial . "\n" . 
               "Devise: " . $this->devise . "\n";
    }
}