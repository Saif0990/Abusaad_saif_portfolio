document.addEventListener('DOMContentLoaded', () => {
    // Add scroll-animate class to elements we want to animate
    const elementsToAnimate = [
        '.project-card',
        '.contact-content > div'
    ];

    elementsToAnimate.forEach(selector => {
        document.querySelectorAll(selector).forEach((element, index) => {
            element.classList.add('scroll-animate');
            element.classList.add(`delay-${index + 1}`);
        });
    });

    // Check if element is in viewport
    const isInViewport = (element) => {
        const rect = element.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.8 &&
            rect.bottom >= 0
        );
    };

    // Handle scroll animation
    const handleScroll = () => {
        document.querySelectorAll('.scroll-animate').forEach(element => {
            if (isInViewport(element)) {
                element.classList.add('active');
            }
        });
    };

    // Initial check for elements in viewport
    handleScroll();

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
});