let addButton = document.querySelectorAll(".icon-add")
let res;

for (let i = 0; i < addButton.length; i++) {
    addButton[i].addEventListener("click", () => {
        console.log("ici")
        $.ajax({
            type: 'GET',
            url: '/carteAdd'
        });
    })
}

