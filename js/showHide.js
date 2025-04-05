const history = document.getElementsByClassName("history");
const buttonHide = document.querySelectorAll(".buttonHide");
const Events = document.querySelectorAll(".Events");
buttonHide.forEach((element, index) => {
    element.addEventListener('click', function() {
        let current = history[index].style.display;
        buttonHide[index].innerText = current == 'none' ? 'Hide' : 'Show';
        history[index].style.display = current == 'none' ? 'block' : 'none';
    });
});