document.addEventListener("DOMContentLoaded", function() {
    const langSelect = document.getElementById('lang');
    const selectedLangsContainer = document.getElementById('new-selected-langs');
    const hiddenLangsContainer = document.getElementById('new-hidden-langs-container');

    // Ajouter une langue à partir du select
    langSelect.addEventListener('change', function() {
        const selectedLang = langSelect.value;
        if (selectedLang) {
            addLang(selectedLang);
            langSelect.value = ""; // Reset the select element
        }
    });

    // Fonction pour ajouter une langue
    function addLang(lang) {
        // Vérifier si la langue est déjà ajoutée
        if (document.querySelector(`input[name="newSelectedLangs[]"][value="${lang}"]`)) {
            alert('Cette langue est déjà ajoutée.');
            return;
        }

        // Ajouter la langue à l'affichage visuel
        const span = document.createElement('span');
        span.className = 'w-auto capitalize new-selected-tag bg-secondary p-2 rounded-xl text-white font-bold flex items-center my-2';
        span.innerHTML = `${lang} <button class="ml-5">x</button>`;
        span.querySelector('button').addEventListener('click', function() {
            removeLang(lang, span);
        });
        selectedLangsContainer.appendChild(span);

        // Ajouter la langue au conteneur caché
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'newSelectedLangs[]';
        input.value = lang;
        hiddenLangsContainer.appendChild(input);
    }

    // Fonction pour supprimer une langue
    function removeLang(lang, spanElement) {
        // Supprimer l'élément visuel
        spanElement.remove();

        // Supprimer l'élément caché
        const hiddenInput = document.querySelector(`input[name="newSelectedLangs[]"][value="${lang}"]`);
        if (hiddenInput) {
            hiddenInput.remove();
        }
    }

    // Ajouter des événements de suppression pour les langues initiales
    document.querySelectorAll('#new-selected-langs span').forEach(span => {
        const lang = span.textContent.trim().replace(' x', ''); // Pour extraire uniquement le nom de la langue sans le " x" (bouton)
        span.querySelector('button').addEventListener('click', function() {
            removeLang(lang, span);
        });
    });
});