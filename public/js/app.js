const body = document.getElementsByTagName("BODY")[0];
const darkMode = document.getElementById("dark-mode");
const nav = document.getElementsByTagName("nav")[0];
const captionText = document.getElementsByTagName("caption")[0];

darkMode.addEventListener("click", function(){
    nav.classList.toggle("bg-dark");
    nav.classList.toggle("navbar-dark");
    body.classList.toggle("darker");
    captionText.toggle("darker");
});
