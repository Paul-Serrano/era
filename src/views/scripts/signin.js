const userLangSelect = document.getElementById('lang');
    const selectedLangsContainer = document.getElementById('selected-langs');
    const hiddenLangsContainer = document.getElementById('hidden-langs-container');

    if (userLangSelect && selectedLangsContainer && hiddenLangsContainer) {
        userLangSelect.addEventListener('change', function() {
            const selectedLang = userLangSelect.value;
            if (selectedLang) {
                // Vérifier si la langue est déjà sélectionné
                const existingLang = selectedLangsContainer.querySelectorAll('.selected-langs');
                let langAlreadySelected = false;
                existingLang.forEach(function(lang) {
                    const langName = lang.textContent.slice(0, -2); // Remove the " x" part
                    if (langName === selectedLang) {
                        langAlreadySelected = true;
                    }
                });

                if (!langAlreadySelected) {
                    // Créer un élément pour afficher le langue sélectionné
                    const langElement = document.createElement('span');
                    langElement.className = 'selected-langs bg-secondary p-2 rounded-xl text-white font-bold capitalize';
                    langElement.textContent = selectedLang + ' ';
                    
                    // Ajouter un bouton pour supprimer le langue sélectionné
                    const removeButton = document.createElement('button');
                    removeButton.textContent = 'x';
                    removeButton.addEventListener('click', function() {
                        selectedLangsContainer.removeChild(langElement);
                        hiddenLangsContainer.removeChild(hiddenField);
                        updateHiddenFields();
                    });

                    langElement.appendChild(removeButton);
                    selectedLangsContainer.appendChild(langElement);

                    // Créer un champ caché pour la langue sélectionné
                    const hiddenField = document.createElement('input');
                    hiddenField.type = 'hidden';
                    hiddenField.name = 'selectedLangs[]';
                    hiddenField.value = selectedLang;
                    hiddenLangsContainer.appendChild(hiddenField);

                    // Réinitialiser le select
                    userLangSelect.value = '';
                } else {
                    alert('Cette langue a déjà été sélectionné.');
                }
            }
        });

        function updateHiddenFields() {
            // Mettre à jour les champs cachés pour refléter les langues sélectionnés actuels
            const langs = [];
            const langElements = selectedLangsContainer.querySelectorAll('.selected-langs');
            hiddenLangsContainer.innerHTML = ''; // Clear existing hidden fields
            langElements.forEach(function(langElement) {
                const langName = langElement.textContent.slice(0, -2); // Remove the " x" part
                
                // Créer un champ caché pour chaque langues
                const hiddenField = document.createElement('input');
                hiddenField.type = 'hidden';
                hiddenField.name = 'selectedLangs[]';
                hiddenField.value = langName;
                hiddenLangsContainer.appendChild(hiddenField);
            });
        }
    } else {
        console.error('Required elements are missing from the DOM.');
    }