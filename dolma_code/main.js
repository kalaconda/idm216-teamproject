// TEXT
const title = document.getElementById('title');
const anna = document.getElementById('anna');
const dolma = document.getElementById('dolma');
const reid = document.getElementById('reid');
const victoria = document.getElementById('victoria');
const leanne = document.getElementById('leanne');
const mikayla = document.getElementById('mikayla');

//IMAGES
const annabtn = document.getElementById('anna-btn');
const dolmabtn = document.getElementById('dolma-btn');
const reidbtn = document.getElementById('reid-btn');
const victoriabtn = document.getElementById('victoria-btn');
const leannebtn = document.getElementById('leanne-btn');
const mikaylabtn = document.getElementById('mikayla-btn');

const bg = document.getElementById('bg');



var box = title; //info-box
box.hidden = false;

function description (member) {
    box.hidden = true;
    box = member;
    box.hidden = false;
}
annabtn.addEventListener('mouseover', function() {description(anna)});
dolmabtn.addEventListener('mouseover', function() {description(dolma)});
reidbtn.addEventListener('mouseover', function() {description(reid)});
victoriabtn.addEventListener('mouseover', function() {description(victoria)});
leannebtn.addEventListener('mouseover', function() {description(leanne)});
mikaylabtn.addEventListener('mouseover', function() {description(mikayla)});
bg.addEventListener('mouseover', function() {description(title)});


