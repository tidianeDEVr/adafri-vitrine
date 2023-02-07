<!-- Meta Tags  -->
<title>solutions</title>
<?php 
    include("solutions.css.php");
    echo(START_TAGS);
    require_once(ROOT_VIEWS_INC."menu.inc.php");
?>

<!-- hero section -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col col-8">
                <div>
                    <h2>Découvrez toutes nos <span>solutions</span></h2>
                    <p>
                        Lorem ipsum <span>dolor sit amet</span>, consectetur adipiscing elit. Morbi<br> dui neque, consectetur ac malesuada et, <span>porttitor</span>  ac dui.
                    </p>
                </div>
            </div>
            <div class="col col-4">
                <div>
                    <img src="<?php echo(WEB_ROOT.'assets/images/wew.png')?>" alt="adafri">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- presentation section  -->
<section class="presentation-section">
    <div class="container">
        <div class="container carousel-holder">
            <!-- <?php include(WEB_ROOT.'../../home/carousel.html.php')?> -->
        </div>
        <div class="title text-center mt-5">
            <h4>Publicite sur les sites webs</h4>
            <p>
                Faites vous aisément remarquer sur <span>tout le Web</span>. Votre annonce se retrouve<br>
                sur tous les sites et applications mobiles de votre choix. Prenez les<br>
                commandes et découvrez notre outil automatisé à Google pour faire décoller<br>
                votre Entreprise.
            </p>
        </div>
        <div class="row cards">
            <div class="col">
                <div class="card h-100">
                    <h6>Gardez la main sur vos performances</h6>
                    <p>
                        Du 360° sur toutes vos actions digitales.<br>
                        Réajustez votre stratégie en fonction de vos résultats.
                    </p>
                    <div class="btn">
                        <a href="" class="yellow-btn">Créez un compte gratuitement</a>
                    </div>
                </div>
            </div>
            <div class="col my-4 my-lg-0">
                <div class="card h-100">
                    <h6>Plus besoin de cartes bancaires !</h6>
                    <p>
                        La plateforme ADAFRI est automatisée aux régies digitales.<br>
                        Nous pensons qu’un digital moins technique et accessible<br>
                        inclut également des moyens de paiements synchronisés et<br>
                        adaptés à l’Afrique.
                    </p>
                    <div class="btn">
                        <a href="" class="yellow-btn">Lancez vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- rv section  -->
<section class="blue-card-section">
    <div class="container text-center py-5">
        <img src="<?php echo(WEB_ROOT.'assets/images/headset.png')?>" alt="adafri">
        <h2 class="mt-3">Prenez rendez-vous avec un de nos conseillers</h2>
        <p class="my-4">
            Nous sommes un outil dédié à toute activité commerciale,<br>
            la bonne nouvelle, c’est que vous pouvez y accéder.
        </p>
        <div class="btn pt-3">
            <a target="_blank"
             href="https://meetings-eu1.hubspot.com/dieuveille-goma/notre-1er-rendez-vous-?__hstc=97983424.89c537ad01fe42754e5b0e07974778c5.1669894721085.1675682490897.1675688328305.26&__hssc=97983424.1.1675688328305&__hsfp=3058040093" class="yellow-btn">Accéder au crédit publicitaire</a>
        </div>
    </div>
</section>

<!-- join section  -->
<section class="join-section py-5">
    <div class="container">
        <div class="row join-cards">
            <div class="col col-12 col-md-6">
                <div class="card">
                    <img src="<?php echo(WEB_ROOT.'assets/images/A.svg')?>" alt="adafri">        
                    <h6>Commencez l'aventure ADAFRI</h6>
                    <p class="my-2">Profitez des services de notre outil marketing et faites grandir<br> votre business.</p>
                    <div class="text-start">
                        <a href="" class="yellow-btn">Lancez vous</a>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-6 mt-5 mt-sm-0">
                <div class="card card-right">
                    <img src="<?php echo(WEB_ROOT.'assets/images/white-headset.png')?>" alt="adafri">        
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