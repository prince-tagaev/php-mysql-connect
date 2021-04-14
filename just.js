// var books_btn = document.getElementById('books-bar')
// var news_btn = document.getElementById('news-bar')
var new_2 = document.getElementById('news-2')
var news = document.getElementsByClassName('news')[0];


function books_btn() {
    new_2.classList.add("my2");
    news.classList.remove("my");
}function news_btn() {
    news.classList.add("my");
    new_2.classList.remove("my2");
}
