function deleteIntoBasket(idOwner, idProduct)
{

    swal({
        title: 'Suppression',
        text: 'Confirmez-vous la suppression de cet article ?',
        icon: 'warning',
        buttons: ["Annuler", "Confirmer"],
    }).then((result) => {
        if(result === true)
        {
            $.ajax({
                type: 'GET',
                url: '/basketDelete?idOwner='+ idOwner + "&idProduct=" + idProduct
            });
            path = '/basket?id=' + idOwner
            window.location = path;
        }
    })
}