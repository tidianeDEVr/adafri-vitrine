<!-- Meta Tags -->
<title>Adafri - Chatbots </title>
<meta name="description" content="Construisez un parcours prédéfini pour des messagess automatisés sur whatsapp.">
<meta name="keywords" content="Whatsapp Chatbot, Chatbot, Réponses automatique par whatsapp, vente par robots">

<?php 
    include("chatbot.css.php");
    echo(START_TAGS);
    require_once(ROOT_VIEWS_INC."menu.inc.php");
?>

<!-- hero section  -->
<section class="hero-section hero-section-sm">
    <div class="container">
        <div class="text-center">
            <div class="col">
                <h2>Construisez votre ChatBot<span> sans aucune ligne de code</span></h2>
                    <p>
                        Lorem ipsum <span>dolor sit amet</span>, consectetur adipiscing elit. Morbi dui neque, consectetur ac malesuada et, <span>porttitor</span>  ac dui.
                    </p>
            </div>
        </div>
    </div>
</section>

<!-- second section  -->
<section class="second-section">
    <div class="container">
        <div class="row">
            <div class="col col-md-7 col-12 text-center">
                <div class="h-100 d-flex flex-column justify-content-center">
                    <h5>Un ChatBot sans ligne de code</h5>
                    <p class="mt-3">
                        Avec un ChatBot sans aucun codage requis et E-commerce 
                        intégré, Adafri vous offre un potentiel d’automatisation inégalé, 
                        la possibilité de créer des campagnes de marketing 
                        conversationnel et de fournir un excellent service dont vous 
                        avez besoin pour accélérer votre croissance, le tout dans 
                        WhatsApp.
                    </p>
                    <div class="mt-3">
                        <a href="" class="yellow-btn">Demarrer la conversation</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-5 col-12">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <img src="<?php echo(WEB_ROOT.'assets/images/bot.png')?>" alt="chatbot whatsapp">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blue card section  -->
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
            href="https://meetings-eu1.hubspot.com/dieuveille-goma/notre-1er-rendez-vous-?__hstc=97983424.89c537ad01fe42754e5b0e07974778c5.1669894721085.1675682490897.1675688328305.26&__hssc=97983424.1.1675688328305&__hsfp=3058040093" class="yellow-btn">Prendre Rendez-vous</a>
        </div>
    </div>
</section>

<!-- tarifs section  -->
<section class="tarifs-sections">
    <div class="container">
        <h2 class="text-center mb-5">Grille Tarifaire</h2>
        <div class="row g-4 g-md-2">
            <div class="col">
                <div>
                    <div class="card">
                        <h6 class="text-center">Gratuit</h6>
                        <span class="price text-center">$ <span class="value">0</span></span>
                        <span class="duration">Par mois</span>
                        <p>Commencez avec les fonctionnalités de base, jusqu'à 200 contacts.</p>
                        <div class="d-flex justify-content-center">
                            <ul>
                                <li><span class="material-symbols-outlined">done</span> 1 bot inclus</li>
                                <li><span class="material-symbols-outlined">done</span> 100 interactions (message)</li>
                                <li><span class="material-symbols-outlined">done</span> 7 jours d'essai gratuit</li>
                            </ul>
                        </div>
                        <div class="btn position-absolute d-flex justify-content-center w-100">
                            <a href="" class="yellow-btn">Choisir cette offre</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <div class="card business">
                        <h6 class="text-center">Business</h6>
                        <span class="price text-center">$ <span class="value">50</span></span>
                        <span class="duration">Par mois</span>
                        <p>Accès à toutes les fonctionnalités professionnelles, pour toutes les entreprises.</p>
                        <div class="d-flex justify-content-center">
                            <ul>
                                <li><span class="material-symbols-outlined">done</span> 1 bot inclus</li>
                                <li><span class="material-symbols-outlined">done</span> 0 limite sur la construction du chemin</li>
                                <li><span class="material-symbols-outlined">done</span> 1000 interactions (messages)</li>
                            </ul>
                        </div>
                        <div class="btn position-absolute d-flex justify-content-center w-100">
                            <a href="" class="yellow-btn">Choisir cette offre</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div>
                    <div class="card">
                        <h6 class="text-center">Partenaire</h6>
                        <span class="price text-center">$ <span class="value">100</span></span>
                        <span class="duration">Par mois</span>
                        <p>Pour les agences de marketing digital, les spécialistes du marketing digital.</p>
                        <div class="d-flex justify-content-center">
                            <ul>
                                <li><span class="material-symbols-outlined">done</span> 1 bot inclus</li>
                                <li><span class="material-symbols-outlined">done</span> Chemin illimité</li>
                                <li><span class="material-symbols-outlined">done</span> Interactions (messages) illimitées</li>
                                <li><span class="material-symbols-outlined">done</span> Reciblage automatique</li>
                                <li><span class="material-symbols-outlined">done</span> Support prioritaire</li>
                            </ul>
                        </div>
                        <div class="btn position-absolute d-flex justify-content-center w-100">
                            <a href="" class="yellow-btn">Choisir cette offre</a>
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
