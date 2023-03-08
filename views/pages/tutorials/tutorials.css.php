<style>
    .hero-section {
        background-image: url(<?php echo(WEB_ROOT.'assets/images/header-img.webp')?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 300px;
        padding-top: 100px;
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
        font-size: 16px;
    }

    .tuto-section {
        background-color: #F6F6F6;
    }

    .tuto-section .deactive {
        opacity: .5;
        pointer-events: none;
    }

    .tuto-section .loader {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .tuto-section .card {
        border-radius: 7px;
        overflow: hidden;
    }
    .tuto-section .card .card-title {
        padding-bottom: 7px;
    }
    .tuto-section .card .divider {
        border-bottom: 1px solid #C8C8C8;
        margin-bottom: 20px;
    }
    .tuto-section .card .btn-group-vertical *{
        border-radius: 0 !important;
    }
    .tuto-section .card .btn {
        border: none;
        text-align: start !important;
        font-size: 15px !important;
    }
    .tuto-section .card .btn-outline-primary {
        padding: 16px;
        --bs-btn-active-bg: #2344C3 !important;
    }
    .tuto-section .tab-image {
        width: 100% !important;
        max-width: 200px !important;
    }
    .tuto-section .tab-pane h3 {
        color: #2344C3 ;
        font-size: 21px;
        font-weight: 600;
    }

    .tuto-section .tab-pane p {
        color: #505050;
        font-size: 16px;
    }

    .tuto-section .tab-pane p span {
        color: #2344C3;
        font-weight: 600;
    }
    .video-container {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        height: 0;
        margin-top: 30px;
    }
    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
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
</style>