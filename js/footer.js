function visible(clickedObject,liscenseID) {
    
    document.getElementById(liscenseID).style.visibility="visible";
    document.getElementById(clickedObject).setAttribute("onclick","hide(this.id,'"+liscenseID+"')");
    
}
function hide(clickedObject,liscenseID) {
    
    document.getElementById(liscenseID).style.visibility="hidden";
    document.getElementById(clickedObject).setAttribute("onclick","visible(this.id,'"+liscenseID+"')");
    
               
    
}