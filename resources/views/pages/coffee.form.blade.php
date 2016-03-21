@extends('layouts.default')

@section('content')
<div class="container">
	{!! Form::open(['route' => 'coffee.store', 'method' => 'post']) !!}
		<div class="form-group">
			{!! Form::label('brand', 'Brand:') !!}
			{!! Form::text('brand', $coffee->brand, ['class' => 'form-control']) !!}
		</div>
	{!! Form::close() !!}
</div>
@stop