<?php include 'header.php'; ?>

<!-- Content area -->
<div class="content p-0" id="contact">
    <div id="hautpage">
        <div id="bandeau" class="position-relative d-flex justify-content-center align-items-center text-center mb-5">
            <img src="../img/contact.jpg" class="img-fluid">
            <div class="overlay-text position-absolute w-75 h-100 d-flex justify-content-center align-items-center">
                <p class="display-1 fw-bold text-white col-lg-8">Contact</p>
            </div>
        </div>
        
        <div class="d-flex justify-content-center container-fluid">
            <div class="col-md-9">
                <span class="breadcrumb-item active">Accueil  >  La fédération  > Contact </span>
            </div>
        </div>
    </div>               
    <div class="d-flex justify-content-center py-5">
        <div class="d-flex flex-wrap justify-content-between m-0 container-fluid col-lg-9">
            <div class="container-fluid col-lg-4 col-md-12 p-0 m-0">
                <p class="display-4">Nous contacter</p>
                <h1>Adresse du siège social</h1>
                <h6>12, Place Georges Pompidou</h6>
                <h6>93160 Noisy-le-Grand</h6>
                <a class="btn col-lg-7 py-3 text-white shadow my-4" style="background-color: #0099DC">
                    <img src="../img/envelop.png">
                    <span class="fw-bold text-center ms-3">Nous contacter</span>
                </a>
                <hr class="my-5">
                <h4 class="fw-bold">Venir en transport en commun</h4>
                <div class="my-4">
                    <img src="../img/1280px-Logo_RER_A 1.png" class="my-3">
                    <h6>Gare Noisy-le-Grand Mont d'Est</h6>
                    <h6>Sortie Gare routière</h6>
                </div>
                <div class="my-4">
                    <img src="../img/bus-39488_960_720 1.png" class="my-3">
                    <h6>Lignes 303 et 306</h6>
                    <h6>Arrêt Noisy-le-Grand Mont d'Est RER</h6>
                    <span>Pas de station de Vélib' ni de métro à proximité</span>
                </div>
            </div>
            <div class="container-fluid col-lg-7 col-md-12 p-lg-4 m-0">
                <div class="card flex-column align-items-center bg-f2 pt-5 px-lg-5 container-fluid">
                    <h1>Demande d’informations</h1>
                    <form action="" class="col-md-9">
                        <div class="mt-3 col-12">
                            <h5 class="fw-bold text-sec">Thématique</h5>
                            <div class="my-4">
                                <select class="col-12 p-3 px-lg-5 bg-transparent">
                                    <option value="Option 1">Administratif</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-5 col-12">
                            <h5 class="fw-bold text-sec">Objet de votre demande</h5>
                            <div class="my-4">
                                <select class="col-12 p-3 px-lg-5 bg-transparent">
                                    <option value="Option 1">Administratif</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="my-3 text-start">
                            <h5 class="fw-bold text-sec">Civilité*</h5>
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="px-3 py-2">
                                    <input class="form-check-input me-2" type="checkbox" id="option5" value="Personne handicapées">
                                    <label class="form-check-label" for="option5">Monsieur</label>
                                </div>
                                <div class="px-3 py-2">
                                    <input class="form-check-input me-2" type="checkbox" id="option6" value="Adolescents">
                                    <label class="form-check-label" for="option6">Madame</label>
                                </div>
                            </div>
                        </div>
                        <div class="my-3 col-12">
                            <h5 class="fw-bold text-sec">Nom*</h5>
                            <input type="text" class="col-12 p-3 border-0" placeholder="Votre Nom">
                        </div>
                        <div class="my-3 col-12">
                            <h5 class="fw-bold text-sec">Prénom*</h5>
                            <input type="text" class="col-12 p-3 border-0" placeholder="Votre Prénom">
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h5 class="fw-bold text-sec">Numéro d'affiliation*</h5>
                                <input type="text" class="col-11 p-3 border-0" placeholder="n° d'affiliation">
                            </div>
                            <div class="">
                                <h5 class="fw-bold text-sec">Numéro de licence*</h5>
                                <input type="text" class="col-11 p-3 border-0" placeholder="n° de licence">
                            </div>
                        </div>
                        <div class="my-3 col-12">
                            <h5 class="fw-bold text-sec">Email*</h5>
                            <input type="email" class="col-12 p-3 border-0" placeholder="...">
                        </div>
                        <div class="my-3 col-12">
                            <h5 class="fw-bold text-sec">Téléphone*</h5>
                            <input type="tel" class="col-12 p-3 border-0" placeholder="...">
                        </div>
                        <div class="my-3 col-12">
                            <h5 class="fw-bold text-sec">Code postal*</h5>
                            <input type="text" class="col-12 p-3 border-0" placeholder="ex: 75000">
                        </div>
                        <div class="my-3 col-12">
                            <h5 class="fw-bold text-sec">Votre message*</h5>
                            <input type="text" class="col-12 p-3 border-0" placeholder="...">
                        </div>
                        <div class="my-5 text-center">
                            <a class="btn col-lg-12 py-3 text-white shadow my-4" style="background-color: #0099DC">
                                <span class="fw-bold text-center">Envoyer</span>
                            </a>
                            <p class="champs">* Champs obligatoires</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- /Content area -->
    
<!-- footer -->             
<div id="footer" class="d-flex justify-content-center col-md-12 my-md-0">
    <div class="row d-flex justify-content-around align-items-center col-md-12 container-fluid p-0">
        <img src="../img/Ellipse 19.png" id="ellipse">

<?php include 'footer.php'; ?>