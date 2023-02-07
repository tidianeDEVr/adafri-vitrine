<?php include('carousel.css.php');?>


<div class="contenu-carrousel">
    <div class="carrousel">
        <div id="website"></div>
        <div id="ussd"></div>
        <div id="search"></div>
        <div id="chatbot"></div>
        <div id="sms"></div>
        <div id="radio"></div>
        <div id="leds"></div>
        <div id=""></div>
        <div id=""></div>
    </div>
    <div class="controls d-flex justify-content-center">
        <button class="mx-1" onclick="carrousel('-')">
            <span class="material-symbols-outlined">arrow_left</span>
        </button>
        <button class="mx-1" onclick="carrousel('')">
            <span class="material-symbols-outlined">arrow_right</span>
        </button>
    </div>
</div>

<script defer>
    var angle = 0;
	function carrousel(sign){
		spinner=document.querySelector(".carrousel");
		if(!sign){
			angle = angle + 40
		}else{ 
			angle = angle - 40
        }
		spinner.setAttribute("style","transform:rotateY("+ angle +"deg);")
	}
    document.querySelector('#website').addEventListener('click', ()=>{
        window.location.href = '<?php echo(WEB_ROOT)?>page/website-ads';
    })
    document.querySelector('#ussd').addEventListener('click', ()=>{
        window.location.href = '<?php echo(WEB_ROOT)?>page/ussd';
    })
    document.querySelector('#search').addEventListener('click', ()=>{
        window.location.href = '<?php echo(WEB_ROOT)?>page/search-engine-ads';
    })
    document.querySelector('#chatbot').addEventListener('click', ()=>{
        window.location.href = '<?php echo(WEB_ROOT)?>page/chatbot';
    })
    document.querySelector('#sms').addEventListener('click', ()=>{
        window.location.href = '<?php echo(WEB_ROOT)?>page/sms';
    })
    
    document.querySelector('#radio').addEventListener('click', ()=>{
        window.location.href = '<?php echo(WEB_ROOT)?>page/radio';
    })
    document.querySelector('#leds').addEventListener('click', ()=>{
        window.location.href = '<?php echo(WEB_ROOT)?>page/led-pannels-ads';
    })
</script>