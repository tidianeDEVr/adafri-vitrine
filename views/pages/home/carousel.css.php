<style>
    .contenu-carrousel {
        margin: 2rem auto;
        width: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
        position: relative;
        perspective: 1500px;
    }
    
    .carrousel { 
        height: 100%;
        width: 100%;
        position: absolute;
        transform-style: preserve-3d;
        transition: transform 1s;
    }
    
    .carrousel div {
        cursor: pointer;
        backface-visibility: hidden;
        position: absolute;
        width: 230px;
        height: 200px;
        overflow: hidden;
        outline: 1px solid transparent;

    }
    .carrousel div:nth-child(1) {
        transform: rotateY(0) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider1.webp')?>) no-repeat center center/cover;;

    }
        
    .carrousel div:nth-child(2) {
        transform: rotateY(40deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider2.webp')?>) no-repeat center center/cover;;

    }
        
    .carrousel div:nth-child(3) {
        
        transform: rotateY(80deg) translateZ(350px);;

        background:url(<?php echo(WEB_ROOT.'assets/images/slider3.webp')?>) no-repeat center center/cover;
    }
        
    .carrousel div:nth-child(4) {
        transform: rotateY(120deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider4.webp')?>) no-repeat center center/cover;;

    }
        
    .carrousel div:nth-child(5) {
        transform: rotateY(160deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider5.webp')?>) no-repeat center center/cover;

    } 
        
    .carrousel div:nth-child(6) {
        transform: rotateY(200deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider6.webp')?>) no-repeat center center/cover ;

    }
    
    .carrousel div:nth-child(7) {
        transform: rotateY(240deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider7.webp')?>) no-repeat center center/cover      ;

    }

    .carrousel div:nth-child(8) {
        transform: rotateY(280deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider8.webp')?>) no-repeat center center/cover      ;

    }

    .carrousel div:nth-child(9) {
        transform: rotateY(320deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider9.webp')?>) no-repeat center center/cover      ;

    }
    .controls {
        width: 100%;
        position: absolute;
        bottom: -150px;
    }
    .controls button {
        width: 42px;
        height: 42px;
        color: #fff;
        border: none;
        background-color: #FFE000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .controls button span {
        font-size: 30px;
    }
</style>