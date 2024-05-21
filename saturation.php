<?php
require_once '../base.php';
require_once '../src/config/db-config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Saturation</title>
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
  <h1 class="text-center fs-1 fw-bold ">Saturation :</h1>
  <p class="fs-4 text-center pb-5 pt-5 mb-5">La saturation est une forme subtile de distorsion qui ajoute des harmoniques agréables. L’effet provient de l’époque analogique où les enregistrements audio passaient par divers matériels. Les ingénieurs de mixage ont découvert qu’ils pouvaient surcharger les magnétophones, les amplis à lampes et les préamplis à transistors pour créer une sorte de « soft-clipping ». Cette technique a donné aux enregistrements des qualités recherchées qui sonnaient agréablement.</p>
</div>
<!--    Présentation sat1-->
<section class="bg-body-tertiary" id="sat1">
  <div class="container mt-md-5">

    <div class="row text-md-end text-end">
      <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
        <img src="assets/images/p42.png" class="img-fluid mt-3 pt-5">
      </div>
      <div class="col-md-8 fs-2 pointeur pb-5 pt-5">Climax - P42
        <p class="fs-2 "></p>
        <p class="fs-4 justify-content-end">Le projet a commencé comme une émulation de la WolfBox DI, un son de guitare basse caractéristique de Motown, et s’est ensuite étendu pour devenir un ampli de ligne à part entière.</p>
          <a href="panier.php">
              <button class="btn btn-primary btn-md fs-5" type="submit">Voir pour un devis</button>
          </a>      </div>
    </div>
  </div>
</section>
<!--    Présentation sat 2-->
<section class="mt-5 pt-2" id="sat2">
  <div class="container mt-md-5">
    <div class="row text-md-start text-center">
      <div class="col-md-8 fs-2 pointeur mt-3 "> Kush audio - Clariphonic
        <p class="fs-2 "></p>
        <p class="fs-4 justify-content-start">Remodelé à partir de zéro à l’aide de tous nouveaux algorithmes et filtres, le Clariphonic DSP MkII sonne nettement plus doux que le plugin original, et est considérablement plus puissant grâce à 3 modes de traitement : Classic Stereo, Dual Mono et Mid-Side. Avec des algorithmes de suréchantillonnage personnalisés spécialement conçus pour les étagères dont le coin le plus élevé est de 38k, il capture fidèlement l’esprit du matériel analogique.</p>
          <a href="panier.php">
              <button class="btn btn-primary btn-md fs-5" type="submit">Voir pour un devis</button>
          </a>      </div>
      <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
        <img src="assets/images/calriphonic.webp" class="img-fluid  mt-5 pt-5">

      </div>
    </div>
  </div>
</section>
<!--    Présentation eq 3-->
<section class="bg-body-tertiary" id="eq3">
  <div class="container mt-md-5">

    <div class="row text-md-end text-end">
      <div class="col-md-4 row border-2 d-none d-md-grid mb-3 ">
        <img src="assets/images/saturn2.jpg" class="img-fluid mt-3 pt-5">
      </div>
      <div class="col-md-8 fs-2 pointeur mt-5 "> Fabfilter - saturn2
        <p class="fs-2 "></p>
        <p class="fs-4 justify-content-end">Saturn 2 introduit une foule de nouvelles fonctionnalités telles qu’une interface repensée avec visualisation de la modulation, une nouvelle saturation subtile et un traitement de phase linéaire pour le mastering, de nombreux nouveaux styles de distorsion, et plus encore.</p>
          <a href="panier.php">
              <button class="btn btn-primary btn-md fs-5" type="submit">Voir pour un devis</button>
          </a>      </div>
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