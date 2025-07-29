(function () {
    emailjs.init("tbKcbuF7jmwEaWOYi"); // Replace with your EmailJS public key
})();

let contactForm = document.getElementById('contact-form');
let nameValue = document.getElementById("name");
let emailValue = document.getElementById("email");
let subjectValue = document.getElementById("subject");
let messageValue = document.getElementById("message");

contactForm.addEventListener('submit', function (event) {
    event.preventDefault();

    let info = {
        name: nameValue.value,
        email: emailValue.value,
        subject: subjectValue.value,
        message: messageValue.value,
    };

    emailjs.send('service_z58yzuf', 'template_ynzcp77', info)
        .then(function () {
            alert('Your message has been sent!');
            contactForm.reset();
        }, function (error) {
            alert('Failed to send: ' + JSON.stringify(error));
        });
});
