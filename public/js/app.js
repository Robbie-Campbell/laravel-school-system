const body = document.getElementsByTagName("BODY")[0];
const darkMode = document.getElementById("dark-mode");
const nav = document.getElementsByTagName("nav")[0];
let forms = document.getElementById("form");
let getDarkModeSetting = window.localStorage.getItem("darkModeValue");

// Add dark mode to the page
function enableDarkMode(){
    nav.classList.add("bg-dark");
    nav.classList.add("navbar-dark");
    body.classList.add("darker");
    forms.classList.add("bg-dark");
    window.localStorage.setItem("darkModeValue", "enabled");
}

// Remove dark mode from the page
function disableDarkMode(){
    nav.classList.remove("bg-dark");
    nav.classList.remove("navbar-dark");
    body.classList.remove("darker");
    forms.classList.remove("bg-dark");
    window.localStorage.setItem("darkModeValue", "disabled");
}

// Set dark mode from memory
if (getDarkModeSetting === "enabled")
{
    enableDarkMode();
}

// Set the dark mode setting onclick
darkMode.addEventListener("click", ()=>{
    getDarkModeSetting = window.localStorage.getItem("darkModeValue");
    if (getDarkModeSetting !== "enabled") {
        enableDarkMode();
    }
    else
    {
        disableDarkMode();
    }
});
