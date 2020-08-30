// For the Description Box that we are not implementing anymore
// Might tbe useful in future, so don't delete
//
// const toggleModal = () => {
//     document.querySelector('.modal')
//         .classList.toggle('modal--hidden');
// }

// document.querySelector('#long_click')
//     .addEventListener('click', toggleModal);

// document.querySelector('.modal')
//     .addEventListener('click', toggleModal);



//Draging Tutorial from https://www.youtube.com/watch?v=C9EWifQ5xqA
const thumbnail = document.querySelectorAll('.scroll');
var i;

for (i = 0; i < thumbnail.length; i++) {

    const slider = thumbnail[i];
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false; 
        slider.classList.remove('active');

    });
    slider.addEventListener('mouseup', () => {
        isDown = false;   
        slider.classList.remove('active');
    
    });
    slider.addEventListener('mousemove', (e) => {
        if(!isDown) return; //stop the function from running
        console.count(isDown);   
        console.log(startX);
        const x = e.pageX - slider.offsetLeft;
        // console.log({x, startX});
        const walk = (x - startX) * 2;
        slider.scrollLeft = scrollLeft - walk;  
    });

}