<?php

require_once 'Seance.php';

class BilletPleinTarif{
    protected int $numero;
    protected float $prix;
    protected Seance $seance;

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
    public function calculerPrix(): float{
        return $this -> prix;
    }
    public function imprimerDetail(): void {
        // On appelle $this->calculerPrix() pour qu'il prenne en compte 
        // le prix spécifique de la classe fille (plein tarif, réduit ou enfant)
        $prixFinal = $this->calculerPrix(); 

        echo " Le prix du billet est de " . $prixFinal . " € et son numéro est le " . $this->numero;
        echo " Détails de la séance : " . $this->seance->afficherDetails();
    }
}

?>