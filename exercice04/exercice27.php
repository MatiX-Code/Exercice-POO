<?php
/*Exercice 27 : Récupération de Donnée
A partir de la bdd ticket dont l'export est fourni, et ne vous aidant de la démo PDO

Créer une page PHP qui affiche au sein d'un HTML la liste des produits et de leur catégorie.
l'affichage doit ressembler à :

<li>Galaxy S : Smartphone</li>

Pour ce faire, vous aurez besoin d'initialiser une variable d'affichage $produit avec une chaîne de caractère vide.
Puis d'une boucle Foreach qui va parcourir le tableau de donnée.
A chaque tour de boucle, vous allez concaténer dans $produit les nouvelles données. La syntaxe ressemble  à :

$produit = $produit."<li>Les données que je souhaite</li>";
*/

/*ETAPES :
1) Se connecter à la BDD en créant l'objet PDO
2) Préparer la requête SELECT pour récupérer le nom des produits et leur catégorie
3) Envoyer la requête à la BDD
4) Récupérer la réponse de la BDD
5) Mettre en forme la réponse avec une boucle
6) Faire l'Affichage
*/

// ------------------------------------------------------------

/* Exercice 04 : MVC POO 
Reprendre l'exercice 27 exploitant la base de donnée ticket, dont voici la correction

Le but est de découper le code en MVC (Model - View - Controller) Orienté Objet.

le fichier d'exécution sera le controller de la page. Pas besoin de l'appeler dans un autre fichier type index.php
Si vous ne vous sentez de le découper directement en Orienté Objet, commencez dans l'ordre :

1) Découper en déclaratif
2) Adapter en procédural (mise en place de fonction)
3) Transformer en POO

Inspirez vous et aidez vous de la démo envoyée juste au dessus

Une fois terminé, envoyez moi le dépôt github de votre exercice
*/



try{
    //1) Se connecter à la BDD en créant l'objet PDO
    $pdo = new PDO('mysql:host=localhost;dbname=ticket','root','root',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    //2) Préparer la requête SELECT pour récupérer le nom des produits et leur catégorie
    $request = $pdo->prepare('SELECT p.nom_produit, c.nom_categorie FROM produit p INNER JOIN categorie c ON p.id_categorie = c.id_categorie;');

    //3) Envoyer la requête à la BDD
    $request->execute();

    //4) Récupérer la réponse de la BDD
    // PDO::FETCH_ASSOC : permet de récupérer la réponse uniquement sous forme de tableaux associatifs
    $data = $request->fetchAll(PDO::FETCH_ASSOC);

    // je teste $data en l'affichant pour savoir si tout se passe bien et que je récupère des données
    print_r($data);

    // Affichage des Produits : 2nd Méthode
    //5) Mettre en forme la réponse avec une boucle
    $product = "";
    foreach($data as $tab){
        $product = $product."<li>{$tab["nom_produit"]} : {$tab["nom_categorie"]}</li>";
    }

}catch(EXCEPTION $error){
    die($error->getMessage());
}


?>

