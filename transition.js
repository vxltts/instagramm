let time = 4000,
    currentImageIndex = 0,
    images = document.querySelectorAll('.images img'),
    maxImages = images.length;
let num = 0;

function nextImage(){
    images[currentImageIndex].classList.remove('selected')
    currentImageIndex++

    if(currentImageIndex >= maxImages){
        currentImageIndex = 0
    }

    images[currentImageIndex].classList.add('selected')
}

function start(){
    setInterval(()=>{
        nextImage()
    },time)
}

window.addEventListener("load", start)