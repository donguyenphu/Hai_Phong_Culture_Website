const history = document.getElementsByClassName("history");
const buttonHide = document.querySelectorAll(".buttonHide");
buttonHide.forEach((element, index) => {
  element.addEventListener('click', function () {
    const item = history[index];
    const isHidden = item.style.display === "none";
    buttonHide[index].innerText = isHidden ? 'Hide' : 'Show';
    item.style.transition = "opacity 0.5s ease, transform 0.5s ease";
    if (isHidden) {
      item.style.display = "block";
      requestAnimationFrame(() => {
        item.style.opacity = "1";
        item.style.transform = "scale(1)";
      });
    } else {
      item.style.opacity = "0";
      item.style.transform = "scale(0.9)";
      item.addEventListener("transitionend", function handler() {
        item.style.display = "none";
        item.removeEventListener("transitionend", handler);
      });
    }
  });
});
