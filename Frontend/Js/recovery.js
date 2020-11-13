// Moviment animation
const card = document.querySelector('.card');
const container = document.querySelector('.container');

//Items 
const monster = document.querySelector('.monster img');
const title = document.querySelector('.info h1');
const subtitle = document.querySelector('.info h3');
const form = document.querySelector('.info form');
const back = document.querySelector('.back');

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
    monster.style.transform = "translateZ(150px)";
    title.style.transform = "translateZ(100px)";
    subtitle.style.transform = "translateZ(50px)";
    form.style.transform = "translateZ(50px)";
    back.style.transform = "translateZ(30px)";
});

// Animate Out
container.addEventListener('mouseleave', (e) => {
    card.style.transition = 'all 0.5s ease';
    card.style.transform = `rotateY(0deg) rotateX(0deg)`;

    //Animate Popup out
    monster.style.transform = "translateZ(0px)";
    monster.style.transition = 'all 0.5s ease';

    title.style.transform = "translateZ(0px)";
    title.style.transition = 'all 0.5s ease';

    subtitle.style.transform = "translateZ(0px)";
    subtitle.style.transition = 'all 0.5s ease';

    form.style.transform = "translateZ(0px)";
    form.style.transition = 'all 0.5s ease';

    back.style.transform = "translateZ(0px)";
    back.style.transition = 'all 0.5s ease';
});