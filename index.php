<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>index</title>  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>

	<!-- Page content -->
	<div class="page-content">
		<!-- Main content -->
		<div class="content-wrapper">
			<!-- Inner content -->
			<div class="content-inner">

                <!-- Page header -->
                <div id="header" class="page-header col-md-12">
                    <div class="page-header-content d-flex justify-content-sm-between justify-content-around align-items-center text-center p-5 container-fluid flex-wrap">
                        <div class="d-flex">
                            <div class="navbar-brand flex-1 flex-md-0">
                                <a href="./projet_federal.php" class="d-inline-flex align-items-center">
                                    <img src="./img/logo.png" id="logo">
                                </a>
                            </div>
                        </div>
                        <div class="d-lg-inline-none collapse d-lg-block ms-lg-auto mx-5">
                            <div class="btn-group d-flex flex-wrap align-items-center">
                                <div class="btn-group dropstart d-flex align-items-center">
                                    <button type="button" class="btn bg-transparent border-0 text-white mx-2" data-bs-toggle="dropdown">
                                        <img src="./img/loupe.png">
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-center bg-transparent border-0" data-popper-placement="left-start">
                                        <div class="form-control-feedback form-control-feedback-start d-flex align-items-center">
                                            <input type="text" class="form-control bg-white" placeholder="Search">
                                            <div class="form-control-feedback-icon">
                                                <i class="ph-magnifying-glass"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="./#" class="d-flex flex-column mx-2 align-items-center justify-content-around">
                                    <img src="./img/panier.png" class="mx-auto mb-2">
                                    <span class="small text-white fw-bold">Boutique</span>
                                </a>
                                <a href="./#" class="d-flex flex-column mx-2 align-items-center justify-content-around">
                                    <img src="./img/france.png" class="mx-auto mb-2">
                                    <span class="small col-lg-8 text-white fw-bold">Trouver un club</span>
                                </a>
                                <a href="./#" class="d-flex flex-column mx-2 align-items-center justify-content-around">
                                    <img src="./img/Group 41.png" class="mx-auto mb-2">
                                    <span class="small text-white fw-bold">Extranet</span>
                                </a>
                                <a href="./#" class="d-flex flex-column mx-2 align-items-center justify-content-around">
                                    <img src="./img/Group 42.png" class="mx-auto mb-2">
                                    <span class="small col-lg-8 text-white fw-bold">Espace licencié</span>
                                </a>
                            </div>
                        </div>
                        <button  type="button" class="px-3 py-1 bg-white border-0 d-flex align-items-center justify-content-center text-body radius-15" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div class="d-flex align-items-center">
                                <p class="fw-semibold m-2" style="color: #0E3083;">Menu</p>
                                <img src="./img/burger icon(1).png" class="ms-3">
                            </div>
                        </button>
                        
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-bs-backdrop="true">
                            <div class="modal-dialog modal-fullscreen py-5 px-md-3">
                                <div class="modal-content bg-transparent container-fluid">
                                    <div class="bg-white radius-20 px-xxl-5 pb-5 container-fluid">
                                        <div class="modal-header d-flex justify-content-end border-0 p-3">
                                            <a class="btn bg-transparent border-0 my-3" data-bs-dismiss="modal">
                                                <span class="mx-2">Fermer le menu</span>
                                                <img src="./img/redcross.png">
                                            </a>
                                        </div>
                                        <div class="modal-body d-flex flex-wrap p-0 justify-content-around align-items-center container-fluid">
                                            <div class="d-sm-flex container-fluid col-xl-5 col-md-12 p-0 m-0 justify-content-around align-items-center">
                                                <div class="text-sm-start flex-column d-flex p-0 justify-content-between align-items-center">
                                                    <div class="">
                                                        <a href="./"><h3>La fédération</h3></a>
                                                        <ul class="niv1menu list-unstyled my-3 ms-xl-4">
                                                            <li class="accordion-item">
                                                                <a class="accordion-header" href="./#" data-bs-toggle="collapse" data-bs-target="#collapseQuisommesnous" aria-expanded="false" aria-controls="collapseQuisommesnous">
                                                                    <i class="me-2 fas fa-chevron-down toggle-icon"></i> Qui sommes nous ?
                                                                </a>
                                                                <ul id="collapseQuisommesnous" class="niv2menu accordion-collapse collapse list-unstyled my-3 px-3">
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Qui sommes nous ?</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Sport Socio</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Nos publics</h6></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="accordion-item">
                                                                <a class="accordion-header" href="./#" data-bs-toggle="collapse" data-bs-target="#collapseMissions" aria-expanded="false" aria-controls="collapseMissions">
                                                                    <i class="me-2 fas fa-chevron-down toggle-icon"></i> Nos missions
                                                                </a>
                                                                <ul id="collapseMissions" class="niv2menu accordion-collapse collapse list-unstyled my-3 px-3">
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Sport Santé</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Sport Socio-éducatif</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Nos publics</h6></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="accordion-item">
                                                                <a class="accordion-header" href="./#" data-bs-toggle="collapse" data-bs-target="#collapseOrganisation" aria-expanded="false" aria-controls="collapseOrganisation">
                                                                    <i class="me-2 fas fa-chevron-down toggle-icon"></i> Organisation
                                                                </a>
                                                                <ul id="collapseOrganisation" class="niv2menu accordion-collapse collapse list-unstyled my-3 px-3">
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Organisation</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Sport Socio-éducatif</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Nos publics</h6></a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">Projet fédéral</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="">
                                                        <a href="./demande_affiliation.php"><h3>Affilier son club</h3></a>
                                                        <ul class="niv1menu list-unstyled my-3 ms-xl-4">
                                                            <li>
                                                                <a href="./projet_federal.php">Pourquoi nous rejoindre ?</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">Comment nous rejoindre ?</a>
                                                            </li>
                                                            <li class="accordion-item">
                                                                <a class="accordion-header" href="./#" data-bs-toggle="collapse" data-bs-target="#collapseServices" aria-expanded="false" aria-controls="collapseServices">
                                                                    <i class="me-2 fas fa-chevron-down toggle-icon"></i>Nos services ?
                                                                </a>
                                                                <ul id="collapseServices" class="niv2menu accordion-collapse collapse list-unstyled my-3 px-3">
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Sport Santé</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Sport Socio-éducatif</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Nos publics</h6></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="verticaldivider" class="d-none d-xxl-block mx-5"></div>
                                                <div class="text-sm-start flex-column p-0 justify-content-between align-items-center">
                                                    <div class="">
                                                        <a href="./"><h3>Pratiquer</h3></a>
                                                        <ul class="niv1menu list-unstyled my-3 ms-xl-4 mx-4">
                                                            <li class="accordion-item">
                                                                <a class="accordion-header" href="./#" data-bs-toggle="collapse" data-bs-target="#collapseActivites" aria-expanded="false" aria-controls="collapseActivites">
                                                                    <i class="me-2 fas fa-chevron-down toggle-icon"></i>Nos activités
                                                                </a>
                                                                <ul id="collapseActivites" class="niv2menu accordion-collapse collapse list-unstyled my-3 px-3">
                                                                    <li><a class="dropdown-item my-2" href="./activites.php"><h6>Liste des activités</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Sport Socio</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Nos publics</h6></a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="./test_activite.php">Quelle activité est faite pour vous ?</a>
                                                            </li>
                                                            <li>
                                                                <a href="./trouveruncblub.php">Trouver un club</a>
                                                            </li>
                                                            <li>
                                                                <a href="./test_forme.php">Testez votre forme</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">L’offre d’adhésion</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">La licence Sport Pour Tous</a>
                                                            </li>
                                                            <li class="accordion-item">
                                                                <a class="accordion-header" href="./#" data-bs-toggle="collapse" data-bs-target="#collapsePASS" aria-expanded="false" aria-controls="collapsePASS">
                                                                    <i class="me-2 fas fa-chevron-down toggle-icon"></i>Les PASS
                                                                </a>
                                                                <ul id="collapsePASS" class="niv2menu accordion-collapse collapse list-unstyled my-3 px-3">
                                                                    <li><a class="dropdown-item my-2" href="./passhebdo.php"><h6>Acheter un PASS</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Sport Socio-éducatif</h6></a></li>
                                                                    <li><a class="dropdown-item my-2" href="./#"><h6>Nos publics</h6></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="">
                                                        <a href="./"><h3>Evènements</h3></a>
                                                        <ul class="niv1menu list-unstyled my-3 ms-xl-4">
                                                            <li>
                                                                <a href="./projet_federal.php">Road Tour Sports pour Tous</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">Semaine de la Forme</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">Paris 2024</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">Téléthon</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="verticaldivider" class="d-none d-xxl-block mx-5"></div>
                                            <div class="d-sm-flex container-fluid col-xl-5 col-md-12 p-0 m-0 justify-content-around align-items-center">
                                                <div class="text-sm-start flex-column p-0 justify-content-between align-items-center">
                                                    <div class="">
                                                        <a href="./"><h3>Se former</h3></a>
                                                        <ul class="niv1menu list-unstyled my-3 ms-xl-4"> 
                                                            <li>
                                                                <a href="./trouver_une_formation.php">Nos formations</a>
                                                            </li>
                                                            <li>
                                                                <a href="./trouveruneformation.php">Trouver une formation</a>
                                                            </li>
                                                            <li>
                                                                <a href="./CQP.php">CQP Animateur de Loisir Sportif</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">BP JPES Activités Physiques pour Tous</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">Activités Physiques Sur Prescriptions Médicale</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">Encadrant bénévole</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">Formations Professionnelles Continues</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">Métiers du développement</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">Animateur de Loisir Sportif</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">Métiers de la formation</a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <a href="./"><h3>Sports pour Tous le Mag Contact</h3></a>
                                                    </div>
                                                </div>
                                                <div id="verticaldivider" class="d-none d-xxl-block mx-3"></div>
                                                <div class="text-sm-end flex-column d-flex p-0 justify-content-between align-items-sm-end">
                                                    <div class="">
                                                        <ul class="niv3menu list-unstyled my-3"> 
                                                            <li>
                                                                <a href="./projet_federal.php">Vidéothèque</a>
                                                            </li>
                                                            <li>
                                                                <a href="./trouveruneformation.php">Espace presse</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">FAQ</a>
                                                            </li>
                                                            <li>
                                                                <a href="./projet_federal.php">FAQ Sites Structures</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="">
                                                        <ul class="niv2menu list-unstyled my-3">
                                                            <li><a class="dropdown-item my-2" href="./#"><h6>Mentions légales</h6></a></li>
                                                            <li><a class="dropdown-item my-2" href="./#"><h6>Plan du site</h6></a></li>
                                                            <li><a class="dropdown-item my-2" href="./#"><h6>Signalements</h6></a></li>
                                                            <li><a class="dropdown-item my-2" href="./#"><h6>Nos partenaires</h6></a></li>
                                                            <li><a class="dropdown-item my-2" href="./#"><h6>Actualités</h6></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!--Content area-->
                <div class="content p-0" id="index">
                    <div id="hautpage">
                        <div id="bandeau" class="position-relative d-flex justify-content-center align-items-center text-center">
                            <img src="./img/AdobeStock_267519882 1.jpg" id="background" class="img-fluid">
                            <div class="overlay-text position-absolute w-75 h-100 d-flex justify-content-center align-items-center">
                                <p class="display-1 fw-bold text-white col-lg-8">Ouvrir le sport à tous…Sans exception</p>
                            </div>
                        </div>
                    </div>
                    <div id="imgoverlay" class="position-relative d-flex flex-column justify-content-around align-items-center text-center col-12">
                        <div class="position-relative d-flex justify-content-center align-items-center text-center w-100 py-5">
                            <img src="./img/AdobeStock_615798489 1.jpg" class="img-fluid w-100 h-100 position-absolute" id="bg">
                            <div class="overlay position-absolute w-100 h-100"></div>
                            <div id="overlaytext" class="text-white container-fluid d-flex flex-column justify-content-around align-items-center position-relative py-sm-5">
                                <p class="display-4 text-white mt-lg-5">Encourageons la pratique sportive</p>
                                <h6>Depuis près de 60 ans, nous rendons la pratique physique et sportive accessible et partageons une autre vision du sport.</h6>
                                <div class="row col-xl-10 mt-3 d-flex justify-content-around py-4">
                                    <div class="col-xl-3 col-sm-6 mb-4">
                                        <div class="card p-3 shadow-none text-center h-100">
                                            <div class="card-body text-white d-flex flex-column align-items-center justify-content-around">
                                                <img src="./img/icon_licencies.png">
                                                <p class="display-4 text-white my-2">140 000</h1>
                                                <h5 class="fw-bold">LICENCIES</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-6 mb-4">
                                        <div class="card p-3 shadow-none text-center h-100">
                                            <div class="card-body text-white d-flex flex-column align-items-center justify-content-around">
                                                <img src="./img/icon_drapeau.png">
                                                <p class="display-4 text-white my-2">2 200</h1>
                                                <h5 class="fw-bold">CLUBS</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-6 mb-4">
                                        <div class="card p-3 shadow-none text-center h-100">
                                            <div class="card-body text-white d-flex flex-column align-items-center justify-content-around">
                                                <img src="./img/icon_groupe.png">
                                                <p class="display-4 text-white my-2">5 200</h1>
                                                <h5 class="fw-bold">Animateurs</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-6 mb-4">
                                        <div class="card p-3 shadow-none text-center h-100">
                                            <div class="card-body text-white d-flex flex-column align-items-center justify-content-around">
                                                <img src="./img/icon_chaussures.png">
                                                <p class="display-4 text-white my-2">150</h1>
                                                <h5 class="fw-bold">Activités</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around flex-wrap col-6 p-3">
                                        <a href="#" class="btn col-lg-5 col-12 bg-white py-3 text-white shadow d-flex align-items-center justify-content-around m-3" style="background-color: #0099DC" data-bs-toggle="tab" data-bs-target="#fill-tabpanel-1">
                                            <h6 class="text-center m-0 fw-bold" style="color: #0E3083;">Découvrir la Fédération</h6>
                                            <img src="./img/arrowright.png">
                                        </a>
                                        <a href="#" class="btn col-lg-5 col-12 py-3 text-white shadow d-flex align-items-center justify-content-around m-3" style="background-color: #0099DC" data-bs-toggle="tab" data-bs-target="#fill-tabpanel-1">
                                            <h6 class="text-center m-0 fw-bold">Nos missions</h6>
                                            <img src="./img/arrowright.png">
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div id="actualites" class="d-flex justify-content-xxl-end justify-content-center col-12 my-xl-3 my-md-0 py-5">
                        <div class="col-sm-10 col-12">
                            <div class="">
                                <h1 class="display-2 fw-bold mb-3 p-4">Notre actualité</h1>
                                <div class="d-flex flex-nowrap overflow-auto">
                                    <div class="col-xl-6 col-md-8 col-12 p-4 flex-shrink-0">
                                        <div class="card p-0 shadow d-flex flex-column h-100">
                                            <img src="./img/AdobeStock_615798489 1.jpg" class="img-fluid h-50">
                                            <div class="card-body px-5 pt-4 pb-5">
                                                <p class="fw-bold m-0">02.08.2023</p>
                                                <h2 class="fw-bold my-3">Animateurs et éducateurs sportifs Déclarez votre activité !</h2>
                                                <h6 class="m-0">Vous êtes animateurs ou éducateurs sportifs ?</h6>
                                                <h6 class="mb-4">Déclarez votre activité en ligne et obtenez votre carte professionnelle !</h6>
                                                <a href="#" class="fw-bold">Lire la suite <img src="./img/arrowright.png" class="ms-2"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-5 col-9 p-4 flex-shrink-0">
                                        <div class="card p-0 shadow d-flex flex-column h-100 h-100">
                                            <img src="./img/AdobeStock_121166552 1.jpg" class="img-fluid h-50">
                                            <div class="card-body px-lg-5 pt-4 pb-5">
                                                <p class="fw-bold m-0">02.08.2023</p>
                                                <h2 class="fw-bold my-3">J-10 avant la semaine de la forme 2023 !</h2>
                                                <a href="#" class="fw-bold">Lire la suite <img src="./img/arrowright.png" class="ms-2"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-5 col-9 p-4 flex-shrink-0">
                                        <div class="card p-0 shadow d-flex flex-column h-100">
                                            <img src="./img/AdobeStock_121166552 1.jpg" class="img-fluid h-50">
                                            <div class="card-body px-lg-5 pt-4 pb-5">
                                                <p class="fw-bold m-0">02.08.2023</p>
                                                <h2 class="fw-bold my-3">J-10 avant la semaine de la forme 2023 !</h2>
                                                <a href="#" class="fw-bold">Lire la suite <img src="./img/arrowright.png" class="ms-2"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-5 col-9 p-4 flex-shrink-0">
                                        <div class="card p-0 shadow d-flex flex-column h-100">
                                            <img src="./img/AdobeStock_121166552 1.jpg" class="img-fluid h-50">
                                            <div class="card-body px-lg-5 pt-4 pb-5">
                                                <p class="fw-bold m-0">02.08.2023</p>
                                                <h2 class="fw-bold my-3">J-10 avant la semaine de la forme 2023 !</h2>
                                                <a href="#" class="fw-bold">Lire la suite <img src="./img/arrowright.png" class="ms-2"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-md-start justify-content-center mt-4">
                                    <a href="#" class="btn col-xl-3 col-sm-6 col-10 px-5 py-3 text-white d-flex align-items-center justify-content-around" style="background-color: #0099DC;">
                                        <span class="fw-bold">Voir toutes les actualités</span>
                                        <img src="./img/arrowright.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="activites" class="position-relative d-flex flex-column justify-content-around align-items-center text-center col-12">
                        <div class="position-relative d-flex justify-content-center align-items-center text-center w-100 py-5">
                            <img src="./img/AdobeStock_159472423 1.jpg" class="img-fluid w-100 h-100 position-absolute" id="bg">
                            <div class="overlay position-absolute w-100 h-100"></div>
                            <div id="overlaytext" class="text-white container-fluid d-flex justify-content-end position-relative py-5 px-0">
                                <div class="col-12 col-lg-11 container-fluid">
                                    <div class="d-flex flex-wrap justify-content-around container-fluid">
                                        <div class="col-12 col-lg-7 text-start container-fluid">
                                            <p class="display-4 text-white mt-lg-5">Trouvez l'activité qui vous ressemble</p>
                                            <h6>Activités gymniques, jeux sportifs ou d’opposition, activités de pleine nature, arts énergétiques, activités aquatiques. Découvrez plus de 150 activités : Gym douce (Yoga, Pilates, Renforcement musculaire…), Marche Nordique, Basket fauteuil, Danse, Qi gong, Randonnée, Gym santé…</h6>
                                        </div>
                                        <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center mt-4 mt-lg-0">
                                            <button class="btn bg-white shadow p-4 position-relative shadow mt-3">
                                                <div class="circle-container d-flex justify-content-center align-items-center">
                                                    <img src="./img/Group 44.png" class="">
                                                </div>
                                                <div class="col text-center mt-3">
                                                    <h1 class="mb-1">FAITES LE TEST !</h1>
                                                    <h6 class="mb-0 text-prim">et découvrez l'activité qui est faite pour vous</h6>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex overflow-auto p-3 justify-content-start my-4 container-fluid">
                                        <a href="activites.html" class="card shadow col-xl-3 col-sm-5 col-12 d-flex justify-content-center align-items-center mx-4 mb-3" id="cross">
                                            <img src="./img/AdobeStock_159472423 1.jpg" class="card-img">
                                            <div class="card-content flex-column d-flex justify-content-center align-items-center">
                                                <h1 class="display-4 fw-bold text-white text-center">Yoga</h1>
                                                <button class="btn border-white px-5 py-2 text-white mt-3">en savoir +</button>
                                            </div>
                                        </a>
                                        <a href="activites.html" class="card shadow col-xl-3 col-sm-5 col-12 d-flex justify-content-center align-items-center mx-4 mb-3" id="bien-être">
                                            <img src="./img/AdobeStock_593379585 1.jpg" class="card-img">
                                            <div class="card-content flex-column d-flex justify-content-center align-items-center">
                                                <h1 class="display-4 fw-bold text-white text-center">Aïkido</h1>
                                                <button class="btn border-white px-5 py-2 text-white mt-3">en savoir +</button>
                                            </div>
                                        </a>
                                        <a href="activites.html" class="card shadow col-xl-3 col-sm-5 col-12 d-flex justify-content-center align-items-center mx-4 mb-3" id="bien-être-2">
                                            <img src="./img/AdobeStock_229939264 1.jpg" class="card-img">
                                            <div class="card-content flex-column d-flex justify-content-center align-items-center">
                                                <h1 class="display-4 fw-bold text-white text-center">Basketball</h1>
                                                <button class="btn border-white px-5 py-2 text-white mt-3">en savoir +</button>
                                            </div>
                                        </a>
                                        <a href="activites.html" class="card shadow col-xl-3 col-sm-5 col-12 d-flex justify-content-center align-items-center mx-4 mb-3" id="bien-être-2">
                                            <img src="./img/AdobeStock_229939264 1.jpg" class="card-img">
                                            <div class="card-content flex-column d-flex justify-content-center align-items-center">
                                                <h1 class="display-4 fw-bold text-white text-center">Basketball</h1>
                                                <button class="btn border-white px-5 py-2 text-white mt-3">en savoir +</button>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between col-12 col-xxl-5 flex-wrap">
                                        <a class="btn px-5 py-3 text-white mb-3 mb-lg-0" style="background-color: #0099DC;">
                                            <span class="fw-bold me-3">Trouver un club</span>
                                            <img src="./img/arrowright.png">
                                        </a>
                                        <a class="btn px-5 py-3 text-white" style="background-color: #0A66B0;">
                                            <span class="fw-bold me-3">Découvrir toutes nos activités</span>
                                            <img src="./img/arrowright.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container my-5 py-5" id="imgoverlay">
                        <div class="background-container d-flex justify-content-center">
                            <img src="./img/2014 2.jpg" class="img-fluid w-100 h-100 position-absolute">
                            <div class="background-filter"></div>
                            <div class="content col-lg-9 py-5 d-flex justify-content-lg-around justify-content-center align-items-center flex-wrap">
                                <div class="col-lg-5 d-flex flex-column align-items-sm-start align-items-center justify-content-around py-5">
                                    <svg width="108" height="108" viewBox="0 0 108 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M57.3354 108C56.0229 108 52.2427 106.316 46.1004 102.978L46.0682 103.127C45.8661 104.081 44.9059 104.683 44.0082 104.712L37.8677 104.435C37.3724 104.41 36.9039 104.214 36.5552 103.872L34.7957 102.169L25.4365 98.8163C25.1843 98.726 24.9483 98.5879 24.7516 98.4108L21.2576 95.2268C20.8463 94.8461 20.6085 94.313 20.6085 93.7534C20.6085 93.2009 20.8499 92.6644 21.2647 92.2872L24.0864 89.7354L26.2555 81.2299L27.0476 68.423C27.0762 67.8759 27.3337 67.3853 27.7396 67.0365L27.5519 66.847C27.1191 66.4149 26.9171 65.8093 26.9904 65.2072L27.6574 59.8769C26.6721 59.4714 25.272 58.8427 23.2424 57.8634C22.883 57.6863 22.5862 57.4065 22.3841 57.0577L20.1596 53.1972C19.7501 52.4924 19.8217 51.6123 20.3277 50.973L21.3649 49.682L20.7712 48.4637L18.9544 48.2352C18.409 48.1662 17.9137 47.8793 17.5847 47.4401C17.2628 46.9974 17.1305 46.4449 17.2288 45.9083L17.4148 44.9096L16.9714 44.4775L15.6302 44.8883C14.9007 45.0955 14.1139 44.9025 13.59 44.3695L11.3762 42.0904L6.81464 40.3921L6.55536 40.617C6.07971 41.0119 5.45207 41.1677 4.84409 41.0526C4.23612 40.9322 3.71934 40.5373 3.44754 39.9937L2.52486 38.1679L1.91689 37.943C1.07109 37.6384 0.540007 36.815 0.607957 35.926C0.666966 35.1574 1.16407 34.504 1.86503 34.2242C1.83999 34.141 1.82033 34.0542 1.80602 33.9657C1.0693 33.7585 0.482786 33.1422 0.359403 32.3365L0.0214404 30.0645C-0.125188 29.0745 0.493515 28.1236 1.47163 27.8544L7.79276 26.1119C8.38285 25.9561 9.00871 26.0605 9.49687 26.4059L10.6252 27.208L14.7362 25.5417C15.6302 25.1822 16.6817 25.5098 17.202 26.3297L18.7988 28.8408L20.199 28.0793C20.5173 27.9058 20.8624 27.8509 21.229 27.8332L25.5044 27.9677C25.6403 26.3067 25.8013 24.4473 25.8817 23.5813L23.7485 18.5114C23.4928 17.8916 23.5661 17.1832 23.9505 16.6272C24.3207 16.0835 24.9429 15.7559 25.6099 15.7559C25.6207 15.7559 25.635 15.7559 25.6511 15.7559L30.1804 15.8427C31.0191 15.8604 31.7594 16.3952 32.0383 17.1779L33.0469 20.0201L37.9088 21.605L39.3751 20.9233C39.3537 20.8719 39.3376 20.8188 39.3304 20.7603C39.1695 20.1512 39.3161 19.5013 39.722 19.0107L42.6278 15.5044C42.8549 15.2353 43.1517 15.0263 43.4843 14.9023L50.5672 12.2531L51.4684 10.4681L50.9892 4.46312C50.9123 3.52988 51.4988 2.66039 52.4072 2.38768L59.9335 0.0837863C60.8133 -0.178301 61.7986 0.188269 62.2707 0.990468L63.5134 3.12789C64.2931 2.93133 65.1836 3.22175 65.6717 3.92655L67.349 6.33669L69.8256 7.16014C70.6053 7.41692 71.1488 8.12172 71.1918 8.93809L71.2061 9.06205L73.4895 9.27986C74.5785 9.3808 75.3796 10.3211 75.3063 11.396L75.208 12.8074L76.1753 11.752C76.6474 11.2508 77.3484 11.0188 78.0225 11.1357L79.335 11.3748C80.3131 11.559 81.0141 12.4125 80.9837 13.3989L80.9211 15.446L83.5622 17.4099L86.8524 17.6525L92.6496 18.414C93.279 18.4972 93.8369 18.8779 94.1445 19.4269L95.4159 21.6989L99.5161 21.1907C99.8577 21.1464 100.215 21.1942 100.546 21.3323L106.277 23.7124C106.83 23.9408 107.248 24.4048 107.42 24.9679C107.599 25.531 107.507 26.1473 107.178 26.6378L104.482 30.7267L103.749 42.4658C103.727 42.8678 103.581 43.2467 103.33 43.5619L101.794 45.5223C101.281 46.1793 100.405 46.4449 99.6145 46.2076L99.4678 46.1598C99.4196 46.3634 99.3355 46.5512 99.2264 46.7265L93.2433 56.2519L95.6215 54.9964C96.149 54.7237 96.757 54.6883 97.3149 54.9025C97.8639 55.1203 98.2859 55.5666 98.4736 56.1209L100.255 61.4087C100.5 62.1241 100.31 62.921 99.7718 63.4523L98.9135 64.2969L101.54 66.6203C102.273 67.2702 102.427 68.3434 101.903 69.1668L99.5626 72.8431C99.3945 73.1123 99.1639 73.3372 98.8921 73.4966L99.9256 73.9322C100.398 74.1288 100.771 74.4989 100.973 74.9593L101.49 76.121C101.717 76.6186 101.721 77.1835 101.512 77.6953L100.442 80.2311L101.047 81.3096L102.923 81.7275L105.004 81.0812C105.557 80.9041 106.15 80.9731 106.642 81.2706C107.141 81.5611 107.481 82.0516 107.584 82.6129L107.965 84.63C108.09 85.294 107.874 85.9687 107.386 86.4362L100.589 92.8875L98.4486 96.6027C98.1589 97.1004 97.669 97.4528 97.0967 97.5643L91.4498 98.6853C91.1172 98.7543 90.7542 98.7225 90.4198 98.6198L83.1456 96.2167C82.8523 96.1193 82.5841 95.9599 82.357 95.7386L81.8617 95.241L81.4003 95.6323C80.6118 96.2929 79.4512 96.2557 78.7074 95.5491L77.9313 94.8124C77.4181 95.0196 76.8388 95.0267 76.3148 94.7982L74.4712 93.9712L67.5386 98.2018V104.614C67.5386 105.551 66.8787 106.36 65.9489 106.559C63.9122 106.994 58.9983 108 57.3354 108Z" fill="white"/>
                                    </svg>
                                    <p class="display-4 text-white mt-lg-5">Trouvez un club</p>
                                    <h6>Rejoignez la grande famille Sports pour Tous et retrouvez-nous dans l’un de nos 2200 Clubs ! Au programme : activité physique, bien-être et surtout partage et plaisir !</h6>
                                </div>
                                <div class="col-lg-6 col-10 d-flex flex-column justify-content-around py-5">
                                    <input type="text" class="my-2 py-3 border-0 w-100 text-center" placeholder="Saisissez une ville ou un département">
                                    <a href="" class="btn py-3 my-2 text-white" style="background-color: #0099DC;">
                                        <h5 class="m-0 fw-bold">Rechercher</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="formation" class="d-flex justify-content-center py-5">
                        <div class="d-flex flex-wrap justify-content-around col-xxl-9 py-5 container-fluid">
                            <div class="col-lg col-12 col-sm-4 d-flex flex-sm-column justify-content-around align-items-center mb-4 mb-lg-0 container-fluid">
                                <div class="p-1 h-sm-50 col-sm-12 col-6">
                                    <div class="card justify-content-center d-flex h-100">
                                        <img src="./img/AdobeStock_624733176 1.jpg" class="img-fluid">
                                        <div class="card-content flex-column d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <h4 class="fw-bold text-white text-center">Métiers de la formation</h4>
                                            <button class="btn border-white col-md-6 py-2 text-white mt-3">en savoir +</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-1 h-sm-50 col-sm-12 col-6">
                                    <div class="card justify-content-center d-flex h-100">
                                        <img src="./img/AdobeStock_602932904 1.jpg" class="img-fluid">
                                        <div class="card-content flex-column d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <h4 class="fw-bold text-white text-center">Métiers du développement</h4>
                                            <button class="btn border-white col-md-6 py-2 text-white mt-3">en savoir +</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-sm-8 mb-4 mb-lg-0 container-fluid px-sm-5">
                                <div class="card justify-content-center d-flex h-100 " style="background-color: black;">
                                    <img src="./img/AdobeStock_232978499 1.jpg" class="img-fluid">
                                    <div class="card-content flex-column d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                        <h1 class="display-4 fw-bold text-white text-center">Animateur de loisir sportif</h1>
                                        <button class="btn border-white col-sm-5 py-2 text-white mt-3">en savoir +</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-10 col-lg-4 container-fluid">
                                <img src="./img/icon_sports_pour_tous_rouge.png">
                                <div class="display-3 fw-bold col-10" style="color: #E3004F">Se former aux métiers du sport</div>
                                <h6 class="my-4">En tant qu’Organisme de Formation, la Fédération Française Sports pour Tous propose une offre de formations diplômantes, permettant de devenir animateur ou éducateur sportif et de parfaire ses compétences.</h6>
                                <a class="btn px-5 py-3 text-white col-11 my-2" style="background-color: #0A66B0;">
                                    <span class="fw-bold me-3">Découvrir toutes nos formations</span>
                                    <img src="./img/arrowright.png">
                                </a>
                                <a class="btn px-5 py-3 text-white mb-lg-0 col-11 my-2" style="background-color: #0099DC;">
                                    <span class="fw-bold me-3">Trouver une formation</span>
                                    <img src="./img/arrowright.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="affiliation" class="position-relative d-flex flex-column justify-content-around align-items-center col-12">
                        <div class="position-relative d-flex justify-content-center align-items-center w-100 py-5">
                            <img src="./img/AdobeStock_613780163 1.jpg" class="img-fluid w-100 h-100 position-absolute" id="bg">
                            <div class="overlay position-absolute w-100 h-100"></div>
                            <div id="overlaytext" class="text-white container-fluid d-flex justify-content-center position-relative py-5 px-0">
                                <div class="col-12 col-xxl-9 d-flex justify-content-between flex-wrap container-fluid p-sm-5">
                                    <div class="col-12 col-md-6 d-flex mb-4 mb-lg-0">
                                        <div class="w-100 d-flex">
                                            <img src="./img/AdobeStock_613780163 1.jpg" class="img-fluid w-100 h-100 object-fit-cover radius-020">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-5 d-flex flex-column align-items-start">
                                        <img src="./img/icon_sports_pour_tous.png" class="img-fluid mb-3">
                                        <p class="display-4 fw-bold m-0 col-xl-10 text-white">Vous êtes une association ?</p>
                                        <h6 class="my-4 col-xl-10">Vous êtes une association ? Rejoignez un réseau mobilisé et reconnu dans les domaines du sport-loisir, du sport-santé bien-être et de l’intégration sociale par le sport.</h6>
                                        <a href="./FAQaffiliation.php" class="btn py-3 my-2 text-white col-xl-7 fw-bold text-center" style="background-color: #0099DC;">Nous rejoindre</a>
                                        <a href="./FAQaffiliation.php" class="btn py-3 my-2 text-white col-xl-7 fw-bold bg-transparent text-center" style="border: 2px solid #FFF;">Les avantages de l'affiliation</a>
                                    </div>
                                </div>
                            </div>
                                                     
                        </div>
                    </div>
                    <div id="partenaires" class="pt-5">
                        <div class="d-flex flex-column align-items-center">
                            <div class="row justify-content-center col-11 flex-wrap">
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 p-2">
                                    <div class="card h-100 p-4 d-flex align-items-center justify-content-center border-0">
                                        <img src="./img/Ministere_charge_des_Sports_1.png" class="card-img-top img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 p-2">
                                    <div class="card h-100 p-4 d-flex align-items-center justify-content-center">
                                        <img src="./img/agence_nationale_du_sport.png" class="card-img-top img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 p-2">
                                    <div class="card h-100 p-4 d-flex align-items-center justify-content-center">
                                        <img src="./img/Audika.png" class="card-img-top img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 p-2">
                                    <div class="card h-100 p-4 d-flex align-items-center justify-content-center">
                                        <img src="./img/Goove.png" class="card-img-top img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 p-2">
                                    <div class="card h-100 p-4 d-flex align-items-center justify-content-center">
                                        <img src="./img/VVF.png" class="card-img-top img-fluid">
                                    </div>
                                </div>
                            </div>
                            <a class="btn col-md-3 col-5 py-3 my-3 text-white justify-content-center" style="background-color: #0099DC;">
                                <span class="fw-bold">Tous nos partenaires</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Content area-->

                <!-- footer -->             
                <div id="footer" class="d-flex justify-content-center col-md-12 my-md-0">
                    <div class="row d-flex justify-content-around align-items-center col-md-12 container-fluid p-0">
                        <img src="./img/Ellipse 19.png" alt="" id="ellipse">

<?php include 'footer.php'; ?>