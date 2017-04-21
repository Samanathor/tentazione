<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="/css/wickedpicker.css">
	<script src="/js/wickedpicker.js"></script>
	<script src="/js/jquery.countdown.min.js"></script>
</head>
<body>


@foreach($todocitas as $peticiones)

{{csrf_field()}}

Postularse al servicio {{$peticiones->id}} <br/>
{{$peticiones->descripcion}}
{{$peticiones->ciudad}}
{{$peticiones->hora_inicio}}
<button id="{{$peticiones->id}}" class="id_postularse">Postularse</button> <br/><br/>

@endforeach


<script type="text/javascript">

$(document).ready(function()
{
	$(".id_postularse").click(function()
	{
		var id_peticion=this.id;
		 $.ajax({
		      url: 'postularse', //indicamos la ruta donde se genera la hora
		      dataType: 'json',//indicamos que es de tipo texto plano
		      type: "POST",
		      async: false,   //ponemos el parámetro asyn a falso
		      data: {
	           _token:$('input[name=_token]').val(),
	           id_cita:id_peticion

		     },
		   success: function(data) {
	    	console.log(data.proveedor_postulado);
			   	
		   },
		   error: function (data) {

		    console.log(data);          
			}
		}).responseText;	
	});
});
</script>

</body>
</html>