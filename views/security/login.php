<?php
$title = "page d'accueil";
$description = "";
ob_start(); ?>
<main class="container col-5 mt-5">
    <form class="card border-0 shadow-lg my-4">
        <div class="mb-3 mx-4 my-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Entrez votre adresse email">

        </div>
        <div class="mb-3 mx-4 my-4">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1"
                placeholder="Entrez votre mot de passe">
        </div>
        <div class="mb-3 form-check mx-4 my-2">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">J'accepte les CGU</label>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
    <div class="card border-0 shadow-p my-4">
        <p>Vous n'êtes pas encore inscrit?</p>
        <a class="btn btn-secondary" href="?page=registration">
            S'inscrire</a>
</main>
<?php
$details = ob_get_clean();
include_once dirname(__FILE__,2) . '/layout.php'; ?>