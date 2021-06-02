<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
	<div class="col-md-12">
		<section class="panel"> 
			<div class="panel-body">
 
				@if ( !empty ( $alumno->id) )
 
					<div class="form-group">
						<label for="nombre" class="negrita">Nombre:</label> 
						<div>
							<input class="form-control" placeholder="Jugo de Fresa" required="required" name="nombre" type="text" id="nombre" value="{{ $alumno->nombre }}"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="precio" class="negrita">apellidos:</label> 
						<div>
							<input class="form-control" placeholder="4.50" required="required" name="apellidos" type="text" id="apellidos" value="{{ $alumno->apellidos }}"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="stock" class="negrita">edad:</label> 
						<div>
							<input class="form-control" placeholder="40" required="required" name="edad" type="text" id="edad" value="{{ $alumno->edad }}"> 
						</div>
					</div>
					<div class="form-group">
						<label for="nombre" class="negrita">email:</label> 
						<div>
							<input class="form-control" placeholder="email" required="required" name="email" type="text" id="email" value="{{ $alumno->email }}"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="precio" class="negrita">telefono:</label> 
						<div>
							<input class="form-control" placeholder="4.50" required="required" name="telefono" type="text" id="telefono" value="{{ $alumno->telefono }}"> 
						</div>
					</div>
 
					</div>
 
					@else
 
					<div class="form-group">
						<label for="nombre" class="negrita">Nombre:</label> 
						<div>
							<input class="form-control" placeholder="Jugo de Fresa" required="required" name="nombre" type="text" id="nombre"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="precio" class="negrita">Apellidos:</label> 
						<div>
							<input class="form-control" placeholder="4.50" required="required" name="Apellidos" type="text" id="Apellidos"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="stock" class="negrita">edad:</label> 
						<div>
							<input class="form-control" placeholder="40" required="required" name="edad" type="text" id="edad"> 
						</div>
					</div>
					<div class="form-group">
						<label for="precio" class="negrita">email:</label> 
						<div>
							<input class="form-control" placeholder="email" required="required" name="email" type="text" id="email"> 
						</div>
					</div>
 
					<div class="form-group">
						<label for="stock" class="negrita">telefono:</label> 
						<div>
							<input class="form-control" placeholder="telefono" required="required" name="telefono" type="text" id="telefono"> 
						</div>
					</div>
 
					
 
				@endif
 
				<button type="submit" class="btn btn-info">Guardar</button>
				<a href="{{ route('admin/alumno') }}" class="btn btn-warning">Cancelar</a>
 
				<br>
				<br>
 
			</div>
		</section>
	</div>
</div>
</body>
</html>