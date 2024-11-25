<?php

class Auteur {
    
    // Attributs
    private string $prenom;
    private string $nom;
    private array $livres = []; // création d'un tableau pour contenir les informations des livres

    // Constructeur
    public function __construct(string $prenom, string $nom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Getters and Setters

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function __toString(): string {
        return $this->prenom . " " . $this->nom;
    }

    // Fonction pour ajouter un livre à la liste de l'auteur
    public function ajouterLivre(Livre $livre)
    {
        $this->livres[] = $livre;
    }


    // Afficher la bibliographie de l'auteur en HTML (tableau)
    public function afficherBibliographie(): string {
        $result = "<h2>Bibliographie de " . $this->prenom . " " . $this->nom . ":</h2>";
        $result .= "<table border='1'>";
        $result .= "<tr><th>Titre</th><th>Nombre de pages</th><th>Année de publication</th><th>Prix</th></tr>";
        foreach ($this->livres as $livre) {
            $result .= "<tr>";
            $result .= "<td>" . $livre->getTitre() . "</td>";
            $result .= "<td>" . $livre->getNbrePages() . "</td>";
            $result .= "<td>" . $livre->getAnnée()->format('Y') . "</td>";
            $result .= "<td>" . $livre->getPrix() . "€</td>";
            $result .= "</tr>";
        }
        $result .= "</table>";
        return $result;
    }
}
