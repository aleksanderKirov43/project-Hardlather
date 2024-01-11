function delit(id) {
    const deleteBacket = document.getElementById(id)
    if(!deleteBacket){
        return;
    }

    deleteBacket.outerHTML = ''

    // localStorage.removeItem('cart')
    const cart = JSON.parse(localStorage.getItem('cart'))
    if(!cart) {
        return;
    } 

    const newCart = [];
    for(item of cart) {
        console.log(item)
       if (+item.id === id) {

       } else {
        newCart.push(item)
       }
    }

    localStorage.setItem('cart', JSON.stringify(newCart))
}