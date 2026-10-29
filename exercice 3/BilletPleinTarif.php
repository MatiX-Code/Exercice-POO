<?php

class BilletPleinTarif{
    private int $numero;
    private float $prix;
    private Seance $seance;

    public function __construct(int $newNumero, float $newPrix,Seance $seance){
        $this-> numero = $newNumero;
        $this -> prix = $newPrix;
        $this -> seance =$seance;
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
    public function getSeance(): Seance{
        return $this-> seance;
    }
}
?>