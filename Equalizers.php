<?php
require_once '../base.php';
require_once '../src/config/db-config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Equalizers</title>
    <link rel="stylesheet" href="assets/css/bootstrap.mintt.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>
<!--    Barre de navigation-->
<?php require_once BASE_PROJET . '/src/_partials/header.php';
?>
<!--    Presentation-->
<div class="container mt-md-5 mt-5 pt-5">
    <h1 class="text-center fs-1 fw-bold ">Equalizers :</h1>
    <p class="fs-4 text-center pb-5 pt-5 mb-5">Un égaliseur est utilisé dans l’audio professionnel pour modifier l’équilibre de l’intensité sonore des gammes de fréquences. Par exemple, les basses fréquences peuvent être rendues plus fortes ou plus faibles ; les hautes fréquences peuvent être rendues plus fortes ou plus faibles ; Les fréquences moyennes peuvent être rendues plus fortes ou plus faibles. Les égaliseurs sont utilisés dans le son en direct, la diffusion et dans le studio d’enregistrement.</p>
</div>
<!--    Présentation eq1-->
<section class="bg-body-tertiary" id="eq1">
    <div class="container mt-md-5">

        <div class="row text-md-end text-end">
            <div class="col-md-4 row border-2 d-none d-md-grid mb-5 pt-5">
                <img src="assets/images/maag eq.jpg" class="img-fluid mt-3 pt-5">
            </div>
            <div class="col-md-8 fs-2 pointeur pb-5 pt-5">Plugin alliance - Maag EQ4
                <p class="fs-2 "></p>
                <p class="fs-4 justify-content-end">Un favori pour les voix et le bus
de mixage Le Mäag Audio EQ4 est un égaliseur musical, pas un égaliseur chirurgical, ce qui le rend idéal pour édulcorer les pistes. Ajoutez-le à vos pistes vocales pour comprendre pourquoi les meilleurs ingénieurs du son qui ont accès à tous les égaliseurs jamais créés exigent l’égaliseur 4 pour les voix.</p>
                <a href="panier.php">
                    <button class="btn btn-primary btn-md fs-5" type="submit">Voir pour un devis</button>
                </a>            </div>
        </div>
    </div>
</section>
<!--    Présentation eq 2-->
<section class="mt-5 pt-4" id="eq2">
    <div class="container mt-md-5">
        <div class="row text-md-start text-center">
            <div class="col-md-8 fs-2 pointeur mt-5 "> UAD - Pultec
                <p class="fs-2 "></p>
                <p class="fs-4 justify-content-start">Ces égaliseurs d’une incroyable précision sont presque impossibles à distinguer des versions matérielles analogiques originales. Vous profitez donc de la même richesse sonore que les plus grands noms de la musique, tels que John Mayer, Daft Punk, Mariah Carey, etc.</p>
                <a href="panier.php">
                    <button class="btn btn-primary btn-md fs-5" type="submit">Voir pour un devis</button>
                </a>            </div>
            <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
                <img src="assets/images/pultec.jpg" class="img-fluid  mt-3 pt-3">

            </div>
        </div>
    </div>
</section>
<!--    Présentation eq 3-->
<section class="bg-body-tertiary" id="eq3">
    <div class="container mt-md-5">

        <div class="row text-md-end text-end">
            <div class="col-md-4 row border-2 d-none d-md-grid mb-3 ">
                <img src="assets/images/sslE.jpg" class="img-fluid mt-1 pt-5">
            </div>
            <div class="col-md-8 fs-2 pointeur mt-5 "> Brainworkx - SSL E Channel
                <p class="fs-2 "></p>
                <p class="fs-4 justify-content-end">La recréation la plus fidèle de ce classique du studio Le
                    bx_console SSL 4000 E recrée avec précision le chemin du signal, le flux de travail et le son de la tranche de console Solid State Logic d’origine au niveau des composants, alimentée par la technologie TMT brevetée de Brainworx. Aucune autre émulation n’est aussi proche de capturer le son et la sensation incomparables de travailler sur un véritable SSL analogique.</p>
                <a href="panier.php">
                    <button class="btn btn-primary btn-md fs-5" type="submit">Voir pour un devis</button>
                </a>            </div>
        </div>
    </div>
</section>
<!--    Pied de page-->
<?php require_once BASE_PROJET . '/src/_partials/footer.php';
?>
<!-- End of .container -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>