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
<input type="hidden" name="HoraIni" id="HoraIni">
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

var fechaAct = new Date();
var ano = fechaAct.getFullYear();
var mes = fechaAct.getMonth()+1;
var dia = fechaAct.getDate();
var hora = fechaAct.getHours();
var minutos = fechaAct.getMinutes();
var segundos = fechaAct.getSeconds();
fechaAct.setHours(hora + 1);

var horahoy=fechaAct.getHours()+":"+minutos;
/*variable para el apóstrofe de am o pm*/
dn = "A.M"
if (hora > 12) {
dn = "P.M"
hora = hora - 12
}

var fechahoy=ano+"/"+mes+"/"+dia;

	$("#countdown-timer").countdown(fechahoy+' '+horahoy, function(event) {
    $(this).text(
      event.strftime('%M:%S')
    );
		$("#HoraIni").val(event.strftime('%M:%S'));
  });

	$(document).ready(function()
	{
		$.ajax({
          url: 'update-horainicio', //indicamos la ruta donde se genera la hora
          dataType: 'json',//indicamos que es de tipo texto plano
          type: "POST",
          async: false,   //ponemos el parámetro asyn a falso
          data: {
           _token:$('input[name=_token]').val(),
          
         },
       success: function(data) {
        console.log(data.HoraIni+"-------"+horahoy+' '+dn);
        // if(data.HoraIni==horahoy+' '+dn);
       
        
       },
       error: function (data) {
        // location.href="/";

        console.log(data);          
    }
    }).responseText;	
	});
	</script>
@stop