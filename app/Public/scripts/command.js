function dropBasketCreateCommand(idOwner, time)
{
    $.ajax({
        type: 'GET',
        url: '/dropBasket?idOwner=' + idOwner + '&time=' + time
    }).then((response) => {
        window.location = '/';
    })
}