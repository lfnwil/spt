<?php include 'header.php'; ?>

 <!-- Content area -->
 <div class="content p-0" id="formaffiliation">
    <div>
        <div id="hautpage">
            <div id="bandeau" class="position-relative d-flex justify-content-center align-items-center text-center">
                <img src="../img/DSC03731 1.jpg" class="img-fluid">
                <div class="overlay-text position-absolute w-75 h-100 d-flex justify-content-center align-items-center">
                    <p class="display-1 text-white col-lg-9">Demande d’affiliation ou d’agrément fédéral</p>
                </div>
            </div>
            <div class="d-flex justify-content-center container-fluid mb-5 mt-4">
                <div class="col-md-9">
                    <span class="breadcrumb-item active">Accueil  >  La fédération  > Demande d’affiliation ou d’agrément fédéral</span>
                </div>
            </div>
            <div class="flex-column align-items-center text-center container-fluid col-md-4">
                <p class="display-4 text-center">Demande d’affiliation ou d’agrément fédéral</p>
                <div class="d-flex flex-column align-items-center p-4">
                    <h6 class="" style="color: #E3004F;">Important :</h6>
                    <h6 class="text-center">La qualité des informations que vous transmettez permettra d’alimenter au mieux les sites fédéraux Internet et Extranet et de bien informer vos adhérents.</h6>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center container-fluid" id="Votrestructure">
            <form class="px-lg-5 pt-lg-5 pb-0 col-xl-8 p-sm-2">
                <div class="container">
                    <div class="row d-flex justify-content-around">
                        <div class="form-group">
                            <label for="affiliation" class="">Correspondant du Club*</label>
                            <div class="col-md-6">
                                <select id="affiliation" class="form-select py-3 px-lg-4 bg-f2 my-2">
                                    <option value="Option 1">La saison en cours (du 31 août 2025 au 31 août 2026)</option>
                                    <option value="Option 2">La prochaine saison (du 31 août 2025 au 31 août 2026)</option>
                                </select>
                            </div>
                        </div>
                        <h1 class="text-start my-lg-5">Votre Club</h1>
                        <div class="form-group mb-4">
                            <label class="d-flex" for="titre">Titre exact du Club <p class="italic">&nbsp; (tel qu’enregistré en Préfecture pour une association ou sur l’extrait Kbis pour une structure non associative)* </p></label>
                            <input type="text" class="px-4 py-3" id="titre" placeholder="Votre texte">
                        </div>
                        <div class="flex-wrap row p-0">
                            <div class="form-group col-sm-6 mb-4">
                                <label class="" for="code_Postal">Adresse du siège social*</label>
                                <input type="text" class="px-4 py-3" id="code_Postal" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="" for="adresse_siege">Code Postal*</label>
                                <input type="text" class="px-4 py-3" id="adresse_siege" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="" for="ville">Ville*</label>
                                <input type="text" class="px-4 py-3" id="ville" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="" for="telephone1">Téléphone 1</label>
                                <input type="text" class="px-4 py-3" id="telephone1" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="" for="telephone2">Téléphone 2</label>
                                <input type="text" class="px-4 py-3" id="telephone2" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="" for="courriel">Courriel*</label>
                                <input type="email" class="px-4 py-3" id="courriel" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="" for="site_internet">Site internet</label>
                                <input type="url" class="px-4 py-3" id="site_internet" placeholder="www.">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="" for="numero_affiliation">Si vous avez déjà été affilié, merci d’inscrire votre numéro d’affiliation</label>
                                <input type="text" class="px-4 py-3" id="numero_affiliation" placeholder="N°">
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
                <form class="px-lg-5 col-xl-8 p-sm-2 container-fluid">
                    <div class="my-4" id="Votre Structure est-elle issue de">
                        <label class="ps-md-5 mb-2">Votre Structure est-elle issue de</label>
                        <div class="container px-5 flex-column align-items-center bg-f2">
                            <div class="row flex-wrap align-items-center px-sm-5 py-4 my-2">
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">FPMP</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">FEQGAE</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Capoeira Paname</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Fédération Wushu France</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">FF Escrime</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">École de l’onde du Dragon</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="row flex-wrap align-items-center py-4 my-2">
                                <div class="col-lg-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">J’accepte que ma Structure et son correspondant soient contactés par les partenaires de la Fédération</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-0">
                                        <label class="mb-2 fw-semibold" for="nb_adherents">Estimation du nombre d'adhérents Sports pour Tous du Club</label>
                                        <input type="text" class="px-4 py-3" id="nb_adherents" placeholder="Votre texte">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>           
                    <div class="my-4" id="Motivations de la demande d’affiliation">
                        <label class="ps-md-5 mb-2">Motivations de la demande d’affiliation</label>    
                        <div class="container p-4 flex-column align-items-center bg-f2">
                            <div class="row flex-wrap align-items-center px-sm-5 my-2">
                                <div class="col-md-4 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">FPMP</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">FEQGAE</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Capoeira Paname</label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Fédération Wushu France</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center my-3">
                                    <input type="text" class="px-4 py-3 border-0" placeholder="Votre texte">
                                </div>
                            </div>
                        </div>
                    </div>                           
                    <div class="my-5" id="Types de publics accueillis">
                        <label class="ps-5 mb-2">Types de publics accueillis</label>
                        <div class="container px-sm-5 flex-column align-items-center bg-f2">
                            <div class="row flex-wrap align-items-center px-sm-5 py-4 my-2">
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Femmes enceintes</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Bébés</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Enfants</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Ados</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Adultes</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Séniors</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Familles</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Handi</label>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">Avec prescription médicale</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-5" id="Activités_sportives_de_la_Structure">
                        <label class="ps-5 mb-2">Activités sportives du Club </label>
                        <div class="container px-sm-5 pt-4 pb-5 bg-f2">
                            <div class="my-2">
                                <a class="w-100 d-flex justify-content-between align-items-center border-bottom" data-bs-toggle="collapse" data-bs-target="#collapsegymniques" aria-expanded="false" aria-controls="collapseExample">
                                    <p class="p-2 m-0 uppercase">Activités Gymniques d’Entretien et d’Expression</p>
                                    <img src="../img/arrowup.png">
                                </a>
                                <div class="my-4 collapse" id="collapsegymniques">
                                    <div class="flex-column">
                                        <input type="text" class="px-4 py-3 border-0 w-100 mb-4" id="autres_motivations" placeholder="Ajouter une activité">
                                        <div class="flex-column col-lg-4">
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Aéromodélisme</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Circuit training</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Gym santé</p>
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
                                    <p class="p-2 m-0 uppercase">Activités de pleine nature</p>
                                    <img src="../img/arrowdown.png">
                                </a>
                                <div class="my-4 collapse"  id="collapsenature">
                                    <div class="flex-column">
                                        <input type="text" class="px-4 py-3 border-0 w-100 mb-4" id="autres_motivations" placeholder="Ajouter une activité">
                                        <div class="flex-column col-lg-4">
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Aéromodélisme</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Circuit training</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Gym santé</p>
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
                                    <p class="p-2 m-0 uppercase">Arts énergétiques</p>
                                    <img src="../img/arrowdown.png">
                                </a>
                                <div class="my-4 collapse"  id="collapseArts">
                                    <div class="flex-column">
                                        <input type="text" class="px-4 py-3 border-0 w-100 mb-4" id="autres_motivations" placeholder="Ajouter une activité">
                                        <div class="flex-column col-lg-4">
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Aéromodélisme</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Circuit training</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Gym santé</p>
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
                                    <p class="p-2 m-0 uppercase">Jeux d'opposition</p>
                                    <img src="../img/arrowdown.png">
                                </a>
                                <div class="my-4 collapse"  id="collapseopposition">
                                    <div class="flex-column">
                                        <input type="text" class="px-4 py-3 border-0 w-100 mb-4" id="autres_motivations" placeholder="Ajouter une activité">
                                        <div class="flex-column col-lg-4">
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Aéromodélisme</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Circuit training</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Gym santé</p>
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
                                    <p class="p-2 m-0 uppercase">Jeux sportifs</p>
                                    <img src="../img/arrowdown.png">
                                </a>
                                <div class="my-4 collapse"  id="collapsejeuxsportifs">
                                    <div class="flex-column">
                                        <input type="text" class="px-4 py-3 border-0 w-100 mb-4" id="autres_motivations" placeholder="Ajouter une activité">
                                        <div class="flex-column col-lg-4">
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Aéromodélisme</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Circuit training</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Gym santé</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2">
                                <a class="w-100 d-flex justify-content-between align-items-center border-bottom" data-bs-toggle="collapse" data-bs-target="#collapseAquatiques" aria-expanded="false" aria-controls="collapseExample">
                                    <p class="p-2 m-0 uppercase">Activités Aquatiques</p>
                                    <img src="../img/arrowdown.png">
                                </a>
                                <div class="my-4 collapse"  id="collapseAquatiques">
                                    <div class="flex-column">
                                        <input type="text" class="px-4 py-3 border-0 w-100 mb-4" id="autres_motivations" placeholder="Ajouter une activité">
                                        <div class="flex-column col-lg-4">
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Aéromodélisme</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Circuit training</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <p class="m-0 fw-500">Gym santé</p>
                                                <a href="../" class="ms-auto">
                                                    <img src="../img/redcross.png" class="img-fluid" style="max-width: 100px;">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <p class="d-flex fw-500">Pour l’ajout de toute nouvelle activité ne figurant pas ci-dessus, merci d’adresser votre demande à <a href=""><span class="text-prim fw-700 underline">licences@sportspourtous.org</span></a>.</p>
                            </div>  
                        </div>
                        <div class="container">
                            <div class="row justify-content-around align-items-center p-5">
                                <div class="d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">J’accepte dans mon Club les pratiquants munis d’un coupon pour « 2 initiations » gratuites.</label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center my-3">
                                    <div class="form-check d-flex align-items-center p-0">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <label class="form-check-label ps-3 m-0">J’accepte dans mon Club les Chèques Sport & Bien-Être d’Up Sport&Loisirs . </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-wrap row p-0">
                                <div class="form-group col-sm-6 mb-4">
                                    <label class="" for="code_Postal">Nom du lieu de pratique principal*</label>
                                    <input type="text" class="px-4 py-3" id="code_Postal" placeholder="Votre texte">
                                </div>
                                <div class="form-group col-sm-6 mb-4">
                                    <label class="" for="adresse_siege">Adresse du lieu de pratique principal*</label>
                                    <input type="text" class="px-4 py-3" id="adresse_siege" placeholder="Votre texte">
                                </div>
                                <div class="form-group col-sm-6 mb-4">
                                    <label class="" for="ville">Code Postal*</label>
                                    <input type="text" class="px-4 py-3" id="ville" placeholder="Votre texte">
                                </div>
                                <div class="form-group col-sm-6 mb-4">
                                    <label class="" for="telephone1">Ville*</label>
                                    <input type="text" class="px-4 py-3" placeholder="Votre texte">
                                </div>
                                <div class="form-group col-sm-6 mb-4">
                                    <label class="" for="telephone2">Téléphone</label>
                                    <input type="text" class="px-4 py-3" id="telephone2" placeholder="Votre texte">
                                </div>
                                <div class="form-group col-sm-6 mb-4">
                                    <label class="" for="courriel">Courriel*</label>
                                    <input type="email" class="px-4 py-3" id="courriel" placeholder="Votre texte">
                                </div>
                            </div>
                            <p class="fw-500 my-5"><label style="color: #E3004F;" class="fw-700">Important :</label> Indiquez les lieux de pratique supplémentaires sur votre Extranet – <a href="https://extranet.sportspourtous.org" class="underline text-prim">extranet.sportspourtous.org</a> – dès réception de vos codes d’accès.</p>
                            <hr>
                        </div>
                    </div>
                </form>
            </div>
            <div class="d-flex justify-content-center" id="Correspondance">
                <form class="px-lg-5 pb-0 col-xl-8 p-sm-2">
                    <div class="container">
                        <div class="row d-flex justify-content-around">
                        <h1 class="text-start">Correspondance avec la Fédération</h1>
                        <div class="form-group my-lg-5">
                                <label for="affiliation" class="">Correspondant du Club*</label>
                                <div class="col-md-6">
                                    <select id="affiliation" class="form-select py-3 px-lg-4 bg-f2 my-2">
                                        <option value="Option 1">Président ou Dirigeant</option>
                                        <option value="Option 2">La prochaine saison (du 31 août 2025 au 31 août 2026)</option>
                                    </select>
                                </div>
                        </div>
                        <h5 class="text-sec fw-700">Correspondant (si Autre personne)</h5>
                        <div class="form-group my-4">
                                <label class="fw-bold" for="civilite">Civilité*</label>
                                <div class="row flex-wrap align-items-center col-3">
                                    <div class="col-lg-6 d-flex align-items-center my-3">
                                        <div class="form-check d-flex align-items-center p-0">
                                            <input class="form-check-input m-0" type="radio" name="civilite" id="madame" value="madame">
                                            <label class="form-check-label ps-3 m-0 text-dark" for="madame">Madame</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center my-3">
                                        <div class="form-check d-flex align-items-center p-0">
                                            <input class="form-check-input m-0" type="radio" name="civilite" id="monsieur" value="monsieur">
                                            <label class="form-check-label ps-3 m-0 text-dark" for="monsieur">Monsieur</label>
                                        </div>
                                    </div>
                                </div>                                            
                        </div>
                        </div>
                        <div class="flex-wrap row p-0">
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Nom*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Prénom*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Né le *</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Adresse Postale*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Code Postal*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Ville*</label>
                                <input type="email" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Téléphone</label>
                                <input type="url" class="px-4 py-3" placeholder="www.">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Courriel*</label>
                                <input type="text" class="px-4 py-3" placeholder="N°">
                            </div>
                            <div class="d-flex align-items-center my-4">
                                <div class="form-check d-flex p-0">
                                    <input class="form-check-input m-0" type="checkbox">
                                    <label class="form-check-label ps-3 m-0">En tant que correspondant du Club, je m’engage à porter à la connaissance du Président de mon Association ou du Dirigeant de ma Structure toutes les informations qui pourront lui être transmises dans le cadre de sa fonction. De plus, j’ai pris connaissance du fait que mes coordonnées seront utilisées sur tous les supports de communication et d’information de la Fédération (site Internet compris) afin de permettre à mon Club de répondre efficacement aux sollicitations de ses membres, de ses partenaires locaux et de ses futurs pratiquants*</label>
                                </div>
                            </div>
                            <div >
                                <p class="fw-700">Dispositif du Ministère des Sports : contrôle d’honorabilité des encadrants sportifs.</p>
                                <p class="fw-500"> Si j’accède à des fonctions d’éducateur sportif et/ou de dirigeant de Club, je dois impérativement souscrire une licence « Cadre Technique » ou « Dirigeant » afin de permettre à l’État de contrôler l’obligation d’honorabilité de tous les éducateurs bénévoles et dirigeants au sens de l’article L212-9 du Code du Sport.</p>
                                <hr class="mt-5">
                            </div>
                        </div>
                    </div>
                </form>  
            </div>
            <div class="d-flex justify-content-center" id="Bureau de l’Association">
                <form class="px-lg-5 pb-0 col-xl-8 p-sm-2">
                    <div class="container my-5">
                        <div class="row d-flex">
                            <h1 class="text-start">Bureau de l’Association</h1>
                            <h5 class="text-sec fw-700 my-5">Président d’Association ou Dirigeant de Structure</h5>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">N° licence (si déjà licencié Sports pour Tous)</label>
                                <input type="text" class="px-4 py-3" placeholder="N°">
                            </div>
                            <div class="form-group my-4">
                                <label class="fw-bold" for="civilite">Civilité*</label>
                                <div class="row flex-wrap align-items-center col-3">
                                    <div class="col-lg-6 d-flex align-items-center my-3">
                                        <div class="form-check d-flex align-items-center p-0">
                                            <input class="form-check-input m-0" type="radio" name="civilite" id="madame" value="madame">
                                            <label class="form-check-label ps-3 m-0 text-dark" for="madame">Madame</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center my-3">
                                        <div class="form-check d-flex align-items-center p-0">
                                            <input class="form-check-input m-0" type="radio" name="civilite" id="monsieur" value="monsieur">
                                            <label class="form-check-label ps-3 m-0 text-dark" for="monsieur">Monsieur</label>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                        </div>
                        <div class="flex-wrap row p-0">
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Nom*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Nom de naissance*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Prénom*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Né le *</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né en France : Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né en France : Code Postal de la Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né à l’étranger : Pays de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né à l’étranger : Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Adresse</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Code Postal*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Ville*</label>
                                <input type="email" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Téléphone</label>
                                <input type="url" class="px-4 py-3" placeholder="www.">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Courriel*</label>
                                <input type="text" class="px-4 py-3" placeholder="N°">
                            </div>
                        </div>
                    </div>
                    <div class="container my-5">
                        <div class="row d-flex">
                            <h5 class="text-sec fw-700">Secrétaire</h5>
                            <div class="form-group col-sm-6 my-4">
                                <label class="">N° licence (si déjà licencié Sports pour Tous)</label>
                                <input type="text" class="px-4 py-3" placeholder="N°">
                            </div>
                            <div class="form-group my-4">
                                <label class="fw-bold" for="civilite">Civilité*</label>
                                <div class="row flex-wrap align-items-center col-3">
                                    <div class="col-lg-6 d-flex align-items-center my-3">
                                        <div class="form-check d-flex align-items-center p-0">
                                            <input class="form-check-input m-0" type="radio" name="civilite" id="madame" value="madame">
                                            <label class="form-check-label ps-3 m-0 text-dark" for="madame">Madame</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center my-3">
                                        <div class="form-check d-flex align-items-center p-0">
                                            <input class="form-check-input m-0" type="radio" name="civilite" id="monsieur" value="monsieur">
                                            <label class="form-check-label ps-3 m-0 text-dark" for="monsieur">Monsieur</label>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                        </div>
                        <div class="flex-wrap row p-0">
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Nom*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Nom de naissance*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Prénom*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Né le *</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né en France : Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né en France : Code Postal de la Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né à l’étranger : Pays de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né à l’étranger : Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Adresse</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Code Postal*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Ville*</label>
                                <input type="email" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Téléphone</label>
                                <input type="url" class="px-4 py-3" placeholder="www.">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Courriel*</label>
                                <input type="text" class="px-4 py-3" placeholder="N°">
                            </div>
                        </div>
                    </div>
                    <div class="container my-5">
                        <div class="row d-flex">
                            <h5 class="text-sec fw-700">Trésorier</h5>
                            <div class="form-group col-sm-6 my-4">
                                <label class="">N° licence (si déjà licencié Sports pour Tous)</label>
                                <input type="text" class="px-4 py-3" placeholder="N°">
                            </div>
                            <div class="form-group my-4">
                                <label class="fw-bold" for="civilite">Civilité*</label>
                                <div class="row flex-wrap align-items-center col-3">
                                    <div class="col-lg-6 d-flex align-items-center my-3">
                                        <div class="form-check d-flex align-items-center p-0">
                                            <input class="form-check-input m-0" type="radio" name="civilite" id="madame" value="madame">
                                            <label class="form-check-label ps-3 m-0 text-dark" for="madame">Madame</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center my-3">
                                        <div class="form-check d-flex align-items-center p-0">
                                            <input class="form-check-input m-0" type="radio" name="civilite" id="monsieur" value="monsieur">
                                            <label class="form-check-label ps-3 m-0 text-dark" for="monsieur">Monsieur</label>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                        </div>
                        <div class="flex-wrap row p-0">
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Nom*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Nom de naissance*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Prénom*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Né le *</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né en France : Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né en France : Code Postal de la Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né à l’étranger : Pays de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né à l’étranger : Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Adresse</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Code Postal*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Ville*</label>
                                <input type="email" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Téléphone</label>
                                <input type="url" class="px-4 py-3" placeholder="www.">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Courriel*</label>
                                <input type="text" class="px-4 py-3" placeholder="N°">
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                </form>
            </div>
            <div class="d-flex justify-content-center" id="Animateurprincipal">
                <form class="px-lg-5 pb-0 col-xl-8 p-sm-2">
                    <div class="container my-5">
                        <div class="row d-flex">
                            <div class="d-flex align-items-center">
                                <h1 class="mb-0 me-3">Animateur principal</h1>
                                <h3 class="mb-0">(considéré comme animateur référent du Club)</h3>
                            </div>
                            <p class="fw-500 my-4">Merci de renseigner les informations concernant l’animateur principal et d’ajouter les animateurs supplémentaires sur votre Extranet dès réception de vos codes d’accès.</p>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">N° licence (si déjà licencié Sports pour Tous)</label>
                                <input type="text" class="px-4 py-3" placeholder="N°">
                            </div>
                            <div class="form-group mb-4">
                                <label class="fw-bold" for="civilite">Civilité*</label>
                                <div class="row flex-wrap align-items-center col-3">
                                    <div class="col-lg-6 d-flex align-items-center my-3">
                                        <div class="form-check d-flex align-items-center p-0">
                                            <input class="form-check-input m-0" type="radio" name="civilite" id="madame" value="madame">
                                            <label class="form-check-label ps-3 m-0 text-dark" for="madame">Madame</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center my-3">
                                        <div class="form-check d-flex align-items-center p-0">
                                            <input class="form-check-input m-0" type="radio" name="civilite" id="monsieur" value="monsieur">
                                            <label class="form-check-label ps-3 m-0 text-dark" for="monsieur">Monsieur</label>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>
                        </div>
                        <div class="flex-wrap row p-0">
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Nom*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Nom de naissance*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Prénom*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Né le *</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né en France : Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né en France : Code Postal de la Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né à l’étranger : Pays de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Si né à l’étranger : Ville de naissance</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Adresse</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Code Postal*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Ville*</label>
                                <input type="email" class="px-4 py-3" placeholder="Votre texte">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Téléphone</label>
                                <input type="url" class="px-4 py-3" placeholder="www.">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Courriel*</label>
                                <input type="text" class="px-4 py-3" placeholder="N°">
                            </div>
                        </div>
                        <div class="flex-wrap row p-0">
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Diplôme*</label>
                                <select id="affiliation" class="form-select py-3 px-lg-4 bg-f2 my-2">
                                    <option value="Option 1">CQP ALS option AGEE</option>
                                    <option value="Option 2">La prochaine saison (du 31 août 2025 au 31 août 2026)</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Autre diplôme</label>
                                <input type="text" class="px-4 py-3" placeholder="Précisez">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Titulaire d’une carte professionnelle*</label>
                                <select id="affiliation" class="form-select py-3 px-lg-4 bg-f2 my-2">
                                    <option value="Option 1">Oui</option>
                                    <option value="Option 2">Non</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Date de fin de validité</label>
                                <input type="date" class="px-4 py-3">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Activité*</label>
                                <select id="affiliation" class="form-select py-3 px-lg-4 bg-f2 my-2">
                                    <option value="Option 1">Bénévole</option>
                                    <option value="Option 2">professionnelle</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="container my-5">
                        <h5 class="text-sec fw-700">Assurance</h5>
                        <p class="fw-500 my-4">L’affiliation à la Fédération Française Sports pour Tous donne au Club affilié la qualité d’assuré sur le contrat d’assurance Responsabilité Civile, souscrit par la Fédération Française Sports pour Tous pour le compte de ses Clubs affiliés. Cependant, le Club affilié peut, s’il le souhaite, souscrire pour son propre compte un contrat d’assurance Responsabilité Civile qui doit notamment répondre aux obligations des articles L321-1 et suivants du Code du Sport. Le Club doit dans ce cas joindre à la présente demande une attestation d’assurance émanant de son assureur et justifiant la souscription de ce contrat.</p>
                        <div class="btn-group">
                            <div class="p-0 col-12">
                                <div class="my-5">
                                    <label class="col-12 mb-3"> Joindre un exemplaire des Statuts du Club</label>
                                    <button type="button" class="btn text-white col-md-6 col-12 py-3">
                                        <img src="../img/whitedownload.png" class="img-fluid">
                                        Télécharger un fichier (.jpg, .png, .pdf, .doc)
                                    </button>
                                </div>
                                <div class="my-5">
                                    <label class="col-12 mb-3">Joindre la déclaration en Préfecture ou l’insertion au Journal Officiel ou tout document attestant de la création de la Structure</label>
                                    <button type="button" class="btn text-white col-md-6 col-12 py-3">
                                        <img src="../img/whitedownload.png" class="img-fluid">
                                        Télécharger un fichier (.jpg, .png, .pdf, .doc)
                                    </button>
                                </div>
                                <div class="my-5">
                                    <label class="col-12 mb-3">Joindre la photocopie du plus haut diplôme de l’animateur principal </label>
                                    <button type="button" class="btn text-white col-md-6 col-12 py-3">
                                        <img src="../img/whitedownload.png" class="img-fluid">
                                        Télécharger un fichier (.jpg, .png, .pdf, .doc)
                                    </button>
                                </div>
                                <div class="my-5">
                                    <label class="col-12 mb-3">Joindre la demande de licence du Président ou du Dirigeant de la Structure* </label>
                                    <button type="button" class="btn text-white col-md-6 col-12 py-3">
                                        <img src="../img/whitedownload.png" class="img-fluid">
                                        Télécharger un fichier (.jpg, .png, .pdf, .doc)
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-4">
                            <div class="form-check d-flex p-0">
                                <input class="form-check-input m-0" type="checkbox">
                                <label class="form-check-label ps-3 m-0">En tant que Président de l’Association ou Dirigeant de la Structure, je certifie que cette dernière choisit d’adhérer à la Fédération Française Sports pour Tous. Dans ce cadre, elle s’engage à en respecter les statuts et règlements*</label>
                            </div>
                        </div>
                        <div class="flex-wrap row p-0 my-5">
                            <div class="form-group col-sm-6 mb-4">
                                <label class="">Fait à*</label>
                                <input type="text" class="px-4 py-3" placeholder="Votre ville">
                            </div>
                            <div class="form-group col-sm-6 mb-4">
                                <label class="col-12">Le</label>
                                <input type="date" class="px-4 py-3">
                            </div>
                        </div>
                        <button type="button" class="btn text-white col-sm-6 col-12 py-3 fw-700">
                            ENVOYER
                        </button>
                        <p class="italic fw-500 text-red mt-4">*Champs obligatoires</p>
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
    <img src="./img/Ellipse 19.png" id="ellipse">

<?php include 'footer.php'; ?>