// JavaScript Document

addEventListener("message",mensaje_recibido,false);

function mensaje_recibido(e){
	
var respuesta="El texto escrtio en el cuadro es : "+e.data;
postMessage(respuesta);

}
