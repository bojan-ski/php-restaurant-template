let backToTopBtn = document.querySelector('.back-to-top-feature svg');
let backToTopContainer = document.querySelector('.back-to-top-feature');

let scrollTimer;

window.addEventListener('scroll', function () {
    backToTopContainer.classList.remove('hidden');
    clearTimeout(scrollTimer);
    
    scrollTimer = setTimeout(() => {
        backToTopContainer.classList.add('hidden');
    }, 2000);
});

backToTopBtn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
