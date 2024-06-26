document.addEventListener('DOMContentLoaded', function() {
    const sectionSelect = document.getElementById('sectionSelect');
            const userSection = document.getElementById('userSection');
            const blogSection = document.getElementById('blogSection');

            sectionSelect.addEventListener('change', function() {
                if (sectionSelect.value === 'user') {
                    userSection.classList.remove('hidden');
                    blogSection.classList.add('hidden');
                } else if (sectionSelect.value === 'blog') {
                    blogSection.classList.remove('hidden');
                    userSection.classList.add('hidden');
                }
            });

            // Afficher la section "User" par défaut au chargement
            userSection.classList.remove('hidden');
            blogSection.classList.add('hidden');

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
                    tagElement.className = 'selected-tag bg-secondary p-2 rounded-xl text-white font-bold';
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

    tinymce.init({
        selector: '#contentArticleTextarea',
        height: 350,
        setup: (editor) => {
            editor.ui.registry.addContextToolbar('imagealignment', {
            predicate: (node) => node.nodeName.toLowerCase() === 'img',
            items: 'alignleft aligncenter alignright',
            position: 'node',
            scope: 'node'
            });

            editor.ui.registry.addContextToolbar('textselection', {
            predicate: (node) => !editor.selection.isCollapsed(),
            items: 'bold italic | blockquote',
            position: 'selection',
            scope: 'node'
            });
        },
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });

    tinymce.init({
        selector: '#newContentArticleTextarea',
        height: 350,
        setup: (editor) => {
            editor.ui.registry.addContextToolbar('imagealignment', {
            predicate: (node) => node.nodeName.toLowerCase() === 'img',
            items: 'alignleft aligncenter alignright',
            position: 'node',
            scope: 'node'
            });

            editor.ui.registry.addContextToolbar('textselection', {
            predicate: (node) => !editor.selection.isCollapsed(),
            items: 'bold italic | blockquote',
            position: 'selection',
            scope: 'node'
            });
        },
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });


});

function editArticle(title, content, tags, id) {
    document.getElementById('updateArticleForm').style.display = 'flex';
    tinymce.get('newContentArticleTextarea').setContent(content);
    document.getElementById('newArticleTitle').value = title;
    document.getElementById('newArticleId').value = id;
    const selectedTags = document.getElementById('new-selected-tags');
    const newSelectedTagsContainer = document.getElementById('new-selected-tags');
    const newHiddenFieldsContainer = document.getElementById('new-hidden-fields-container');
    selectedTags.replaceChildren('');
    tags.forEach((tag) => {
        const savedTagElement = document.createElement('span');
        savedTagElement.className = 'new-selected-tag bg-secondary p-2 rounded-xl text-white font-bold';
        savedTagElement.textContent = tag + ' ';

        const newRremoveButton = document.createElement('button');
        newRremoveButton.textContent = 'x';
        newRremoveButton.addEventListener('click', function() {
            newSelectedTagsContainer.removeChild(savedTagElement);
            newHiddenFieldsContainer.removeChild(newUpdateHiddenFields());
            });
        savedTagElement.appendChild(newRremoveButton);
        selectedTags.appendChild(savedTagElement);
        }  
    );
    newUpdateHiddenFields();

}

function newUpdateHiddenFields() {
    const newTags = [];
    const newTagElements = newSelectedTagsContainer.querySelectorAll('.new-selected-tag');
    newHiddenFieldsContainer.innerHTML = '';
    newTagElements.forEach(function(newTagElement) {
        const newTagName = newTagElement.textContent.slice(0, -2);
        const newHiddenField = document.createElement('input');
        newHiddenField.type = 'hidden';
        newHiddenField.name = 'newSelectedTags[]';
        newHiddenField.value = newTagName;
        newHiddenFieldsContainer.appendChild(newHiddenField);
    });

    return newHiddenField;
}

const newArticleTagSelect = document.getElementById('newArticleTags');
const newSelectedTagsContainer = document.getElementById('new-selected-tags');
const newHiddenFieldsContainer = document.getElementById('new-hidden-fields-container');

if (newArticleTagSelect && newSelectedTagsContainer && newHiddenFieldsContainer) {
    newArticleTagSelect.addEventListener('change', function() {
        const newSelectedTag = newArticleTagSelect.value;
        if (newSelectedTag) {
            // Vérifier si le tag est déjà sélectionné
            const newExistingTags = newSelectedTagsContainer.querySelectorAll('.new-selected-tag');
            let newTagAlreadySelected = false;
            newExistingTags.forEach(function(tagElement) {
                const newTagName = tagElement.textContent.slice(0, -2); // Remove the " x" part
                if (newTagName === newSelectedTag) {
                    newTagAlreadySelected = true;
                }
            });

            if (!newTagAlreadySelected) {
                // Créer un élément pour afficher le tag sélectionné
                const newTagElement = document.createElement('span');
                newTagElement.className = 'new-selected-tag bg-secondary p-2 rounded-xl text-white font-bold';
                newTagElement.textContent = newSelectedTag + ' ';
                
                // Ajouter un bouton pour supprimer le tag sélectionné
                const newRemoveButton = document.createElement('button');
                newRemoveButton.textContent = 'x';
                newRemoveButton.addEventListener('click', function() {
                    newSelectedTagsContainer.removeChild(newTagElement);
                    newHiddenFieldsContainer.removeChild(newHiddenField);
                    updateNewHiddenFields();
                });

                newTagElement.appendChild(newRemoveButton);
                newSelectedTagsContainer.appendChild(newTagElement);

                // Créer un champ caché pour le tag sélectionné
                const newHiddenField = document.createElement('input');
                newHiddenField.type = 'hidden';
                newHiddenField.name = 'newSelectedTags[]';
                newHiddenField.value = newSelectedTag;
                newHiddenFieldsContainer.appendChild(newHiddenField);

                // Réinitialiser le select
                newArticleTagSelect.value = '';
            } else {
                alert('Ce tag a déjà été sélectionné.');
            }
        }
    });

    function updateNewHiddenFields() {
        // Mettre à jour les champs cachés pour refléter les tags sélectionnés actuels
        const newTags = [];
        const newTagElements = newSelectedTagsContainer.querySelectorAll('.selected-tag');
        newHiddenFieldsContainer.innerHTML = ''; // Clear existing hidden fields
        newTagElements.forEach(function(newTagElements) {
            const newTagName = newTagElements.textContent.slice(0, -2); // Remove the " x" part
            
            // Créer un champ caché pour chaque tag
            const newHiddenField = document.createElement('input');
            newHiddenField.type = 'hidden';
            newHiddenField.name = 'newSelectedTags[]';
            newHiddenField.value = tagName;
            newHiddenFieldsContainer.appendChild(newHiddenField);
        });
    }
} else {
    console.error('Required elements are missing from the DOM.');
}



