let addButton = document.querySelectorAll(".icon-add")
let res;

for (let i = 0; i < addButton.length; i++) {
    addButton[i].addEventListener("click", () => {
        console.log("On est dans l'évènement !")
        fetch("/carteAdd", {
            method: "GET"
        }).then(r => console.log(r))
    })
}

