const homeButton = document.getElementById('homeButton');
const toolsButton = document.getElementById('toolsButton');
const forumButton = document.getElementById('forumButton');

const purchaseSection = document.getElementById('purchaseSection');
const featureSection = document.getElementById('featureSection');
const forumSection = document.getElementById('forumSection');

// Fonction pour afficher la section sélectionnée et masquer les autres
function showSection(sectionToShow) {
    // Masquer toutes les sections
    purchaseSection.classList.add('hidden');
    featureSection.classList.add('hidden');
    forumSection.classList.add('hidden');

    // Afficher la section sélectionnée
    sectionToShow.classList.remove('hidden');
}

// Ajouter des écouteurs d'événements aux boutons
homeButton.addEventListener('click', () => showSection(purchaseSection));
toolsButton.addEventListener('click', () => showSection(featureSection));
forumButton.addEventListener('click', () => showSection(forumSection));