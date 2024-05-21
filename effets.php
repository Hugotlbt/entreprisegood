<?php
require_once '../base.php';
require_once '../src/config/db-config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>effets</title>
    <link rel="stylesheet" href="assets/css/bootstrap.mintt.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>
<!--    Barre de navigation-->
<?php require_once BASE_PROJET . '/src/_partials/header.php';
?>
<div class="container mt-md-5 mt-5 pt-5">
    <h1 class="text-center fs-1 fw-bold ">Effets :</h1>
    <p class="fs-4 text-center pb-5 pt-5 mb-5">Que sont les effets audio ? Les effets audio sont des dispositifs logiciels (DAW) ou matériels (analogiques) qui interfèrent avec le signal audio d'entrée, afin d'influencer le signal sonore de sortie. En physique, un effet audio modifie les ondes sonores lorsqu'il est appliqué à un instrument ou, de manière générale, à tout signal sonore.</p>
</div>
<!--    Présentation sat1-->
<section class="bg-body-tertiary" id="rev1">
    <div class="container mt-md-5">

        <div class="row text-md-end text-end">
            <div class="col-md-4 row border-2 d-none d-md-grid mb-5">
                <img src="assets/images/ValhallaVintageVerb.jpg" class="img-fluid mt-3 pt-5">
            </div>
            <div class="col-md-8 fs-2 pointeur pb-5">Valhalla - Vintage verb
                <p class="fs-2 "></p>
                <p class="fs-4 justify-content-end">Ajoutez la possibilité de créer et d’appliquer des effets de réverbération aux fichiers audio pour obtenir la conception sonore authentique des années 1970 et 1980. Le plug-in VST permet d’accéder à un ensemble d’outils permettant de personnaliser les effets, propose plusieurs modèles et prend en charge la possibilité de combiner l’ancienne et la nouvelle réverbération.</p>
                <button class="btn btn-primary btn-md fs-5" type="submit">Ajouter au panier</button>
            </div>
        </div>
    </div>
</section>
<!--    Présentation sat 2-->
<section class="mt-5 pt-4 " id="rev2">
    <div class="container mt-md-5">
        <div class="row text-md-start text-center">
            <div class="col-md-8 fs-2 pointeur mt-5 "> Wave - Rverb
                <p class="fs-2 "></p>
                <p class="fs-4 justify-content-start">La réverbération algorithmique était la technologie de réverbération numérique d’origine et utilisait un traitement récursif, qui renvoyait les réflexions pour créer des réflexions de réverbération toujours plus complexes et riches. Les réverbérations algorithmiques créent non seulement de beaux effets de réverbération enveloppants, mais elles sont également hautement personnalisables.</p>
                    <button class="btn btn-primary btn-md fs-5 mt-3 " type="submit">Ajouter au panier</button>
            </div>
            <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
                <img src="assets/images/rverb.webp" class="img-fluid  mt-5 pt-4">

            </div>
        </div>
    </div>
</section>
<!--    Présentation eq 3-->
<section class="bg-body-tertiary" id="rev3">
    <div class="container mt-md-5">

        <div class="row text-md-end text-end">
            <div class="col-md-4 row border-2 d-none d-md-grid mb-3 ">
                <img src="assets/images/transatlantic_rare.jpg" class="img-fluid mt-3 pt-5">
            </div>
            <div class="col-md-8 fs-2 pointeur mt-5"> Transatlantic - Plate Reverb
                <p class="fs-2 "></p>
                <p class="fs-4 justify-content-end">Digitals loops présente un nouveau standard en matière de plug-ins de réverbération à plaques, modélisés à partir des meilleures plaques analogiques d’Europe et des États-Unis. Avec 24 réglages de déclin indépendants et des queues de réverbération qui ne sont pas manipulées, préservant le sustain naturel et la diffusion stéréo des géants analogiques actuels.</p>
                <button class="btn btn-primary btn-md fs-5 mb-5" type="submit">Ajouter au panier</button>
            </div>
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