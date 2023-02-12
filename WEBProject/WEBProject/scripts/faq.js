const accordions = document.querySelectorAll(".accordion");

accordions.forEach((accordion, index) => {
    accordion.addEventListener('click', (event) => {
        if (event.target.classList.contains('active')) {
            event.target.classList.remove('active');
            event.target.nextElementSibling.classList.remove('active');
        } else {
            event.target.classList.add('active');
            event.target.nextElementSibling.classList.add('active');
        }
    });
});