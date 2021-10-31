import KUTE from 'kute.js'

const bars = document.querySelector('.hamburger');
const nav = document.getElementById('adminnav');
const lines  = document.getElementById("lines");
const cross  = document.getElementById("cross");

var tween = KUTE.to(nav,{translateX:300});
var morph = KUTE.to(lines, {path: cross });

var tween2 = KUTE.to(nav,{translateX:-300});
var morph2 = KUTE.to(lines, {path: lines });

bars.addEventListener('click', function() {
    console.log("helloworld");

    if(nav.classList.contains("opened")) {
        nav.classList.remove('opened');
        tween2.start();
        morph2.start();
    }else {
        nav.classList.add("opened");
        tween.start();
        morph.start();
    }  
})