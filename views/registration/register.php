<?php
$title = "page d'accueil";
$description = "";
ob_start(); ?>
<main class="container col-5  mt-5">
    <form class="card border-0 shadow-lg my-4">
        <div class="d-flex flex-row mx-2">

            <div class="form-check mx-2 my-4 col-2">

                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Monsieur
                </label>
            </div>

            <div class="form-check mx-2 my-4 col-2">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Madame
                </label>
            </div>
        </div>
        <div class="mb-3 mx-4 my-4">
            <label for="exampleInputLastname" class="form-label">Nom</label>
            <input type="text" class="form-control" id="exampleInputLastname" aria-describedby="emailHelp"
                placeholder="Nom">
        </div>

        <div class="mb-3 mx-4 my-4">
            <label for="exampleInputFirstname" class="form-label">Prénom</label>
            <input type="email" class="form-control" id="exampleInputFirstname" aria-describedby="emailHelp"
                placeholder="Prénom">
        </div>



        <div class="mb-3 mx-4 my-4">
            <label for="exampleInputLastname" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="exampleInputAdress" aria-describedby="emailHelp"
                placeholder="Adresse">
        </div>

        <div class="mb-3 mx-4 my-4">
            <label for="exampleInputFirstname" class="form-label">Code Postal</label>
            <input type="email" class="form-control" id="exampleInputPostCode" aria-describedby="emailHelp"
                placeholder="Code Poste">
        </div>

        <div class="mb-3 mx-4 my-4">
            <label for="exampleInputFirstname" class="form-label">Ville</label>
            <input type="email" class="form-control" id="exampleInputCity" aria-describedby="emailHelp"
                placeholder="Ville">
        </div>
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

        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</main>
<?php
$details = ob_get_clean();
include_once dirname(__FILE__,2) . '/layout.php'; ?>