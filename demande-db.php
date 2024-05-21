<?php

require_once '../base.php';
require_once BASE_PROJET . '/src/config/db-config.php';


function postReservation($id_reservation, $prenom_client, $nom_client, $demande_client, $email_client): void
{
    $pdo = getConnexion();
    $requete = $pdo->prepare(query: "INSERT INTO reservation (id_reservatio,prenom_client, nom_client, demande_client, email_client) VALUES (?, ?, ?, ?, ?)");

    $requete->bindParam(1, $id_reservation);
    $requete->bindParam(2, $prenom_client);
    $requete->bindParam(3, $nom_client);
    $requete->bindParam(4, $demande_client);
    $requete->bindParam(5, $email_client);

    // 3. Exécution de la requête
    $requete->execute();
}



function InscriptionReservation($prenom,$nom,$demande,$email, $pdo) {
    $erreurs = [];

    // Validation des données
    if (empty($prenom)) {
        $erreurs['prenom'] = "Le prenom est obligatoire";
    }
    if (empty($nom)) {
        $erreurs['nom'] = "Le nom est obligatoire";
    }
    if (empty($demande)) {
        $erreurs['demande'] = "Une demande est obligatoire";
    }
    if (empty($email)) {
        $erreurs['email'] = "Le mail est obligatoire";
    }
    if (empty($erreurs)) {
        // Insertion des données dans la base de données
        $query = "INSERT INTO reservation (prenom_client,nom_client,demande_client,email_client) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$prenom,$nom ,$demande,$email]);

        // Redirection après inscription
        header("Location: ./index.php");
        exit();
    }

    return $erreurs;
}



