<?php
require_once '../base.php';
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

  <!--    Présentation-->

  <section id="produit">
    <div class="container mt-md-5">
      <div class="row text-md-end text-end">
        <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <a href=#compresseur>
              <div class="carousel-item active mt-5">
                <img src="./assets/images/waves-cla-2a.jpg" class="d-block w-100" alt="...">
              </div>
              </a>
              <div class="carousel-item mt-5">
                <a href="#EQ">
                <img src="./assets/images/uad-neve-present.png" class="d-block w-100" alt="...">
                </a>
              </div>
              <div class="carousel-item mt-5">
                <div class="d-block">
                  <a href="#saturation">
                <img src="./assets/images/saturn-carousel.png" class="d-block w-100 " alt="...">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 fs-2 pointeur mt-5"> <h1>Nos differents produits</h1>
          <p class="fs-2 "></p>
          <p class="fs-4 justify-content-end"><span>Le Virtual Studio Technology (VST) est un format ouvert de plug-in audio créé par Steinberg. Sa popularité en fait un standard en musique assistée par ordinateur : par le nombre d'effets et d'instruments virtuels créés dans ce format, et par sa compatibilité avec la majorité des stations audionumériques (DAW) et éditeurs audio (aussi bien sous Windows, Macintosh, et Linux).</span><span></span></p>
        </div>
      </div>
    </div>
  </section>

  <!--    Compresseur plugin-->
  <section class="mt-5 pt-4 bg-body-tertiary" id="compresseur">
    <div class="container mt-md-5">
      <div class="row text-md-start text-center">
        <div class="col-md-8 fs-2 pointeur mt-4 "> <button type="button" class="btn btn-outline-dark"><a class="text-decoration-none" href="./compresseurs.php">Nos compresseurs</a></button>
          <p class="fs-2 "></p>
          <p class="fs-4 justify-content-start"><span>Fondamentalement, la compression réduit la plage dynamique de votre enregistrement en abaissant le niveau des parties les plus fortes, ce qui signifie que les parties fortes et calmes sont maintenant plus proches l’une de l’autre en volume et que les variations naturelles de volume sont moins évidentes.

Le compresseur audio peut alors augmenter le niveau global de ce signal compressé. Le résultat final est donc que les parties les plus calmes donnent l’impression d’avoir été augmentées en volume pour être plus proches des parties plus fortes.</span>
        </div>
        <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
          <img src="./assets/images/waves-cla-3a.jpg"  class="img-fluid  mt-5 pt-2">
        </div>
      </div>
    </div>
  </section>
  <!--    EQ plugin-->
  <section id="EQ">
    <div class="container mt-md-3">
      <div class="row text-md-end text-end">
        <div class="col-md-4 row border-2 d-none d-md-grid mb-5 mt-4 ">
          <img src="./assets/images/maag%20eq.jpg"  class="img-fluid mt-3 pt-5 mt-5">
        </div>
        <div class="col-md-8 fs-2 pointeur mt-5"> <button type="button" class="btn btn-outline-dark"><a class="text-decoration-none" href="./Equalizers.php">Nos équalizers</a></button>
          <p class="fs-2 "></p>
          <p class="fs-4 justify-content-end"><span>Un égaliseur est utilisé dans l’audio professionnel pour modifier l’équilibre de l’intensité sonore des gammes de fréquences. Par exemple, les basses fréquences peuvent être rendues plus fortes ou plus faibles ; les hautes fréquences peuvent être rendues plus fortes ou plus faibles ; Les fréquences moyennes peuvent être rendues plus fortes ou plus faibles. Les égaliseurs sont utilisés dans le son en direct, la diffusion et dans le studio d’enregistrement.</span><span></span></p>
        </div>
      </div>
    </div>
  </section>
  <!--    saturation plugin-->
  <section class="mt-5 pt-4 bg-body-tertiary" id="saturation">
    <div class="container mt-md-5">
      <div class="row text-md-start text-center">
        <div class="col-md-8 fs-2 pointeur mt-5 "> <button type="button" class="btn btn-outline-dark "><a class="text-decoration-none" href="./saturation.php">Nos saturations</a></button>
          <p class="fs-2 "></p>
          <p class="fs-4 justify-content-start"><span>La saturation audio est l’essence même de ce qui rend le matériel analogique musical et agréable. L’entraînement des sons à travers des bandes, des tubes, des transistors et des circuits est depuis longtemps un ingrédient essentiel dans les mixages de grande qualité.</span>
        </div>
        <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
          <img src="./assets/images/p42.png"  class="img-fluid pt-2">
        </div>
      </div>
    </div>
  </section>
  <!--    effect plugin-->
  <section id="effect">
    <div class="container mt-md-5">

      <div class="row text-md-end text-end">
        <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
          <img src="./assets/images/ValhallaVintageVerb.jpg"  class="img-fluid mt-5 pt-5">
        </div>
        <div class="col-md-8 fs-2 pointeur mt-5 "> <button type="button" class="btn btn-outline-dark "><a class="text-decoration-none" href="./effets.php">Nos effets</a></button>
          <p class="fs-2 "></p>
          <p class="fs-4 justify-content-end"><span>Que sont les effets audio ? Les effets audio sont des dispositifs logiciels (DAW) ou matériels (analogiques) qui interfèrent avec le signal audio d'entrée, afin d'influencer le signal sonore de sortie. En physique, un effet audio modifie les ondes sonores lorsqu'il est appliqué à un instrument ou, de manière générale, à tout signal sonore.</span></p>
        </div>
      </div>
    </div>
  </section>
  <!--    contenu Carousel-->

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators ">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="bg-dark" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner bg-body-tertiary">
      <div class="carousel-item active">
        <img src="./assets/images/Waves_Diamond_Bundle.webp" class="d-block w-25 rounded mx-auto mb-5 pb-5 mt-5" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Pack de plugins</h5>
          <p class="text-dark">Equaliser, compresseur, emulation plusieurs machines.</p>
        </div>
      </div>
      <div class="carousel-item bg-body-tertiary">
        <img src="./assets/images/daws.webp" class="d-block w-25 rounded mx-auto mb-5 pb-5 mt-5" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Compatible avec tous les logiciels DAW</h5>
          <p class="text-dark">Fl studio, Ableton, Logic Pro X, Studio One, Pro Tools</p>
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

  <section class="mt-5" id="plan">
    <p class="fs-3 text-center fw-bold">Plugins pack</p>
    <p class="fs-4 text-center ">Choisir le plan le plus adapté</p>


    <div class="row align-items-center justify-content-center column-gap-4">

      <div class="card mb-3 col-md-auto border shadow p-3 mb-5 bg-body-tertiary rounded " style="width: 400px;height: 450px">
        <div class="card-body">
          <h5 class="card-title text-center">Starter pack</h5>
          <p class="card-text text-center">Un plugin de votre choix.</p>
          <p class="text-center text-primary fs-1 fw-bold">49.99 €</p>
          <p class="card-text text-center">Choix possible sur toute notre gamme de compresseurs, equalizers, saturations et effets.</p>
          <a href="#" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Acheter</a>
        </div>
      </div>

      <div class="card mb-3 col-md-auto border shadow p-3 mb-5 bg-body-tertiary rounded " style="width: 500px;height: 550px">
        <div class="card-body">
          <p class="fs-5 text-center text-primary">Le plus populaire</p>
          <h5 class="card-title text-center">Premium pack</h5>
          <p class="card-text text-center">15 plugins de votre choix.</p>
          <p class="text-center text-primary fs-1 fw-bold">545.99 €</p>
          <p class="card-text text-center">Plusieurs choix possibles sur toute notre gamme de compresseurs, equalizers, saturations et effets.</p>
          <a href="#" class="btn btn-primary d-grid gap-2 col-6 mx-auto mt-md-5">Acheter</a>
        </div>
      </div>

      <div class="card mb-3 col-lg-auto border shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 400px;height: 450px">
        <div class="card-body">
          <h5 class="card-title text-center">Ultimate pack</h5>
          <p class="card-text text-center">Suite Ultimate (tous les plugins)</p>
          <p class="text-center text-primary fs-1 fw-bold">1099.99 €</p>
          <p class="card-text text-center">Tous nos plugins disponibles en un seul pack.</p>
          <a href="#" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Acheter</a>
        </div>
      </div>
    </div>

  </section>
    <!-- Footer -->
    <?php require_once BASE_PROJET . '/src/_partials/footer.php';
    ?>

    <!-- End of .container -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>