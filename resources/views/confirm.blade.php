@extends('layouts.core')

@section('principal')
<style>
	body{
		min-height: 100vh;
		background: url(/imgs/pattern-red.jpg);
		height: 100vh;
	}
</style>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="card text-center">
					<div class="container full">
							<div class="row">
								
								<div class="col-xs-12 panel-head text-center c-r">
									<p class="text-center">Request Complete</p>
								</div>
							</div>
							<div class="body-panel">
								<div class="container full">
									<div class="col-xs-4 col-xs-offset-4">
										<img src="/imgs/clock-ico.jpg" class="img-responsive" alt="">
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										Women can now see your request until the clock runs out. <br>
										Log out if you want to, we'll send you a email whit updates
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										<p><strong>Remining time</strong></p>
										<div id="countdown-timer" class="circle-clock">
										  
										</div>

									</div>
<input type="hidden" name="HoraIni" id="HoraIni" value="{{$FechaCreacion}}">
<input type="hidden" name="id_cita" id="id_cita" value="{{$id_cita}}">
									<div class="col-xs-12 text-center m-tp-20">
										<button id="btn-next-1" class="btn btn-tentazione btn-block" style="display: none">Next</button>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	
</section>

<script>

var fechaAct=$("#HoraIni").val();

	$("#countdown-timer").countdown(fechaAct, function(event) {
    $(this).text(
      event.strftime('%M:%S')
    );
  });


function peticionProveedor(){

       $.ajax({
	      url: 'verificar-proveedor', //indicamos la ruta donde se genera la hora
	      dataType: 'json',//indicamos que es de tipo texto plano
	      type: "POST",
	      async: false,   //ponemos el parámetro asyn a falso
	      data: {
           _token:$('input[name=_token]').val(),
           id_cita:$('#id_cita').val()

	     },
	   success: function(data) {
    	console.log(data.proveedor_postulado);
		   	if(data.proveedor_postulado!="")
		   	{
		   		location.href="proveedores";
			}
	   },
	   error: function (data) {

	    console.log(data);          
	}
	}).responseText;		
}
setInterval(function(){ peticionProveedor(); }, 2000);


	</script>
@stop