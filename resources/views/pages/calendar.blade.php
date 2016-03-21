@extends('layouts.default')

@section('content')
<div class="container">
	<div id='calendar' style="width: 100%"></div>
</div>

<script type="text/javascript">
	$(function () {
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: ''
			},
			editable: true,
			events: {
			    url: "{{ route('coffee.dates') }}",
			    color: 'transparent',
			    textColor: 'black'
			}
		});
	});
</script>
@stop