const bars = document.querySelector('.fa-bars');
const chevDown = document.querySelector('.fa-chevron-down');
const nav = document.querySelector('.ad-nav')

bars.addEventListener('click', function() {
    bars.style.display = "none";
    chevDown.style.display = "block";
})

chevDown.addEventListener('click', function() {
    chevDown.style.display = "none";
    bars.style.display = "block";
})
