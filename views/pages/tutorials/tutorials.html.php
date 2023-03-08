<!-- Meta Tags  -->
<title>Tutorials</title>
<meta name="description" content="...">
<meta name="keywords" content="...">
<?php 
    include("tutorials.css.php");
    include("tutorials.js.php");
    echo(START_TAGS);
    require_once(ROOT_VIEWS_INC."menu.inc.php");
?>
<!-- hero section  -->
<section class="hero-section hero-section-sm">
    <div class="container">
        <div class="text-center">
            <div class="col">
                <h2>Lorem ipsum <span>dolor sit amet</span>, consectetur adipiscing elit.</h2>
                <p>
                    Lorem ipsum <span>dolor sit amet</span>, consectetur adipiscing elit. Morbi dui neque, consectetur ac malesuada et, <span>porttitor</span>  ac dui.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- tuto section  -->
<section class="tuto-section py-3">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-lg-3 mb-4 mb-lg-0">
                <div class="card">
                    <div class="position-relative card-content nav-group deactive d-flex flex-column">
                        <span class="card-title text-center my-2">Tous les guides</span>
                        <div class="container px-5"><div class="divider"></div></div>
                        <div class="btn-group-vertical" role="tablist" aria-label="Vertical radio toggle button group">
                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-display" autocomplete="off" checked
                            id="v-pills-display-tab" data-bs-toggle="pill" data-bs-target="#v-pills-display">
                            <label class="btn btn-outline-primary" for="vbtn-display">Guide Campagne Display</label>
                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-search" autocomplete="off"
                            id="v-pills-search-tab" data-bs-toggle="pill" data-bs-target="#v-pills-search">
                            <label class="btn btn-outline-primary" for="vbtn-search">Guide Campagne Search</label>
                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-led" autocomplete="off"
                            id="v-pills-led-tab" data-bs-toggle="pill" data-bs-target="#v-pills-led">
                            <label class="btn btn-outline-primary" for="vbtn-led">Guide Panneaux LED</label>
                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-sms" autocomplete="off"
                            id="v-pills-sms-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sms">
                            <label class="btn btn-outline-primary" for="vbtn-sms">Guide Campagne SMS</label>
                        </div>
                        <div class="position-absolute loader">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-display" role="tabpanel" aria-labelledby="v-pills-display-tab" tabindex="0">
                        <div class="container">
                            <div class="row pt-3">
                                <div class="col col-9">
                                    <h3>Lancer une campagne display</h3>
                                    <p>
                                        Faites vous aisément remarquer sur <span>tout le Web</span>. Votre annonce se retrouve sur tous les sites et applications mobiles de votre choix. Prenez les commandes et découvrez notre outil automatisé à Google pour faire décoller votre Entreprise
                                    </p>
                                </div>
                                <div class="col col-3">
                                    <div class="d-flex justify-content-end">
                                        <img src="<?php echo(WEB_ROOT.'assets/images/sliders/website.webp')?>" alt="display" class="tab-image">
                                    </div>
                                </div>
                            </div>
                            <div class="video-container">
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/SW73WkaE3fI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="d-flex flex-column flex-lg-row my-4">
                                <a href="#" class="green-btn">
                                    <span>Taille des annonces</span>
                                    <span class="material-symbols-outlined">download</span>
                                </a>
                                <a href="#" class="yellow-btn mt-3 mt-lg-0 mx-0 mx-lg-4">
                                    <span>Taille des annonces</span>
                                    <span class="material-symbols-outlined">download</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-search" role="tabpanel" aria-labelledby="v-pills-search-tab" tabindex="0">
                        <div class="container">
                            <div class="row pt-3">
                                <div class="col col-9">
                                    <h3>Lancer une campagne search</h3>
                                    <p>
                                        Google Ads atteint les internautes au moment où ils effectuent une recherche sur vos produits et services. Votre site Web enregistre donc des visites de clients plus qualifiés, et vous ne payez que lorsque les utilisateurs cliquent sur votre annonce.
                                    </p>
                                </div>
                                <div class="col col-3">
                                    <div class="d-flex justify-content-end">
                                        <img src="<?php echo(WEB_ROOT.'assets/images/sliders/search.webp')?>" alt="display" class="tab-image">
                                    </div>
                                </div>
                            </div>
                            <div class="video-container">
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/lYumw84KO88" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="d-flex mt-3">
                                <a href="#" class="yellow-btn">
                                    <span>Télécharger le guide</span>
                                    <span class="material-symbols-outlined">download</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-led" role="tabpanel" aria-labelledby="v-pills-led-tab" tabindex="0">
                        <div class="container">
                            <div class="row pt-3">
                                <div class="col col-9">
                                    <h3>Lancer une campagne panneaux LED</h3>
                                    <p>
                                        Google Ads atteint les internautes au moment où ils effectuent une recherche sur vos produits et services. Votre site Web enregistre donc des visites de clients plus qualifiés, et vous ne payez que lorsque les utilisateurs cliquent sur votre annonce.
                                    </p>
                                </div>
                                <div class="col col-3">
                                    <div class="d-flex justify-content-end">
                                        <img src="<?php echo(WEB_ROOT.'assets/images/sliders/ledoutdoor.webp')?>" alt="display" class="tab-image">
                                    </div>
                                </div>
                            </div>
                            <div class="video-container">
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/5aZqJvjHYAg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="d-flex mt-3">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#apercuModal" class="green-btn"
                                style="border:none;">
                                    <span>Apercu des emplacements</span>
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Apercu Panneaux -->
                    <div class="modal fade" id="apercuModal" tabindex="-1" aria-labelledby="apercuModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Apercu des Panneaux</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bientot disponible 
                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                    <div class="tab-pane fade" id="v-pills-sms" role="tabpanel" aria-labelledby="v-pills-sms-tab" tabindex="0">
                        <div class="container">
                            <div class="row pt-3">
                                <div class="col col-9">
                                    <h3>Lancer une campagne sms</h3>
                                    <p>
                                        Envoyez des alertes, des rappels, des messages uniques vers vos clients, mais aussi pour informer et communiquer. Dans 17 pays et au prix local.
                                    </p>
                                </div>
                                <div class="col col-3">
                                    <div class="d-flex justify-content-end">
                                        <img src="<?php echo(WEB_ROOT.'assets/images/sliders/sms.webp')?>" alt="display" class="tab-image">
                                    </div>
                                </div>
                            </div>
                            <div class="video-container">
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/ObzpQRX0KVo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="d-flex mt-3">
                                <a href="https://adafri.com" class="yellow-btn">
                                    <span>Créer un compte gratuitement</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- join section  --> 
<section class="join-section py-5">
    <div class="container">
        <div class="row join-cards">
            <div class="col col-12 col-md-6">
                <div class="card">
                    <img src="<?php echo(WEB_ROOT.'assets/images/A.svg')?>" alt="logo adafri">        
                    <h6>Commencez l'aventure ADAFRI</h6>
                    <p class="my-2">Profitez des services de notre outil marketing et faites grandir<br> votre business.</p>
                    <div class="text-start">
                        <a href="https://app.adafri.com/" class="yellow-btn">Lancez vous</a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-6 mt-5 mt-sm-0">
                <div class="card card-right">
                    <img src="<?php echo(WEB_ROOT.'assets/images/white-headset.png')?>" alt="white headset">        
                    <h6>Commencez l'aventure ADAFRI</h6>
                    <p class="my-2">Profitez des services de notre outil marketing et faites grandir<br> votre business.</p>
                    <div class="text-start">
                        <a target="_blank"
                        href="https://meetings-eu1.hubspot.com/dieuveille-goma/notre-1er-rendez-vous-?__hstc=97983424.89c537ad01fe42754e5b0e07974778c5.1669894721085.1675682490897.1675688328305.26&__hssc=97983424.1.1675688328305&__hsfp=3058040093" class="green-btn">Prendre rendez-vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>