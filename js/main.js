(() => {
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    
        // Subscribe form handling with popup
        const subscribeForm = document.getElementById('subscribeForm');
        const popup = document.getElementById('thankYouPopup');
        const closePopup = document.querySelector('.close-popup');
    
        if (subscribeForm) {
            subscribeForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;
                popup.style.display = 'block';
                this.reset();
            });
        }
    
        // Close popup when clicking the close button or outside
        closePopup.addEventListener('click', () => {
            popup.style.display = 'none';
        });
    
        window.addEventListener('click', (e) => {
            if (e.target === popup) {
                popup.style.display = 'none';
            }
        });
    });



})();





