<?php
// 1) Inclusion des classes créées
require_once 'Seance.php';
require_once 'BilletPleinTarif.php';
require_once 'BilletReduit.php';
require_once 'BilletEnfant.php';

// 2) Créer une Séance pour le film "Dunesday" le 16 Décembre 2026 à 20h30
$seanceDunesday = new Seance("Dunesday", "16 Décembre 2026", "20h30");

// 3) Créer 3 billets pour la séance :
// - Billet pour adulte (Plein Tarif) : numéro 12, prix : 23.5 euros
$billetAdulte = new BilletPleinTarif(12, 23.5, $seanceDunesday);

// - Billet enfant : numéro 11, prix : 5 euros, age : 9 ans
$billetEnfant = new BilletEnfant(11, 5, $seanceDunesday, 9);

// - Billet étudiant (Réduit) : numéro 42, prix réel : 23.5 euros, justificatif "carte étudiante"
$billetEtudiant = new BilletReduit(42, 23.5, $seanceDunesday, "carte étudiante");

// 4) Pour chaque billet, afficher son prix avec calculerPrix() et imprimer les détails avec imprimerDetail()
echo "<h2>Informations des Billets de Cinéma</h2>";

// Billet Adulte
echo "Billet Adulte : ";
echo " Prix calculé : " . $billetAdulte->calculerPrix() . " €";
$billetAdulte->imprimerDetail();

// Billet Enfant
echo " Billet Enfant : ";
echo " Prix calculé : " . $billetEnfant->calculerPrix() . " €";
$billetEnfant->imprimerDetail();

// Billet Étudiant
echo " Billet Étudiant : ";
echo " Prix calculé : " . $billetEtudiant->calculerPrix() . " €";
$billetEtudiant->imprimerDetail();