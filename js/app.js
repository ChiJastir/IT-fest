
/* -- Copy button -- */
const copyButton = document.getElementById('copy-ip')
if(copyButton){
    copyButton.addEventListener('click', function(){
        // get attribute data-ip | получение атрибута data-ip (добавлен в html)
        const IP = copyButton.getAttribute('data-ip')

        // Write to clipboard | Запись в буфер обмена
        const WriteProccess = navigator.clipboard.writeText(IP)

        // On written -> show notify | После записи - показываем уведомление
        WriteProccess.then(function(){
            alert('IP адрес успешно скопирован')
        })
    })
}

/* -- Mods slider -- */
const slider = document.getElementById('modifications-slider')
const sliderInstance = new ChiefSlider(slider, {
    autoplay: true
})

const sliderPrevBtn = slider.querySelector('.slider-controls button[data-slide="prev"]')
const sliderNextBtn = slider.querySelector('.slider-controls button[data-slide="next"]')

if(sliderPrevBtn) sliderPrevBtn.addEventListener('click', () => sliderInstance._moveToPrev())
if(sliderNextBtn) sliderNextBtn.addEventListener('click', () => sliderInstance._moveToNext())


const line = document.getElementsByClassName('online-line')[0]

function loadLine(){line.style.width = line.dataset.percent};