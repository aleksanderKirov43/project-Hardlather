let counter = 0;
 
const counterValue = document.getElementById('counter-value');
const incrementBtn = document.getElementById('increment-btn');
const decrementBtn = document.getElementById('decrement-btn');
const itemId = document.getElementsByClassName('itemId');

let cart2 = JSON.parse(localStorage.getItem('cart'))
const findCart2 = (cart2 || []).find((val) => +val.id === +itemId[0].id)

if(findCart2) {
    counterValue.innerHTML = findCart2.count
    counter = findCart2.count
}

function changeCart(valueCnt) {
    let cart = localStorage.getItem('cart')
    const currentId = itemId[0].id

    if(!cart) {
        cart = [{id: currentId, count: counter}]
    } else {
        cart = JSON.parse(cart)
        let added = false;
        for (let i=0; i < cart.length; i++) {
            if(+cart[i].id === +currentId) {
                cart[i].count = valueCnt;
                added = true;
            }
        }

        if (!added) {
            cart.push({id: currentId, count: counter})
        }
    }
   
    localStorage.setItem('cart', JSON.stringify(cart))
}

incrementBtn.addEventListener('click', () => {
    counter++;
    counterValue.innerHTML = counter;
    changeCart(counter)
});
 

decrementBtn.addEventListener('click', () => {
    if(counter === 0) {
        return;
    }
    counter--;
    counterValue.innerHTML = counter;
    changeCart(counter)
});
 

