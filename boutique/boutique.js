import "./boutique.scss";
import "../assets/styles/styles.scss";

window.addEventListener("scroll", function() {
    var header = document.querySelector("nav");
    header.classList.toggle("Scrolled", window.scrollY > 0);
})