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
<style>
  body{
    min-height: 100vh;
    background: url(/imgs/pattern-red.jpg);
    height: 100vh;
  }
</style>
<nav class="navbar navbar-default">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header col-xs-12">
      
      <div class="row">
        <div class="col-xs-4 text-center"><button class="btn btn-lg"><span class="glyphicon glyphicon-user active" aria-hidden="true"></span></button></div>
        <div class="col-xs-4 text-center"><button class="btn btn-lg" onclick="location.href='proveedores'"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></button></div>
        <div class="col-xs-4 text-center"><button class="btn btn-lg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></button></div>
      </div>
    </div>

    
  
</nav>

 <!-- Header section containing logo -->
  <header>
      <div id="user-container">
        <div hidden id="user-pic"></div>

        <button hidden id="create-User">
          Crear
        </button>
         <input type="hidden" id="txtEmail" name="txtEmail" placeholder="email" value="{{$email}}">
          <input type="hidden" id="txtPassword" name="txtPassword" placeholder="Contraseña" value="{{$password}}">
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
    <button hidden id="sign-out" >
                        Cerrar Sesion
                  </button>

              </div>

            </div>
            <div class="body-panel">
              <div class="container full npd">
                <!-- Si no Tiene chats activos -->
                <div id="panel-historial" class="col-xs-12 text-center" >
                  <p style="display: none;" class="m-tp-20">You don't have active chats </p>

                  <div class="list-chats">
                    <div class="chat-item m-tp-20" onclick="openChat(1)">
                      <img src="/imgs/profile-pictures/model-face.jpeg" alt="">
                      <p> <strong><span >{{$email}}</span></strong> <br>  Este es el ultimo mensaje</p>
                    </div>
                  </div>
                </div>
                <!-- Si tiene chats -->
                <div id="panel-chat-activo" class="panel-chat shadow-material" style="display: none;">
                  <div class="container full npd">
                  <div class="back-panel"><button type="button" id="bk-chat" class="btn btn-flat-tran"><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></button></div>
                  <div class="img-profile-panel">
                  <img class="" src="/imgs/profile-pictures/model-face.jpeg" alt=""></div>
                    <div id="user-name" class="chat-tittle panel-head c-r text-center">
{{$email}}
                    
                    </div>
                    <div id="chat-square" class="chat-square">
                    <!-- Aqui se agregan dinamicamente los mensajes en el chat -->
                    <!-- chat-msg-left para el destinatario -->
                    <!-- chat-msg-right para el que envia -->
                    <!-- Estos se tienen que agregar con append jquery -->
                   
         <div id="messages-card">
          <div id="messages">
            <span id="message-filler"></span>
          </div>

          <form id="message-form" action="#">
            <div class="chat-actions">
              <input type="text" id="message">
            <button id="submit" disabled type="submit" class="btn shadow-material">Enviar
            </button>
            </div>
          </form>


        </div>

           <form id="image-form" action="#">
            <input id="mediaCapture" type="file" accept="image/*,capture=camera">
            <button id="submitImage" title="Add an image">
            </button>
          </form> 

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

