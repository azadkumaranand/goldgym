
const trigarSinupModal = document.getElementById('trigarSinupModal');
const singupCotainerChild = document.getElementById('singupCotainerChild');
const closeSingupModal = document.getElementById('closeSingupModal');

trigarSinupModal.addEventListener('click', function(){
    // if (singupCotainerChild.style.display == "none") {
    //     singupCotainerChild.style.display = "block"
    // }else{
    //     singupCotainerChild.style.display = "none"
    // }
    singupCotainerChild.style.display = "block";
})

function xyz (){
    singupCotainerChild.style.display = "none";
    // alert("hello are you sure you want to colse this form");
}

closeSingupModal.addEventListener('click', xyz);

