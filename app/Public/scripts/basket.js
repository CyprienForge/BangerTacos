function deleteIntoBasket(idOwner, idProduct)
{
    console.log('ici')
    $.ajax({
        type: 'GET',
        url: '/basketDelete?idOwner='+ idOwner + "&idProduct=" + idProduct
    });
}