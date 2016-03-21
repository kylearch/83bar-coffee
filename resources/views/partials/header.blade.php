<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="{{ route('index') }}">Home</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="menu">
			<ul class="nav navbar-nav">
				<li><a href="{{ route('coffee.index') }}"><i class='fa fa-coffee'></i> Coffees</a></li>
				<li><a href="{{ route('coffee.rate') }}"><i class="fa fa-trophy"></i> Rate Today's</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ route('coffee.add') }}"><i class="fa fa-plus"></i> Add Coffee</a></li>
				<?php /*
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
				*/ ?>
			</ul>
		</div>
	</div>
</nav>

@if (session()->has('error'))
<div class="alert alert-danger" role="alert">
	{{ session()->get('error') }}
</div>
@endif
@if (session()->has('message'))
<div class="alert alert-success" role="alert">
	{{ session()->get('message') }}
</div>
@endif

<h1 class="text-center">☕</h1>