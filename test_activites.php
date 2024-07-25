<?php include 'header.php'; ?>

<!-- Content area -->
<div class="content p-0" id="testactivite">
    <div id="hautpage">
        <div id="bandeau" class="position-relative d-flex justify-content-center align-items-center text-center">
            <img src="./img/AdobeStock_159472423 1.jpg"class="img-fluid">
            <div class="overlay-text position-absolute w-75 h-100 d-flex justify-content-center align-items-center">
                <p class="display-1 fw-bold text-white col-lg-8">Quelle activité est faite pour vous ?</p>
            </div>
        </div>
        <div class="d-flex justify-content-center container-fluid my-5">
            <div class="col-md-9">
                <span class="breadcrumb-item active">Accueil  >  La fédération  > Quelle activité est faite pour vous ?</span>
            </div>
        </div>
        <div class="flex-column align-items-center text-center container-fluid">
            <p class="display-4">Quelle activité est faite pour vous ?</p>
            <h6>Vous souhaitez découvrir une nouvelle activité physique ou vous remettre au sport mais vous ne savez pas lequel choisir ? </h6>
            <h6>Répondez à notre quizz et découvrez en quelques minutes les activités qui vous ressemblent</h6>
        </div>
    </div> 
    <div class="d-flex justify-content-center col-md-12 mt-md-5 my-0 container-fluid">
        <form action="" class="col-md-5 mb-5 d-flex flex-column justify-content-center align-items-center">
            <div class="card p-5 my-3 col-md-12 container-fluid">
                <a href="#collapseQuestion1" class="text-decoration-none" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseQuestion1">
                    <span class="my-2 text-secondary">Question 1/4</span>
                    <h1 class="fw-bold mb-3" style="color: #0099DC;">À quelle fréquence pratiquez-vous une activité sportive ?</h1>
                </a>
                <div class="collapse" id="collapseQuestion1">
                    <div class="form-check d-flex align-items-center mb-2">
                        <input class="form-check-input" type="radio" name="sportFrequency" id="never" value="never">
                        <label class="form-check-label ms-3" for="never">Jamais</label>
                    </div>
                    <div class="form-check d-flex align-items-center mb-2">
                        <input class="form-check-input" type="radio" name="sportFrequency" id="onceMonth" value="onceMonth">
                        <label class="form-check-label ms-3" for="onceMonth">1 fois par mois</label>
                    </div>
                    <div class="form-check d-flex align-items-center mb-2">
                        <input class="form-check-input" type="radio" name="sportFrequency" id="fewMonth" value="fewMonth">
                        <label class="form-check-label ms-3" for="fewMonth">1 à 3 fois par mois</label>
                    </div>
                    <div class="form-check d-flex align-items-center mb-2">
                        <input class="form-check-input" type="radio" name="sportFrequency" id="fewWeek" value="fewWeek">
                        <label class="form-check-label ms-3" for="fewWeek">1 à 3 fois par semaine</label>
                    </div>
                    <div class="form-check d-flex align-items-center mb-2">
                        <input class="form-check-input" type="radio" name="sportFrequency" id="everyday" value="everyday">
                        <label class="form-check-label ms-3" for="everyday">Tous les jours</label>
                    </div>
                </div>
            </div>                                                   
            <div class="card p-5 my-3 col-md-12 container-fluid">
                <a href="#collapseExample" class="text-decoration-none" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span class="my-2 text-secondary">Question 2/4</span>
                    <h1 class="fw-bold mb-3" style="color: #0099DC;">Vous êtes plutôt ?</h1>
                </a>
                <div class="collapse" id="collapseExample">
                    <div class="input-group flex-column">
                        <div class="d-flex align-items-center">
                            <input type="checkbox" class="form-check-input" id="indoor" name="activite" value="indoor">
                            <label for="indoor" class="ms-3">Indoor</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="checkbox" class="form-check-input" id="outdoor" name="activite" value="outdoor">
                            <label for="outdoor" class="ms-3">Outdoor</label>
                        </div>
                    </div>
                </div>
            </div>                            
            <div class="card p-5 my-3 col-md-12 container-fluid">
                <a href="#collapseQuestion3" class="text-decoration-none" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseQuestion3">
                    <span class="my-2 text-secondary">Question 3/4</span>
                    <h1 class="fw-bold mb-3" style="color: #0099DC;">Vous désirez ?</h1>
                </a>
                <div class="collapse" id="collapseQuestion3">
                    <div class="input-group flex-column">
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="indoor" name="activite" value="indoor" class="form-check-input">
                            <label for="indoor" class="ms-3">Améliorer votre endurance</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="outdoor1" name="activite" value="outdoor" class="form-check-input">
                            <label for="outdoor1" class="ms-3">Raffermir vos muscles</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="outdoor2" name="activite" value="outdoor" class="form-check-input">
                            <label for="outdoor2" class="ms-3">Affiner votre silhouette</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="outdoor3" name="activite" value="outdoor" class="form-check-input">
                            <label for="outdoor3" class="ms-3">Améliorer votre coordination</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="outdoor4" name="activite" value="outdoor" class="form-check-input">
                            <label for="outdoor4" class="ms-3">Développer votre expression corporelle</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="outdoor5" name="activite" value="outdoor" class="form-check-input">
                            <label for="outdoor5" class="ms-3">Améliorer votre attention et votre concentration</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-5 my-3 col-md-12 container-fluid">
                <a href="#collapseQuestion4" class="text-decoration-none" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseQuestion4">
                    <span class="my-2 text-secondary">Question 4/4</span>
                    <h1 class="fw-bold mb-3" style="color: #0099DC;">Vous souhaitez pratiquer ?</h1>
                </a>
                <div class="collapse" id="collapseQuestion4">
                    <div class="input-group flex-column">
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="indoor2" name="activite" value="indoor" class="form-check-input">
                            <label for="indoor2" class="ms-3">Seul</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="checkbox" id="outdoor6" name="activite" value="outdoor" class="form-check-input">
                            <label for="outdoor6" class="ms-3">En groupe</label>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn col-lg-7 py-3 text-white shadow my-4" style="background-color: #0099DC">
                <span class="fw-bold text-center">Voir le Résultat !</span>
            </a>
        </form>
    </div>
    <div id="more" class="d-flex justify-content-center pt-5">
        <img src="./img/graphisme 1(1).png" id="graphisme2">
        <div class="row d-flex justify-content-around align-items-center col-12 container-fluid pt-xl-5">
            <p class="display-4 fw-bold text-center col-12">Pour aller plus loin</p>
            <div class="row col-12 d-flex justify-content-center py-4">
                <div class="col-xl-3 col-sm-6 my-4 d-flex justify-content-center">
                    <a href="./activites.php" class="card shadow-none text-center position-relative">
                        <div class="card-body p-0 text-white d-flex justify-content-center flex-column align-items-center">
                            <img src="./img/nos_activites.jpg"class="img-fluid">
                            <div class="overlay-text position-absolute w-100 h-100 d-flex justify-content-center align-items-center">
                                <h1 class="text-white col-lg-6">Nos activités</h1>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-sm-6 my-4 d-flex justify-content-center">
                    <a href="./trouverunclub.php" class="card shadow-none text-center position-relative">
                        <div class="card-body p-0 text-white d-flex justify-content-center flex-column align-items-center">
                            <img src="./img/Tuile trouver un club 1.jpg"class="img-fluid">
                            <div class="overlay-text position-absolute w-100 h-100 d-flex justify-content-center align-items-center">
                                <h1 class="text-white col-lg-6">Affilier son club</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>      
</div>  
<!-- /content area-->

<!-- footer -->             
<div id="footer" class="d-flex justify-content-center col-md-12 my-md-0 bg-f2">
    <div class="row d-flex justify-content-around align-items-center col-md-12 container-fluid p-0">
        <img src="./img/Ellipse 19.png" id="ellipse">

<?php include 'footer.php'; ?>