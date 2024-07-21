document.addEventListener("DOMContentLoaded", function() {
    const viewportWidth = window.innerWidth;

    // Destroy the existing carousel instance if it exists
    const myCarousel = document.querySelector('#myCarousel');
    if (myCarousel) {
        const carouselInstance = bootstrap.Carousel.getInstance(myCarousel);
        if (carouselInstance) {
            carouselInstance.dispose();
        }
    }

    // Set the image sources with the correct width parameter
    document.querySelectorAll('.carousel-item img').forEach(img => {
        const originalSrc = img.getAttribute('data-src');
        if (originalSrc) {
            const separator = originalSrc.includes('?') ? '&' : '?';
            img.setAttribute('src', `${originalSrc}${separator}w=${viewportWidth}`);
        }
    });

    // Reinitialize the carousel
    new bootstrap.Carousel(myCarousel);
});
