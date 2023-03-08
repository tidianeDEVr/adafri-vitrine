<script defer>
    window.addEventListener('load', function() {
        document.getElementById("vbtn-display").click();
        const deactive = document.querySelector('.deactive');
        const spinner = document.querySelector('.loader');
        if (deactive) deactive.classList.remove('deactive');
        if(spinner) spinner.classList.add('d-none');
    })
</script>