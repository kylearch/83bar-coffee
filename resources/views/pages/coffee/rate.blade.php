@extends('layouts.default')

@section('content')
<div class="container">
	{!! Form::open(['route' => 'coffee.rate', 'method' => 'post']) !!}
		{!! Form::hidden('date_id', $date->id) !!}
		<div class="form-group col-xs-12 col-md-3">
			{!! Form::label('coffee', "Today's Coffee:") !!}
			{!! Form::text('coffee', $date->coffee->brand . " - " . $date->coffee->name, ['class' => 'form-control', 'readonly']) !!}
		</div>
		<div class="form-group col-xs-12 col-md-3">
			{!! Form::label('user_id', 'User:') !!}
			{!! Form::select('user_id', $users->sortBy('name')->lists('name', 'id'), NULL, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group col-xs-12 col-md-3">
			{!! Form::label('score', 'Score:') !!}&nbsp;&nbsp;
			{!! Form::text('score', 5, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group col-xs-12 col-md-3">
			{!! Form::label('', '&nbsp;') !!}
			{!! Form::submit('Save', ['class' => 'btn btn-block btn-success']) !!}
		</div>
	{!! Form::close() !!}
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#score").slider({ tooltip: 'show' });
	});
</script>
@stop