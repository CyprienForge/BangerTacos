function myFunction(idOwner, idProduct)
{
    $.ajax({
        type: 'GET',
        url: '/carteAdd?idOwner='+ idOwner + "&idProduct=" + idProduct
    });
}