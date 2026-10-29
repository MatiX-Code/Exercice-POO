<?php
    // 2) Création de la classe Maison avec ses attributs
class Maison{
    private string $nom;
    private float $longueur;
    private float $largeur;

    //Bonus : 1): ajout de l'attribut étage
    private int $etage;

    // 3) Le Constructeur
    public function __construct(string $newNom, float $newLongueur, float $newLargeur,int $newEtage){
        $this-> nom = $newNom;
        $this ->longueur =$newLongueur;
        $this ->largeur = $newLargeur;

        //Bonus : 2): ajout de l'attribut étage dans le constructeur
        $this-> etage = $newEtage;
    }

    // 4) Getters et Setters
    public function getNom():string{
        return $this->nom;
    }
    public function setNom(string $newNom): void{
        $this-> nom =$newNom;
    }
    public function getLongueur():float{
        return $this->longueur;
    }
    public function setLongueur(float $newLongueur): void{
        $this-> longueur =$newLongueur;
    }
    public function getLargeur():float{
        return $this->largeur;
    }
    public function setLargeur(float $newLargeur): void{
        $this-> largeur =$newLargeur;
    }
            //Bonus : 3): ajout de get & set pour l'attribut étage
    public function getEtage():int{
        return $this->etage;
    }
    public function setEtage(int $newEtage): void{
        $this->etage =$newEtage;
    }        

    // 6) Méthode surface (longueur * largeur)
    public function surface(): float {
        $surfaceAuSol = $this->longueur * $this->largeur;
        // Le rez-de-chaussée compte pour 0 étage, donc on a : 
        // 1 (le RDC) + le nombre d'étages supplémentaires.
        // Exemple : 1 étage = surface au sol * (1 + 1) = surface totale doublée.
        return $surfaceAuSol * (1 + $this->etage);
    }
}
    // 5) Instancier la new maison
$villa =new Maison("Chez-Rondoudou",18.9,22.3,2);
var_dump($villa);

// 7) Affichage avec le format exact demandé : "<p>la surface de nomMaison est égale à : x m2</p>"

echo "<p>La surface de " . $villa->getNom() . " est égale à : " . $villa->surface() . " m2. Sa longueur est de " . $villa->getLongueur(). " mètres et sa largeur de ". $villa->getLargeur()." mètres. Elle possède".$villa->getEtage()." étages. Vrai petit havre de paix.</p>";

?>

        
        
        