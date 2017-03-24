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
								<p class="text-center">Active Chat</p>
							</div>
						</div>
						<div class="body-panel">
							<div class="container full npd">
								<!-- Si no Tiene chats activos -->
								<div class="col-xs-12 text-center m-tp-20" style="display: none;">
									You don't have active chats
								</div>
								<!-- Si tiene chats -->
								<div class="panel-chat shadow-material">
									<div class="container full npd">
									<div class="back-panel"><button type="button" id="bk-3" class="btn btn-flat-tran"><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></button></div>
									<div class="img-profile-panel"><img class="" src="/imgs/profile-pictures/model-face.jpeg" alt=""></div>
										<div class="chat-tittle panel-head c-r text-center">

											Elisha Cutberth
										</div>
										<div id="chat-square" class="chat-square">
										<!-- Aqui se agregan dinamicamente los mensajes en el chat -->
										<!-- chat-msg-left para el destinatario -->
										<!-- chat-msg-right para el que envia -->
										<!-- Estos se tienen que agregar con append jquery -->
											<div class="chat-msg-left">
												Hola tu 
											</div>
											<div class="chat-msg-right">
												Como estas?
											</div>
											<div class="chat-msg-right">
												Te he estado pensando demasiado a ti y quiero que nos veamos
											</div>
											<div class="chat-msg-left">
												Ahh si y por que me has pensado? 
											</div>
											<div class="chat-msg-left">
												Yo quiero verte hoy todo el día para esta noche y para mañana 
											</div>
											
										</div>
										<div class="chat-actions">
											<input type="text">
											<button type="button" class="btn shadow-material">Send</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	// Funcion para bajar el scroll
		$('#chat-square').animate({ scrollTop: $('#chat-square').prop("scrollHeight")}, 1000);;
	</script>
</section>
@stop