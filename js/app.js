/* -- Copy button -- */
const copyButton = document.getElementById('copy-ip')
if(copyButton){
    copyButton.addEventListener('click', function(){
        const IP = copyButton.getAttribute('data-ip')
        const WriteProccess = navigator.clipboard.writeText(IP)

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

/* -- Appearance and line -- */
let elems = document.getElementsByClassName('transparency')
elems = Array.from(elems)
let line = document.getElementsByClassName('online-line')[0]

function loadLine(){if (line.getBoundingClientRect().top < document.documentElement.clientHeight - 200) {line.style.width = line.dataset.percent}}

window.addEventListener('scroll', function() {
    const height = document.documentElement.clientHeight

    for (let indexElement in elems) {
        const obj = elems[indexElement]

        if (obj.getBoundingClientRect().top < height - 150) {
            obj.classList.add('appearance')
        } else {
            obj.classList.remove('appearance')
        }
    }

    if (line.getBoundingClientRect().top < height - 200) {
        line.style.width = line.dataset.percent
    }
});