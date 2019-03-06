// JavaScript Document


function iniciar(){
window.addEventListener("message",receptor,false);
}

function receptor(e){
var zonamensajes=document.getElementById("zonamensajes");
zonamensajes.innerHTML+="Mensaje desde:"+ e.origin +"<br>";
zonamensajes.innerHTML+="Mensaje :"+ e.data +"<br>";
}


window.addEventListener("load",iniciar,false);
