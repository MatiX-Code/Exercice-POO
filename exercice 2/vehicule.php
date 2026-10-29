<?php
// Création classe avec attributs
class Vehicule{
    private string $nomVehicule;
    private int $nbrRoue;
    private float $vitesse;

    //Création constructeur
    public function __construct(string $newNom, int $newNbrRoue,float $newVitesse)
    {
        $this-> nomVehicule= $newNom;
        $this-> nbrRoue= $newNbrRoue;
        $this-> vitesse= $newVitesse;
    }

    //Création getters & setters
    public function getNomVehicule(): string{
        return $this-> nomVehicule;
    }
    public function setNomVehicule(string $newNom): void{
        $this-> nomVehicule= $newNom;
    }
    public function getNbrRoue(): int{
        return $this-> nbrRoue;
    }
    public function setNbrRoue(int $newNbrRoue): void{
        $this-> nbrRoue= $newNbrRoue;
    }
    public function getVitesse(): float{
        return $this-> vitesse;
    }
    public function setVitesse(float $newVitesse): void{
        $this-> vitesse= $newVitesse;
    }

    //Méthode de l'énnoncé :
    public function demarrer(){
    echo "<p>Démarrage de la $this->nomVehicule Vrooom !!!!</p>";
    }

    // 5) Méthode detect pour retourner voiture ou moto :
    public function detect():string{
        if ($this-> nbrRoue == 2){
            return "moto";
        }else{
            return "voiture";
        }
    }
    // 7) Méthode boost() : ajoute 50 à la vitesse de l'objet
    public function boost(): void {
        $this->vitesse += 50; 
    }

    //Bonus A)
    public function plusRapide(Vehicule $autreVehicule): Vehicule{
        if ($this-> vitesse > $autreVehicule->vitesse){
            return $this;
        }else{
            return $autreVehicule;
        }
    }
}
?>
