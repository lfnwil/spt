<?php include 'header.php'; ?>

<!-- Content area -->
<div class="content p-0" id="passhebdo">
    <div id="hautpage">
        <div id="bandeau" class="position-relative d-flex justify-content-center align-items-center text-center">
            <img src="../img/Toul _Ballon_Alcock012 1.jpg" class="img-fluid">
            <div class="overlay-text position-absolute w-75 h-100 d-flex justify-content-center align-items-center">
                <p class="display-1 fw-bold text-white col-lg-8">Le Pass hebdo Sports pour Tous</p>
            </div>
        </div>
        <div class="d-flex justify-content-center container-fluid my-5">
            <div class="col-md-9">
                <span class="breadcrumb-item active">Accueil  >  La fédération  > Le Pass hebdo Sports pour Tous</span>
            </div>
        </div>
        <div class="flex-column align-items-center text-center container-fluid" style="color: #0099DC;">
            <p class="display-4">Le Pass hebdo Sports pour Tous</p>
            <h6 class="text-dark">Le Pass hebdo Sports pour Tous vous permet de pratiquer une activité (initiation, stage...) pendant 7 jours consécutifs pour 5 euros seulement.</h6>
            <h6 class="fw-bold">Il est réservé exclusivement aux non-titulaires d'une licence Sports pour Tous et est renouvelable au cours de la saison.</h6>
        </div>
    </div>
    <div class="d-flex justify-content-center my-5 container-fluid">
        <div class="d-flex py-3 px-5" id="recupconfirmation">
            <p class="m-0">Déjà inscrit ? Récupérez votre confirmation en</p>&nbsp;
            <a href="">cliquant ici</a>
        </div>
    </div>                             
    <div class="d-flex justify-content-center" id="passtabs">
        <div class="flex-column col-lg-9 container-fluid">
            <ul class="nav nav-fill nav-underline border-bottom" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="fill-tab-0" data-bs-toggle="tab" href="#fill-tabpanel-0" role="tab" aria-controls="fill-tabpanel-0" aria-selected="true">1. Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fill-tab-1" data-bs-toggle="tab" href="#fill-tabpanel-1" role="tab" aria-controls="fill-tabpanel-1" aria-selected="false">2. Coordonnées</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fill-tab-2" data-bs-toggle="tab" href="#fill-tabpanel-2" role="tab" aria-controls="fill-tabpanel-2" aria-selected="false">3. Paiement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fill-tab-3" data-bs-toggle="tab" href="#fill-tabpanel-3" role="tab" aria-controls="fill-tabpanel-3" aria-selected="false">4. Confirmation</a>
                </li>
            </ul>
            <div class="tab-content mt-5" id="tab-content">
                <div class="tab-pane active" id="fill-tabpanel-0" role="tabpanel" aria-labelledby="fill-tab-0">
                <div class="flex-column" id="contentpasstabs">
                    <div>
                    <div class="d-flex align-items-center px-lg-5">
                        <div class="col"><p>Tarif</p></div>
                        <div class="col"><p>Prix</p></div>
                        <div class="col"><p>Quantité</p></div>
                    </div>
                    <div class="d-flex align-items-center p-3 px-lg-5 bg-f2 radius-20" >
                        <div class="col">Tarif unique</div>
                        <div class="col">5,00€</div>
                        <div class="col"><input type="number" class="col-md-3 text-center border-0" value="0"></div>
                    </div>
                    </div>
                    <div class="d-flex justify-content-end py-5">
                    <h3 class="fw-bold" style="color: #1D387D;">Total (TTC) = 5,00 €</h3>
                    </div>
                    <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="../img/cadenas.png">
                        <p class="fw-bold ms-3 mb-0">Paiement sécurisé</p>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-end">
                        <a href="#" class="btn col-md-12 py-3 text-white shadow-lg d-flex align-items-center justify-content-center" style="background-color: #0099DC"
                        data-bs-toggle="tab" data-bs-target="#fill-tabpanel-1">
                        <h6 class="text-center m-0">Valider</h6>
                        </a>
                    </div>                                          
                    </div>
                </div>
                </div>
                <div class="tab-pane" id="fill-tabpanel-1" role="tabpanel" aria-labelledby="fill-tab-1">
                Tab 2 selected
                </div>
                <div class="tab-pane" id="fill-tabpanel-2" role="tabpanel" aria-labelledby="fill-tab-2">
                Tab 3 selected
                </div>
                <div class="tab-pane" id="fill-tabpanel-3" role="tabpanel" aria-labelledby="fill-tab-3">
                Tab 4 selected
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