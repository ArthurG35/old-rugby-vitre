import "./equipes.scss";
import "../assets/styles/styles.scss";

window.addEventListener("scroll", function() {
    var header = document.querySelector("nav");
    header.classList.toggle("Scrolled", window.scrollY > 0);
})

$(".joueur").hover(function() {
    var child = $(this).children(".info");
    setTimeout(function() {
        child.toggleClass("hovered");
    }, 0);
});