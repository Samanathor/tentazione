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

	// Aqui va la fecha de la cita para el countdown
	$("#countdown-timer").countdown("2017/03/24 03:01", function(event) {
    $(this).text(
      event.strftime('%M:%S')
    );
  });
</script>
@stop