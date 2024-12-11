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
    

        closePopup.addEventListener('click', () => {
            popup.style.display = 'none';
        });
    
        window.addEventListener('click', (e) => {
            if (e.target === popup) {
                popup.style.display = 'none';
            }
        });
    });



    var search = window.location.search;
    // Remove the ? from the beginning if it exists
    if (search.charAt(0) === '?') {
        search = search.substring(1);
    }
    // Split the string by & to get all parameters
    var params = search.split('&');
    // Look for the redirect parameter
    var redirectSection = '';
    for (var i = 0; i < params.length; i++) {
        var param = params[i].split('=');
        if (param[0] === 'redirect') {
            redirectSection = param[1];
            break;
        }
    }
    // If we found a redirect parameter, perform the redirect
    if (redirectSection) {
        window.location.href = 'index.html#' + redirectSection;
    }


})();





