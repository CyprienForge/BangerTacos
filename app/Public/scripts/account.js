var iconEdit = document.querySelector(".mid-page img")
var recap = document.querySelector(".recap")
var formModification = document.querySelector(".infos-changer")
var exit = document.querySelector("#exit-modif")

iconEdit.addEventListener("click", () => {
    if(recap.style.display === "none")
    {
        recap.style.display = "block";
        formModification.style.display = "none";
    }
    else
    {
        iconEdit.style.display = "none";
        recap.style.display = "none";
        formModification.style.display = "block";
        exit.style.display = "block";
    }
})

exit.addEventListener("click", () => {
    recap.style.display = "block";
    formModification.style.display = "none";
    iconEdit.style.display = "block";
    exit.style.display = "none";
})