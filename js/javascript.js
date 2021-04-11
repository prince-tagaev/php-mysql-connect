var modal = document.getElementById('books-index')
var btn = document.getElementById('books-bar')
var none = document.getElementById('scroll-none')
var close = document.getElementsByClassName('close')[0];


btn.onclick = function (){
    modal.style.display = "block";
    none.style.position = "fixed";
    none.style.width = "100%";
}

close.onclick = function(){
    modal.style.display = "none";
    none.style.position = "relative";
}
window.onclick = function(event){
    if (event.target == modal){
        modal.style.display = "none";
        none.style.position = "relative";
    }
}