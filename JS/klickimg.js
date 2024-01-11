let saveChild = '';

function imageZoom(idElem) {
    var img = document.getElementById(idElem);
    var modalImg = document.getElementById("modal_img");
    var modal = document.getElementById("modal");
   
    if(saveChild) {
        modalImg.removeChild(saveChild)
        saveChild = ''
        modal.style.display = 'none';
        return;
    }

    modalImg.style.display = 'unset';
    let newImg = document.createElement('img')
    newImg.src = img.src
    modal.style.display = 'flex';
    saveChild = newImg
    modalImg.appendChild(newImg)
}

function closeModal() {
    var modalImg = document.getElementById("modal_img");
    modalImg.removeChild(saveChild)
        saveChild = ''
    modalImg.style.display = 'none';
    modal.style.display = 'none';
}