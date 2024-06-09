document.getElementById('burger-menu').addEventListener('click', function() {
    var menu = document.getElementById('mobile-nav-links');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menu.classList.add('flex');
    } else {
        menu.classList.remove('flex');
        menu.classList.add('hidden');
    }
});