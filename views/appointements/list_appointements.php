<?php
$title = "page d'accueil";
$description = "";
ob_start(); ?>
    <!-- start form -->
    <div class="container py-5">
        <h1 class="mb-3">Liste des rendez-vous !</h1>

        <?php for($i = 0; $i < 10; $i++): ?>
        <div class="card mb-3">
            <div class="card-header">
                12/06/2023 à 14:25
            </div>
            <div class="card-body">
                <h5 class="card-title">NOM Prénom</h5>
                <p class="card-text">Email</p>
                <p class="card-text">Adresse 1</p>
                <p class="card-text">Adresse 2</p>
                <p class="card-text">00000 Ville</p>
                <a href="#" class="btn btn-primary">Modifier</a>
            </div>
        </div>
        <?php endfor ?>
    </div>


    <?php
$details = ob_get_clean();
include_once dirname(__FILE__,2) . '/layout.php'; ?>