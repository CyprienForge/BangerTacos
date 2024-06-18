var iconEdit = document.querySelector(".mid-page img")
var recap = document.querySelector(".recap")
var formModification = document.querySelector(".infos-changer")
var exit = document.querySelector("#exit-modif")
var visualizeHistoric = document.querySelector("#visualize-historic")
var historic = document.querySelector(".historic")

visualizeHistoric.addEventListener("click", () => {
    if(historic.style.display === "none")
    {
        historic.style.display = "block";
    }
    else{
        historic.style.display = "none";
    }
})

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

r = 0
function disconnection()
{
    swal({
        title: 'Déconnexion',
        text: 'Es-tu sûr de vouloir te déconnecter ?',
        icon: 'warning',
        buttons: ["Non", "Oui"],
    }).then((result) => {
        if(result === true)
        {
            $.ajax({
                type: 'GET',
                url: '/disconnection'
            });
            window.location = '/';
        }
    })
}