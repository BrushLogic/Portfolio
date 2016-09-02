$('document').ready(function(){
	var variable = 0;	//global
    
    getLang();
    function getLang(){
        $.get( "ajax/get-lang", function( data ) {     
            $('#lenguaje').val("'"+data+"'");
        });        
    }
    var lenguaje = $('#lenguaje').val();

	getRandValue();//para evitar que espere con el texto html
	function getRandValue(){		
		if(variable == 0 )
		{
			$("#slider-tittle").css("opacity", 0.0);
            if(lenguaje == 'en'){
                $('#slider-tittle').text("Our hands, your mind");
            }else{
                $('#slider-tittle').text("Nuestras manos, tu mente");
            }
        	
			$('#slider-tittle').animate({
        		opacity: 1.0
        	},2000);	
        	$("#slider-text").css("opacity", 0.0);
            if(lenguaje == 'en'){
                $('#slider-text').text("We will always look forward to address your needs, contact us!");
            }else{
                $('#slider-text').text("Siempre nos esforzaremos por alcanzar tus necesidades, contáctanos!");
            }
        	
			$('#slider-text').animate({
        		opacity: 1.0
        	},2000);
		}
    	else if(variable == 1 ){
    		$("#slider-tittle").css("opacity", 0.0);
			
            if(lenguaje == 'en'){
                $('#slider-tittle').text("Our best job guaranteed");
            }else{
                $('#slider-tittle').text("Nuestro mejor trabajo garantizado");
            }
			$('#slider-tittle').animate({
        		opacity: 1.0
        	},2000);  
        	$("#slider-text").css("opacity", 0.0);
        	
            if(lenguaje == 'en'){
                $('#slider-text').text("Our skills and professionalism set us as your best choice");
            }else{
                $('#slider-text').text("Nuestras habilidades y profesionalismo nos hacen tu mejor opción");
            }
			$('#slider-text').animate({
        		opacity: 1.0
        	},2000);      	
    	}
		else{
			$("#slider-tittle").css("opacity", 0.0);
			
            if(lenguaje == 'en'){
                $('#slider-tittle').text("Quality + Price!");   
            }else{
                $('#slider-tittle').text("Calidad + Precio!");   
            }
			$('#slider-tittle').animate({
        		opacity: 1.0
        	},2000);
        	$("#slider-text").css("opacity", 0.0);
        	
            if(lenguaje == 'en'){
                $('#slider-text').text("Contact us before 2016 ends and you'll get a 10% discount!");
            }else{
                $('#slider-text').text("Contáctanos antes de que termine el 2016 y te daremos un descuento del 10%!");
            }
			$('#slider-text').animate({
        		opacity: 1.0
        	},2000);
		}
        variable++;

        if(variable>2)
        	variable=0;
    }
	setInterval(getRandValue, 10000);
});