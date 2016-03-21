@extends('layouts.default')

@section('content')
<div class="container">
	{!! Form::open(['route' => ($coffee->exists) ? ['coffee.update', $coffee->id] : 'coffee.store', 'method' => ($coffee->exists) ? 'put' : 'post']) !!}
		<div class="form-group">
			{!! Form::label('brand', 'Brand:') !!}
			{!! Form::text('brand', $coffee->brand, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', $coffee->name, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('roast', 'Roast:') !!}
			{!! Form::select('roast', ['light' => 'Light', 'medium' => 'Medium', 'dark' => 'Dark'], $coffee->roast, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('flavor', 'Flavor:') !!}
			{!! Form::text('flavor', $coffee->flavor, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('date', 'Date:') !!} <small class='text-muted'>(optional)</small>
			{!! Form::date('date', $coffee->flavor, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Save', ['class' => 'btn btn-success btn-block']) !!}
		</div>
	{!! Form::close() !!}
</div>

<script type="text/javascript">
	$('#date').datepicker({
	    format: "yyyy-mm-dd",
	    autoclose: true,
	    todayHighlight: true
	});
</script>
@stop