<?php include 'header.php'; ?>

<!-- Content area -->
<div class="content p-0" id="trouverunclub">
    <div id="hautpage">
        <div id="bandeau" class="position-relative d-flex justify-content-center align-items-center text-center">
            <img src="../img/AdobeStock_634484206 2.jpg" class="img-fluid">
            <div class="overlay-text position-absolute w-75 h-100 d-flex justify-content-center align-items-center">
                <p class="display-1 fw-bold text-white col-lg-8">Trouver un Club Sports pour Tous</p>
            </div>
        </div>
        <div class="d-flex justify-content-center container-fluid my-5">
            <div class="col-md-9">
                <span class="breadcrumb-item active">Accueil  >  La fédération  > Trouver un Club Sports pour Tous</span>
            </div>
        </div>
        <div class="flex-column align-items-center text-center container-fluid">
            <p class="display-4">Trouver un Club Sports pour Tous</p>
            <p class="text-prim fw-bold">Vous souhaitez découvrir une nouvelle activité physique ou vous remettre au sport mais vous ne savez pas lequel choisir ? </p>
            <p>Au programme : activité physique, bien-être et surtout partage et plaisir ! </p>
        </div>
    </div>              
    <div class="row d-flex justify-content-between m-0 container-fluid py-4" id="trouverunclub">
        <div class="container-fluid col-md-6 p-sm-4 p-0">
            <div class="card text-center">
                <img src="../img/recherche par departements.png" class="img-fluid">
            </div>
        </div>
        <div class="container-fluid col-md-6 p-sm-4 p-0 py-4" id="rechercheavancee">
            <div class="card flex-column align-items-center px-xxl-5">
                <h1 class="text-prim py-5">Recherche avancée</h1>
                <form action="" class="col-9">
                    <div class="mb-5 mt-3 w-100">
                        <h5>Recherche par activité</h5>
                        <div class="my-4">
                            <input type="text" class="w-100 p-3 border-0 text-center" placeholder="Saisissez une activité">
                            <p class="text-center my-2">ou</p>
                            <select class="w-100 p-3 px-lg-5 bg-transparent">
                                <option value="" disabled selected>Sélectionnez votre département</option>
                                <option value="Option 1">Option 1</option>
                                <option value="Option 2">Option 2</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="mb-5 mt-3 w-100">
                        <h5>Recherche géographique</h5>
                        <div class="my-4">
                            <select class="w-100 p-3 px-lg-5 bg-transparent">
                                <option value="" selected>Sélectionnez votre département</option>
                                <option value="Option 1">Option 1</option>
                                <option value="Option 2">Option 2</option>
                            </select>                                                
                            <p class="text-center my-2">ou</p>
                            <input type="text" class="w-100 p-3 border-0 text-center" placeholder="Saisissez votre ville ou code postal">
                        </div>
                    </div>
                    <div class="my-5 text-start">
                        <h5>Type de club</h5>
                        <div class="my-4">
                            <div class="form-check my-3 d-flex align-items-center">
                                <input class="form-check-input me-3" type="checkbox" id="option2" value="FPMP">
                                <label class="form-check-label" for="option2">Club chartés Sport Santé Bien-Être</label>
                            </div>
                            <div class="form-check my-3 d-flex align-items-center">
                                <input class="form-check-input me-3" type="checkbox" id="option1" value="FPMP">
                                <label class="form-check-label" for="option1">Clubs accueillant du public avec une prescription médicale</label>
                            </div>
                        </div>
                    </div>                                        
                    <div class="my-5 text-start">
                        <h5>Public</h5>
                        <div class="my-4 d-flex flex-wrap align-items-center">
                            <div class="px-3 py-2">
                                <input class="form-check-input me-2" type="checkbox" id="option1" value="Enfants">
                                <label class="form-check-label" for="option1">Enfants</label>
                            </div>
                            <div class="px-3 py-2">
                                <input class="form-check-input me-2" type="checkbox" id="option2" value="Adultes">
                                <label class="form-check-label" for="option2">Adultes</label>
                            </div>
                            <div class="px-3 py-2">
                                <input class="form-check-input me-2" type="checkbox" id="option3" value="Seniors">
                                <label class="form-check-label" for="option3">Seniors</label>
                            </div>
                            <div class="px-3 py-2">
                                <input class="form-check-input me-2" type="checkbox" id="option4" value="Bébés">
                                <label class="form-check-label" for="option4">Bébés</label>
                            </div>
                            <div class="px-3 py-2">
                                <input class="form-check-input me-2" type="checkbox" id="option5" value="Personne handicapées">
                                <label class="form-check-label" for="option5">Personne handicapées</label>
                            </div>
                            <div class="px-3 py-2">
                                <input class="form-check-input me-2" type="checkbox" id="option6" value="Adolescents">
                                <label class="form-check-label" for="option6">Adolescents</label>
                            </div>
                        </div>
                    </div>
                    <div class="my-sm-5 text-center">
                        <a class="btn col-lg-12 py-3 text-white shadow my-4" style="background-color: #0099DC">
                            <span class="fw-bold text-center">Rechercher</span>
                        </a>
                    </div>
                </form>
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