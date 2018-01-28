@extends ('layouts.admin')

@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Profesores<a href="profesor/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('horario.profesor.search')
	</div>
</div>


<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>Nombre</th>
					<th>Telefono</th>
					<th>Correo</th>
					<th>Estado</th>	
					<th>Opciones<th>			
				</thead>
				@foreach ($profesores as $pro)
					<tr>
						
						<td>{{ $pro->NOMBREPROF}}</td>
						<td>{{ $pro->TELEFONOPROF}}</td>
						<td>{{ $pro->CORREOPROF}}</td>
						<td>{{ $pro->ESTADOPROF}}</td>	
						<td>
							<a href=""><button class="btn  btn-info"> Editar</button></a>

							<a href=""><button class="btn  btn-danger"> Eliminar </button></a>
						</td>			
					</tr>
				@endforeach
			</table>		
		</div>
		{{ $profesores->render()}}
	</div>
</div>

@endsection 