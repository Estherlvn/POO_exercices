<?php

class Titulaire {

    // attributs
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes;

    // constructeur
    public function __construct(string $nom, string $prenom, DateTime $dateNaissance,
    string $ville) {
    // désigner les valeurs dans le constructeur
    $this->nom = $nom;    
    $this->prenom = $prenom;
    $this->dateNaissance = ($dateNaissance);
    $this->ville = $ville;
    $this->comptes = [];
}

    // GETTERS et SETTERS

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    public function getComptes()
    {
        return $this->comptes;
    }

    public function setComptes($comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }


// Fonction pour ajouter un ou plusieurs comptes au titulaire

    public function ajouterCompte(Compte $compte)
    {
        $this->comptes[] = $compte;
    }


 // Afficher les comptes bancaires du titulaire en HTML (tableau)
 public function afficherComptesBancaires(): string {
    $result = "<h2>Comptes bancaires de " . $this->nom . " " . $this->prenom . ":</h2>";
    $result .= "<table border='1'>";
    $result .= "<tr> <th>Libellé du compte</th><th>Solde initial</th><th>Devise</th> </tr>";
    foreach ($this->comptes as $compte) {
        $result .= "<tr>";
        $result .= "<td>" . $compte->getLibelle() . "</td>";
        $result .= "<td>" . $compte->getSoldeInitial() . "</td>";
        $result .= "<td>" . $compte->getDevise() . "</td>";

        $result .= "</tr>";
    }
    $result .= "</table>";
    return $result;
}


}