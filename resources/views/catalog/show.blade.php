@extends('layouts.master')

@section('content')

<div class="row">

	<div class="col-sm-4" style="width: 800px">

		{{-- TODO: Imagen de la película --}}
		<img src="{{$peli['poster']}}" style="height:400px;float:left"/>

	</div>
	<div class="col-sm-8">

		{{-- TODO: Datos de la película --}}
		<h3>{{$peli['title']}}</h3>
		<h4>
			Año: {{$peli['year']}}
		</h4> 

		<h4>
			Director: {{$peli['director']}}
		</h4>
		<p>
			<b>Resumen: </b>{{$peli['synopsis']}}
		</p>
		<span style='display:block'>
			<b> Estado: </b>
			@if($peli['rented']==true)
			Película actualmente alquilada.
			<br>
			<a class="btn btn-danger" href="#">
				Devolver película
			</a>
			@else
			Puede alquilar esta película.
			<br>
			<a class="btn btn-success" href="#">
				Alquilar película
			</a>
			@endif

			<a class="btn btn-warning" href="{{url('catalog/edit/'.$id)}}">
				Editar película
			</a>
			<a class="btn btn-secondary" href="{{url('catalog/')}}">
				Volver al catálogo
			</a>
		</span>
		
	</div>

	@stop