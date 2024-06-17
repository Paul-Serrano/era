document.addEventListener('DOMContentLoaded', function() {
    const close = document.querySelector('.close-newsletter');
    const newsletter = document.querySelector('.newsletter-popup');

    close.addEventListener('click', function() {
        newsletter.classList.add('hidden');
    });
});