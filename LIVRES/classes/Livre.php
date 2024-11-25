<?php

class Livre {
    
    private string $titre;
    private int $nbrePages;
    private DateTime $année;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $nbrePages, DateTime $année, float $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->nbrePages = $nbrePages;
        $this->année = $année; 
        $this->prix = $prix;
        $this->auteur = $auteur;

        // Ajouter un livre à la liste de l'auteur
        $this->auteur->ajouterLivre($this);
    }

    // GETTERS et SETTERS

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    public function getNbrePages(): int
    {
        return $this->nbrePages;
    }

    public function setNbrePages($nbrePages)
    {
        $this->nbrePages = $nbrePages;
        return $this;
    }

    public function getAnnée(): DateTime
    {
        return $this->année;
    }

    public function setAnnée($année)
    {
        $this->année = $année;
        return $this;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
        return $this;
    }

    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

    // FONCTION avec la méthode  __toString() pour retourner une représentation textuelle de l'objet (ici, Livre)

    public function __toString() {
        return "Titre: " . $this->titre . "\n" .
               "Nombre de pages: " . $this->nbrePages . "\n" .
               "Année de publication: " . $this->année->format('Y') . "\n" . // Ajout d'un format avec la méthode format('Y') de l'objet DateTime
               "Prix: " . $this->prix . "€\n"; // Prix avec le symbole €
    }
}
