let closeUp = document.querySelector(".close"); 
let popUpAll = document.querySelectorAll(".popUp");
let popUpAllWrapper = document.querySelectorAll(".popUpWrapper");
let popUpOnlyWrapper = document.querySelector(".popUpWrapper");
let popUpOnly = document.querySelector(".popUp");
let popUpImage = document.querySelector(".popUpImage");
let imageOnlyNoJSMain = document.querySelector(".imageOnlyNoJSMain");



imageOnlyNoJSMain.forEach(image => {
   image.addEventListener('click', function() {
        popUpOnly.style.display = 'block'; /// display visible
        popUpImage.getAttribute('src'); /// get source
   })
});

closeUp.addEventListener('click', function() {
    popUpOnly.style.display = 'none';
})
