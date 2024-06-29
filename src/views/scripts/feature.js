let currentStep = 1;
const formData = {};

function nextStep() {
    if (currentStep < 12) {
        document.getElementById(`step${currentStep}`).style.display = 'none';
        currentStep++;
        document.getElementById(`step${currentStep}`).style.display = 'flex';
    }
}

function prevStep() {
    if (currentStep > 1) {
        document.getElementById(`step${currentStep}`).style.display = 'none';
        currentStep--;
        document.getElementById(`step${currentStep}`).style.display = 'flex';
    }
}

function submitForm() {
    // Collect form data
    formData.country = document.getElementById('country').value;
    formData.budgetTotal = document.getElementById('budgetTotal').value;
    formData.budgetPersonal = document.getElementById('budgetPersonal').value;
    formData.budgetLeisure = document.getElementById('budgetLeisure').value;
    formData.startDate = document.getElementById('startDate').value;
    formData.endDate = document.getElementById('endDate').value;

    // Validate the data (at least 5 fields must be filled)
    let filledFields = 0;
    for (let key in formData) {
        if (formData[key]) filledFields++;
    }

    if (filledFields < 5) {
        alert("Veuillez remplir au moins 5 champs.");
        return;
    }

    // Display the recap
    let recap = document.getElementById('recap');
    recap.innerHTML = JSON.stringify(formData, null, 2);

    nextStep(); // Proceed to loading step
    setTimeout(showRecommendations, 5000); // Simulate loading
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
                label.classList.add('border');
                label.classList.remove('text-white');
                label.classList.add('text-featureInput');
            });
            this.parentElement.parentElement.classList.add('bg-primary');
            this.parentElement.parentElement.classList.remove('border');
            this.parentElement.parentElement.classList.add('text-white');
            this.parentElement.parentElement.classList.remove('text-featureInput');
        });
    });

    checkButtons.forEach(check => {
        check.addEventListener('change', function() {
            if (this.checked) {
                this.parentElement.parentElement.classList.add('bg-primary');
                this.parentElement.parentElement.classList.remove('border');
                this.parentElement.parentElement.classList.add('text-white');
                this.parentElement.parentElement.classList.remove('text-featureInput');
            } else {
                this.parentElement.parentElement.classList.remove('bg-primary');
                this.parentElement.parentElement.classList.add('border');
                this.parentElement.parentElement.classList.remove('text-white');
                this.parentElement.parentElement.classList.add('text-featureInput');
            }
        });
    });
});
