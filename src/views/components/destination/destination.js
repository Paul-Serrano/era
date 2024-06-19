document.addEventListener('DOMContentLoaded', function() {
    const btns = document.querySelectorAll('.dropdownBtn');
    const contents = document.querySelectorAll('.dropdownContent');

    btns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            contents[index].classList.toggle('hidden');
            contents[index].classList.toggle('active');
        });
    });
});
