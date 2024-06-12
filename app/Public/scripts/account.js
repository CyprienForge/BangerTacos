var iconEdit = document.querySelector(".mid-page img")
var recap = document.querySelector(".recap")
var formModification = document.querySelector(".infos-changer")

iconEdit.addEventListener("click", () => {
    if(recap.style.display === "none")
    {
        recap.style.display = "block";
        formModification.style.display = "none";
    }
    else
    {
        recap.style.display = "none";
        formModification.style.display = "block";
    }
})