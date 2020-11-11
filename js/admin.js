// Moviment animation
const card = document.querySelector('.card');
const container = document.querySelector('.container');

//Items 
const title = document.querySelector('.info h1');
const subtitle = document.querySelector('.info h3');
const product = document.querySelector('.sections');

// Moving Animation Event
container.addEventListener('mousemove', (e) =>{
    let xAxis = (window.innerWidth / 2 - e.pageX) / 450;
    let yAxis = (window.innerWidth / 2 - e.pageY) / 450;
    card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});

// Animate In
container.addEventListener('mouseenter', (e) => {
    card.style.transition = 'none';

    //Animate Popup in
    title.style.transform = "translateZ(50px)";
    subtitle.style.transform = "translateZ(25px)";
    product.style.transform = "translateZ(15px)";
});

// Animate Out
container.addEventListener('mouseleave', (e) => {
    card.style.transition = 'all 0.5s ease';
    card.style.transform = `rotateY(0deg) rotateX(0deg)`;

    //Animate Popup out
    title.style.transform = "translateZ(0px)";
    title.style.transition = 'all 0.5s ease';

    subtitle.style.transform = "translateZ(0px)";
    subtitle.style.transition = 'all 0.5s ease';

    product.style.transform = "translateZ(0px)";
    product.style.transition = 'all 0.5s ease';
});