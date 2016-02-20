@extends('admin.template.main')

@section('title', 'Agregar tags')
@section('article_title', 'Nuevo tag')

@section('content')
	{!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del tag', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection