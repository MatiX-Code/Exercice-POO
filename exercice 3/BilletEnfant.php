<?php
require_once 'BilletPleinTarif.php';

class BilletEnfant extends BilletPleinTarif {
    private int $age;

    public function __construct(int $numero, float $prix, Seance $seance, int $age) {
        parent::__construct($numero, $prix, $seance);
        $this->age = $age;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function setAge(int $age): void {
        $this->age = $age;
    }

    // La méthode ne prend pas de paramètre pour correspondre à la classe mère
    public function calculerPrix(): float {
        return $this->prix;
    }
}
?>