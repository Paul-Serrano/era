document.addEventListener('DOMContentLoaded', function() {
    const articleTagSelect = document.getElementById('articleTag');
    const selectedTagsContainer = document.getElementById('selected-tags');
    const hiddenFieldsContainer = document.getElementById('hidden-fields-container');

    if (articleTagSelect && selectedTagsContainer && hiddenFieldsContainer) {
        articleTagSelect.addEventListener('change', function() {
            const selectedTag = articleTagSelect.value;
            if (selectedTag) {
                // Vérifier si le tag est déjà sélectionné
                const existingTags = selectedTagsContainer.querySelectorAll('.selected-tag');
                let tagAlreadySelected = false;
                existingTags.forEach(function(tagElement) {
                    const tagName = tagElement.textContent.slice(0, -2); // Remove the " x" part
                    if (tagName === selectedTag) {
                        tagAlreadySelected = true;
                    }
                });

                if (!tagAlreadySelected) {
                    // Créer un élément pour afficher le tag sélectionné
                    const tagElement = document.createElement('span');
                    tagElement.className = 'selected-tag';
                    tagElement.textContent = selectedTag + ' ';
                    
                    // Ajouter un bouton pour supprimer le tag sélectionné
                    const removeButton = document.createElement('button');
                    removeButton.textContent = 'x';
                    removeButton.addEventListener('click', function() {
                        selectedTagsContainer.removeChild(tagElement);
                        hiddenFieldsContainer.removeChild(hiddenField);
                        updateHiddenFields();
                    });

                    tagElement.appendChild(removeButton);
                    selectedTagsContainer.appendChild(tagElement);

                    // Créer un champ caché pour le tag sélectionné
                    const hiddenField = document.createElement('input');
                    hiddenField.type = 'hidden';
                    hiddenField.name = 'selectedTags[]';
                    hiddenField.value = selectedTag;
                    hiddenFieldsContainer.appendChild(hiddenField);

                    // Réinitialiser le select
                    articleTagSelect.value = '';
                } else {
                    alert('Ce tag a déjà été sélectionné.');
                }
            }
        });

        function updateHiddenFields() {
            // Mettre à jour les champs cachés pour refléter les tags sélectionnés actuels
            const tags = [];
            const tagElements = selectedTagsContainer.querySelectorAll('.selected-tag');
            hiddenFieldsContainer.innerHTML = ''; // Clear existing hidden fields
            tagElements.forEach(function(tagElement) {
                const tagName = tagElement.textContent.slice(0, -2); // Remove the " x" part
                
                // Créer un champ caché pour chaque tag
                const hiddenField = document.createElement('input');
                hiddenField.type = 'hidden';
                hiddenField.name = 'selectedTags[]';
                hiddenField.value = tagName;
                hiddenFieldsContainer.appendChild(hiddenField);
            });
        }
    } else {
        console.error('Required elements are missing from the DOM.');
    }
});
