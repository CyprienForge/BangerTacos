function dropBasket(idOwner)
{
    console.log("ici")
    $.ajax({
        type: 'GET',
        url: '/commandDropBasket?idOwner='+ idOwner
    });
}