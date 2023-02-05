<style>
    nav {
        z-index: 10;
        max-width: 100vw;
    }
    .logo {
        width: 150px;
        height: 55;
    }
    .logo img {
        width: 120px;
        transition: all ease-in-out .3s;
    }
    .logo img:hover {
        scale: 1.1;
    }
    .list {
        width: 40%;
    }
    .list ul {
        list-style-type: none;
    }
    .list li {
        transition: all ease-in-out .3s;
    }
    .list li:hover {
        scale: 1.1;
    }
    .list li a {
        color: #fff;
        text-decoration: none;
        font-weight: 500; 
    }
    a:hover {
        scale: 1.1;
        color: #fff;
    }
    .mobile-menu-btn {
        color: #fff;
        background-color: transparent;
        border: none;
        margin-left: 10px;
    }
    .mobile-menu {
        width: 90%;
        background-color: red;
    }
</style>

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
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <a href='https://app.adafri.com/' target="_blank" class="yellow-btn">Connexion</a>
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