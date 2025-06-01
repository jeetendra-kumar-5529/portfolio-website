// responsive navbar

const navList = document.querySelector('.navlist');
const menuBtn = document.querySelector('.ri-menu-line');

menuBtn.onclick = function(){
    navList.classList.toggle('active');
    menuBtn.classList.toggle('ri-arrow-up-double-line');
}



// fixed navbar

window.addEventListener('scroll', ()=>{
    document.querySelector('nav').classList.toggle("scrolling", scrollY > 50)
})

// Portfolio tabs

var portfolioTabs = document.getElementsByClassName('portfolio-tab');
var tabContents = document.getElementsByClassName('tab-content');

function tabOpen(x){
    for(portfolioTab of portfolioTabs){
        portfolioTab.classList.remove('active');
    }
    for(tabContent of tabContents){
        tabContent.classList.remove('active-content');
    }
    event.currentTarget.classList.add('active');
    document.getElementById(x).classList.add('active-content');
}

// theme toggler

let themeBtn = document.querySelector('#theme-btn');

themeBtn.onclick = function(){
    themeBtn.classList.toggle('ri-sun-line');
    if(themeBtn.classList.contains('ri-sun-line')){
        document.body.classList.add('active');
    } else {
        document.body.classList.remove('active');
    }
}

// Scroll Reveal Animation

const sr = ScrollReveal({
    distance: '80px',
    duration: 2500,
    delay: 200,
    reset: true,
});

sr.reveal('.home-container .left', {origin: 'top'});
sr.reveal('.home-container .right', {origin: 'left'});
sr.reveal('.about-container .right', {origin: 'top'});
sr.reveal('.about-container .left', {origin: 'left'});
sr.reveal('.services-container', {origin: 'bottom'});
sr.reveal('.portfolio-buttons', {origin: 'top'});
sr.reveal('.testimonial-container', {origin: 'bottom'});
sr.reveal('.contact-content', {origin: 'top'});
sr.reveal('.copyright', {origin: 'bottom'});

// Download CV

window.downloadCV = function() {
    const link = document.createElement('a');
    link.href = 'assets/cv/Jeetendra-kumar.pdf';
    link.download = 'Jeetendra-kumar.pdf';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

// Check if success query parameter is set
window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === '1') {
        Swal.fire({
            icon: 'success',
            title: 'Message Sent',
            text: 'Your message has been sent successfully!',
            confirmButtonColor: '#9b2fff'
        });

        // Remove query param from URL without reloading
        window.history.replaceState({}, document.title, window.location.pathname);
    }
}