	$('#dinner-radio').click(function(){		
		if (!$('#rd-dinner').is(':checked')) {		
			$('#rd-dinner').prop('checked', true);
			$('#rd-drinks').prop('checked', false);
			$('#rd-tentazione').prop('checked', false);
			$('#dinner-radio').addClass('checked-rd');
			$('#drinks-radio').removeClass('checked-rd');
			$('#tentazione-radio').removeClass('checked-rd');
			$('#btn-next-1').fadeIn();

		}
	});
	$('#drinks-radio').click(function(){		
		if (!$('#rd-drinks').is(':checked')) {		
			$('#rd-dinner').prop('checked', false);
			$('#rd-drinks').prop('checked', true);
			$('#rd-tentazione').prop('checked', false);
			$('#dinner-radio').removeClass('checked-rd');
			$('#drinks-radio').addClass('checked-rd');
			$('#tentazione-radio').removeClass('checked-rd');
			$('#btn-next-1').fadeIn();
		}
	});
	$('#tentazione-radio').click(function(){		
		if (!$('#rd-tentazione').is(':checked')) {		
			$('#rd-dinner').prop('checked', false);
			$('#rd-drinks').prop('checked', false);
			$('#rd-tentazione').prop('checked', true);
			$('#dinner-radio').removeClass('checked-rd');
			$('#drinks-radio').removeClass('checked-rd');
			$('#tentazione-radio').addClass('checked-rd');
			$('#btn-next-1').fadeIn();
		}
	});
	// Radio Dinero
	$('#rango1-radio').click(function(){		
		if (!$('#rd-rango1').is(':checked')) {		
			$('#rd-rango1').prop('checked', true);
			$('#rd-rango2').prop('checked', false);
			$('#rd-rango3').prop('checked', false);
			$('#rango1-radio').addClass('checked-rd');
			$('#rango2-radio').removeClass('checked-rd');
			$('#rango3-radio').removeClass('checked-rd');
			$('#btn-next-5').fadeIn();

		}
	});
	$('#rango2-radio').click(function(){		
		if (!$('#rd-rango2').is(':checked')) {		
			$('#rd-rango1').prop('checked', false);
			$('#rd-rango2').prop('checked', true);
			$('#rd-rango3').prop('checked', false);
			$('#rango1-radio').removeClass('checked-rd');
			$('#rango2-radio').addClass('checked-rd');
			$('#rango3-radio').removeClass('checked-rd');
			$('#btn-next-5').fadeIn();
		}
	});
	$('#rango3-radio').click(function(){		
		if (!$('#rd-rango3').is(':checked')) {		
			$('#rd-rango1').prop('checked', false);
			$('#rd-rango2').prop('checked', false);
			$('#rd-rango3').prop('checked', true);
			$('#rango1-radio').removeClass('checked-rd');
			$('#rango2-radio').removeClass('checked-rd');
			$('#rango3-radio').addClass('checked-rd');
			$('#btn-next-5').fadeIn();
		}
	});
	$('#select-city').change(function(){
		$('#btn-next-6').fadeIn();
	});

	var options = {   twentyFour: false, title: 'Pick the hour', showSeconds: false,}
	$('.timepicker').wickedpicker(options);

	$('#duracion-tp').change(function(){
		$('#label-picker').empty();
		$('#label-picker').append($('#duracion-tp').val());
	});

	// Mueve las secciones
	$('#rqs-date').click(function(){
		$('#contenido-1').hide();
		$('#contenido-2').fadeIn();
	});
	$('#bk-1').click(function(){
		$('#contenido-2').hide();
		$('#contenido-1').fadeIn();
	});
	$('#btn-next-1').click(function(){
		$('#contenido-2').hide();
		$('#contenido-3').fadeIn();
	});
	$('#bk-2').click(function(){
		$('#contenido-3').hide();
		$('#contenido-2').fadeIn();
	});
	$('#btn-next-2').click(function(){
		$('#contenido-3').hide();
		$('#contenido-4').fadeIn();
	});
	$('#bk-3').click(function(){
		$('#contenido-4').hide();
		$('#contenido-3').fadeIn();
	});
	$('#btn-next-3').click(function(){
		$('#contenido-4').hide();
		$('#contenido-5').fadeIn();
	});
	$('#bk-4').click(function(){
		$('#contenido-5').hide();
		$('#contenido-4').fadeIn();
	});
	$('#btn-next-4').click(function(){
		$('#contenido-5').hide();
		$('#contenido-6').fadeIn();
	});
	$('#bk-5').click(function(){
		$('#contenido-6').hide();
		$('#contenido-5').fadeIn();
	});
	$('#btn-next-5').click(function(){
		$('#contenido-6').hide();
		$('#contenido-7').fadeIn();
	});
	$('#bk-6').click(function(){
		$('#contenido-7').hide();
		$('#contenido-6').fadeIn();
	});