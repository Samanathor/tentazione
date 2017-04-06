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
								<p class="text-center">Matches List</p>
							</div>
						</div>
						<div class="body-panel">
							<div class="container full">
								<div class="col-xs-4 col-xs-offset-4">
									<img src="/imgs/persons-ico.jpg" class="img-responsive" alt="">
								</div>
								<div class="col-xs-12 text-center m-tp-20">
									Here you can see, the list of persons <br> that want a date with you 
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 text-center m-tp-20">
						<!-- SI NO TIENE REQUEST ACTIVAS QUITAR EL DISPLAY NONE -->
						<p style="display: none">You don't have any matches for your request</p>						
					</div>
					<!-- SI TIENE REQUEST ACTIVAS  -->
					<!-- Con FOREACH AQUI -->
					@foreach($TodosProveedores as $proveedor)
					 
					<div class="card-profile m-tp-20 ">
					<div class="container full shadow-material">
						<div class="col-xs-6">
							<img src="/imgs/profile-pictures/{{$proveedor->cedula}}.jpg" alt="" class="img-responsive">
						</div>	
						<div class="col-xs-6">
							<p class="description-profile">
								<strong>Name</strong><br>
								{{$proveedor->name}} <br>
								<strong>Reputation</strong><br>
								{{$proveedor->reputacion}}<br>
								<strong>Age</strong>
								{{$proveedor->edad}}<br>
								<button type="button" class="btn btn-tentazione m-tp-20" onclick="window.open('chat')">Start Chat</button>

							</p>
						</div>					
					</div>
					</div>	
					@endforeach
					
				</div>
			</div>
		</div>
	</div>
	
</section>
@stop