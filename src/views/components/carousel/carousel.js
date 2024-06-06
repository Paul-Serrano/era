    // JavaScript for carousel functionality (basic example)
    const carousel = document.querySelector('.carousel-inner');
    const carouselItems = carousel.children.length;
    let currentIndex = 0;

    document.querySelector('.next-carousel').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % carouselItems;
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    });

    document.querySelector('.prev-carousel').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + carouselItems) % carouselItems;
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    });