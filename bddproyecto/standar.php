<!DOCTYPE html>
<html>
<head>
	<title>Estándar - Página principal</title>
</head>
	<link rel="stylesheet" href="standar.css">
<body>

	<main>
		<div class="standar-box">
			<h1>Clientes</h1> <h3>Estándar #</h3>


			<form class="" action="" method="">

				<div class="textbox">
					<i class="fas fa-code"></i>
					<input type="varchar(10)" name="codigo" placeholder="Código">
				</div>
					<input class="btn" type="button" name="consulta" value="Buscar">

				<div class="textbox">
					<i class="fas fa-code"></i>
					<input type="varchar(10)" name="codigo" placeholder="Código">
				</div>

				<div class="textbox">
					<i class="fas fa-name"></i>
					<input type="varchar(25)" name="nombres" placeholder="Nombres">
				</div>	

				<div class="textbox">
					<i class="fas fa-ape"></i>
					<input type="varchar(25)" name="apellidos" placeholder="Apellidos">
				</div>

				<div class="textbox">
					<i class="fas fa-nit"></i>
					<input type="int(9)" name="nit" placeholder="NIT">
				</div>

				<label for="dateofbirth">Fecha de nacimiento</label>
					<input type="date" name="dateofbirth" id="dateofbirth">

				<label class="gen">Masculino
  					<input type="checkbox" checked="">
  					<span class="checkmark"></span>
				</label>
				<label class="gen">Femenino
  					<input type="checkbox" checked="">
  					<span class="checkmark"></span>
				</label>

				<div class="textbox">
					<i class="fas fa-name"></i>
					<input type="varchar(100)" name="direccion" placeholder="Direccion">
				</div>

				<div class="textbox">
					<i class="fas fa-phone"></i>
					<input type="int(8)" name="telefono" placeholder="Telefono">
				</div>

				<div class="textbox">
					<i class="fas fa-desc"></i>
					<input type="varchar(100)" name="descripcion" placeholder="Descripción">
				</div>

				<input class="btn2" type="button" name="crear" value="Crear">
				<input class="btn2" type="button" name="actualizar" value="Actualizar">
				<input class="btn2" type="button" name="elminar" value="Elminar">

			
			</form>
		</div>
	</main>

</body>
</html>