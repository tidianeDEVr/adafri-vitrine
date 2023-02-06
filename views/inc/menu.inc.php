<nav class="position-absolute w-100">
    <div class="container d-flex align-items-center justify-content-between py-3">
            <div class="logo d-flex align-items-center justify-content-start">
                    <a href="<?php path('page/accueil') ?>">
                        <img src="<?php echo(WEB_ROOT.'assets/images/logo_adafri.svg')?>" alt="adafri">
                    </a>
            </div>
            <div class="list d-none d-sm-block">
                <ul class="d-flex align-items-center justify-content-between ">
                     <li><a href="<?php path('page/solutions') ?>">Nos Solutions</a></li>
                     <li><a href="">Le Simulateur</a></li>
                     <li><a href="<?php path('page/chatbot')?>">Le Chatbot</a></li>
                     <li><a href="https://blog.adafri.com/" target="_blank">Le Blog</a></li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <a href='https://app.adafri.com/' target="_blank" class="yellow-btn blue-border">Connexion</a>
                <button class="mobile-menu-btn d-sm-none"><span class="material-symbols-outlined">menu</span></button>
            </div>
    </div>
    <!-- <div class="mobile-menu">
        <ul class="d-flex align-items-center justify-content-between ">
                <li>
                    <a href="">
                        Nos Solutions
                    </a>
                </li>
                <li>
                    <a href="">
                        Le Simulateur
                    </a>
                </li>
                <li>
                    <a href="">
                        Le Chatbot
                    </a>
                </li>
        </ul>
    </div> -->
</nav>


<script>
    const menuButton = document.querySelector('.mobile-menu-btn');
    menuButton.addEventListener('click', (e)=>{
        window.scrollTo(0, 0);
        alert('clicked')
    });
</script>