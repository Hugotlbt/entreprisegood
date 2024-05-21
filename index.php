<?php
require_once '../base.php';
require_once '../src/config/db-config.php'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Digitals Loops</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.mintt.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


</head>
<body>
<!--    Barre de navigation-->
<?php require_once BASE_PROJET . '/src/_partials/header.php';
?>
<main>
    <!--    Présentation-->

    <section id="presentation">

        <div class="container mt-md-5">
            <div class="row text-md-start text-center">
                <h1 class="mb-3">Digitals Loops</h1>
                <div class="col-md-8 fs-1 pointeur mt-5">Service de mix en ligne - Developpement de Vst
                    <p class="fs-2 "></p>
                    <p class="fs-4 justify-content-start">Notre équipe propose plusieurs produits et services dans le domaine de l'audiovisuel, notamment des plugins adaptables à tout logiciels de MAO (Musique assistée par ordinateur) mais aussi aux logiciels d'édition visuel. Nous disposons aussi de services en ligne de mix et mastering audio ainsi que de locaux afin d'enregistrer différentes pistes audio destinées à du podcast audio et de la création musicale.</p>
                    <p class="fs-4 justify-content-start">Le Virtual Studio Technology (VST) est un format ouvert de plug-in audio créé par Steinberg. Sa popularité en fait un standard en musique assistée par ordinateur : par le nombre d'effets et d'instruments virtuels créés dans ce format, et par sa compatibilité avec la majorité des stations audionumériques (DAW) et éditeurs audio (aussi bien sous Windows, Macintosh, et Linux).</p>
                    <a href="notre-equipe.php"><button class="btn btn-primary btn-md fs-4 mb-5" type="submit">Notre équipe</button>
                    </a>
                </div>

                <div class="col-md-4 row border-2 d-none d-md-grid mb-5">
                    <img src="./assets/images/logo-digital-loops.png" class="img-fluid">
                </div>
            </div>
        </div>

    </section>

    <!--    contenu Carousel-->

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators ">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="bg-dark" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="bg-dark" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner bg-body-tertiary">
            <div class="carousel-item active">
                <a href="produits.php">
                <img src="./assets/images/Waves_Diamond_Bundle.webp" class="d-block w-25 rounded mx-auto mb-5 pb-5" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pack de plugins</h5>
                    <p class="text-dark">Equalizers, compresseurs, émulations de plusieurs machines.</p>
                </div>
            </div>
            <div class="carousel-item bg-body-tertiary">
                <a href="produits.php">
                    <img src="./assets/images/daws.webp" class="d-block w-25 rounded mx-auto mb-5 pb-5" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                        <h5>Compatible avec tous les logiciels DAW</h5>
                        <p class="text-dark">Fl studio, Ableton, Logic Pro X, Studio One, Pro Tools</p>
                    </div>
            </div>
            <div class="carousel-item bg-body-tertiary">
                <a href="service.php">
                <img src="./assets/images/service_mix.png" class="d-block w-25 rounded mx-auto mb-5 pb-5" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Service de mix et de mastering</h5>
                    <p class="text-dark">Nous proposons aussi des prestations de mix et de mastering directement sur notre site.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--    Contenu Card -->

    <section class="mt-5">
    <p class="fs-3 text-center fw-bold">Plugins pack</p>
    <p class="fs-4 text-center ">Choisir le plan le plus adapté</p>


    <div class="row align-items-center justify-content-center column-gap-4">

        <div class="card mb-3 col-md-auto border shadow p-3 mb-5 bg-body-tertiary rounded " style="width: 400px;height: 450px">
            <div class="card-body">
                <h5 class="card-title text-center">Starter pack</h5>
                <p class="card-text text-center">Un plugin de votre choix.</p>
                <p class="text-center text-primary fs-1 fw-bold">49.99 €</p>
                <p class="card-text text-center">Choix possible sur toute notre gamme de compresseurs, equalizers, saturations et effets.</p>
                <a href="produits.php#plan" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Voir plus</a>
            </div>
        </div>

        <div class="card mb-3 col-md-auto border shadow p-3 mb-5 bg-body-tertiary rounded " style="width: 500px;height: 550px">
            <div class="card-body">
                <p class="fs-5 text-center text-primary">Le plus populaire</p>
                <h5 class="card-title text-center">Premium pack</h5>
                <p class="card-text text-center">15 plugins de votre choix.</p>
                <p class="text-center text-primary fs-1 fw-bold">545.99 €</p>
                <p class="card-text text-center">Plusieurs choix possibles sur toute notre gamme de compresseurs, equalizers, saturations et effets.</p>
                <a href="produits.php#plan" class="btn btn-primary d-grid gap-2 col-6 mx-auto mt-md-5">Voir plus</a>
            </div>
        </div>

        <div class="card mb-3 col-lg-auto border shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 400px;height: 450px">
            <div class="card-body">
                <h5 class="card-title text-center">Ultimate pack</h5>
                <p class="card-text text-center">Suite Ultimate (tous les plugins)</p>
                <p class="text-center text-primary fs-1 fw-bold">1099.99 €</p>
                <p class="card-text text-center">Tous nos plugins disponibles en un seul pack.</p>
                <a href="produits.php#plan" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Voir plus</a>
            </div>
        </div>
    </div>

    <!--    Carousel Card 2 -->

    <div id="carouselExampleRide" class="carousel slide  bg-body-tertiary mt-5" data-bs-ride="true">
        <h1 class="text-center mt-3 pt-5"><i class="bi bi-stars"></i>Nouveautés</h1>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <a href="compresseurs.php#comp2">
                <img src="./assets/images/cl1-nouv.png" class="d-block w-25 rounded mx-auto " alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="Equalizers.php#eq2">
                <img src="./assets/images/puig_nouv.png" class="d-block w-25 rounded mx-auto " alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="effets.php#rev3">
                <img src="./assets/images/plate_nouv.png" class="d-block w-25 rounded mx-auto " alt="...">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev carousel-dark" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next carousel-dark" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--    Contact -->

    <h3 class="fs-3 text-center fw-bold pt-5">Recevoir la newsletter <i class="bi bi-envelope-paper-fill"></i></h3>
    <section id="contact">
        <form class="container mt-5 mb-5">
            <div class="mb-3">
                <label for="prenom" class="form-label ">Prenom*</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Saisir votre Prenom"
                       aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom*</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Saisir votre Nom"
                       aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Saisir un Email valide"
                       aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Ne partager jamais votre adresse email.</div>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>

    </section>

<!--    Pied de page-->

        <?php require_once BASE_PROJET . '/src/_partials/footer.php';
        ?>

    <!-- End of .container -->

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>