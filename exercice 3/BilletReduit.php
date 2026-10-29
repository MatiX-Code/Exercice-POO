<?php
require_once 'BilletPleinTarif.php';

class BilletReduit extends BilletPleinTarif {
    private string $justificatif;

    // Le constructeur appelle le parent pour récupérer $numero, $prix et $seance,
    // tout en initialisant le justificatif propre au billet réduit.
    public function __construct(int $numero, float $prix, Seance $seance, string $justificatif) {
        parent::__construct($numero, $prix, $seance);
        $this->justificatif = $justificatif;
    }

    public function getJustificatif(): string {
        return $this->justificatif;
    }

    public function setJustificatif(string $newJustificatif): void {
        $this->justificatif = $newJustificatif;
    }

    // La méthode calculerPrix ne prend pas de paramètre pour rester conforme à la classe parente
    public function calculerPrix(): float {
        // Retourne 30% du prix réel
        return $this->prix * 0.30;
    }
}