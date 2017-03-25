@extends('layouts.core')

@section('principal')
<style>
	body{
		min-height: 100vh;
		background: url(/imgs/pattern-red.jpg);
		height: 100vh;
	}
</style>
<section id="principal">
	<div class="container">
		<div class="row ">
			<div class="col-xs-12">
				<div class="card text-center">
				<form action="/request-confirm" method="get">
					<div id="contenido-1">
						<img src="/imgs/tentazionelogo.png" alt="" class="img-responsive centrado">
						<button type="button" id="rqs-date" class="btn btn-tentazione text-uppercase m-50">Request a date</button>	
					</div>
					<div id="contenido-2" style="display: none">
						<div class="container full">
							<div class="row">
								<div class="back-panel"><button type="button" id="bk-1" class="btn btn-flat-tran"><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></button></div>
								<div class="col-xs-12 panel-head text-center c-r">
									<p class="text-center">Request (1/6)</p>
								</div>
							</div>
							<div class="body-panel">
								<div class="container full">
									<div class="col-xs-4 col-xs-offset-4">
										<img src="/imgs/dinner-ico.png" class="img-responsive" alt="">
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										Choose what kind of date you have on mind
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										<input id="rd-dinner" style="display: none;" type="radio" name="date" value="1">
										<div class="radio-personalizado" id="dinner-radio">Dinner</div>
										<input id="rd-drinks" type="radio" style="display: none" name="date" value="2">
										<div class="radio-personalizado" id="drinks-radio">Drinks</div>
										<input id="rd-tentazione" type="radio" style="display: none" name="date" value="3">
										<div class="radio-personalizado" id="tentazione-radio">Tentazione</div>
									</div>

									<div class="col-xs-12 text-center m-tp-20">
										<button type="button" id="btn-next-1" class="btn btn-tentazione btn-block" style="display: none">Next</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Contenido 3					 -->
					<div id="contenido-3" style="display: none">
						<div class="container full">
							<div class="row">
								<div class="back-panel"><button type="button" id="bk-2" class="btn btn-flat-tran"><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></button></div>
								<div class="col-xs-12 panel-head text-center c-r">
									<p class="text-center">Request (2/6)</p>
								</div>
							</div>
							<div class="body-panel">
								<div class="container full">
									<div class="col-xs-4 col-xs-offset-4">
										<img src="/imgs/dinner-ico.png" class="img-responsive" alt="">
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										Care to describe your plans in a little more details
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										<textarea class="textarea-custom" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
									</div>

									<div class="col-xs-12 text-center m-tp-20">
										<button type="button" id="btn-next-2" class="btn btn-tentazione btn-block" >Next</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Contenido 4 -->
					<div id="contenido-4" style="display: none">
						<div class="container full">
							<div class="row">
								<div class="back-panel"><button type="button" id="bk-3" class="btn btn-flat-tran"><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></button></div>
								<div class="col-xs-12 panel-head text-center c-r">
									<p class="text-center">Request (3/6)</p>
								</div>
							</div>
							<div class="body-panel">
								<div class="container full">
									<div class="col-xs-4 col-xs-offset-4">
										<img src="/imgs/dinner-ico.png" class="img-responsive" alt="">
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										When should your date start?
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										<input type="text" name="hora_inicio" id="hora_inicio" class="timepicker"/>
									</div>
									<div class="col-xs-12 text-center m-tp-160">
										<button type="button" id="btn-next-3" class="btn btn-tentazione btn-block" >Next</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Contenido 5 -->
					<div id="contenido-5" style="display: none">
						<div class="container full">
							<div class="row">
								<div class="back-panel"><button type="button" id="bk-4" class="btn btn-flat-tran"><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></button></div>
								<div class="col-xs-12 panel-head text-center c-r">
									<p class="text-center">Request (4/6)</p>
								</div>
							</div>
							<div class="body-panel">
								<div class="container full">
									<div class="col-xs-4 col-xs-offset-4">
										<img src="/imgs/dinner-ico.png" class="img-responsive" alt="">
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										How long should your date last?
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										<label  for=""><rb id="label-picker">1</rb> Hours</label>
										<input id="duracion-tp" class="time-range-custom m-tp-20" type="range" name="duracion" value="1" min="1" max="10">
									</div>
									<div class="col-xs-12 text-center m-tp-160">
										<button type="button" id="btn-next-4" class="btn btn-tentazione btn-block" >Next</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Contenido 6 -->
					<div id="contenido-6" style="display: none">
						<div class="container full">
							<div class="row">
								<div class="back-panel"><button type="button" id="bk-5" class="btn btn-flat-tran"><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></button></div>
								<div class="col-xs-12 panel-head text-center c-r">
									<p class="text-center">Request (5/6)</p>
								</div>
							</div>
							<div class="body-panel">
								<div class="container full">
									<div class="col-xs-4 col-xs-offset-4">
										<img src="/imgs/dinner-ico.png" class="img-responsive" alt="">
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										How much are you willing to spend?
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										<input id="rd-rango1" style="display: none;" type="radio" name="money" value="1">
										<div class="radio-personalizado" id="rango1-radio">Between 20US - 50US</div>
										<input id="rd-rango2" style="display: none;" type="radio" name="money" value="2">
										<div class="radio-personalizado" id="rango2-radio">Between 50US - 70US</div>
										<input id="rd-rango3" style="display: none;" type="radio" name="money" value="3">
										<div class="radio-personalizado" id="rango3-radio">More than 70US</div>
									</div>
									<div class="col-xs-12 text-center m-tp-20" ">
										<button type="button" style="display: none;" id="btn-next-5" class="btn btn-tentazione btn-block" >Next</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Contenido 7 -->
					<div id="contenido-7" style="display: none">
						<div class="container full">
							<div class="row">
								<div class="back-panel"><button type="button" id="bk-6" class="btn btn-flat-tran"><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></button></div>
								<div class="col-xs-12 panel-head text-center c-r">
									<p class="text-center">Request (6/6)</p>
								</div>
							</div>
							<div class="body-panel">
								<div class="container full">
									<div class="col-xs-4 col-xs-offset-4">
										<img src="/imgs/dinner-ico.png" class="img-responsive" alt="">
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										Where do you want to date?
									</div>
									<div class="col-xs-12 text-center m-tp-20">
										<select name="ciudad" id="select-city">
											<option value="" selected="" disabled="" >Select your city</option>
											<option value="bogota">Bogotá</option>
											<option value="medellin">Medellín</option>
										</select>
									</div>
									<div class="col-xs-12 text-center m-tp-20" ">
										<button type="button" style="display: none;" id="btn-next-6" class="btn btn-tentazione btn-block" >Send Request</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

@stop

   <script src="js/jquery.js"></script>


<script type="text/javascript">
  
    $(document).ready(function()
    {

      $("#btn-next-6").click(function () {	 
			var valor_cita=$('input:radio[name=date]:checked').val();

				$.ajax({
                  url: 'anadir-cita', //indicamos la ruta donde se genera la hora
                  dataType: 'json',//indicamos que es de tipo texto plano
                  type: "POST",
                  async: false,   //ponemos el parámetro asyn a falso
                  data: {
                      _token:$('input[name=_token]').val(),
                   valor_cita:valor_cita,
                   descripcion:$("#descripcion").val(),
                   hora_inicio:$("#hora_inicio").val(),
                   duracion:$("#duracion-tp").val(),
                   rango_pago:$('input:radio[name=money]:checked').val(),
                   ciudad:$('#select-city').val(),
                 },
               success: function(data) {
               	if(data==1)
               	{

                location.href="completado";
                console.log(data);
    	           	}
    	           	else
    	           	{
                location.href="/";
    	           	}
                
               },
               error: function (data) {
                location.href="/";

                console.log(data);          
            }
            }).responseText;	
			});


      

        }); 

</script>