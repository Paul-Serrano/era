function initializeCarousel(carouselSelector, nextButtonSelector, prevButtonSelector, indicatorSelector) {
    const carousel = document.querySelector(carouselSelector);
    const carouselItems = carousel.children.length;
    let currentIndex = 0;

    const indicators = document.querySelectorAll(indicatorSelector);

    function updateIndicators(index) {
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('opacity-100', i === index);
            indicator.classList.toggle('opacity-50', i !== index);
        });
    }

    function showSlide(index) {
        carousel.style.transform = `translateX(-${index * 100}%)`;
        currentIndex = index;
        updateIndicators(index);
    }

    document.querySelector(nextButtonSelector).addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % carouselItems;
        showSlide(currentIndex);
    });

    document.querySelector(prevButtonSelector).addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + carouselItems) % carouselItems;
        showSlide(currentIndex);
    });

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            showSlide(index);
        });
    });

    // Initialize
    showSlide(0);

    // Swipe support
    let startX, endX;
    const threshold = 50; // Minimum distance in pixels to consider it a swipe

    carousel.addEventListener('touchstart', (event) => {
        startX = event.touches[0].clientX;
    });

    carousel.addEventListener('touchmove', (event) => {
        endX = event.touches[0].clientX;
    });

    carousel.addEventListener('touchend', () => {
        if (startX && endX) {
            const diffX = endX - startX;
            if (Math.abs(diffX) > threshold) {
                if (diffX > 0) {
                    // Swipe right (previous slide)
                    currentIndex = (currentIndex - 1 + carouselItems) % carouselItems;
                } else {
                    // Swipe left (next slide)
                    currentIndex = (currentIndex + 1) % carouselItems;
                }
                showSlide(currentIndex);
            }
        }
        // Reset values
        startX = null;
        endX = null;
    });
}

initializeCarousel('.carousel-offer-inner', '.next-carousel-offer', '.prev-carousel-offer', '.carousel-offer-indicators .offer-indicator-item');
initializeCarousel('.carousel-offer-inner2', '.next-carousel-offer2', '.prev-carousel-offer2', '.carousel-offer-indicators2 .offer-indicator-item');
