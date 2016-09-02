$('document').ready(function(){
	var variable = 0;	//global

	getRandValue();//para evitar que espere con el texto html
	function getRandValue(){		
		if(variable == 0 )
		{
			$("#slider-tittle").css("opacity", 0.0);
        	$('#slider-tittle').text("Our hands, your mind");
			$('#slider-tittle').animate({
        		opacity: 1.0
        	},2000);	
        	$("#slider-text").css("opacity", 0.0);
        	$('#slider-text').text("We will always look forward to address your needs, contact us!");
			$('#slider-text').animate({
        		opacity: 1.0
        	},2000);
		}
    	else if(variable == 1 ){
    		$("#slider-tittle").css("opacity", 0.0);
			$('#slider-tittle').text("Our best job guaranteed");
			$('#slider-tittle').animate({
        		opacity: 1.0
        	},2000);  
        	$("#slider-text").css("opacity", 0.0);
        	$('#slider-text').text("Our skills and professionalism set us as your best choice");
			$('#slider-text').animate({
        		opacity: 1.0
        	},2000);      	
    	}
		else{
			$("#slider-tittle").css("opacity", 0.0);
			$('#slider-tittle').text("Quality + Price!");	
			$('#slider-tittle').animate({
        		opacity: 1.0
        	},2000);
        	$("#slider-text").css("opacity", 0.0);
        	$('#slider-text').text("Contact us before 2016 ends and you'll get a 10% discount!");
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