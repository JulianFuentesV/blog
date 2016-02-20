@extends('admin.template.main')

@section('title', 'Categorias')
@section('article_title', 'Lista de categorias')

@section('content')
	<!-- BUSCADOR -->
		{!! Form::open(['route' => 'admin.categories.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
			<div class="input-group">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar categoria', 'aria-describedby' => 'search']) !!}
				<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
			</div>
		{!! Form::close() !!}
		<br><br><br><br>
	<!-- FIN BUSCADOR -->
	<table class="table table-striped">
		<thead>
			<th>ID</th>	
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td>
						<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
						<a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('¿Realmente quieres eliminar esta categoria?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div><a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Crear nueva categoria
	</a></div>
	<div class="text-center">{!! $categories->render() !!}</div>
@endsection