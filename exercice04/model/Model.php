<?php
/*
FICHIER MODEL pour gérer les interractions avec la BDD concernant la table Vendeur
*/
class ModelListe{
    //ATTRIBUT
    private int $idProduit;
    private string $nomProduit;
    private string $categorieProduit;
    private PDO $pdo;

 //CONSTRUCTEUR
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }
    // GETTER & SETTER
 /**
     * Get the value of idProduit
     *
     * @return int
     */
    public function getIdProduit(): int {
        return $this->idProduit;
    }

    /**
     * Set the value of idProduit
     *
     * @param int $idProduit
     *
     * @return self
     */
    public function setIdProduit(int $idProduit): self {
        $this->idProduit = $idProduit;
        return $this;
    }

    /**
     * Get the value of nomProduit
     *
     * @return string
     */
    public function getNomProduit(): string {
        return $this->nomProduit;
    }

    /**
     * Set the value of nomProduit
     *
     * @param string $nomProduit
     *
     * @return self
     */
    public function setNomProduit(string $nomProduit): self {
        $this->nomProduit = $nomProduit;
        return $this;
    }

    /**
     * Get the value of categorieProduit
     *
     * @return string
     */
    public function getCategorieProduit(): string {
        return $this->categorieProduit;
    }

    /**
     * Set the value of categorieProduit
     *
     * @param string $categorieProduit
     *
     * @return self
     */
    public function setCategorieProduit(string $categorieProduit): self {
        $this->categorieProduit = $categorieProduit;
        return $this;
    }

    /**
     * Get the value of pdo
     *
     * @return PDO
     */
    public function getPdo(): PDO {
        return $this->pdo;
    }

    /**
     * Set the value of pdo
     *
     * @param PDO $pdo
     *
     * @return self
     */
    public function setPdo(PDO $pdo): self {
        $this->pdo = $pdo;
        return $this;
    }

    //METHODS
    public function findAll(){
        //Recupération Liste Produit
        
        try{
            //1. Construire l'objet connexion PDO

            //2. Préparation de la requête
            $request = $this->pdo->prepare('SELECT p.nom_produit, c.nom_categorie FROM produit p INNER JOIN categorie c ON p.id_categorie = c.id_categorie;');

            //3. Execution de la requête
            $request->execute();

            //4. Récupérere la réponse
            return $request->fetchAll(PDO::FETCH_ASSOC);

        }catch(Exception $error){
            return $error->getMessage();
        }
    }       

}