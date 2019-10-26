$(document).ready(function(){
	
	//Pārbaudām vai ekrāns ir Top vai paritināts uz leju
	$(window).scroll(function(){
		if ($(this).scrollTop() > 400) {
			
			$('#navbar').removeClass( "bg-transparent" ); // noņemam bg krāsas klasi
			$( "#navbar" ).addClass( "bg-dark" ); // ielikam jaunu bg krāsas klasi
		} else {
	
    $('#navbar').removeClass( "bg-dark" );
			$( "#navbar" ).addClass( "bg-transparent" ); // ielikam atpakaļ bg krāsas klasi
		}
	});
	
});