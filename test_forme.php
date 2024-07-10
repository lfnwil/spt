<?php include 'header.php'; ?>

<!-- Content area -->
<div class="content p-0" id="testcondition">
    <div id="hautpage">
        <div id="bandeau" class="position-relative d-flex justify-content-center align-items-center text-center">
            <img src="../img/Test forme 1.jpg" class="img-fluid">
            <div class="overlay-text position-absolute w-75 h-100 d-flex justify-content-center align-items-center">
                <p class="display-1 fw-bold text-white col-lg-8">Tester votre condition physique</p>
            </div>
        </div>
        <div class="d-flex justify-content-center container-fluid my-5">
            <div class="col-md-9">
                <span class="breadcrumb-item active">Accueil  >  La fédération  > Tester votre condition physique</span>
            </div>
        </div>
    </div> 
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column flex-lg-row col-xl-9 container-fluid ">
            <div class="container-fluid col-12 col-lg-6 p-0 py-4 mx-0" id="consignes">
                <div class="flex-column align-items-center col-lg-10">
                    <p class="display-4 ">Un test rapide et gratuit !</p>
                    <h6 class="fw-bold my-5">Obtenez un premier aperçu de votre forme grâce à un notre test d’endurance en ligne. L’objectif est de réaliser le plus de montées de genoux possible en 2 minutes.</h6>
                    <h6>Complétez les informations demandées, mettez-vous debout, lancez le chron et levez alternativement les genoux droit et gauche à une hauteur correspondant à la mi-cuisse. Indiquez ensuite le nombre de montées de genou droit et validez !</h6>
                    <div class="card p-5 text-white my-5">
                        <h3 class="fw-bold">Quelques consignes</h3>
                        <ul class="my-4">
                            <li>Conservez le dos bien droit pendant l’exercice</li>
                            <li>Pensez à bien respirer tout au long du test</li>
                            <li>Aidez-vous d’un mur si besoin</li>
                            <li>Placer un repère pour indiquer la hauteur à conserver</li>
                            <li>Comptez uniquement les montées du genou droit</li>
                            <li>Un pied doit toujours être au sol (ne courez pas)</li>
                            <li>Faites des pauses si vous en ressentez le besoin !</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid col-12 col-lg-6 p-0 py-4 mx-0" id="chrono">
                <div class="card flex-column align-items-center py-5">
                    <form action="" class="col-md-9 container-fluid">
                        <div class="text-start">
                            <h5 class="fw-bold">Je suis</h5>
                            <div class=" d-flex flex-wrap align-items-center">
                                <div class="py-2 col-md-5">
                                    <input class="form-check-input me-2" type="checkbox" id="option1" value="Enfants">
                                    <label class="form-check-label" for="option1">Un homme</label>
                                </div>
                                <div class="py-2 col-md-5">
                                    <input class="form-check-input me-2" type="checkbox" id="option2" value="Adultes">
                                    <label class="form-check-label" for="option2">Une femme</label>
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <h5 class="fw-bold">Mon âge</h5>
                            <select class="p-3 px-lg-5 bg-transparent w-100">
                                <option value="" disabled selected>Sélectionnez votre tranche d'âge</option>
                                <option value="Option 1">Option 1</option>
                                <option value="Option 2">Option 2</option>
                            </select>
                        </div>
                        <div class="my-4">
                            <h5 class="fw-bold">Mon code postal</h5>
                            <input type="text" class="p-3 text-center border-0 w-100" placeholder="exemple : 33000">
                        </div>
                        <div class="card my-5 p-5 text-center text-white shadow" style="background-color: #D32655;">
                            <h5>Appuyez pour démarrer le chrono !</h5>
                            <p class="display-2 fw-bold"> 2 : 00</p>
                        </div>
                        <div class="my-4 d-flex align-items-center justify-content-around">
                            <h5 class="fw-bold">J'ai levé</h5>
                            <input type="number" class="py-2 w-25 text-center border-0" value="0">
                            <h5 class="fw-bold">fois le genou droit !</h5>
                        </div>
                        <div class="mt-5 text-center">
                            <a class="btn w-100 py-3 text-white shadow" style="background-color: #0099DC">
                                <span class="fw-bold text-center">Valider</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5" id="imgoverlay">
        <div class="background-container d-flex justify-content-center py-5">
            <img src="../img/AdobeStock_159472423 1.jpg" class="img-fluid w-100 h-100 position-absolute">
            <div class="background-filter"></div>
            <div class="content col-9 py-5 text-center d-flex flex-column align-items-center">
                <p class="display-4 text-white mt-lg-5">Vous souhaitez en savoir plus sur votre condition physique ?</p>
                <div class="my-5">
                    <h6>Les tests Forme Plus Sport© vous permettent de faire un état des lieux de votre souplesse, votre équilibre, votre force et votre endurance.</h6>
                    <h6 class="fw-bold">Venez vous tester dans les Clubs et Comités Sports pour Tous.</h6>
                </div>
                <button class="btn bg-white shadow col-10 justify-content-center py-3 d-flex align-items-center my-5">
                    <span class="mb-0 text-center fw-bold text-prim">En savoir plus</span>
                </button>
            </div>
        </div>
        </div>
</div>
<!-- /Content area -->

<div id="footer" class="d-flex justify-content-center col-md-12 my-md-0">
    <div class="row d-flex justify-content-around align-items-center col-md-12 container-fluid p-0">
        <img src="../img/Ellipse 19.png" id="ellipse">

<?php include 'footer.php'; ?>