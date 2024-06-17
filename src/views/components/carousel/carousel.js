document.addEventListener('DOMContentLoaded', function() {
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
            const itemsPerSlide = window.innerWidth >= 768 ? 2 : 1; // 2 items for md and larger, 1 item for smaller screens
            const transformValue = index * 100 / itemsPerSlide;
            carousel.style.transform = `translateX(-${transformValue}%)`;
            currentIndex = index;
            updateIndicators(index);
        }

        function getMaxIndex() {
            const itemsPerSlide = window.innerWidth >= 768 ? 2 : 1;
            return Math.ceil(carouselItems / itemsPerSlide) - 1;
        }

        document.querySelector(nextButtonSelector).addEventListener('click', () => {
            const maxIndex = getMaxIndex();
            currentIndex = (currentIndex + 1) > maxIndex ? 0 : (currentIndex + 1);
            showSlide(currentIndex);
        });

        document.querySelector(prevButtonSelector).addEventListener('click', () => {
            const maxIndex = getMaxIndex();
            currentIndex = (currentIndex - 1) < 0 ? maxIndex : (currentIndex - 1);
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
                const maxIndex = getMaxIndex();
                if (Math.abs(diffX) > threshold) {
                    if (diffX > 0) {
                        // Swipe right (previous slide)
                        currentIndex = (currentIndex - 1) < 0 ? maxIndex : (currentIndex - 1);
                    } else {
                        // Swipe left (next slide)
                        currentIndex = (currentIndex + 1) > maxIndex ? 0 : (currentIndex + 1);
                    }
                    showSlide(currentIndex);
                }
            }
            // Reset values
            startX = null;
            endX = null;
        });

        // Update slides on window resize
        window.addEventListener('resize', () => {
            showSlide(currentIndex);
        });
    }

    initializeCarousel('.carousel-inner', '.next-carousel', '.prev-carousel', '.carousel-indicators .indicator-item');
});
