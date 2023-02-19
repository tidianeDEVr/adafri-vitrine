<nav class="position-absolute w-100">
    <div class="container d-flex align-items-center justify-content-between py-3">
            <div class="logo d-flex align-items-center justify-content-start">
                    <a href="<?php path('page/accueil') ?>">
                        <img src="<?php echo(WEB_ROOT.'assets/images/logo_adafri.svg')?>" alt="logo adafri">
                    </a>
            </div>
            <div class="list d-none d-lg-block">
                <ul class="d-flex align-items-center justify-content-between ">
                     <li><a href="<?php path('page/accueil#solutions') ?>">Nos Solutions</a></li>
                     <li><a href="<?php path('page/simulator')?>">Le Simulateur</a></li>
                     <li><a href="https://blog.adafri.com/" target="_blank">Le Blog</a></li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <a href='https://app.adafri.com/' target="_blank" class="yellow-btn blue-border">Connexion</a>
                <button data-bs-toggle="modal" data-bs-target="#mobileMenuModal" class="mobile-menu-btn d-lg-none"><span class="material-symbols-outlined">menu</span></button>
            </div>
    </div>
</nav>
<!-- Mobile Menu -->
<div class="modal fade" id="mobileMenuModal" tabindex="-1" aria-labelledby="mobileMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h4>NOS SERVICES</h4>
                <button type="button" data-bs-dismiss="modal"><span class="material-symbols-outlined">close</span></button>
            </div>
            <ul>
                <li><a href="<?php path('page/tv')?>" class="justify-content-center justify-content-lg-start">Campagnes TV</a></li>
                <li><a href="<?php path('page/radio')?>" class="justify-content-center justify-content-lg-start">Campagnes Radio</a></li>
                <li><a href="<?php path('page/chatbot')?>" class="justify-content-center justify-content-lg-start">Chatbot WhatsApp</a></li>
                <li><a href="<?php path('page/website-ads')?>" class="justify-content-center justify-content-lg-start">Publicités sur les sites web</a></li>
                <li><a href="<?php path('page/search-engine-ads')?>" class="justify-content-center justify-content-lg-start">Publicités sur les moteurs de recherche</a></li>
                <li><a href="<?php path('page/led-pannels-ads')?>" class="justify-content-center justify-content-lg-start">Panneaux LED</a></li>
                <li><a href="<?php path('page/push-vocal')?>" class="justify-content-center justify-content-lg-start">Push Vocal</a></li>
                <li><a href="<?php path('page/sms')?>" class="justify-content-center justify-content-lg-start">SMS Marketing</a></li>
                <li><a href="<?php path('page/ussd')?>" class="justify-content-center justify-content-lg-start">Sondages USSD</a></li>
            </ul>
            <h4 class="mt-4">AUTRES PAGES</h4>
            <ul>
                <li><a href="<?php path('page/simulator')?>" class="justify-content-center justify-content-lg-start">Le Simulateur</a></li>
                <li><a href="https://blog.adafri.com/" class="justify-content-center justify-content-lg-start">Le Blog</a></li>
            </ul>
        </div>
    </div>
</div>

<style>
    .modal-content {
        background-color: #1E1E1E;
        color: #fff;
    }
    .modal-content button {
        background-color: transparent;
        border: none;
        color: #FFF;
    }
    .modal-dialog h4 {
        padding-bottom: 10px;
        font-size: 30px;
        border-bottom: 2px solid #fff;
        color: #2344C3;
    }
    .modal-dialog ul {
        list-style-type: none;
        padding: 0;
        margin-top: 20px;
    }
    .modal-dialog ul li {
        margin-bottom: 15px;
    }
    .modal-dialog ul li a {
        text-decoration: none;
        color: #fff;
        font-weight: 600;
    }
</style>


<script>
    
</script>