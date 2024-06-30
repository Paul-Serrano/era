let currentStep = 1;
const formData = {
    preferences: {}, // Données obligatoires
    habits: [] // Données optionnelles
};

function nextStep() {
    if(currentStep == 2) {
        if(
            document.getElementById('country').value.length === 0 ||  document.getElementById('budgetTotal').length === 0 || 
            document.getElementById('budgetPersonal').length === 0 || document.getElementById('budgetLeisure').length === 0 || 
            document.getElementById('startDate').length === 0 || document.getElementById('endDate').length === 0
        ) {
            alert('Veuillez renseigner tous les champs svp');
            return;
        }
    }
    if(currentStep < 10) saveStepData(currentStep);
    if (currentStep < 12) {
        document.getElementById(`step${currentStep}`).style.display = 'none';
        currentStep++;
        document.getElementById(`step${currentStep}`).style.display = 'flex';
    }

    if (currentStep === 10) {
        displayRecap(); // Affiche le récapitulatif
    }

    if (currentStep === 11) {
        setTimeout(() => {
            nextStep(); // Affiche le récapitulatif après 5 secondes
        }, 5000);
    }
}

function prevStep() {
    if (currentStep > 1) {
        document.getElementById(`step${currentStep}`).style.display = 'none';
        currentStep--;
        document.getElementById(`step${currentStep}`).style.display = 'flex';
    }
}

function goToStep(step) {
    document.getElementById(`step${currentStep}`).style.display = 'none';
    currentStep = step;
    document.getElementById(`step${currentStep}`).style.display = 'flex';
}

function submitForm() {
    nextStep();
}

function displayRecap() {
    document.getElementById('recapBudgetTotal').innerText = formData.preferences.budgetTotal + '€';
    document.getElementById('destination').innerText = formData.preferences.country;
    document.getElementById('recapBudgetLeisure').innerText = formData.preferences.budgetLeisure + '€';
    document.getElementById('recapBudgetPersonal').innerText = formData.preferences.budgetPersonal + '€';
    document.getElementById('recapStartDate').innerText = formData.preferences.startDate;
    document.getElementById('recapEndDate').innerText = formData.preferences.endDate;

    let recap = document.getElementById('recap');

    // Section Vos habitudes de vie
    let habitsSection = document.createElement('div');
    habitsSection.className = 'my-4';

    let habitsTitle = document.createElement('h5');
    habitsTitle.textContent = 'Vos habitudes de vie :';
    habitsTitle.className = 'text-lg font-bold';
    habitsSection.appendChild(habitsTitle);

    let contentSection = document.createElement('div');
    contentSection.className = 'flex flex-col justify-evenly bg-secondary p-5 rounded-2xl';
    habitsSection.appendChild(contentSection);

    // Ajout des champs d'habitudes de vie
    for (let habit in formData.habits) {
        let habitDiv = document.createElement('div');
        habitDiv.className = 'flex flex-col justify-between p-2 border-b my-5';
    
        let habitNameSection = document.createElement('div');
        habitNameSection.className = 'flex items-center justify-between';
    
        let habitName = document.createElement('h3');
        habitName.className = 'capitalize font-bold';
        habitName.textContent = habit.replace(/([A-Z])/g, ' $1').toLowerCase();
    
        let habitValue = document.createElement('div');
        habitValue.className = 'grid grid-cols-2';
    
        if (Array.isArray(formData.habits[habit])) {
            for (let item of formData.habits[habit]) {
                let itemDiv = document.createElement('span');
                itemDiv.className = 'capitalize text-center bg-white rounded-full p-2 my-2 m-auto w-[90%]';
                itemDiv.textContent = item;
                habitValue.appendChild(itemDiv);
            }
        } else {
            habitValue.textContent = formData.habits[habit];
            habitValue.className = 'capitalize text-center bg-white rounded-full p-2 my-2 m-auto w-[90%]';
        }
    
        let editButton = document.createElement('button');
        editButton.className = 'bg-black p-2 rounded-xl text-white';
        editButton.textContent = 'Modifier';
        editButton.onclick = () => goToStep(getStepForField(habit));
    
        habitNameSection.appendChild(habitName);
        habitNameSection.appendChild(editButton);
        habitDiv.appendChild(habitNameSection);
        habitDiv.appendChild(habitValue);
    
        contentSection.appendChild(habitDiv);
    }
    
    recap.appendChild(habitsSection);
}

// Fonction utilitaire pour retourner le numéro d'étape en fonction du champ spécifique
function getStepForField(field) {
    switch (field) {
        case 'gender':
            return 4;
        case 'diet':
        case 'allergy':
            return 5;
        case 'religion':
            return 6;
        case 'health':
            return 7;
        case 'sport':
        case 'leisure':
            return 8;
        case 'transport':
            return 9;
        default:
            return 2;
    }
}


function saveStepData(step) {
    switch(step) {
        case 2:
            formData.preferences = {
                country: document.getElementById('country').value,
                budgetTotal: document.getElementById('budgetTotal').value,
                budgetPersonal: document.getElementById('budgetPersonal').value,
                budgetLeisure: document.getElementById('budgetLeisure').value,
                startDate: document.getElementById('startDate').value,
                endDate: document.getElementById('endDate').value
            };
            break;
        case 4:
            formData.habits['gender'] = document.querySelector('input[name="gender"]:checked').value;
            break;
        case 5: 
            formData.habits['diet'] = getCheckedValues('diet');
            formData.habits['allergy'] = getCheckedValues('allergy');
            break;
        case 6:
            formData.habits['religion'] = document.querySelector('input[name="religion"]:checked').value
            break;
        case 7:
            formData.habits['health'] = getCheckedValues('health');
            break;
        case 8:
            formData.habits['sport'] = getCheckedValues('sport');
            formData.habits['leisure'] = getCheckedValues('leisure');
            break;
        case 9:
            formData.habits['transport'] = getCheckedValues('transport');
            break;
        // Ajoutez les cases pour d'autres étapes si nécessaire
    }
}

function getCheckedValues(name) {
    let checkedValues = [];
    let checkboxes = document.querySelectorAll(`input[name="${name}"]:checked`);
    checkboxes.forEach(checkbox => {
        checkedValues.push(checkbox.value);
    });
    return checkedValues;
}

function showRecommendations() {
    document.getElementById(`step11`).style.display = 'none';
    document.getElementById(`step12`).style.display = 'flex';
    
    // Display recommendations (fictitious for now)
    let recommendations = document.getElementById('recommendations');
    recommendations.innerHTML = `
        <h3>Taux de confort</h3>
        <div>Qualité de vie: 80%</div>
        <div>Loisir: 70%</div>
        <div>Restauration: 60%</div>
        <div>Professionnel: 90%</div>
        <h3>Votre train de vie</h3>
        <p>Lorem ipsum dolor sit amet...</p>
        <h3>Logement</h3>
        <p>Lorem ipsum dolor sit amet...</p>
        <h3>Alimentation</h3>
        <p>Lorem ipsum dolor sit amet...</p>
        <h3>Transport</h3>
        <p>Lorem ipsum dolor sit amet...</p>
        <h3>Internet et communauté</h3>
        <p>Lorem ipsum dolor sit amet...</p>
        <h3>Divertissement et loisirs</h3>
        <p>Lorem ipsum dolor sit amet...</p>
        <h3>Santé et bien-être</h3>
        <p>Lorem ipsum dolor sit amet...</p>
        <h3>Autres dépenses</h3>
        <p>Lorem ipsum dolor sit amet...</p>
    `;
}

document.addEventListener('DOMContentLoaded', function() {
    const radioButtons = document.querySelectorAll('input[type="radio"]');
    const checkButtons = document.querySelectorAll('input[type="checkbox"]');
    const labels = document.querySelectorAll('label');

    radioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            labels.forEach(label => {
                label.classList.remove('bg-primary');
                label.classList.add('border-featureInput');
                label.classList.remove('border-primary');
                label.classList.remove('text-white');
                label.classList.add('text-featureInput');
            });
            this.parentElement.parentElement.classList.add('bg-primary');
            this.parentElement.parentElement.classList.remove('border-featureInput');
            this.parentElement.parentElement.classList.add('border-primary');
            this.parentElement.parentElement.classList.add('text-white');
            this.parentElement.parentElement.classList.remove('text-featureInput');
        });
    });

    checkButtons.forEach(check => {
        check.addEventListener('change', function() {
            if (this.checked) {
                this.parentElement.parentElement.classList.add('bg-primary');
                this.parentElement.parentElement.classList.remove('border-featureInput');
                this.parentElement.parentElement.classList.add('border-primary');
                this.parentElement.parentElement.classList.add('text-white');
                this.parentElement.parentElement.classList.remove('text-featureInput');
            } else {
                this.parentElement.parentElement.classList.remove('bg-primary');
                this.parentElement.parentElement.classList.add('border-featureInput');
                this.parentElement.parentElement.classList.remove('border-primary');
                this.parentElement.parentElement.classList.remove('text-white');
                this.parentElement.parentElement.classList.add('text-featureInput');
            }
        });
    });
});
