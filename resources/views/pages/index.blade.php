@extends('layouts.default')

@section('content')
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Brand</th>
				<th>Name</th>
				<th>Roast</th>
				<th>Flavor</th>
				<th>Score</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($coffees as $coffee)
			<tr>
				<td>{{ $coffee->brand }}</td>
				<td><a href="{{ route('coffee.edit', $coffee->id) }}">{{ $coffee->name }}</a></td>
				<td>{{ ucwords($coffee->roast) }}</td>
				<td>{!! empty($this->flavor) ? '<em class="text-muted">None</span>' : $this->flavor !!}</td>
				<td>{{ $coffee->score }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop