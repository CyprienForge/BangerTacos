function addIntoBasket(idOwner, idProduct)
{
    $.ajax({
        type: 'GET',
        url: '/carteAdd?idOwner='+ idOwner + "&idProduct=" + idProduct
    });

    swal({
        title: "Et hop !",
        text: "Votre article a bien été ajouté au panier",
        icon: "success",
        button: "Parfait !",
    });
}

function addExtraIntoBasket(idOwner, idProduct)
{
    $.ajax({
        type: 'GET',
        url: '/carteAddExtra?idOwner='+ idOwner + "&idProduct=" + idProduct
    });

    swal({
        title: "Et hop !",
        text: "Votre article a bien été ajouté au panier",
        icon: "success",
        button: "Parfait !",
    });
}

function userDontConnect()
{
    swal({
        title: "Minute !",
        text: "Vous devez être connecté pour ajouter au panier",
        icon: "info",
        button: "C'est compris !",
    });
}