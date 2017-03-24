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
								<div id="panel-historial" class="col-xs-12 text-center" >
									<p style="display: none;" class="m-tp-20">You don't have active chats	</p>

									<div class="list-chats">
										<div class="chat-item m-tp-20" onclick="openChat(1)">
											<img src="/imgs/profile-pictures/model-face.jpeg" alt="">
											<p> <strong>Elisha Cutberth:</strong> <br>	Este es el ultimo mensaje</p>
										</div>
									</div>
								</div>
								<!-- Si tiene chats -->
								<div id="panel-chat-activo" class="panel-chat shadow-material" style="display: none;">
									<div class="container full npd">
									<div class="back-panel"><button type="button" id="bk-chat" class="btn btn-flat-tran"><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></button></div>
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
		$('#chat-square').animate({ scrollTop: $('#chat-square').prop("scrollHeight")}, 1000);

		// funcion para abrir chats segun el id
		function openChat(identificador){
				$('#panel-historial').hide();
				$('#panel-chat-activo').fadeIn();
				$('#chat-square').animate({ scrollTop: $('#chat-square').prop("scrollHeight")}, 1000);
		}

		$('#bk-chat').click(function(){
				$('#panel-chat-activo').hide();	
			$('#panel-historial').fadeIn();
		});
	</script>
</section>
@stop