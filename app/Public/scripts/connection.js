function connectionSuccess()
{
    console.log('ma zette')
    swal({
        title: "Minute !",
        text: "Vous devez être connecté pour ajouter au panier",
        icon: "info",
        button: "C'est compris !",
    });
}