<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP</title>  
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
                <div class="page-header-content d-flex justify-content-sm-between justify-content-around align-items-center text-center p-sm-5 p-3 container-fluid flex-wrap">
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
                            <a href="./#" class="d-flex flex-column align-items-center justify-content-around">
                                <img src="./img/france.png" class="mx-auto mb-2">
                                <span class="small col-lg-8 text-white fw-bold">Trouver un club</span>
                            </a>
                            <a href="./#" class="d-flex flex-column align-items-center justify-content-around">
                                <img src="./img/Group 41.png" class="mx-auto mb-2">
                                <span class="small text-white fw-bold">Extranet</span>
                            </a>
                            <a href="./#" class="d-flex flex-column align-items-center justify-content-around">
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
                        <div class="modal-dialog modal-fullscreen py-3 px-md-3">
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
                                                    <a href="./#"><h3>La fédération</h3></a>
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