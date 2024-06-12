let addButton = document.querySelectorAll(".icon-add")

for (let i = 0; i < addButton.length; i++) {
    addButton[i].addEventListener("click", () => {
        console.log("On est dans l'évènement !")
        fetch("../../Models/Basket.php", {
            method: "POST"
        }).then(r => res)
    })
}

