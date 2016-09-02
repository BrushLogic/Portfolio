//imagen cargando mientras carga la página
$(document).ready(function(){ 

	window.onload=cargarBg; 
	function cargarBg(){ 
		$('body').css('background-image', 'url(images/bg2.png)');
	} 
	
});