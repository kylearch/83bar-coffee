<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Coffee</title>

  <!-- CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="{{ asset('css/slider.css') }}" type="text/css" media="screen" title="no title" charset="utf-8">

  <!-- Javascript -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="//arshaw.com/js/fullcalendar-1.5.3/fullcalendar/fullcalendar.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap-slider.js') }}"></script>

</head>
	<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
	</body>
</html>