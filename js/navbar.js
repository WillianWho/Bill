// navbar e footer
function changeDisplay(firstIMG, secondIMG) {
    document.getElementById(firstIMG).style.display = "none";
    document.getElementById(secondIMG).style.display = "inline";
}
// mostra/oculta a navBar quando rola a página
var prevScrollpos = window.pageYOffset;

window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navBar").style.top = "0";
    } else {
        document.getElementById("navBar").style.top = "-150px";
    }
    prevScrollpos = currentScrollPos;
}



