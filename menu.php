<!DOCTYPE html>

<html>
<head>
	<title>Bienvenido</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/styles2.css" />

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script src="js/scripts.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/funciones.js"></script>
</head>
<body>
	<?php
		//abrimos la sesión
		session_start();
		//Si la variable de sesión está vacía
		if ( !isset( $_SESSION['cliente'] ) )
			header("location:index.html");
	?>
	<nav class="navbar navbar-default">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab">
				<li role="presentation" class="active" id="pel"><a href="#peliculas">Peliculas</a></li>
				<li role="presentation" id="al"><a href="#altas">Altas</a></li>
				<li role="presentation" id="ba"><a href="#bajas">Bajas</a></li>
				<li role="presentation" id="ca"><a href="#cambios">Cambios</a></li>
				<li role="presentation" id="bus"><a href="#busquedas">B&uacute;squedas</a></li>
				<li role="presentation" id="ss"><a href="cerrarSesion.php">Salir</a></li>
			</ul>
		</div>
		<div class="text-center">
			Bienvenido <?php echo $_SESSION['cliente']; ?>
		</div>

	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="peliculas">
						<h2>Peliculas nuevas disponibles para usuarios premium: $49 c/u por mes</h2>
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr class="warning">
									<th WIDTH=33%>Las Nuevas:</th>
									<th WIDTH=33%>Haz click sobre la pelicula para agregarla a tu lista</th>
									<th WIDTH=33%>Haz click sobre la pelicula para removerla</th>
								</tr>
								<tr>
									<td class="active">
										<br>
										<div id="contenedor">
											<div id="galeria">
												<img id="mi_pic" src='' width='100%' height='60%'/>
											</div>
										</div>
									</td>
									<td class="active">
									<br>
									<ul id="listadas" class="list-group">
        						<li id="Project Almanac" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Project Almanac&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
        						<li id="Fast & Furious 7" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Fast & Furious 7&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Ouija" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Ouija&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Bob Sponja" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Bob Sponja&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Birdman" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Birdman&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Los pinguinos de madagascar" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Los pinguinos de madagascar&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Dumb and dumber to" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Dumb and dumber to&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Dragon Ball Z" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Dragon Ball Z&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Toy Story 2014" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Toy Story 2014&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Naruto" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Naruto&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Well Never have Paris" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Well Never have Paris&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="BFFs" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;&nbsp;BFFs&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Just Before I go" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Just Before I go&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Get Hard" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Get Hard&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Zapatero a tus zapatos" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Zapatero a tus zapatos&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Death Factory 2014" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Death Factory 2014&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Girlhouse" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Girlhouse&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Musara&ntilde;as" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Musara&ntilde;as&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Sorrow" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Sorrow&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Strange Blood" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Strange Blood&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="The possession of Michael King" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;The possession of Michael King&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="The last survivors" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;The last survivors&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Bienvenidos al ayer" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Bienvenidos al ayer&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="El destino de Jupiter" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;El destino de Jupiter&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Apocalipsis los Angeles" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Apocalipsis los Angeles&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Insurgente" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Insurgente&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Libertador" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Libertador&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="El ultimo Lobo" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;El ultimo Lobo&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="K - 9" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;K - 9&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Journey to Dinosaur Island" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Journey to Dinosaur Island&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="El inventor de Juegos" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;El inventor de Juegos&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Northmen" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Northmen&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Aliens on the moon" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Aliens on the moon&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Citizen Four" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Citizen Four&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Island of Lemurs Madagascar" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Island of Lemurs Madagascar&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="Night will fall" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;Night will fall&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="El expreso polar" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;El expreso polar&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
										<li id="The Gunman" class="list-group-item"><span class="glyphicon glyphicon-film"></span>&nbsp;&nbsp;The Gunman&nbsp;&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></li>
    							</ul>
									</td>
									<td class="active">
										<br>
										<ul id="agregadas" class="list-group">
								    </ul>
								    <br>
									</td>
								</tr>

							</table>
						</div>
						<br>
						<center><input type="button" value="Rentar" id="get"/></center>
						<br>

					</div>
					<div role="tabpanel" class="tab-pane fade" id="altas">
						<h2>Dar de Alta a un usuario:</h2>
						<label for="lid"><h4><span class="label label-primary">Id:</span></h4><input type="text" id="id1"/> </label>
						<label for="lnombre"><h4><span class="label label-primary">Nombre:</span></h4><input type="text" id="nombre1"/> </label>
						<label for="lapellido"><h4><span class="label label-primary">Apellido:</span></h4><input type="text" id="apellido1"/> </label>
						<label for="lnickname"><h4><span class="label label-primary">Nickname:</span></h4><input type="text" id="nickname1"/> </label>
						<label for="ledad"><h4><span class="label label-primary">Edad:</span></h4><input type="number" id="edad1"/> </label>
						<label for="lemail"><h4><span class="label label-primary">E-mail:</span></h4><input type="email" id="email1"/> </label>
						<label for="lcontrasena"><h4><span class="label label-primary">Contrase&ntilde;a:</span></h4><input type="text" id="contrasena1"/> </label>
						<label for="ltelefono"><h4><span class="label label-primary">Tel&#233;fono:</span></h4><input type="tel" id="telefono1"/> </label>
						<label for="ltipousuario"><h4><span class="label label-primary">Tipo de usuario:</span></h4>
							<select id="tipoUsuario1">
  							<option value="Administrador">Administrador</option>
  							<option value="Cliente">Cliente</option>
							</select>
						</label>
						<input type="submit" name="registrar" id="registrar" value="Registrar"> <!-- class="btn btn-default" -->

					</div>
					<div role="tabpanel" class="tab-pane fade" id="bajas">
						<h2>Ingresa el Id para dar de baja:</h2>
						<label for="lid1"><h4><span class="label label-primary">Id:</span></h4><input type="text" id ="id2"/></label>
						<input type="submit" id="darbaja" value="Dar de baja" />
					</div>
					<div role="tabpanel" class="tab-pane fade" id="cambios">
						<h2>Modifica la informaci&oacute;n necesaria:</h2>
						<br>
						<h4><span class="label label-primary">Selecciona el campo que se modificara:</span></h4>
						<select id="opcionCambio" name="opcionCambio" class="form-control">
								<option value="">seleccionar</option>
								<option value="id">Id</option>
								<option value="nombre">Nombre</option>
								<option value="apellido">Apellido</option>
								<option value="nickname">Nickname</option>
								<option value="edad">Edad</option>
								<option value="email">E-mail</option>
								<option value="contrasena">Contrasena</option>
								<option value="telefono">Telefono</option>
								<option value="tipo_usuario">Tipo de usuario</option>
						</select>
						<br>
						<h4><span class="label label-primary">Ingresa la modificacion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h4>
						<input id="modi" name="modi" class="form-control input-sm" type="text" placeholder="modificacion">
						<br>
						<input type="submit" name="boton_actualizar" id="boton_actualizar" value="Actualizar" >
					</div>
					<div role="tabpanel" class="tab-pane fade" id="busquedas">
						<h2>Ingresa un id para un solo usuario o deja la entrada vacia para mostrar a todos:</h2>
						<br>
						<h4><span class="label label-primary">Ingresa id:</span></h4>
						<input type="text" id="buscando"/>
						<input type="submit" name="boton_buscar" id="boton_buscar" value="Buscar" >

							<table id="tablass" class="table table-bordered">
							</table>

					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<footer class="text-center">
		<p>Integrantes: Rogelio Mart&iacute;nez Ch&aacute;vez, Josue Emmanuel De Luna Mac&iacute;as, Miguel Breceda De Lara</p>
	</footer>
</body>
</html>
