$(document).ready(function() {
	actualizar();
	setInterval(function(){actualizar();},2000);
});

function actualizar(){
	setRam();
}

function servicio(service, sspan, accion){
	var parametros = {
		   "servicio" : service,
		   "accion"	  : accion
       };
	   
       $.ajax({
               data:  parametros,
               url:   'php/servicio.php',
               type:  'post',
               beforeSend: function () {
                       $('#'+sspan).html("Espere por favor...");
               },
               success:  function (response) {
                       location.reload();
               }
       });
}

function setRam(){
       $.ajax({
               url:   'php/ram.php',
               success:  function (response) {
                       $('#ram').html(response);
               }
       });
}