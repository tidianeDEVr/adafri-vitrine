<script>
    window.addEventListener('load', function() {
        document.getElementById("nav-web-tab").click();
        let campaignTypesCards = document.querySelectorAll(".type-card");
    })
    let total = 0
    let selectedCampaigns = []
    let activeType = undefined;

    function changeActiveType(type) {
        activeType = document.querySelector('.active-type')
        if (activeType) activeType.classList.remove('active-type')
        document.querySelector(`.type-${type}`).classList.add('active-type')
        let value = document.querySelector(`#${type}`).innerHTML
        updateSinglePrice(type, parseInt(value));
    }

    function refreshProgressBar() {
        console.log(selectedCampaigns);
        let bar = document.querySelector('.progress-bar')
        let maxPerCampaign = 500
        let totalCampaignType = 7
        let nbrUsedCamp = selectedCampaigns.length
        let calculatedUsedProductsTotal = parseInt((50*nbrUsedCamp)/7)
        let amountPercentages = 0
        let calculatedPercentagePrice
        selectedCampaigns.forEach(elt=>{
            let productPercentage = parseInt((elt.value * 100)/500)
            productPercentage > 100 ? amountPercentages += 100 : amountPercentages += productPercentage;
        })
        calculatedPercentagePrice = parseInt((amountPercentages*50)/700);
        let finalValue = calculatedUsedProductsTotal + calculatedPercentagePrice
        finalValue > 100 ? bar.style.width = `100%` : bar.style.width = `${finalValue}%`;
        
    }

    function updateSinglePrice(type, value) {
        let amount = document.querySelector('.amount')
        if (!value || value == 0) return amount.innerHTML = '0$';
        if (type == 'web') amount.innerHTML = (value * 0.1).toString() + '$'
        if (type == 'search') amount.innerHTML = (value * 0.08).toString() + '$'
        if (type == 'radio') amount.innerHTML = (value * 20).toString() + '$'
        if (type == 'pushvocal') amount.innerHTML = (value * 0.02).toString() + '$'
        if (type == 'sms' ) {
            if(value <= 1000) return amount.innerHTML = '0$'
            amount.innerHTML = (value * 0.02).toString() + '$'
        }
        if (type == 'ledauchan') {
            let days = document.querySelector('#days-auchan').innerHTML
            amount.innerHTML =  parseInt(days*17*value)+'$'
        }
        if (type == 'ledoutdoor') {
            let days = document.querySelector('#days-outdoor').innerHTML
            amount.innerHTML =  parseInt(days*10*value)+'$'
        }
    }

    function updateDays(id, sign, value){
        let element = document.querySelector(`#${id}`)
        let funcValue = document.querySelector(`#${value}`).innerHTML
        let newNbDate = 0
        if(!id) return;
        if (sign == '-') {
            newNbDate = parseInt(element.innerHTML) - 5
        } else {
            newNbDate = parseInt(element.innerHTML) + 5
        }
        if(newNbDate>=0) element.innerHTML = newNbDate;
        if(id=='days-auchan') updateSinglePrice('ledauchan', parseInt(funcValue))
        if(id=='days-outdoor') updateSinglePrice('ledoutdoor', parseInt(funcValue))
    }

    function updateSelectedCampaigns(type){
        let value = parseInt(document.querySelector('.amount').innerHTML)
        let exist = false
        if (selectedCampaigns.length > 0) {
            selectedCampaigns.forEach(elt => {
                if (elt.name == type){
                    elt.value = value
                    exist = true
                }
            })
        }
        if (value > 0 && !exist) {
            selectedCampaigns.push({
                'name': type,
                'value': value
            })
        }
        if (selectedCampaigns.length>0) {
            let resetBtn = document.querySelector('#reset-button')
            resetBtn.classList.remove('disabled')
            
        }else{
            resetBtn.classList.add('disabled')
        }
        updateTotalPrices();
        refreshProgressBar();
    }

    function reset(){
        let resetBtn = document.querySelector('#reset-button')
        let bar = document.querySelector('.progress-bar')
        selectedCampaigns = []
        updateTotalPrices();
        resetBtn.classList.add('disabled')
        bar.style.width = `3%`
    }

    function updateTotalPrices() {
        let total = 0
        let tiles = document.querySelector('.tiles')
        tiles.innerHTML = ''
        let totalElement = document.querySelector('.total-price')
        if(selectedCampaigns.length==0) return totalElement.innerHTML = '0$'
        selectedCampaigns.forEach(elt => {
            total += parseInt(elt.value)
            tiles.innerHTML += `
                <div class="tile mb-3 px-3 d-flex justify-content-between align-items-center py-4">
                    <h5 class="m-0">${elt.name}</h5>
                    <span>${elt.value}$</span>
                </div>
            `
        })
        totalElement.innerHTML = total+'$'
    }

    function updateInput(type, sign) {
        let element = document.querySelector(`#${type}`)
        if (!element) return;
        let actualValue = parseInt(element.innerHTML);
        let newValue = 0
        if(type == 'radio') {
            newValue = eval(actualValue+sign+5)
        } else if(type == 'pushvocal') {
            newValue = eval(actualValue+sign+5000)
        } else if(type == 'ledauchan' || type == 'ledoutdoor') {
            newValue = eval(actualValue+sign+1)
        } else {
            newValue = eval(actualValue+sign+1000)
        }
        if (newValue >= 0) {
            element.innerHTML = newValue
            updateSinglePrice(type, newValue)
        }
    }
</script>