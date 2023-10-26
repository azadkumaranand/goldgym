
const trigarSinupModal = document.getElementById('trigarSinupModal');
const singupCotainerChild = document.getElementById('singupCotainerChild');
const closeSingupModal = document.getElementById('closeSingupModal');

trigarSinupModal.addEventListener('click', function(){
    if (singupCotainerChild.style.display == "none") {
        singupCotainerChild.style.display = "block"
    }else{
        singupCotainerChild.style.display = "none"
    }
})
closeSingupModal.addEventListener('click', function(){
    singupCotainerChild.style.display = "none";
})

