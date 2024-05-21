<?php
require_once '../base.php';
require_once BASE_PROJET . '/src/config/db-config.php';

// Fonction permettant de récupérer tous les films


function getAchat(): array
{
    $pdo = getConnexion();
    $requete = $pdo->query("SELECT * FROM acheter");
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

function ajouterPanier($id_prod, $id_client, $quantite, $date_commande)
{
    $pdo = getConnexion();
    try {
        // Préparation de la requête
        $requete = $pdo->prepare("INSERT INTO acheter (id_prod, id_client, quantite, date_commande) VALUES (?, ?, ?, ?)");

        // Exécution de la requête avec les valeurs des paramètres
        $requete->execute([$id_prod, $id_client, $quantite, $date_commande]);

        // Renvoie true si l'ajout a réussi
        return true;
    } catch (PDOException $e) {
        // En cas d'erreur, affiche un message d'erreur
        echo "Erreur lors de l'ajout de l'achat : " . $e->getMessage();
        // Renvoie false en cas d'erreur
        return false;
    }
}