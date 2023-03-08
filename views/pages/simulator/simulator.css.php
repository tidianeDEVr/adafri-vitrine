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

    .simulator-section {
        padding: 50px 0;
        background-color: #F6F6F6;
    }
    .simulator-section .card {
        height: 135px;
        overflow: hidden;
        border-radius: 7px;
        cursor: pointer;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .simulator-section .card img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .simulator-section .card.active-type {
        border: 2.5px solid #2344C3;
    }
    .simulator-section .progress-bar {
        background-color: #51CB4E;
        border-radius: 50px;
    }
    .simulator-section .amount {
        bottom: 0;
        right: 20px;
        font-size: 36px;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        padding: 10px 50px;
        border-radius: 15px;
        border: 1px solid #C8C8C8;
        text-align: center;
    }
    .simulator-section .total-price {
        font-size: 36px;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        padding: 10px 50px;
        border-radius: 15px;
        border: 1px solid #C8C8C8;
        text-align: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .simulator-section .divider {
        margin: 20px;
        height: 1px;
        background-color: #C9C9C9;
    }
    .simulator-section .result-col {
        background-color: white;
        border: 1px solid #C9C9C9;
        border-radius: 15px;
        
    }
    .simulator-section .btn-group , .simulator-section .yellow-btn{
        padding: 0;
        border-radius: 7px;
        height: 40px;
    }
    .simulator-section .type-button {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }
    .simulator-section h3 {
        font-size: 24px;
        color: #2344C3;
    }
    .simulator-section h4 {
        font-size: 14px;
        color: #2344C3;
    }
    .simulator-section h4 span {
        color: #505050;
    }
    .simulator-section p {
        font-size: 16px;
        color: #505050;
    }
    .simulator-section .tab-pane {
        min-height: 120px;
    }
    .simulator-section .tiles {
        max-height: 230px;
        overflow-y: scroll;
    }
    .simulator-section .tile {
        border: 1px solid #C8C8C8;
        border-radius: 10px;
    }
    
    .simulator-section .tile h5 {
        color: #2344C3;
        font-size: 14px;
    }
    .simulator-section .tile span {
        color: #505050;
        font-weight: 700;
        font-size: 14px;
    }
    .simulator-section .label {
        font-size: 13px;
        color: #505050;
        font-weight: 700;
    }
    .simulator-section #reset-button {
        z-index: 2;
        margin-bottom: 15px !important;
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