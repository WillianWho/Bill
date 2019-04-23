
function changeHR(ID) {
    
    
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById(ID).style.borderColor = "rgb(136, 126, 126)";
    } else {
        document.getElementById(ID).style.borderColor = "rgb(0, 0, 0)";

    }
    prevScrollpos = currentScrollPos;
}

   
    
    

