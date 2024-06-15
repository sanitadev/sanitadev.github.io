let menu = document.querySelector('.menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    navbar.classList.toggle('open-menu');
    menu.classList.toggle('move');
}

window.onscroll = () => {
    navbar.classList.remove('open-menu');
    menu.classList.remove('move');
}

  
 document.getElementById('contact-form').addEventListener('submit', function(event) {
        let isValid = true;

        // Full name validation
        const fullName = document.querySelector('.fname').value.trim();
        if (fullName.length === 0 || fullName.length > 100) {
            alert('Please enter a valid full name (1-100 characters).');
            isValid = false;
        }

        // Email validation
        const email = document.querySelector('.email').value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address.');
            isValid = false;
        }

        // Subject validation
        const subject = document.querySelector('.subject').value.trim();
        if (subject.length === 0 || subject.length > 100) {
            alert('Please enter a valid subject (1-100 characters).');
            isValid = false;
        }

        // Message validation
        const message = document.querySelector('.message').value.trim();
        if (message.length === 0) {
            alert('Please enter a message.');
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });

  
