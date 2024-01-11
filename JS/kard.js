const cart = JSON.parse(localStorage.getItem('cart'))
if(!cart) {
    
} else {
    console.log(cart);

const findItems = document.getElementsByClassName('find');
console.log(findItems.length)



for(addBacket of cart) {
    findItems[+addBacket.id - 1].style.display = 'block';
    const counterItem = document.getElementById(`count-${addBacket.id}`)
    console.log(counterItem)
    counterItem.innerHTML = addBacket.count
}
}
