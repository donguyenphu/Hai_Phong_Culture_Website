let popUpImageOnlyWrapperOnly = document.querySelector('.popUpImageOnlyWrapper'); 
let closeUp = document.querySelector('.close');
let popUpImageOnlyMainOnly = document.querySelector('.popUpImageOnlyMain');
let popUpImageOnlyMainAll = document.querySelectorAll('.popUpImageOnlyMain');
let eventsImageAll = document.querySelectorAll('.eventsImage');
let popUpImageOnlyWrapper = document.querySelector('.popUpImageOnlyWrapper');
eventsImageAll.forEach(element => {
    element.addEventListener('click', function() {
        popUpImageOnlyWrapper.style.display = 'block';
        popUpImageOnlyMainOnly.src = element.getAttribute("src");
    });
});
closeUp.addEventListener('click', function() {
    popUpImageOnlyWrapperOnly.style.display = 'none';
});
