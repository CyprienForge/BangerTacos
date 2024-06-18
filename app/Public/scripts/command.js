function dropBasketCreateCommand(idOwner)
{
    $.ajax({
        type: 'GET',
        url: '/dropBasket?idOwner='+ idOwner
    }).then((result) => {
        $.ajax({
            type: 'POST',
            url: '/createCommand?idOwner='+ idOwner
        }).then((result) => {
            window.location = '/';
        })
    })

}