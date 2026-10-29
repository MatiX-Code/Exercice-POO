<?php

class BilletPleinTarif{
    private int $numero;
    private float $prix;

    public function __construct(int $newNumero, float $newPrix){
        $this-> numero = $newNumero;
        $this -> prix = $newPrix;
    }
    public function getNumero(): int{
        return $this-> numero;
    }
    public function setNumero(int $newNumero): void{
        $this-> numero = $newNumero;
    }
    public function getPrix(): float{
        return $this-> prix;
    }
    public function setPrix(float $newPrix): void{
        $this-> prix = $newPrix;
    }
}

?>