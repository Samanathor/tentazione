<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tentazione - Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="/css/wickedpicker.css">
    <link rel="stylesheet" href="/css/main.css">

	<script src="/js/wickedpicker.js"></script>
	<script src="/js/jquery.countdown.min.js"></script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Learn how to use the Firebase platform on the Web">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat-Tentazionet</title>
  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="manifest.json">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Friendly Chat">
  <meta name="theme-color" content="#303F9F">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="Friendly Chat">
  <meta name="apple-mobile-web-app-status-bar-style" content="#303F9F">

  <!-- Tile icon for Win8 -->
  <meta name="msapplication-TileColor" content="#3372DF">
  <meta name="msapplication-navbutton-color" content="#303F9F">

  <!-- Material Design Lite -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

  <!-- App Styling -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
</head>
<body>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">

  <!-- Header section containing logo -->
  <header class="mdl-layout__header mdl-color-text--white mdl-color--light-blue-700">
    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">
      <div class="mdl-layout__header-row mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
        <h4><i class="material-icons">chat_bubble_outline</i> Tentazione-Chat
        <br>
        <span>{{$email}}</span>
        </h4>
      </div>
      <div id="user-container">
        <div hidden id="user-pic"></div>



    <button hidden id="sign-out" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white">
      Cerrar Sesion
    </button>

<button hidden id="create-User">
  Crear
</button>
    

       
      </div>
    </div>
  </header>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="card text-center">
					<div class="container full">
						<div class="row">

							<div class="col-xs-12 panel-head text-center c-r">
								<p class="text-center" id="sign-in">Active Chat</p>

                <input type="hidden" id="txtEmail" name="txtEmail" placeholder="email" value="{{$email}}">
    <input type="hidden" id="txtPassword" name="txtPassword" placeholder="Contraseña" value="{{$password}}">
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
											<p> <strong><span >{{$email}}</span></strong> <br>	Este es el ultimo mensaje</p>
										</div>
									</div>
								</div>
								<!-- Si tiene chats -->
								<div id="panel-chat-activo" class="panel-chat shadow-material" style="display: none;">
									<div class="container full npd">
									<div class="back-panel"><button type="button" id="bk-chat" class="btn btn-flat-tran"><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></button></div>
									<div class="img-profile-panel"></div>
										<div hidden id="user-name" class="chat-tittle panel-head c-r text-center ">
			<br>
										</div>
										<div id="chat-square" class="chat-square">
										
										<div class="chat-actions">
    <div id="messages-card-container" class="mdl-cell mdl-cell--12-col mdl-grid">
											 <main class="mdl-layout__content mdl-color--grey-100">

      <!-- Messages container -->
      <div id="messages-card" class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--6-col-tablet mdl-cell--6-col-desktop">
        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
          <div id="messages">
            <span id="message-filler"></span>
          </div>
          <form id="message-form" action="#">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="message">
              <label class="mdl-textfield__label" for="message">Mensaje...</label>
            </div>
            <button id="submit" disabled type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
              Enviar
            </button>
          </form>
          <form id="image-form" action="#">
            <input id="mediaCapture" type="file" accept="image/*,capture=camera">
            <button id="submitImage" title="Add an image" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--amber-400 mdl-color-text--white">
              <i class="material-icons">image</i>
            </button>
          </form>
        </div>
      </div>

      <div id="must-signin-snackbar" class="mdl-js-snackbar mdl-snackbar">
        <div class="mdl-snackbar__text"></div>
        <button class="mdl-snackbar__action" type="button"></button>
      </div>

    </div>
  </main>
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





<script src="https://www.gstatic.com/firebasejs/3.7.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBLp4mFNS-LcVNM9xH8kzI0KU8QqTv7ZgI",
    authDomain: "tentazione-96f1b.firebaseapp.com",
    databaseURL: "https://tentazione-96f1b.firebaseio.com",
    storageBucket: "tentazione-96f1b.appspot.com",
    messagingSenderId: "293441129913"
  };
  firebase.initializeApp(config);
</script>


<script src="/js/main.js"></script>


<script src="/js/core.js"></script>
   <script src="/js/jquery.js"></script>
   	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/app.js"></script>
<script>

$(document).ready(function()
{
  $("#create-User").click();
  $("#sign-in").click();
});
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

</body>
</html>


