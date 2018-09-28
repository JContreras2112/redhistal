// JavaScript Document
$(document).ready(function(){
	verformularionuevaimagen();
	verlistadoimagenes();
})

function verformularionuevaimagen(){
	var randomnumber=Math.random()*11;
	$.post("documentos/nuevaimagen.php",{randomnumber:randomnumber}, 
		function(data){
			$("#nuevaimagen").html(data).slideDown("slow");
		});
}
function verlistadoimagenes(){
	var randomnumber=Math.random()*11;
	$.post("documentos/libs/listadoImagenes.php",{randomnumber:randomnumber},
		function(data){
			$("#listadoimagenes").html(data).slideDown("slow");
		});
}