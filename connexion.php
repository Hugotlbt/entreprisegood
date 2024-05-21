<?php

require_once '../base.php';
require_once BASE_PROJET . '/src/database/client-db.php';

$erreurs = [];
$email = "";
$motDePasse = "";

// Vérifier si l'utilisateur est connecté
$pseudo_utilisateur = isset($_SESSION['pseudo_utilisateur']) ? $_SESSION['pseudo_utilisateur'] : "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$email = $_POST['email'];
$motDePasse = $_POST['motDePasse'];

if (empty($email)) {
$erreurs['email'] = "L'email est obligatoire";
}
if (empty($motDePasse)) {
$erreurs['motDePasse'] = "Le mot de passe est obligatoire";
}

if (empty($erreurs)) {
if (checkPassword($email, $motDePasse)) {
// Obtenir le pseudo de l'utilisateur
$pseudo_utilisateur = getPseudoByEmail($email);

// Stocker le pseudo de l'utilisateur dans la session
$_SESSION['pseudo_utilisateur'] = $pseudo_utilisateur;

// Redirection vers la page d'accueil ou autre action après connexion réussie
header("Location: index.php");
exit();
} else {
// Ajouter une erreur générale
$erreurs['connexion'] = "Email ou mot de passe incorrect";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/css/bootstrap.mintt.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>
<!-- Navbar -->
<?php require_once BASE_PROJET . '/src/_partials/header.php';?>

<!-- Contenu / page de connexion -->
<div class="container pt-5 mt-3">
    <div>
    <h1 class="text-center mt-5">Connexion</h1>
    <div class="w-50 mx-auto shadow p-4 bg-gradient my-5">
        <form action="" method="post" novalidate>
            <?php if (isset($erreurs['connexion'])): ?>
                <div class="mb-3">
                    <p class="form-text text-danger fw-bold"><?= $erreurs['connexion'] ?></p>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input
                        type="email"
                        class="form-control <?= (isset($erreurs['email'])) ? "border border-2 border-danger" : "" ?>"
                        id="email"
                        name="email"
                        value="<?= $email ?>"
                        placeholder="Saisir votre email"
                        aria-describedby="emailHelp">
                <?php if (isset($erreurs['email'])): ?>
                    <p class="form-text text-danger fw-bold"><?= $erreurs['email'] ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="motDePasse" class="form-label">Mot de passe*</label>
                <input
                        type="password"
                        class="form-control <?= (isset($erreurs['motDePasse'])) ? "border border-2 border-danger" : "" ?>"
                        id="motDePasse"
                        name="motDePasse"
                        value="<?= $motDePasse ?>"
                        placeholder="Saisir votre mot de passe"
                        aria-describedby="emailHelp">
                <?php if (isset($erreurs['motDePasse'])): ?>
                    <p class="form-text text-danger"><?= $erreurs['motDePasse'] ?></p>
                <?php endif; ?>
            </div>
            <div class="text-end ">
                <!-- Afficher le pseudo de l'utilisateur ou le bouton de connexion -->
                <?php if (!empty($pseudo_utilisateur)): ?>
                    <a href="./deconnexion.php" class="btn btn-outline-secondary text-decoration-none">Déconnexion</a>
                <?php else: ?>
                    <button type="submit" class="btn btn-dark">Valider</button>
                    <a href="./sinscrire.php" class="btn btn-dark">S'inscrire</a>
                <?php endif; ?>
            </div>
        </form>
    </div>
</div>
</div>
<!-- Footer -->


<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
