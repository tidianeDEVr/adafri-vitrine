<style>

    /* Hero Section */
    .hero-section {
        background-image: url(<?php echo(WEB_ROOT.'assets/images/header-img.png')?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 75vh;
        max-width: 100vw;
        min-height: 600px !important;
        position: relative;
        color: #fff;
    }   
    .hero-section .shape {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
        transform: rotate(180deg);
    }
    .hero-section .shape svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 54px;
    }
    .hero-section .shape .shape-fill {
        fill: #F6F6F6;
    }
    .hero-section .container {
        height: 75vh;
    }
    .hero-section .yellow {
        color: #FFE000;
    }
    .hero-section .col {
        margin-top: 120px;
    }
    .hero-section h1 {
        margin-top: 20px;
        font-size: 64px;
        font-weight: 600;
        line-height: 70px;
    }
    .hero-section p {
        line-height: 35px;
        font-size: 20px;
        font-weight: 400;
    }
       
    .hero-section .hero-img {
        z-index: 5;
        display: flex;
        margin-left: -100px;
        margin-top: -100px;
    }
    .hero-section .hero-img img {
        width: 750px;
        z-index: 5;
        -webkit-animation: image-move 2s ease-in-out infinite both;
        animation: image-move 2s ease-in-out infinite both;
    }

    .hero-section .demo {
        margin-left: 20px;
    }
    .hero-section .demo .headset {
        background-color: #fff;
        padding: 10px;
        width: 50px;
        height: 50px;
        border: 4px solid #5099E7;
        object-fit: contain;
        border-radius: 50%;
    }
    .hero-section .demo a {
        color: #fff;
        text-decoration: none;
        margin-left: 10px;
        transition: all .3s ease-in-out;
    }

    /* Presentation  Section */
    .presentation-section {
        min-height: 150vh;
        padding-top: 150px;
        background-color: #F6F6F6;
    }
    .presentation-section h2 {
        text-align: center;
        font-size: 32px;
        font-weight: 600;
        color: #2344C3;
        line-height: 45px;
    }
    .presentation-section .carousel-holder{
        height: 400px;
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
    .presentation-section .advertisers-img {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .presentation-section .advertisers .col-left {
        display: flex;
        align-items: center;
    }
    .presentation-section .advertisers h5 {
        font-size: 24px;
        margin-bottom: 40px;
        color: #999999;
    }
    .presentation-section .advertisers p {
        font-size: 120px;
        font-weight: 600;
        line-height: 50px;
        color: #2344C3;
    }
    .presentation-section .advertisers p span {
        font-size: 40px;
    }

    .presentation-section .advertisers-img img, 
    .presentation-section .communication-img img
    { 
        width: 100%;
        max-width: 600px;
        -webkit-animation: image-move 2s ease-in-out infinite both;
        animation: image-move 2s ease-in-out infinite both;
    }
    .presentation-section .communications .col-right {
        display: flex;
        align-items: center;
    }
    .presentation-section .communications .col-right h5 {
        font-size: 32px;
        font-weight: 600;
        color: #2344C3;
    }
    .presentation-section .communications .col-right p {
        font-size: 16px;
        font-weight: 400;
        color: #505050;
        line-height: 30px;
    }
    .presentation-section .cards .card {
        /* background-color: #F3F4F6; */
        background-color: #fff;
        border: none;
        padding: 20px;
        position: relative;
        padding: 40px;
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
        left: 30px;
    }
    /* blue card section  */
    .blue-card-section {
        padding-top: 50px;
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