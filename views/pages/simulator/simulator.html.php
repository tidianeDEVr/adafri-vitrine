<!-- Meta Tags  -->
<title>Simulateur de prix</title>
<meta name="description" content="Essayer notre simulateur de prix et faites votre pack d'annonces rien que pour vous.">
<meta name="keywords" content="price simulator, online ads africa, publicité en ligne en Afrique">
<?php 
    include("simulator.css.php");
    include("simulator.js.php");
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

<section class="simulator-section">
    <div class="container">
        <div class="row">
            <div class="col col-12 order-2 order-md-1 col-md-8 position-relative">
                <h3 class="mt-5 mb-2 my-lg-0">Nos solutions</h3>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3" role="tablist" id="nav-tab">
                    <div class="col">
                        <div class="card active-type type-card type-web" onclick="changeActiveType('web')">
                            <img src="<?php echo(WEB_ROOT.'assets/images/sliders/website.webp')?>" alt="web">
                            <button id="nav-web-tab" class="type-button" data-bs-toggle="tab" data-bs-target="#nav-web" type="button" role="tab" aria-controls="nav-web" aria-selected="true">website</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card type-card type-search" onclick="changeActiveType('search')">
                            <img src="<?php echo(WEB_ROOT.'assets/images/sliders/search.webp')?>" alt="web">
                            <button id="nav-search-tab" class="type-button" data-bs-toggle="tab" data-bs-target="#nav-search" type="button" role="tab" aria-controls="nav-search" aria-selected="false">search</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card type-card type-ledauchan" onclick="changeActiveType('ledauchan')">
                            <img src="<?php echo(WEB_ROOT.'assets/images/sliders/ledauchan.webp')?>" alt="web">
                            <button id="nav-ledauchan-tab" class="type-button" data-bs-toggle="tab" data-bs-target="#nav-ledauchan" type="button" role="tab" aria-controls="nav-ledauchan" aria-selected="false">ledauchan</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card type-card type-radio" onclick="changeActiveType('radio')">
                            <img src="<?php echo(WEB_ROOT.'assets/images/sliders/radio.webp')?>" alt="web">
                            <button id="nav-radio-tab" class="type-button" data-bs-toggle="tab" data-bs-target="#nav-radio" type="button" role="tab" aria-controls="nav-radio" aria-selected="false">web</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card type-card type-ledoutdoor" onclick="changeActiveType('ledoutdoor')">
                            <img src="<?php echo(WEB_ROOT.'assets/images/sliders/ledoutdoor.webp')?>" alt="web">
                            <button id="nav-ledoutdoor-tab" class="type-button" data-bs-toggle="tab" data-bs-target="#nav-ledoutdoor" type="button" role="tab" aria-controls="nav-ledoutdoor" aria-selected="false">led outdoor</button>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="card type-card type-ussd" onclick="changeActiveType('ussd')">
                            <img src="<?php echo(WEB_ROOT.'assets/images/sliders/ussd.webp')?>" alt="web">
                            <button id="nav-ussd-tab" class="type-button" data-bs-toggle="tab" data-bs-target="#nav-ussd" type="button" role="tab" aria-controls="nav-ussd" aria-selected="false">ussd</button>
                        </div>
                    </div> -->
                    <div class="col">
                        <div class="card type-card type-pushvocal" onclick="changeActiveType('pushvocal')">
                            <img src="<?php echo(WEB_ROOT.'assets/images/sliders/pushvocal.webp')?>" alt="web">
                            <button id="nav-pushvocal-tab" class="type-button" data-bs-toggle="tab" data-bs-target="#nav-pushvocal" type="button" role="tab" aria-controls="nav-pushvocal" aria-selected="false">push vocal</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card type-card type-sms" onclick="changeActiveType('sms')">
                            <img src="<?php echo(WEB_ROOT.'assets/images/sliders/sms.webp')?>" alt="web">
                            <button id="nav-sms-tab" class="type-button" data-bs-toggle="tab" data-bs-target="#nav-sms" type="button" role="tab" aria-controls="nav-sms" aria-selected="false">sms</button>
                        </div>
                    </div>
                </div>
                <div class="tab-content menus" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-web" role="tabpanel" aria-labelledby="nav-web-tab" tabindex="0">
                        <div class="menu mt-5">
                            <h3>Publicités sur les sites web</h3>
                            <h4>Tarif ≈ <span>$0.1/1000 vues</span></h4>
                            <p>
                                Votre annonce se retrouve sur les sites et applications
                                mobiles de votre choix.
                            </p>
                            <div class="d-flex">
                                <div class="">
                                    <span class="label">Nombre de vues</span><br>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('web','-')">-</button>
                                        <button type="button" class="btn btn-secondary" id="web" style="pointer-events:none;">0</button>
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('web','+')">+</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end mx-3">
                                    <button class="yellow-btn" style="border:none;width:130px;" onclick="updateSelectedCampaigns('Sites web')">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-search" role="tabpanel" aria-labelledby="nav-search-tab" tabindex="0">
                        <div class="menu mt-5">
                            <h3>Publicités sur les moteurs de recherche</h3>
                            <h4>Tarif ≈ <span>$0.08/clic</span></h4>
                            <p>
                                Atteignez les internautes lorsqu'ils effectuent une recherche sur les 
                                produits ou services avec les mots clés de votre choix.
                            </p>
                            <div class="d-flex">
                                <div class="">
                                    <span class="label">Nombre de clics</span><br>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('search','-')">-</button>
                                        <button type="button" class="btn btn-secondary" id="search" style="pointer-events:none;">0</button>
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('search','+')">+</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end mx-3">
                                    <button class="yellow-btn" style="border:none;width:130px;" onclick="updateSelectedCampaigns('Moteurs de recherche')">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-ledauchan" role="tabpanel" aria-labelledby="nav-ledauchan-tab" tabindex="0">
                        <div class="menu mt-5">
                            <h3>Panneaux LED Auchan</h3>
                            <h4>Tarif ≈ <span>$17/jour/Auchan</span></h4>
                            <p>
                                Invitez vous dans tous les supermarchés de la marque
                                disponibles Dakar.
                            </p>
                            <div class="d-flex">
                                <div>
                                    <span class="label">N° Supermarchés</span><br>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('ledauchan','-')">-</button>
                                        <button type="button" class="btn btn-secondary" id='ledauchan' style="pointer-events:none;">0</button>
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('ledauchan','+')">+</button>
                                    </div>
                                </div>
                                <div class="mx-3">
                                    <span class="label">Nombre de jours</span><br>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary" onclick="updateDays('days-auchan', '-', 'ledauchan')">-</button>
                                        <button type="button" id='days-auchan' class="btn btn-secondary" style="pointer-events:none;">0</button>
                                        <button type="button" class="btn btn-secondary" onclick="updateDays('days-auchan', '+', 'ledauchan')">+</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <button class="yellow-btn" style="border:none;width:130px;" onclick="updateSelectedCampaigns('Panneaux LED Auchan')">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-radio" role="tabpanel" aria-labelledby="nav-radio-tab" tabindex="0">
                        <div class="menu mt-5">
                            <h3>Radio</h3>
                            <h4>Tarif ≈ <span>$20/spot</span></h4>
                            <p>
                                Faites un achat malin et uniforme sur toutes les radios locales
                                a <span class="fw-bold">Dakar</span> et <span class="fw-bold">Abidjan</span>,
                                ou profitez de canaux panafricains (RFI, Trace).
                            </p>
                            <div class="d-flex">
                                <div class="">
                                    <span class="label">Nombre de spots</span><br>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('radio','-')">-</button>
                                        <button type="button" class="btn btn-secondary" id='radio' style="pointer-events:none;">0</button>
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('radio','+')">+</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end mx-3">
                                    <button class="yellow-btn" style="border:none;width:130px;" onclick="updateSelectedCampaigns('Radio')">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="nav-ledoutdoor" role="tabpanel" aria-labelledby="nav-ledoutdoor-tab" tabindex="0">
                        <div class="menu mt-5">
                            <h3>Panneaux LED Outdoor</h3>
                            <h4>Tarif ≈ <span>$10/jour/Ecran</span></h4>
                            <p>
                                Profitez d’un reseau de panneaux LED sur Dakar, Abidjan, Bamako et Accra
                            </p>
                            <div class="d-flex">
                                <div>
                                    <span class="label">Ecrans</span><br>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('ledoutdoor','-')">-</button>
                                        <button type="button" class="btn btn-secondary" id='ledoutdoor' style="pointer-events:none;">0</button>
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('ledoutdoor','+')">+</button>
                                    </div>
                                </div>
                                <div class="mx-3">
                                    <span class="label">Nombre de jours</span><br>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary" onclick="updateDays('days-outdoor', '-', 'ledoutdoor')">-</button>
                                        <button type="button" class="btn btn-secondary" id="days-outdoor" style="pointer-events:none;">0</button>
                                        <button type="button" class="btn btn-secondary" onclick="updateDays('days-outdoor', '+', 'ledoutdoor')">+</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <button class="yellow-btn" style="border:none;width:130px;" onclick="updateSelectedCampaigns('Panneaux LED Outdoor')">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- <div class="tab-pane fade" id="nav-ussd" role="tabpanel" aria-labelledby="nav-ussd-tab" tabindex="0">
                        <div class="menu mt-5">
                            <h3>USSD</h3>
                            <h4>Tarif ≈ <span>$10/jour/panneau</span></h4>
                            <p>
                                Profitez d’un reseau de panneaux LED sur Dakar, Abidjan, Bamako et Accra
                            </p>
                            <div class="d-flex">
                                <div>
                                    <span>Unités</span><br>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary">-</button>
                                        <button type="button" class="btn btn-secondary" style="pointer-events:none;">0</button>
                                        <button type="button" class="btn btn-secondary">+</button>
                                    </div>
                                </div>
                                <div class="mx-3">
                                    <span>Nombre de jours</span><br>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary">-</button>
                                        <button type="button" class="btn btn-secondary" style="pointer-events:none;">20</button>
                                        <button type="button" class="btn btn-secondary">+</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end">
                                    <button class="yellow-btn" style="border:none;width:130px;">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>  -->
                    <div class="tab-pane fade" id="nav-pushvocal" role="tabpanel" aria-labelledby="nav-pushvocal-tab" tabindex="0">
                        <div class="menu mt-5">
                            <h3>Push Vocal</h3>
                            <h4>Tarif ≈ <span>$0.02/ Appel décroché</span></h4>
                            <p>
                                Envoyez a votre base de données des annonces audios sur leurs téléphones
                            </p>
                            <div class="d-flex">
                                <div class="">
                                    <span class="label">Nombre d'appels</span><br>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('pushvocal','-')">-</button>
                                        <button type="button" class="btn btn-secondary" id='pushvocal' style="pointer-events:none;">0</button>
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('pushvocal','+')">+</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end mx-3">
                                    <button class="yellow-btn" style="border:none;width:130px;" onclick="updateSelectedCampaigns('Push Vocal')">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="tab-pane fade" id="nav-sms" role="tabpanel" aria-labelledby="nav-sms-tab" tabindex="0">
                        <div class="menu mt-5">
                            <h3>SMS</h3>
                            <h4>Tarif ≈ <span>&lt;1000=offert</span></h4>
                            <p>
                                Enregistrez votre propre marque et personnalisez vos SMS 
                                avec les noms et prénoms de vos clients. 
                            </p>
                            <div class="d-flex">
                                <div class="">
                                    <span class='label'>Nombre de messages</span><br>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('sms','-')">-</button>
                                        <button type="button" class="btn btn-secondary" id='sms' style="pointer-events:none;">0</button>
                                        <button type="button" class="btn btn-secondary" onclick="updateInput('sms','+')">+</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end mx-3">
                                    <button class="yellow-btn" style="border:none;width:130px;" onclick="updateSelectedCampaigns('SMS')">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="amount position-absolute">0$</div>
            </div>
            <div class="col col-12 order-1 order-md-2 col-md-4 result-col">
                <div class="container">
                    <div class="progress mt-5">
                        <div class="progress-bar" role="progressbar" style="width: 3%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between mt-1">
                        <img src="<?php echo(WEB_ROOT.'assets/images/sad.png')?>" alt="sad">
                        <img src="<?php echo(WEB_ROOT.'assets/images/happy.png')?>" alt="happy">
                    </div>
                    <div class="tiles mt-4"></div>
                    <div class="divider"></div>
                    <div class="text-center">
                        Total estimé<br>
                        <div class="total-price">0$</div>
                    </div>
                    <button id="reset-button" class="w-100 mt-4 justify-content-center btn btn-danger d-flex align-items-center disabled" onclick="reset()">
                        <span class="material-symbols-outlined">delete</span>
                        <span>Réinitialiser</span> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>