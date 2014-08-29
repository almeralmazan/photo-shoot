(function(){

	$('.datepicker').pickadate({
	    format: 'mmmm d, yyyy',
        disable: [
            { from: -2000, to: true }
        ]
	});

}());