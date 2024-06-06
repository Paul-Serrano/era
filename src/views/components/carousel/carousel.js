function initializeCarousel(carouselSelector, nextButtonSelector, prevButtonSelector) {
    const carousel = document.querySelector(carouselSelector);
    const carouselItems = carousel.children.length;
    let currentIndex = 0;

    document.querySelector(nextButtonSelector).addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % carouselItems;
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    });

    document.querySelector(prevButtonSelector).addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + carouselItems) % carouselItems;
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    });
}

initializeCarousel('.carousel-inner', '.next-carousel', '.prev-carousel');
initializeCarousel('.carousel-inner2', '.next-carousel2', '.prev-carousel2');
