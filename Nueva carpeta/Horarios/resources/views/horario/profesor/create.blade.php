@extends ('layouts.admin')

@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Profesor</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors-all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul> 
			</div>
			@endif

			{!!Form::open(array('url'=>'horario/profesor','method'=>'POST','autocomplete'=>'off'))!!}

			{{Form::token()}}
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre..">
			</div>

			<div class="form-group">
				<label for="telefono">Telefono</label>
				<input type="text" name="telefono" class="form-control" placeholder="Telefono..">
			</div>

			<div class="form-group">
				<label for="correo">Correo</label>
				<input type="text" name="correo" class="form-control" placeholder="Correo...">
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>

				<button class="btn btn-danger" type="submit">Cancelar</button>
			</div>

			{!!Form::Close()!!}
		</div>
	</div>


@endsection