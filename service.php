<?php
require_once '../base.php';
require_once '../src/config/db-config.php';
require_once '../src/database/demande-db.php';


$pdo = getConnexion();

$erreurs = [];
$prenom = "";
$nom = "";
$demande = "";
$email="";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $demande = $_POST['demande'];
    $email = $_POST['email'];

    if (empty($erreurs)) {
        $erreurs = InscriptionReservation($prenom, $nom, $demande, $email, $pdo);

    }
}

// Si aucune erreur, on peut procéder à l'inscription
?>

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

    <section class="mt-5 pt-4 " id="compresseur">
        <div class="container">
            <div class="row text-md-start text-center">
                <div class="col-md-8 fs-2 pointeur mt-4 ">
                    <h1 class="mb-1">Nos différents services</h1>
                    <p class="fs-2 "></p>
                    <p class="fs-4 justify-content-start"><span>Nous proposons différents services en plus de nos produits, notamment le mixage et mastering exclusif de votre piste audio, par exemple une musique ou un podcast. Nous disposons aussi de locaux pour pouvoir enregistrer vos différentes pistes audio.</span>
                        <button type="button" class="btn btn-outline-dark mt-3"><a class="text-decoration-none" href="compresseurs.php">Nos services</a></button>
                </div>
                <div class="col-md-4 row border-2 d-none d-md-grid mb-5">
                    <img src="./assets/images/photo-studio.jpg"  class="img-fluid  mt-3 pt-2 w-100">
                </div>
            </div>
        </div>
    </section>
        <!--    Accordion-->
        <div class="bg-body-tertiary pt-3 pb-3">
        <div class="container text-center mt-5 ">
            <div class="row">
                <div class="col">
                    <img src="./assets/images/service_mix.png" alt="">
                </div>
                <div class="col">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Mix de source audio
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Le mix de source audio consiste à</strong> traiter une piste de différents formats comme le .WAV (recommandé) et le .MP3 afin de nettoyer et faire ressortir les bonnes fréquences de votre enregistrement. Si vous disposez de plusieurs sources audio à mixer, le produit mix multi-pistes est fait pour vous.
                                </div>
                                <div class="container text-center ">
                                    <p class="fw-bold text-center fs-3 pt-1 pb-1">Tarifs :</p>
                                    <div class="row">
                                        <div class="col text fs-5 fw-bold">
                                            Piste .MP3 - 30 euros
                                            <a href="panier.php">
                                                <button class="btn btn-danger btn-sm mt-5 mb-2 shadow p-3 mb-5 rounded"> Devis </button>
                                            </a>
                                        </div>
                                        <div class="col fw-bold">
                                            Piste .WAV - 60 euros
                                            <a href="panier.php">
                                                <button class="btn btn-danger btn-sm mt-5 mb-2 shadow p-3 mb-5 rounded"> Devis </button>
                                            </a>                                        </div>
                                        <div class="col fw-bold">
                                            Multi pistes
                                            <p class="fw-bold">120 euros</p>
                                            <a href="panier.php">
                                                <button class="btn btn-danger btn-sm mt-5 mb-2 shadow p-3 mb-5 rounded"> Devis </button>
                                            </a>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Mastering de source audio
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Le mastering de source audio consiste à</strong> faire ressortir de façon optimisée et competitive la puissance de votre source (aussi appelé loudness) afin de pouvoir être diffusé de façon correcte sur les différentes plateformes de steaming audio. Nous prenons en charges différents formats comme le .WAV (recommandé) et le .MP3. Si vous disposez de plusieurs sources audio à mixer, le produit mix multi-pistes est fait pour vous.
                                </div>
                                <div class="container text-center ">
                                    <p class="fw-bold text-center fs-3 pt-1 pb-1">Tarifs :</p>
                                    <div class="row">
                                        <div class="col text fs-5 fw-bold ">
                                            Piste .MP3 - 30 euros
                                            <a href="panier.php">
                                                <button class="btn btn-danger btn-sm mt-5 mb-2 shadow p-3 mb-5 rounded"> Devis </button>
                                            </a>                                        </div>
                                        <div class="col fw-bold">
                                            Piste .WAV - 60 euros
                                            <a href="panier.php">
                                                <button class="btn btn-danger btn-sm mt-5 mb-2 shadow p-3 mb-5 rounded"> Devis </button>
                                            </a>                                        </div>
                                        <div class="col fw-bold">
                                            Multi pistes
                                            <p class="fw-bold">120 euros</p>
                                            <a href="panier.php">
                                                <button class="btn btn-danger btn-sm mt-5 mb-2 shadow p-3 mb-5 rounded"> Devis </button>
                                            </a>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                   Enregistrement studio
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Si vous ne disposez pas de matériel d'enregistrement ou de pièce insonorisée,</strong> il vous est possible de louer une séance d'enregistrement dans nos locaux avec un de nos ingénieurs du son.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!--    Notre studio d'enregistrement -->

        <div id="carouselExampleDark" class="carousel carousel-dark slide ">
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <p class="text-dark text-center fw-bold fs-1 mt-5">NOS LOCAUX : </p>
            <div class="carousel-inner mt-5 mb-2 ">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="./assets/images/interieur-studio-carousel.jpg" class="d-block w-75 mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white">Intérieur studio A</h5>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./assets/images/studio_b.webp" class="d-block w-75 mx-auto " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-white">Intérieur studio B</h5>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col">
            </div>
            <div class="col-md-auto">
    <div class="mapouter "><div class="gmap_canvas"><iframe width="913" height="560" id="gmap_canvas" src="https://maps.google.com/maps?q=38+a+rue+narcisse+lanchy+&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.analarmclock.com/">online alarm clock</a><br><a href="https://timenowin.net/"></a><br><style>.mapouter{position: relative;text-align: right;height: 560px;width: 913px;}</style><a href="https://www.embedmaps.co">adding google map to website</a><style>.gmap_canvas{overflow: hidden;background: none !important;height: 560px;width: 913px;}</style></div></div>
    </div>
            <div class="col">
            </div>
        </div>
    </div>
        <!--    Formulaire -->
    <div class=" bg-body-tertiary">
        <h1 class="text-center fw-bold pt-5 mt-1 mb-1">Réserver une heure <i class="bi bi-calendar-check"></i> </h1>
    <p class="fs-4 text-center pt-2">Nous vous recontacterons par email dans les 24 heures suivant votre demande</p>
    <div class="container pb-5">
        <div class="w-50 mx-auto shadow-lg p-3 mb-5 bg-white rounded">
            <form action="" method="post" novalidate>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom*</label>
                    <input type="text"
                           class="form-control <?= (isset($erreurs['prenom'])) ? "border border-2 border-danger" : "" ?>
                    id="prenom"
                    name="prenom"
                    value="<?= $prenom ?>"
                    placeholder="Saisir votre prénom"
                    aria-describedby="emailHelp">
                    <?php if (isset($erreurs['prenom'])): ?>
                    <p class="form-text text-danger"><?= $erreurs['prenom'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom*</label>
                    <input type="text"
                           class="form-control <?= (isset($erreurs['nom'])) ? "border border-2 border-danger" : "" ?>"
                    id="nom"
                    name="nom"
                    value="<?= $nom ?>"
                    placeholder="Saisir votre nom"
                    aria-describedby="emailHelp">
                    <?php if (isset($erreurs['nom'])): ?>
                    <p class="form-text text-danger"><?= $erreurs['nom'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="demande" class="form-label">Demande*</label>
                    <input type="text"
                           class="form-control <?= (isset($erreurs['nom'])) ? "border border-2 border-danger" : "" ?>"
                    id="demande"
                    name="demande"
                    value="<?= $demande ?>"
                    placeholder="Saisir votre demande"
                    aria-describedby="emailHelp">
                    <?php if (isset($erreurs['demande'])): ?>
                    <p class="form-text text-danger"><?= $erreurs['demande'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email*</label>
                    <input type="email"
                           class="form-control <?= (isset($erreurs['email'])) ? "border border-2 border-danger" : "" ?>"
                    id="email" name="email"
                    value="<?= $email ?>"
                    placeholder="Saisir un email valide"
                    aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Ne partager jamais votre adresse email.</div>
                    <?php if (isset($erreurs['email'])): ?>
                    <p class="form-text text-danger"><?= $erreurs['email'] ?></p>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-outline-dark text-secondary">Valider</button>
        </div>
    </div>
    </div>
<div/>
    </form>
    </section>
</main>

        <!--    Footer -->
<?php require_once BASE_PROJET . '/src/_partials/footer.php';
?>
    <!-- End of .container -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>