<?php

require_once '../base.php';
require_once BASE_PROJET . '/src/config/db-config.php';
// Fonction permettant de récupérer tous les films

function getProduit(): array
{
    $pdo = getConnexion();
    $requete = $pdo->query("SELECT * FROM produit");
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

function getDetailsProduits($id_prod)
{
    $pdo = getConnexion();
    $requete = $pdo->prepare(query: "SELECT * FROM produit WHERE id_prod = $id_prod");
    $requete->execute();
    return $requete->fetch(PDO::FETCH_ASSOC);
}
