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
    public function getLibelle() {
        return $this->libelle;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    public function getSoldeInitial() {
        return $this->soldeInitial;
    }

    public function setSoldeInitial($soldeInitial) {
        $this->soldeInitial = $soldeInitial;
        return $this;
    }

    public function getDevise() {
        return $this->devise;
    }

    public function setDevise($devise) {
        $this->devise = $devise;
        return $this;
    }

    public function getTitulaire() {
        return $this->titulaire;
    }

    public function setTitulaire($titulaire) {
        $this->titulaire = $titulaire;
        return $this;
    }

    // Méthode pour créditer le compte
    public function crediter(float $montant): void {
        if ($montant > 0) {
            $this->soldeInitial += $montant;
        }
    }

    // Méthode pour débiter le compte
    public function debiter(float $montant): void {
        if ($montant > 0 && $this->soldeInitial >= $montant) {
            $this->soldeInitial -= $montant;
        } else {
            throw new Exception("Fonds insuffisants pour le débit.");
        }
    }

    // Méthode pour les opérations d'un compte à un autre
    public function virement(Compte $compteCible, float $montant) {
        $this->debiter($montant); // on débite le compte source
        $compteCible->crediter($montant); // on crédite le compte cible
    }

    // Afficher les informations du compte
    public function afficherInfos(): string {
        return "<div class='compte'>
                    <p><strong>Libellé:</strong> {$this->libelle}</p>
                    <p><strong>Solde actuel:</strong> {$this->soldeInitial} {$this->devise}</p>
                    <p><strong>Titulaire:</strong> {$this->titulaire->getNom()} {$this->titulaire->getPrenom()}</p>
                </div>";
    }

    // Fonction méthode __toString
    public function __toString() {
        return "Libelle du compte: " . $this->libelle . "\n" . 
               "Solde Initial: " . $this->soldeInitial . "\n" . 
               "Devise: " . $this->devise . "\n";
    }
}
