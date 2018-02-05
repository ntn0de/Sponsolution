<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/libraries/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/libraries/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/libraries/owl-carousel/owl.carousel.default.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/eve.css')}}" rel="stylesheet" type="text/css" id="css-primary">
	<link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/favicon.png')}}">

    <title>Sponsolution</title>
</head>

<body class="">

<div class="header-sticky">
    <div class="header-sticky-inner">
        <div class="header-logo">
            <a href="{{ route('home') }}">
                <span class="eve-logo"><i class="fa fa-star"></i></span> 
            </a>
        </div><!-- /.header-logo -->


<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target=".header .nav-primary">
	<span></span>
	<span></span>
	<span></span>
</button>	
    </div><!-- /.header-sticky-inner -->
</div><!-- /.header-sticky -->

<div class="page-wrapper">
	<div class="header-wrapper">
	<div class="header">		
		<div class="header-inner">
			<div class="header-top">
				<div class="container-fluid">
					<div class="header-logo">
						<a href="{{ route('home') }}">
							<span class="eve-logo"><i class="fa fa-star"></i></span> 
							<strong>
								<span>Sponsolution</span>
							</strong>
						</a>
					</div><!-- /.header-logo -->

					<div class="header-toggle sidenav-trigger">
					</div><!-- /.header-toggle -->
					
					
					
					<div class="header-search">
						<form>
							<div class="input-group">
								<input type="text" class="form-control" 
								       autocomplete="off" 
									   data-provide="typeahead"
									   placeholder="Search for events in the city ...">

								<div class="input-group-addon">
									<i class="fa fa-search"></i>
								</div><!-- /.input-group-addon -->
							</div><!-- /.input-group -->
						</form>
					</div><!-- /.header-search -->

				</div><!-- /.container-fluid -->
			</div><!-- /.header-top -->

			<div class="header-bottom">
				<div class="container-fluid">
					<div class="nav-primary navbar-toggleable-md collapse">
	<ul class="nav nav-pills">
		<li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
		<li class="nav-item"><a href="{{ route('event') }}" class="nav-link {{ Request::is('event') ? 'active' : '' }}">Events</a></li>
		<li class="nav-item"><a href="{{ route('spotlight') }}" class="nav-link {{ Request::is('spotlight') ? 'active' : '' }}">Spotlight</a></li>
		<li class="nav-item"><a href="{{ route('about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a></li>
		<li class="nav-item"><a href="{{ route('contact') }}" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
	</ul>
</div><!-- /.nav-primary -->

<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target=".header .nav-primary">
	<span></span>
	<span></span>
	<span></span>
</button>	

					<ul class="nav nav-social nav-right">
						<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-facebook"></i></a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-twitter"></i></a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-google"></i></a></li>
						<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-linkedin"></i></a></li>
					</ul>

					<ul class="nav nav-pills nav-secondary nav-right">
							
						@if (Auth::guest())
						@if(Auth::guard('brand')->check()!=1)
						<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Login As</a>
									<div class="dropdown-menu" aria-labelledby="download">
									  <a class="dropdown-item" href="{{ route('login') }}">Event</a>
									  <div class="dropdown-divider"></div>
									  <a class="dropdown-item" href="{{ route('brand.login') }}">Brand</a>
									</div>
						</li>
						<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">Register As</a>
								<div class="dropdown-menu" aria-labelledby="download">
								  <a class="dropdown-item" href="{{ route('register') }}">Event</a>
								  <div class="dropdown-divider"></div>
								  <a class="dropdown-item" href="{{ route('brand.register') }}">Brand</a>
								</div>
						</li>
						@else
						<li class="nav-item"><a href="{{ route('brand.dashboard') }}" class="nav-link">Dashboard</a></li>
						@endif
					
						@else
						<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download">{{ Auth::user()->name }}</a>
								<div class="dropdown-menu" aria-labelledby="download">
								  <a class="dropdown-item" href="{{ route('event') }}">My Events</a>
								  <a class="dropdown-item" href="{{ route('logout') }}"
								  onclick="event.preventDefault();
										   document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
										   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
							</form>
								</div>
						</li>
                        @endif
					</ul>					
				</div><!-- /.container-fluid -->
			</div><!-- /.header-bottom -->
		</div><!-- /.header-inner -->
	</div><!-- /.header -->
</div><!-- /.header-wrapper -->


@yield('content')

    <div class="footer-wrapper">
	<div class="footer">
		<div class="container-fluid">
			<div class="footer-inner">
				<div class="footer-top">
					<div class="footer-left">
						<p class="white">&copy; Sponsolution. All rights reserved.</p>
					</div><!-- /.footer-left -->

					<div class="footer-right">
						<ul class="nav nav-social">
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-facebook"></i></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-twitter"></i></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-dribbble"></i></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-linkedin"></i></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-google"></i></a></li>
						</ul>					
					</div><!-- /.footer-right -->
				</div><!-- /.footer-top -->
				<div class="footer-bottom">
					<h3 class="footer-title">Choose Your City</h3>

					<ul class="nav nav-pills nav-menu center">
						<li class="nav-item"><a href="#" class="nav-link">Kathmandu</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Lalitpur</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Bhaktapur</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Pokhara</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Biratnagar</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Dharan</a></li>
					</ul>				
				</div><!-- /.footer-bottom -->
			</div><!-- /.footer-inner -->
		</div><!-- /.container-fluid -->
	</div><!-- /.footer -->
</div><!-- /.footer-wrapper -->

<div class="page-message-wrapper">
	<div class="page-message">
		<div class="container-fluid">
			<a href="#" class="btn btn-secondary btn-xs">Create Account Now</a>
			
			<p>Do you want to promote an event?</p>
		</div><!-- /.container-fluid -->
	</div><!-- /.page-message -->
</div><!-- /.page-message-wrapper -->


    <div class="page-wrapper-overlay"></div><!-- /.page-wrapper-overlay -->
</div><!-- /.page-wrapper -->

<div class="side-navigation">
	<div class="widget">
		<h2 class="widgettitle">Upcoming Events</h2>
	</div><!-- /.widget -->

	<ul class="timeline">
		@foreach($sideevents as $sidevent)
			<li>
				<h3><a href="event.html">{{$sidevent->title}}</a></h3>

				<div class="clearfix">
					<div class="timeline-image">
						<a href="event.html" style="background-image: url('assets/img/tmp/search-1.jpg');"></a>
					</div><!-- /.timeline-image -->

					<div class="timeline-attrs">
						<span>Thamel, Kathmandu</span>
						<span>Price: <strong>Free</strong></span>
					</div><!-- /.timeline-attrs -->
				</div><!-- /.clearfix -->

				<p>Donec in turpis vitae eros tempus interdum eu quis tellus.</p>
			</li>
		@endforeach	
		
			
		
	</ul>

	<a href="#" class="btn btn-secondary btn-block">Load More</a>
</div><!-- /.side-navigation -->

<script src="http://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
<script type="text/javascript" src="{{ url('assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/libraries/bootstrap-typeahead/bootstrap3-typeahead.min.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/libraries/owl-carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/js/jquery.gmap3.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/js/jquery.ezmark.min.js')}}"></script>
<script type="text/javascript" src="{{ url('assets/js/eve.js')}}"></script>
</body>

</html>