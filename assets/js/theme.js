console.log('Theme JS loaded');

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM ready');
    
    const menuToggle = document.querySelector('.easybiz-menu-toggle');
    const nav = document.querySelector('.easybiz-nav');
    
    console.log('Menu toggle:', menuToggle);
    console.log('Nav:', nav);
    
    if (menuToggle && nav) {
        menuToggle.addEventListener('click', function() {
            console.log('Menu clicked');
            nav.classList.toggle('active');
        });
    }
});