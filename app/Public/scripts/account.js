class User {
    constructor(surName, firstName, email, phone)
    {
        this.surName = surName;
        this.firstName = firstName;
        this.email = email;
        this.phone = phone;
    }
}

var iconEdit = document.querySelector(".mid-page img")

iconEdit.addEventListener("click", () => {
    var surName = prompt("Nouveau nom : ")
    while(surName.length < 2 || surName.length > 30)
    {
        alert("Nom non compris entre 2 et 30 caractères")
        surName = prompt("Nouveau nom : ")
    }
    var firstName = prompt("Nouveau prénom :")
    while(firstName.length < 2 || firstName.length > 30)
    {
        alert("Prénom non compris entre 2 et 30 caractères")
        firstName = prompt("Prénom nom : ")
    }
    var email = prompt("Nouveau email :")
    var phone = prompt("Nouveau téléphone :")

    const user = new User(surName, firstName, email, phone);
    console.log(user.phone);
})