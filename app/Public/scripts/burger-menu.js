

iconMenu.addEventListener("click", () => {
    menu.classList.toggle("active");

    document.documentElement.style.overflow = 'hidden';
})

quit.addEventListener("click", () => {
    console.log("Enjoy");

    menu.classList.remove("active");

    document.documentElement.style.overflow = 'visible';
})