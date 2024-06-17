function deleteIntoBasket(idOwner, idProduct)
{
    $.ajax({
        type: 'GET',
        url: '/basketDelete?idOwner='+ idOwner + "&idProduct=" + idProduct
    });
}