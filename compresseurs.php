<?php

require_once '../base.php';
require_once BASE_PROJET . '/src/database/db-prod.php';
require_once '../src/config/db-config.php';


$id_prod="";
$id_client="";
$quantite="";
$date_commande=date("m.d.y");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
$id_prod = $_POST['id_prod'];
$id_client = $_POST['id_client'];
$quantite = $_POST['quantite'];

if (ajouterPanier($id_prod, $id_client, $quantite, $date_commande)) {
// Redirection vers la page d'accueil après l'ajout réussi
header("Location: index.php");
exit();
} else {
echo "Erreur lors de l'ajout de l'article.";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Compresseurs</title>
  <link rel="stylesheet" href="assets/css/bootstrap.mintt.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>
<!--    Barre de navigation-->
<?php require_once BASE_PROJET . '/src/_partials/header.php';
?>
<!--    Description-->
<div class="container mt-md-5 mt-5 pt-5 ">
  <h1 class="text-center fs-1 fw-bold ">Compresseurs</h1>
  <p class="fs-4 text-center pb-5 pt-5 mb-5">Fondamentalement, la compression réduit la plage dynamique de votre enregistrement en abaissant le niveau des parties les plus fortes, ce qui signifie que les parties fortes et calmes sont maintenant plus proches l’une de l’autre en volume et que les variations naturelles de volume sont moins évidentes.

    Le compresseur audio peut alors augmenter le niveau global de ce signal compressé. Le résultat final est donc que les parties les plus calmes donnent l’impression d’avoir été augmentées en volume pour être plus proches des parties plus fortes.</p>
</div>
<!--    Présentation comp1-->

<section id="comp1" class="bg-body-tertiary">
  <div class="container mt-md-5">

    <div class="row text-md-end text-end ">
      <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
        <img src="assets/images/waves-cla-3a.jpg" class="img-fluid mt-3 pt-5">
      </div>
      <div class="col-md-8 fs-2 pointeur pb-5 pt-5"> Waves - CLA - 3A
        <p class="fs-2 "></p>
        <p class="fs-4 justify-content-end">Le CLA-3A de Waves est une simulation du LA-3A de la marque Urei/Teletronix, qui a fait ses preuves dans les studios du monde entier depuis les années 60.

Particulièrement efficace sur les voix, il est assez simple à régler et conviendra aussi bien aux utilisateurs débutants qu’aux professionnels.</p>
        <a href="panier.php">
          <button class="btn btn-primary btn-md fs-5" type="submit">Voir pour un devis</button>
          </a>
      </div>
    </div>
  </div>
</section>
<!--    Présentation comp2-->
<section class="mt-5 pt-4" id="comp2">
  <div class="container mt-md-5">
    <div class="row text-md-start text-center">
      <div class="col-md-8 fs-2 pointeur mt-5 "> Tube tech - CL 1B
        <p class="fs-2 "></p>
        <p class="fs-4 justify-content-start">Avec ses nombreuses améliorations sonores et une nouvelle interface graphique haute résolution, le plug-in Tube-Tech CL 1B MkII a été repensé en employant la technologie de modélisation de composants et de traitement du signal la plus récente de Softube, afin de proposer une émulation encore plus complète et capturer ce classique moderne à lampe dans toute sa splendeur.<p/>
          <a href="panier.php">
              <button class="btn btn-primary btn-md fs-5" type="submit">Voir pour un devis</button>
          </a>      </div>
      <div class="col-md-4 row border-2 d-none d-md-grid mb-5 ">
        <img src="assets/images/cl-1b.png" class="img-fluid  mt-5 pt-5">

      </div>
    </div>
  </div>
</section>
<!--    Présentation comp3-->
<section  class="bg-body-tertiary" id="comp3">
  <div class="container mt-md-5">

    <div class="row text-md-end text-end">
      <div class="col-md-4 row border-2 d-none d-md-grid mb-3 ">
        <img src="assets/images/ssl comp.webp" class="img-fluid mt-3 pt-5">
      </div>
      <div class="col-md-8 fs-2 pointeur mt-5 "> SSL - Gcomp
        <p class="fs-2 "></p>
        <p class="fs-4 justify-content-end">Demandez à n’importe quel ingénieur professionnel, il n’y a rien de tel que le SSL G-Master sur le bus stéréo. À l’origine attaché à des bus maîtres de console SSL pour « coller » les mixages en une expérience solide et cohérente, le SSL G-Master est également idéal pour les bus de batterie, les chœurs et même les instruments solo.</p>
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