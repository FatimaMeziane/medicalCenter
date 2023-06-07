<?php
$title = "page d'accueil";
$description = "";
ob_start(); ?>
<div class="container">
    <main class="container my-5">
        <div class="row my-5">
            <div class="col-12">
                <div class="card mb-3">
                    <img src="./assets/img/medicalCenter.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-primary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-sm-12 col-md-12 col-lg-4 ">
                <div class="card text-dark border-primary mb-3 " style="max-width: 30rem; height: 20rem;">
                    <div class="card-header">Dr Meredith Grey</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <img src="./assets/img/Grey.png" class="border border-primary img-fluid" alt="">
                            </div>
                            <div class="col-7">
                                <h4 class="card-title">Médecin généraliste</h4>
                                <p class="card-text">
                                    Le docteur Grey vous reçoit au Centre médical de l'étang le lundi, mardi matin et
                                    jeudi toute la journée.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4  ">
                <div class="card text-dark border-primary mb-3 " style="max-width: 30rem; height: 20rem;">
                    <div class="card-header">Dr Gregory House</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <img src="./assets/img/housse.png" class="border border-primary img-fluid" alt="">
                            </div>
                            <div class="col-7">
                                <h4 class="card-title">Médecin généraliste</h4>
                                <p class="card-text">
                                    Le docteur House vous reçoit au Centre médical de l'étang le lundi, mardi, mercredi,
                                    jeudi, vendredi toute la journée.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-4  ">
                <div class="card text-dark border-primary mb-3 " style="max-width: 30rem; height: 20rem;">
                    <div class="card-header">Dr test</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <img src="./assets/img/Sloan.png" class="border border-primary img-fluid" alt="">
                            </div>
                            <div class="col-7">
                                <h4 class="card-title">Médecin généraliste</h4>
                                <p class="card-text">Le docteur Sloan vous reçoit au Centre médical de l'étang le lundi,
                                    mardi, mercredi, jeudi, vendredi toute la journée.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </main>
</div>
<?php
$details = ob_get_clean();
include_once dirname(__FILE__) . '/layout.php'; ?>