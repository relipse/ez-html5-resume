$(function(){
	//hide all sections except <h3>
	$('section.highlights ul').show().addClass('fade-in');
  $('section.employment .points').hide();
  
  
  $('section > h3').click(function(){
  	$(this).next().toggle();
  });

  $('section h4').click(function(){
		$(this).next().toggle();
  });
});
