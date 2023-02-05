<style>
    .hero-section {
        background-image: url(<?php echo(WEB_ROOT.'assets/images/header-img.png')?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50vh;
        padding-top: 150px;
        position: relative;
    }
    .hero-section .col h2 {
        color: #fff;
        font-weight: 600;
        font-size: 44px;
    }
    .hero-section .col h2 span , .hero-section .col p span {
        color: #FFE000;
    }
    .hero-section .col p {
        color: #fff;
        font-weight: 400;
        margin-top: 20px;
        font-size: 20px;
    }
    .hero-section .col img {
        width: 750px;
        position: absolute;
        bottom: 0;
        right: 0;

    }

    .presentation-section {
        background-color: #F6F6F6;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .presentation-section .carousel {
        height: 500px;
    }
    .presentation-section .title h4{
        color: #2344C3;
    }
    .presentation-section .title p {
        margin-top: 20px;
        font-size: 16px;
        color: #505050;
        font-weight: 400;
    }
    .presentation-section .title p span {
        font-weight: 500;
        color: #2344C3;
    }
    .presentation-section .cards .card {
        background-color: #fff;
        border: none;
        padding: 20px;
        position: relative;
        padding-bottom: 60px;
    }
    .presentation-section .cards .card h6 {
        color: #2344C3;
        font-weight: 600;
        font-size: 24px;
    }
    .presentation-section .cards .card p {
        font-size: 16px;
        font-weight: 300;
        line-height: 26px;
        color: #505050;
    }
    .presentation-section .cards .card .btn {
        position: absolute;
        bottom: 20px;
        left: 0;
    }

    /* blue-card section  */
    .blue-card-section {
        padding-top: 50px;
        padding-bottom: 50px;
        color: #fff;
        background-color: #F6F6F6;
        padding-bottom: 10px;
    }
    .blue-card-section .container {
        box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;
        border: 20px solid #E8FAFF;
        border-radius: 40px;
        background: rgb(7,113,225);
        background: linear-gradient(45deg, rgba(7,113,225,1) 0%, rgba(3,38,134,1) 100%);
        height: 480px;
    }
    .blue-card-section .container img {
        border: solid rgba(232, 250, 255, 0.4) 4px;
        padding: 10px;
        border-radius: 15px;
    }
    .blue-card-section .container h2 {
        font-size: 36px;
        font-weight: 600;
    }
    .blue-card-section .container p {
        font-weight: 300;
        font-size: 18px;
        line-height: 30px;
        
    }

    /* join section  */
    .join-section {
        padding-bottom: 50px;
        background-color: #F6F6F6;
    }
    .join-section .card {
        position: relative;
        padding: 20px;
        padding-bottom: 80px;
        border-radius: 30px;
        border: 3px solid #CDE7FF;
        background-color: rgba(205, 231, 255, 0.25);
    }
    .join-section .card .text-start {
        position: absolute;
        bottom: 30px;
        left: 20px;
    }
    .join-section .card img {
        right: 30px;
        top: -25px;
        position: absolute;
        width: 65px;
        padding: 10px;
        background-color: #2344C3;
        border-radius: 20px;
        border: 4px solid #CDE7FF;
    }
    .join-section .card-right {
        background-color: rgba(218, 255, 228, 0.25);
        border: 4px solid rgba(218, 255, 228, 1);
    }
    .join-section .card-right img {
        background-color: rgba(78, 203, 113, 1);
        border: 4px solid rgba(218, 255, 228, 1);
    }
   .join-section .card p {
        color: #505050;
   } 
</style>