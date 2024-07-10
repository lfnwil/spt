<?php include 'header.php'; ?>

<!-- Content area -->
<div class="content p-0" id="formaffiliation">
    <div>
        <div id="hautpage">
            <div id="bandeau" class="position-relative d-flex justify-content-center align-items-center text-center">
                <img src="../img/DSC03731 1.jpg" class="img-fluid">
                <div class="overlay-text position-absolute w-75 h-100 d-flex justify-content-center align-items-center">
                    <p class="display-1 fw-bold text-white col-lg-8">Demande d’affiliation ou d’agrément fédéral</p>
                </div>
            </div>
            <div class="d-flex justify-content-center container-fluid my-5">
                <div class="col-md-9">
                    <span class="breadcrumb-item active">Accueil  >  La fédération  > Demande d’affiliation ou d’agrément fédéral</span>
                </div>
            </div>
            <div class="flex-column align-items-center text-center container-fluid col-md-6">
                <p class="display-4 fw-bold text-center">Demande d’affiliation ou d’agrément fédéral</p>
                <div class="d-flex flex-column align-items-center p-4">
                    <h6 class="fw-bold" style="color: #E3004F;">Important :</h6>
                    <h6 class="text-center">La qualité des informations que vous transmettez permettra d’alimenter au mieux les sites fédéraux Internet et Extranet et de bien informer vos adhérents.</h6>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center container-fluid" id="Votrestructure">
            <form class="p-lg-5 col-xl-7 p-sm-2">
                <div class="container">
                    <div class="row d-flex justify-content-around">
                        <div class="form-group">
                            <label for="affiliation" class="fw-bold">Vous souhaitez vous affilier pour :</label>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <select id="affiliation" class="form-select py-3 px-lg-5 bg-light my-2">
                                        <option value="Option 1">La saison en cours (jusqu’au 31 août 2025)</option>
                                        <option value="Option 2">La prochaine saison (du 31 août 2025 au 31 août 2026)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h1 class="text-start my-lg-5">Votre Club</h1>
                        <div class="form-group mb-4">
                            <label class="fw-bold" for="titre">Titre exact du Club (tel qu’enregistré en Préfecture pour une association ou sur l’extrait Kbis pour une structure non associative)* </label>
                            <input type="text" class="px-lg-5 py-3" id="titre" placeholder="Votre texte">
                        </div>
                        <div class="col-md-6 text flex-column align-items-center">
                            <div class="form-group mb-4">
                                <label class="fw-bold" for="code_postal">Adresse du siège social*</label>
                                <input type="text" class="px-lg-5 py-3" id="code_postal" placeholder="Votre texte">
                            </div>
                            <div class="form-group mb-4">
                                <label class="fw-bold" for="ville">Ville</label>
                                <input type="text" class="px-lg-5 py-3" id="ville" placeholder="Votre texte">
                            </div>
                            <div class="form-group mb-4">
                                <label class="fw-bold" for="telephone1">Téléphone 1</label>
                                <input type="text" class="px-lg-5 py-3" id="telephone1" placeholder="Votre texte">
                            </div>
                            <div class="form-group mb-4">
                                <label class="fw-bold py-2" for="site_internet">Site internet</label>
                                <input type="url" class="px-lg-5 py-3" id="site_internet" placeholder="www.">
                            </div>
                        </div>
                        <div class="col-md-6 text flex-column align-items-center ">
                            <div class="form-group mb-4">
                                <label class="fw-bold" for="adresse_siege">Code Postal</label>
                                <input type="text" class="px-lg-5 py-3" id="adresse_siege" placeholder="Votre texte">
                            </div>
                            <div class="form-group mb-4">
                                <label class="fw-bold" for="courriel">Courriel</label>
                                <input type="email" class="px-lg-5 py-3" id="courriel" placeholder="Votre texte">
                            </div>
                            <div class="form-group mb-4">
                                <label class="fw-bold" for="telephone2">Téléphone 2</label>
                                <input type="text" class="px-lg-5 py-3" id="telephone2" placeholder="Votre texte">
                            </div>
                            <div class="form-group mb-4">
                                <label class="fw-bold col-lg-8" for="numero_affiliation">Si vous avez déjà été affilié à la Fédération, merci d’inscrire votre numéro d’affiliation</label>
                                <input type="text" class="px-lg-5 py-3" id="numero_affiliation" placeholder="N°">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn text-white w-100 mt-5 py-3 fw-semibold" style="background-color: #D9D9D9;" data-bs-toggle="collapse" data-bs-target="#formCollapse" id="toggleButton">
                    Suite du formulaire <img src="../img/downarrow.png" class="ms-2">
                </button>
            </form>
        </div>              
        <div class="collapse" id="formCollapse">
            <div class="d-flex justify-content-center">
                <form class="px-lg-5 col-xl-7 p-sm-2 container-fluid">
                    <div class="my-5" id="Votre Structure est-elle issue de">
                        <label class="fw-bold ps-md-5 mb-2">Votre Structure est-elle issue de</label>
                        <div class="container flex-column align-items-center p-4 bg-light">
                            <div class="row d-flex align-items-center justify-content-around  my-2">
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">FPMP</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public2" value="bebes">
                                        <label class="form-check-label m-0" for="public2">FEQGAE</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public3" value="enfants">
                                        <label class="form-check-label m-0" for="public3">Capoeira Paname</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center justify-content-around  my-2">
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">Fédération Wushu France</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">FF Escrime</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">École de l’onde du Dragon</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container p-4">
                            <div class="row justify-content-around align-items-center">
                                <div class="col-lg-6">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox">
                                        <label class="form-check-label m-0 fw-bold">J’accepte que ma Structure et son correspondant soient contactés par les partenaires de la Fédération</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-0">
                                        <label class="mb-2 fw-semibold" for="nb_adherents">Nombre d’adhérents Sports pour Tous du club estimation</label>
                                        <input type="text" class="px-4 py-3" id="nb_adherents" placeholder="Votre texte">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>           
                    <div class="my-5" id="Motivations de la demande d’affiliation">
                        <label class="fw-bold ps-md-5 mb-2">Motivations de la demande d’affiliation</label>    
                        <div class="container flex-column align-items-center p-4 bg-light">
                            <div class="row d-flex align-items-center justify-content-around  my-2">
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">Animateurs Fédéral</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public2" value="bebes">
                                        <label class="form-check-label m-0" for="public2">Agréments Sport</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public3" value="enfants">
                                        <label class="form-check-label m-0" for="public3">Valeurs Sports pour Tous</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center justify-content-around  my-2">
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">Autres (précisez)</label>
                                    </div>
                                </div>
                                <div class="col-lg-7 mb-2 d-flex align-items-center">
                                    <input type="text" class="px-4 py-3" placeholder="Votre texte">
                                </div>
                            </div>
                        </div>
                    </div>                           
                    <div class="my-5" id="Types de publics accueillis">
                        <label class="fw-bold ps-5 mb-2">Types de publics accueillis</label>
                        <div class="container flex-column align-items-center p-4 bg-light">
                            <div class="row d-flex align-items-center justify-content-around  my-2">
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">Femmes enceintes</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public2" value="bebes">
                                        <label class="form-check-label m-0" for="public2">Bébés</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public3" value="enfants">
                                        <label class="form-check-label m-0" for="public3">Enfants</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center justify-content-around  my-2">
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">Ados</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">Adultes</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">Seniors</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center justify-content-around  my-2">
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">Familles</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">Handi</label>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2 d-flex align-items-center">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-4" type="checkbox" id="public1">
                                        <label class="form-check-label m-0">Avec prescription médicale</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-5" id="Activités_sportives_de_la_Structure">
                        <label class="fw-bold ps-5 mb-2">Activités sportives de la Structure </label>
                        <div class="container p-4 bg-light">
                            <div class="my-2">
                                <a class="w-100 d-flex justify-content-between align-items-center border-bottom" data-bs-toggle="collapse" data-bs-target="#collapsegymniques" aria-expanded="false" aria-controls="collapseExample">
                                    <p class="p-2 m-0">Activités Gymniques d’Entretien et d’Expression</p>
                                    <img src="../img/arrowup.png">
                                </a>
                                <div class="my-4 collapse" id="collapsegymniques">
                                    <div class="flex-column">
                                        <input type="text" class="px-lg-5 py-3 border-0 w-100 mb-4" id="autres_motivations" placeholder="Ajouter une activité">
                                        <div class="flex-column px-5 col-lg-4">
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Aéromodélisme</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Circuit training</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Gym santé</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="my-2">
                                <a class="w-100 d-flex justify-content-between align-items-center border-bottom" data-bs-toggle="collapse" data-bs-target="#collapsenature" aria-expanded="false" aria-controls="collapseExample">
                                    <p class="p-2 m-0">Activités de pleine nature</p>
                                    <img src="../img/arrowdown.png">
                                </a>
                                <div class="my-4 collapse"  id="collapsenature">
                                    <div class="flex-column">
                                        <input type="text" class="px-lg-5 py-3 border-0 w-100 mb-4" id="autres_motivations" placeholder="Ajouter une activité">
                                        <div class="flex-column px-5 col-lg-4">
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Aéromodélisme</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Circuit training</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Gym santé</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2">
                                <a class="w-100 d-flex justify-content-between align-items-center border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseArts" aria-expanded="false" aria-controls="collapseExample">
                                    <p class="p-2 m-0">Arts énergétiques</p>
                                    <img src="../img/arrowdown.png">
                                </a>
                                <div class="my-4 collapse"  id="collapseArts">
                                    <div class="flex-column">
                                        <input type="text" class="px-lg-5 py-3 border-0 w-100 mb-4" id="autres_motivations" placeholder="Ajouter une activité">
                                        <div class="flex-column px-5 col-lg-4">
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Aéromodélisme</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Circuit training</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Gym santé</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2">
                                <a class="w-100 d-flex justify-content-between align-items-center border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseopposition" aria-expanded="false" aria-controls="collapseExample">
                                    <p class="p-2 m-0">Jeux d'opposition</p>
                                    <img src="../img/arrowdown.png">
                                </a>
                                <div class="my-4 collapse"  id="collapseopposition">
                                    <div class="flex-column">
                                        <input type="text" class="px-lg-5 py-3 border-0 w-100 mb-4" id="autres_motivations" placeholder="Ajouter une activité">
                                        <div class="flex-column px-5 col-lg-4">
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Aéromodélisme</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Circuit training</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Gym santé</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2">
                                <a class="w-100 d-flex justify-content-between align-items-center border-bottom" data-bs-toggle="collapse" data-bs-target="#collapsejeuxsportifs" aria-expanded="false" aria-controls="collapseExample">
                                    <p class="p-2 m-0">Jeux sportifs</p>
                                    <img src="../img/arrowdown.png">
                                </a>
                                <div class="my-4 collapse"  id="collapsejeuxsportifs">
                                    <div class="flex-column">
                                        <input type="text" class="px-lg-5 py-3 border-0 w-100 mb-4" id="autres_motivations" placeholder="Ajouter une activité">
                                        <div class="flex-column px-5 col-lg-4">
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Aéromodélisme</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Circuit training</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <h6 class="m-0">Gym santé</h6>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <p>Si vous souhaitez proposer une activité ne se trouvant pas dans liste ci-dessus, merci de nous contacter à <br><span style="color: #0099DC; text-decoration: underline;">licences@sportspourtous.org</span></p>
                            </div>  
                        </div>
                        <div class="container">
                            <div class="row justify-content-around align-items-center p-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input me-4" type="checkbox">
                                    <label class="form-check-label m-0 fw-bold">J’accepte dans ma structure les pratiquants munis d’un coupon pour « 2 initiations » gratuites</label>
                                </div>
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input me-4" type="checkbox">
                                    <label class="form-check-label m-0 fw-bold">J’accepte dans ma structure les chèques Sport & Bien-être d'Actobi.</label>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-around my-4">
                                <div class="col-md-6 text flex-column align-items-center">
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="code_postal">Lieu de pratique principal*</label>
                                        <input type="text" class="px-lg-5 py-3" id="code_postal" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="ville">Code Postal*</label>
                                        <input type="text" class="px-lg-5 py-3" id="ville" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="telephone1">Téléphone</label>
                                        <input type="text" class="px-lg-5 py-3" id="telephone1" placeholder="Votre texte">
                                    </div>
                                </div>
                                <div class="col-md-6 text flex-column align-items-center ">
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Adresse du lieu de pratique principal*</label>
                                        <input type="text" class="px-lg-5 py-3" id="adresse_siege" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold mb-2" for="telephone2">Ville*</label>
                                        <input type="text" class=" px-lg-5 py-3" id="telephone2" placeholder="Votre texte">
                                    </div>
                                                                                        
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="telephone2">Courriel*</label>
                                        <input type="text" class="px-lg-5 py-3" id="telephone2" placeholder="Votre texte">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="fw-bold" style="color: #E3004F;">Important :</h6>
                                    <h6>Indiquez les lieux de pratique supplémentaires sur votre Extranet – <a href="https://extranet.sportspourtous.org/" target="_blank" style="color: #E3004F;">extranet.sportspourtous.org</a> – dès réception de vos codes d’accès.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-center" id="Correspondance">
                <form class="p-xxl-5 col-xl-7 p-sm-2 container-fluid">
                    <div class="container">
                        <div class="row d-flex justify-content-around">
                            <h1 class="text-start">Correspondance avec la Fédération</h1>
                            <div class="form-group my-lg-5 ">
                                <label for="affiliation" class="fw-bold">Correspondant du Club*</label>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <select id="affiliation" class="form-select py-3 px-lg-5 bg-light my-2">
                                            <option value="Option 1">Président ou Dirigeant</option>
                                            <option value="Option 2">Secrétaire</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h6 class="fw-bold" style="color: #0E3083;">Correspondant (si Autre personne)</h6>
                            <div class="my-4 text-start">
                                <label class="fw-bold mb-2" for="civilite">Civilité*</label><br>
                                <div class="form-check form-check-inline me-5">
                                    <input class="form-check-input me-3" type="radio">
                                    <label class="form-check-label fw-bold text-dark" for="madame">Madame</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input me-3" type="radio">
                                    <label class="form-check-label fw-bold text-dark" for="monsieur">Monsieur</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text flex-column align-items-center">
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="code_postal">Nom*</label>
                                        <input type="text" class="px-lg-5 py-3" id="code_postal" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="ville">Né le*</label>
                                        <input type="date" class="px-lg-5 py-3" id="ville" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="telephone1">Code postal*</label>
                                        <input type="text" class="px-lg-5 py-3" id="telephone1" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="site_internet">Téléphone</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                </div>
                                <div class="col-md-6 text flex-column align-items-center ">
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Prénom*</label>
                                        <input type="text" class="px-lg-5 py-3" id="adresse_siege" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="courriel">Adresse*</label>
                                        <input type="email" class="px-lg-5 py-3" id="courriel" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="telephone2">Ville*</label>
                                        <input type="text" class="px-lg-5 py-3" id="telephone2" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold col-lg-8" for="numero_affiliation">E-mail*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group my-4">
                        <div class="form-check">
                            <input class="form-check-input form-check-input-lg" type="checkbox" id="site_internet" >
                            <label class="form-check-label mb-1 fw-bold ms-2" for="site_internet">
                                En tant que correspondant du Club, je m’engage à porter à la connaissance du Président de mon Association ou du Dirigeant de ma Structure toutes les informations qui pourront lui être transmises dans le cadre de sa fonction. De plus, j’ai pris connaissance du fait que mes coordonnées seront utilisées sur tous les supports de communication et d’information de la Fédération (site Internet compris) afin de permettre à mon Club de répondre efficacement aux sollicitations de ses membres, de ses partenaires locaux et de ses futurs pratiquants.
                            </label>
                        </div>
                    </div>
                    <p class="p-3"><strong>Dispositif du ministère des sports :</strong> contrôle d’honorabilité des encadrants sportifs. Si j’accède à des fonctions d’éducateur sportif et/ou de dirigeant de Club, je dois impérativement souscrire une licence « Cadre Technique » ou « Dirigeant » afin de permettre à l’État de contrôler l’obligation d’honorabilité de tous les éducateurs bénévoles et dirigeants au sens de l’article L212-9 du Code du Sport.</p>
                </form>          
            </div>
            <div class="d-flex justify-content-center" id="Bureau de l’Association">
                <form class="p-xxl-5 col-xl-7 p-sm-2 container-fluid">
                    <div class="container">
                        <h1 class="text-start">Bureau de l'Association</h1>
                        <div class="row d-flex justify-content-around my-3">
                            <h6 class="fw-bold" style="color: #0E3083;">Président d'Association ou Dirigeant de Structure</h6>
                            <div class="my-4 text-start">
                                <label class="fw-bold mb-2" for="civilite">Civilité*</label><br>
                                <div class="form-check form-check-inline me-5">
                                    <input class="form-check-input me-3" type="radio">
                                    <label class="form-check-label fw-bold text-dark" for="madame">Madame</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input me-3" type="radio">
                                    <label class="form-check-label fw-bold text-dark" for="monsieur">Monsieur</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text flex-column align-items-center">
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="code_postal">Nom*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Prénom*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Si né(e) en France: Ville de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Si né(e) à l'étranger: Pays de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="courriel">Adresse*</label>
                                        <input type="email" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="telephone2">Ville*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold col-lg-8" for="numero_affiliation">E-mail*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                </div>
                                <div class="col-md-6 text flex-column align-items-center ">
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="code_postal">Nom de naissance</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="ville">Né le*</label>
                                        <input type="date" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Code postal de la ville de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Si né(e) à l'étranger: Ville de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="telephone1">Code postal*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="site_internet">Téléphone</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="site_internet">N° de licence (si déjà licencié Sports pour Tous)</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-around my-3">
                            <h6 class="fw-bold" style="color: #0E3083;">Secrétaire</h6>
                            <div class="my-4 text-start">
                                <label class="fw-bold mb-2" for="civilite">Civilité*</label><br>
                                <div class="form-check form-check-inline me-5">
                                    <input class="form-check-input me-3" type="radio">
                                    <label class="form-check-label fw-bold text-dark" for="madame">Madame</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input me-3" type="radio">
                                    <label class="form-check-label fw-bold text-dark" for="monsieur">Monsieur</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text flex-column align-items-center">
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="code_postal">Nom*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Prénom*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Si né(e) en France: Ville de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Si né(e) à l'étranger: Pays de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="courriel">Adresse*</label>
                                        <input type="email" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="telephone2">Ville*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold col-lg-8" for="numero_affiliation">E-mail*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                </div>
                                <div class="col-md-6 text flex-column align-items-center ">
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="code_postal">Nom de naissance</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="ville">Né le*</label>
                                        <input type="date" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Code postal de la ville de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Si né(e) à l'étranger: Ville de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="telephone1">Code postal*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="site_internet">Téléphone</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="site_internet">N° de licence (si déjà licencié Sports pour Tous)</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-around my-3">
                            <h6 class="fw-bold" style="color: #0E3083;">Trésorier</h6>
                            <div class="my-4 text-start">
                                <label class="fw-bold mb-2" for="civilite">Civilité*</label><br>
                                <div class="form-check form-check-inline me-5">
                                    <input class="form-check-input me-3" type="radio">
                                    <label class="form-check-label fw-bold text-dark" for="madame">Madame</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input me-3" type="radio">
                                    <label class="form-check-label fw-bold text-dark" for="monsieur">Monsieur</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text flex-column align-items-center">
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="code_postal">Nom*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Prénom*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Si né(e) en France: Ville de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Si né(e) à l'étranger: Pays de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="courriel">Adresse*</label>
                                        <input type="email" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="telephone2">Ville*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold col-lg-8" for="numero_affiliation">E-mail*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                </div>
                                <div class="col-md-6 text flex-column align-items-center ">
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="code_postal">Nom de naissance</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="ville">Né le*</label>
                                        <input type="date" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Code postal de la ville de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="adresse_siege">Si né(e) à l'étranger: Ville de naissance*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="telephone1">Code postal*</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="site_internet">Téléphone</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="fw-bold" for="site_internet">N° de licence (si déjà licencié Sports pour Tous)</label>
                                        <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>        
            </div>
            <div class="d-flex justify-content-center my-3" id="Animateurprincipal">
                <form class="p-xxl-5 col-xl-7 p-sm-2 container-fluid">
                    <h1 class="fw-bold">Animateur principal <h3>(considéré comme animateur référent du Club)</h3>
                    <p class="my-2">Merci de renseigner les informations concernant l’animateur principal et d’ajouter les animateurs supplémentaires sur votre Extranet dès réception de vos codes d’accès.</p>
                    <div class="row d-flex justify-content-around my-3">
                        <div class="my-4 text-start">
                            <label class="fw-bold mb-2" for="civilite">Civilité*</label><br>
                            <div class="form-check form-check-inline me-5">
                                <input class="form-check-input me-3" type="radio">
                                <label class="form-check-label fw-bold text-dark" for="madame">Madame</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input me-3" type="radio">
                                <label class="form-check-label fw-bold text-dark" for="monsieur">Monsieur</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text flex-column align-items-center">
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="code_postal">Nom*</label>
                                    <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="adresse_siege">Prénom*</label>
                                    <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="adresse_siege">Si né(e) en France: Ville de naissance*</label>
                                    <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="adresse_siege">Si né(e) à l'étranger: Pays de naissance*</label>
                                    <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="courriel">Adresse*</label>
                                    <input type="email" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="telephone2">Ville*</label>
                                    <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold col-lg-8" for="numero_affiliation">E-mail*</label>
                                    <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                            </div>
                            <div class="col-md-6 text flex-column align-items-center ">
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="code_postal">Nom de naissance</label>
                                    <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="ville">Né le*</label>
                                    <input type="date" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="adresse_siege">Code postal de la ville de naissance*</label>
                                    <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="adresse_siege">Si né(e) à l'étranger: Ville de naissance*</label>
                                    <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="telephone1">Code postal*</label>
                                    <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="site_internet">Téléphone</label>
                                    <input type="text" class="px-lg-5 py-3" placeholder="Votre texte">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="site_internet">Diplôme*</label>
                                    <select id="affiliation" class="form-select py-3 px-lg-5 bg-light">
                                        <option value="Option 1">CQP ALS option AGEE</option>
                                        <option value="Option 2">La prochaine saison (du 31 août 2025 au 31 août 2026)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="votre_texte">Autre diplôme</label>
                                    <input type="text" class="px-lg-5 py-3" id="votre_texte" placeholder="Précisez si autres diplôme(s)">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="site_internet">Titulaire d’une carte professionnelle*</label>
                                    <select id="affiliation" class="form-select py-3 px-lg-5 bg-light">
                                        <option value="Option 1">Oui</option>
                                        <option value="Option 2">Non</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="votre_texte">Validité</label>
                                    <input type="date" class="px-lg-5 py-3" id="votre_texte">
                                </div>
                            </div>
                        </div>
                                                                
                        <div class="row">
                            <div class="col-md-6 flex-column align-items-center">
                                <div class="form-group mb-4">
                                    <label class="fw-bold" for="site_internet">Activité*</label>
                                    <select id="affiliation" class="form-select py-3 px-lg-5 bg-light my-2">
                                        <option value="Option 1">La saison en cours (jusqu’au 31 août 2025)</option>
                                        <option value="Option 2">La prochaine saison (du 31 août 2025 au 31 août 2026)</option>
                                    </select>                                           
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="fw-bold" style="color: #0E3083;">Assurance</h6>
                    <h6 class="my-4">L’affiliation à la Fédération Française Sports pour Tous donne au Club affilié la qualité d’assuré sur le contrat d’assurance Responsabilité Civile, souscrit par la Fédération Française Sports pour Tous pour le compte de ses Clubs affiliés. Cependant, le Club affilié peut, s’il le souhaite, souscrire pour son propre compte un contrat d’assurance Responsabilité Civile qui doit notamment répondre aux obligations des articles L321-1 et suivants du Code du Sport. Le Club doit dans ce cas joindre à la présente demande une attestation d’assurance émanant de son assureur et justifiant la souscription de ce contrat.</h6>
                    <div class="my-5">
                        <div class="my-4 button-group">
                            <div class="my-2">
                                <label class="fw-bold">Joindre la déclaration en Préfecture ou l’insertion au Journal Officiel ou tout document attestant de la création de la Structure</label>
                            </div>
                            <button type="button" class="btn text-white col-lg-5 py-3 fw-semibold" style="background-color: #E3004F;" data-bs-toggle="collapse" data-bs-target="#formCollapse" id="toggleButton">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="../img/whitedownload.png" class="me-3">
                                    <h6 class="mb-0">Télécharger un fichier (.jpg, .png, .pdf, .doc)</h6>
                                </div>
                            </button>                                            
                        </div>
                        
                        <div class="my-4 button-group">
                            <div class="my-2">
                                <label class="fw-bold">Joindre la photocopie du plus haut diplôme de l’encadrant</label>
                            </div>
                            <button type="button" class="btn text-white col-lg-5 py-3 fw-semibold" style="background-color: #E3004F;" data-bs-toggle="collapse" data-bs-target="#formCollapse" id="toggleButton">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="../img/whitedownload.png" class="me-3">
                                    <h6 class="mb-0">Télécharger un fichier (.jpg, .png, .pdf, .doc)</h6>
                                </div>
                            </button>      
                        </div>
                        
                        <div class="my-4 button-group">
                            <div class="my-2">
                                <label class="fw-bold" >Joindre la demande de licence du Président ou du Dirigeant de la Structure</label>
                            </div>
                            <button type="button" class="btn text-white col-lg-5 py-3 fw-semibold" style="background-color: #E3004F;" data-bs-toggle="collapse" data-bs-target="#formCollapse" id="toggleButton">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="../img/whitedownload.png" class="me-3">
                                    <h6 class="mb-0">Télécharger un fichier (.jpg, .png, .pdf, .doc)</h6>
                                </div>
                            </button>      
                        </div>
                        
                        <div class="my-4 button-group">
                            <div class="my-2">
                                <label class="fw-bold">Joindre un exemplaire des Statuts du Club</label>
                            </div>
                            <button type="button" class="btn text-white col-lg-5 py-3 fw-semibold" style="background-color: #E3004F;" data-bs-toggle="collapse" data-bs-target="#formCollapse" id="toggleButton">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="../img/whitedownload.png" class="me-3">
                                    <h6 class="mb-0">Télécharger un fichier (.jpg, .png, .pdf, .doc)</h6>
                                </div>
                            </button>      
                        </div>
                    </div>      
                    <div class="form-group mb-4">
                        <div class="form-check">
                            <input class="form-check-input form-check-input-lg" type="checkbox" id="site_internet" >
                            <label class="form-check-label mb-1 fw-bold ms-2" for="site_internet">
                                En tant que Président de l’Association ou Dirigeant de la Structure, je certifie que cette dernière choisit d’adhérer à la Fédération Française Sports pour Tous. Dans ce cadre, elle s’engage à en respecter les statuts et règlements*
                            </label>
                        </div>
                    </div>                         
                    <div class="row d-flex justify-content-center my-4">
                        <div class="col-md-6">
                            <label class="fw-bold" for="votre_texte">Fait à:</label>
                            <input type="text" class="px-lg-5 py-3" placeholder="Ville">
                        </div>
                        <div class="col-md-6">
                            <label class="fw-bold" for="votre_texte">Le:</label>
                            <input type="date" class="px-lg-5 py-3" id="votre_texte">
                        </div>
                    </div>
                    <button type="button" class="btn text-white col-lg-5 mt-5 py-3 px-5 fw-semibold" style="background-color: #0099DC;">ENVOYER LE FORMULAIRE</button>
                    <p class="mt-5" style="color: #E3004F; font-style: italic;">*Champs obligatoires</p>
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