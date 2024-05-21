<?php
require_once '../base.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notre équipe</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.mintt.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>
<!--    Barre de navigation-->

<?php require_once BASE_PROJET . '/src/_partials/header.php';
?>
<!--    Présentation entreprise-->
<div class="container mt-md-5 mt-5 pt-5">
  <h1 class="text-center fs-1 fw-bold ">Histoire de l'entreprise :</h1>
  <p class="fs-4 text-center pb-5 pt-5">Notre entreprise a vu le jour en 2016 par un passionné du domaine musical et du developpement informatique, basé en Franche-Comté à Besancon ce dernier décide de s'entourer d'une équipe plus large afin de développer son secteur d'activité et sa clientèle. Digitals loops compte à ce jour deux collaborateurs et plus de 200 clients dans le secteur Est de la France.</p>
</div>
<!--    Présentation employer 1-->
<section id="presentation">
  <div class="container mt-md-5">

    <div class="row text-md-end text-end">
      <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
        <img src="./assets/images/photo-profil_test.jpg"  class="img-fluid mt-3 pt-5">
      </div>
      <div class="col-md-8 fs-2 pointeur mt-5"> Olivier LEBRUN - Chef d’entreprise / Développeur
        <p class="fs-2 "></p>
        <p class="fs-4 justify-content-end"><span>Olivier Lebrun est le chef d'entreprise et le développeur de nos differents plugins vst, il s'assure du bon developpement de l'entreprise.</span></p>
        <a href="./assets/pdf/ficheDePoste_LebrunOlivier.pdf"><button class="btn btn-primary btn-md fs-5">Télécharger la fiche de poste</button>
        </a>
      </div>
    </div>
  </div>
</section>
<!--    Présentation employer 2-->
<section class="mt-2 pt-4" id="presentation2">
  <div class="container mt-md-5 ">
    <div class="row text-md-start text-center">
      <div class="col-md-8 fs-2 pointeur mt-4 "> Emma CHENE - Responsable de communication
        <p class="fs-2 "></p>
        <p class="fs-4 justify-content-start"><span>Emma Chene rejoint l'équipe Digitals Loops en 2017 et s'occupe principalement du développement stratégique de l'entreprise sur les réseaux sociaux.</span>
          <a href="./assets/pdf/ficheDePoste_CheneEmma.pdf"><button class="btn btn-primary btn-md fs-5 mt-3" type="submit">Télécharger la fiche de poste</button>
          </a>
      </div>
      <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
        <img src="./assets/images/photo-emma.png"  class="img-fluid  mt-3 pt-2">

      </div>
    </div>
  </div>
</section>
<!--    Présentation  employer 3-->
<section id="presentation3">
  <div class="container mt-md-5">
    <div class="row text-md-end text-end">
      <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
        <img src="./assets/images/photo-clair.png"  class="img-fluid mt-3 pt-5">
      </div>
      <div class="col-md-8 fs-2 pointeur mt-5 "> Damien CLAIR - Ingénieur son
        <p class="fs-2 "></p>
        <p class="fs-4 justify-content-end"><span>Damien Clair est le premier salarié à avoir été recruté au sein de notre équipe, suite à une de forte demande M.Lebrun dû recruter plus de main d'œuvre afin de pouvoir continuer de développer ses plugins en parallèle. M.Clair s'occupe principalement des enregistrements studio et du mastering de nos clients.</span></p>
        <a href="./assets/pdf/ficheDePoste_ClairDamien.pdf">
        <button class="btn btn-primary btn-md fs-5" type="submit">Télécharger la fiche de poste</button>
        </a>
      </div>
    </div>
  </div>
</section>
<!--    Organigramme-->
<div class="container mt-md-5 pt-5">
  <p class="fw-bold text-center fs-1 ">Organigramme de l'entreprise :</p>
  <div class="col-md-12 row border-2 d-none d-sm-grid mb-5 ">
    <img src="./assets/images/organigramme.png"  class="img-fluid mt-3 pt-5 w-75 rounded mx-auto">
  </div>
</div>
<!--    Pied de page-->
<?php require_once BASE_PROJET . '/src/_partials/footer.php';
?>
  <!-- End of .container -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>