<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo URL::asset('css/menu.css') ?>" type="text/css"> 		
</head>
<body>
	<header id="titulo">
		<div id="auth">
			@if (Auth::check())
				<p>{{{Auth::user()->nombre }}} {{{Auth::user()->apellido }}}&nbsp&nbsp <a href="{{url('logout')}}">(Cerrar Sesión)</a></p>
			@endif
		</div>
		<img src="img/Odontologia.png">
		<h1>FACULTAD DE ODONTOLOGIA</h1>
		<h2>UNIVERSIDAD DE EL SALVADOR</h2>
		<section class="menu">
			<div>
		        <nav>
		            <ul>
		                <li><a href="#">Registro</a></li>
		                <li><a href="#">Traslado</a></li>
		                <li><a href="#">Préstamo</a></li>
		                <li><a href="#">Descargo</a></li>
		                <li><a href="#">Formularios</a></li>
		                <li><a href="#">Consultar</a></li>
		                <li><a href="#">Historial</a></li>
		                <li><a href="#">Usuarios</a></li>	   
		            </ul>
		   		</nav>
		   	</div>
    	</section>
	</header>
</body>
</html>