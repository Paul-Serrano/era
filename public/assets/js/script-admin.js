document.addEventListener("DOMContentLoaded", function() {
    const adminLinks = document.querySelectorAll('.admin-link');

    adminLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Pour empêcher le lien de suivre le href

            // Masquer tous les divs
            hideAllDivs();

            // Récupérer le href du lien cliqué
            const href = this.getAttribute('href');

            // Afficher le div correspondant
            document.querySelector(href + 'Div').style.display = 'block';
        });
    });
});