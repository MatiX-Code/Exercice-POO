<?php
/*
FICHIER CONTROLLER pour la page d'Accueil
*/
// Import des Ressources

require_once '../model/Model.php';
require_once '../view/View.php';

class ControllerAccueil{
    //ATTRIBUT
    private ModelListe $modelListe;
    private ViewAccueil $viewAccueil;

    //CONSTRUCTEUR
    public function __construct(ModelListe $modelListe, ViewAccueil $viewAccueil){
        $this->modelListe = $modelListe;
        $this->viewAccueil = $viewAccueil;
    }
    
    //GETTER & SETTER 
    /**
     * Get the value of modelListe
     *
     * @return ModelListe
     */
    public function getModelListe(): ModelListe {
        return $this->modelListe;
    }

    /**
     * Set the value of modelListe
     *
     * @param ModelListe $modelListe
     *
     * @return self
     */
    public function setModelListe(ModelListe $modelListe): self {
        $this->modelListe = $modelListe;
        return $this;
    }

    /**
     * Get the value of viewAccueil
     *
     * @return ViewAccueil
     */
    public function getViewAccueil(): ViewAccueil {
        return $this->viewAccueil;
    }

    /**
     * Set the value of viewAccueil
     *
     * @param ViewAccueil $viewAccueil
     *
     * @return self
     */
    public function setViewAccueil(ViewAccueil $viewAccueil): self {
        $this->viewAccueil = $viewAccueil;
        return $this;
    }
    //METHOD
    public function render(){
        //1.Récupérer les données utilisateurs
        // -> appelle à findAll() du model et stocker les données retournés dans une variable
        $data = $this->modelListe->findAll();

        //2. Vérifier les data pour savoir si je reçois un tableau de donnée ou un message d'erreur
        switch(gettype($data)){
            case "string" :
                //Cas où on reçoit un message d'erreur
                $this->viewAccueil->setMessageError($data)->display();
                break;
            case "array" :
                //Cas où on reçoit nos données
                $this->viewAccueil->setList($data)->display();
                break;
        }
    }
}  
//Rendu de la page d'accueil
//Création d'un objet Controller Accueil pour après effectuer le rendu de la page
$model = new ModelListe(new PDO("mysql:host=localhost;dbname=ticket","root",""));
$view = new ViewAccueil();

$controllerAccueil = new ControllerAccueil($model,$view);

//Lancer le rendu
$controllerAccueil->render();
