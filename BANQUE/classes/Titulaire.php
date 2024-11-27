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



 // Afficher les informations du titulaire
 public function afficherInfos(): string {
    $age = $this->dateNaissance->diff(new DateTime())->y;
    return "<div class='titulaire'>
                <p><strong>Nom:</strong> {$this->nom}</p>
                <p><strong>Prénom:</strong> {$this->prenom}</p>
                <p><strong>Âge:</strong> {$age} ans</p>
                <p><strong>Ville:</strong> {$this->ville}</p>
            </div>";
}

// Afficher les comptes bancaires du titulaire
public function afficherComptes(): string {
    $result = "<div class='comptes'><h3>Comptes bancaires:</h3><ul>";
    foreach ($this->comptes as $compte) {
        $result .= "<li>" . $compte->getLibelle() . " - " . $compte->getSoldeInitial() . " " . $compte->getDevise() . "</li>";
    }
    $result .= "</ul></div>";
    return $result;
}


}