<?php
//3 Appel du fichier vehicule.php
include 'vehicule.php';

//4 Instancier les nouveaux objets
$voiture = new Vehicule("Mercedes CLK", 4, 250);
$moto = new Vehicule("Honda CBR", 2, 280);

// 6) Exécuter detect() et afficher le type de véhicule
echo "<p>La Mercedes est une : " . $voiture->detect() . "</p>";
echo "<p>La Honda est une : " . $moto->detect() . "</p>";

// 8) Modifier la vitesse de la voiture

echo "<p> La vitesse de la voiture est de " .$voiture->getVitesse()." km/h</p>";
$voiture->boost();

echo "<p>La nouvelle vitesse de la voiture après boost comme Fast & Furious : " . $voiture->getVitesse() . " km/h</p>";

// --- BONUS ---
// Exécuter la méthode plusRapide() pour comparer la voiture et la moto
$vehiculeLePlusRapide = $voiture->plusRapide($moto);

// Afficher le nom du véhicule le plus rapide
echo "<p>Le véhicule le plus rapide est : " . $vehiculeLePlusRapide->getNomVehicule() . " avec une vitesse de " . $vehiculeLePlusRapide->getVitesse() . " km/h</p>";
?>




