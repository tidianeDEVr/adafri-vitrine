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
        outline: 1px solid transparent;
    }
    .carrousel div:nth-child(1) {
        transform: rotateY(0) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider1.png')?>) no-repeat center center/cover
    }
        
    .carrousel div:nth-child(2) {
        transform: rotateY(51.4285714286deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider2.png')?>) no-repeat center center/cover;
    }
        
    .carrousel div:nth-child(3) {
        
        transform: rotateY(103deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider3.png')?>) no-repeat center center/cover;
    }
        
    .carrousel div:nth-child(4) {
        transform: rotateY(154.5deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider4.png')?>) no-repeat center center/cover;
    }
        
    .carrousel div:nth-child(5) {
        transform: rotateY(206deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider5.png')?>) no-repeat center center/cover
    } 
        
    .carrousel div:nth-child(6) {
        transform: rotateY(257.5deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider6.png')?>) no-repeat center center/cover 
    }
    
    .carrousel div:nth-child(7) {
        transform: rotateY(309deg) translateZ(350px);
        background:url(<?php echo(WEB_ROOT.'assets/images/slider7.png')?>) no-repeat center center/cover      
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