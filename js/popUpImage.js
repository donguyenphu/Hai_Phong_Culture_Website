// let closeUp = document.querySelector(".close"); 
// let popUpAll = document.querySelectorAll(".popUp");
// let popUpAllWrapper = document.querySelectorAll(".popUpWrapper");
// let popUpOnlyWrapper = document.querySelector(".popUpWrapper");
// let popUpOnly = document.querySelector(".popUp");
// let popUpImage = document.querySelector(".popUpImage");
// let imageOnlyNoJSMain = document.querySelector(".imageOnlyNoJSMain");



// imageOnlyNoJSMain.forEach(image => {
//    image.addEventListener('click', function() {
//         popUpOnly.style.display = 'block'; /// display visible
//         popUpImage.getAttribute('src'); /// get source
//    })
// });

// closeUp.addEventListener('click', function() {
//     popUpOnly.style.display = 'none';
// })



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
// closeUp.onclick = () => {
//     popUpImageOnlyWrapperOnly.style.display = 'none';
// }
closeUp.addEventListener('click', function() {
    popUpImageOnlyWrapperOnly.style.display = 'none';
});
