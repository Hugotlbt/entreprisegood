<?php
require_once '../base.php';
require_once BASE_PROJET . '/src/database/db-prod.php';
require_once '../src/config/db-config.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compresseurs</title>
    <link rel="stylesheet" href="assets/css/bootstrap.mintt.css">
    <link rel="stylesheet" href="assets/css/panier.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
<!--    Barre de navigation-->
<?php require_once BASE_PROJET . '/src/_partials/header.php'; ?>

<section class="h-100 h-custom" style="background-color: #ffffff;">
    <div class="container py-5 h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100 ">
            <div class="col-12">
                <div class="card card-registration card-registration-2 shadow-lg p-3 mb-5 bg-white rounded" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Devis</h1>
                                        <!--    nombre d'item-->
                                        <h6 class="mb-0 text-muted"></h6>
                                    </div>
                                    <hr class="my-4">

                                    <form method="post" action="../calcul_devis.php">
                                        <label for="produit">Produits :</label><br>
                                        <div class="row">
                                            <?php
                                            try {
                                                // Récupérer tous les produits
                                                $produits = getProduit();

                                                // Afficher les produits sous forme de cases à cocher avec un champ de saisie de quantité
                                                foreach ($produits as $produit) {
                                                    echo "<div class='col-12'>";
                                                    echo "<label><input type='checkbox' class='produit-checkbox' name='produit[]' value='" . $produit['id_prod'] . "' data-prix='" . $produit['prix'] . "'>" . $produit['designation'] . "</label>";
                                                    echo "</div>";
                                                    echo "<div class='col-12 text-center'>";
                                                    echo "<input type='number' class='form-control quantite' value='1' min='1'>";
                                                    echo "</div>";
                                                }
                                            } catch (PDOException $e) {
                                                echo "Erreur : " . $e->getMessage();
                                            }
                                            ?>
                                        </div>
                                        <br>
                                        <div id="prixTotal"></div>
                                    </form>
                                    <hr class="my-4">
                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="./index.php" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Retour à la boutique</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Sommaire</h3>
                                    <hr class="my-4">
                                    <!--    nombre d'item-->
                                    <div class="d-flex justify-content-between mb-4">
                                        <div id="prixTotalDisplay"></div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Total</h5>
                                        <h5>€ <span id="total">0.00</span></h5>
                                    </div>

                                    <div class="d-grid gap-2">
                                        <button class="btn btn-lg btn-primary mt-5" type="button">Recevoir le devis par mail</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--    Pied de page-->
<?php require_once BASE_PROJET . '/src/_partials/footer.php'; ?>

<!-- End of .container -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
    function updateTotal() {
        var total = 0;

        document.querySelectorAll('.produit-checkbox:checked').forEach(function(checkbox, index) {
            var prix = parseFloat(checkbox.getAttribute('data-prix'));
            var quantite = parseInt(document.querySelectorAll('.quantite')[index].value);
            total += prix * quantite;
        });

        document.getElementById('total').innerText = total.toFixed(2);
        document.getElementById('prixTotalDisplay').innerText = 'Prix total : € ' + total.toFixed(2);
    }

    document.querySelectorAll('.produit-checkbox, .quantite').forEach(function(input) {
        input.addEventListener('input', updateTotal);
    });

    // Initialize total on page load
    updateTotal();
    function updateTotal() {
        var total = 0;

        // Obtenir le nombre total de produits sélectionnés
        var totalSelectedProducts = document.querySelectorAll('.produit-checkbox:checked').length;

        // Si le nombre total de produits sélectionnés est supérieur à 15, fixer le total à 545.99 €
        if (totalSelectedProducts > 15) {
            total = 545.99;
        } else {
            // Calculer le total en fonction des produits sélectionnés
            document.querySelectorAll('.produit-checkbox:checked').forEach(function(checkbox, index) {
                var prix = parseFloat(checkbox.getAttribute('data-prix'));
                var quantite = parseInt(document.querySelectorAll('.quantite')[index].value);
                total += prix * quantite;
            });
        }

        // Mettre à jour l'affichage du total
        document.getElementById('total').innerText = total.toFixed(2);
        document.getElementById('prixTotalDisplay').innerText = 'Prix total : € ' + total.toFixed(2);
    }
</script>
</body>
</html>
