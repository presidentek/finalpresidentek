
$(document).ready(function(){


// ISOTOPE
	var $container = $('#content');
	$container.isotope({
		masonry: {
    		columnWidth: 245,
    		rowHeight: 245
  		}
  });

	//FILTROS ISOTOPE
	$('#filters li a').click(function(){
	  var selector = $(this).attr('data-filter');	
	  // console.log(selector);
	  $container.isotope({ 
	  		filter: selector
	  		});
	  return false;
	});

	// ORDEN ISOTOPE
	/*$(".small").mouseenter(function(){
	    if( $(this).hasClass('gde') ) {
			$(this).removeClass('gde'); 
		} else {
			$('.small').removeClass('gde');
			$(this).addClass('gde');
		}
	   $container.isotope('reLayout');
	});*/
	

	//LINK ACTIVO
	$('#filters li a').on('click', function(){
		
		 if( $(this).hasClass('hover') ){
		 	$(this).removeClass('hover');
		 } else {
		 	$('#filters li a').removeClass('hover');
		 	$(this).addClass('hover');
		 	
		 }
	});


});