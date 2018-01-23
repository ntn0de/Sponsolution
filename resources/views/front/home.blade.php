@extends('layout.main')

@section('content')

		<div class="main-wrapper">
	    <div class="main">
	        <div class="main-inner">
	        	

	            <div class="content">
	                <div class="hero hero-creative-wrapper">
	<div class="hero-creative">
		<div class="hero-creative-image" style="background-image: url('assets/img/tmp/hero-2.jpg');">

			<div class="hero-creative-title">
				<h1>Find the</h1>
				<h2>Best Event <br>for Your Brand</h2>
				<a href="#" class="btn btn-secondary btn-lg">Register Your Brand <i class="fa fa-chevron-right"></i></a>
				<a href="{{route('submitevent')}}" class="btn btn-secondary btn-lg">Submit an Event <i class="fa fa-chevron-right"></i></a>
			</div><!-- /.hero-creative-title -->		

			<div class="hero-scroll">
				<div class="hero-scroll-mice">
				</div><!-- /.hero-scroll-mice -->
				<span>Scroll Down</span>
			</div><!-- /.hero-scroll -->								
		</div><!-- /.hero-image -->
	</div><!-- /.hero-creative -->
</div><!-- /.hero -->

<div class="boxes">
	<div class="container-fluid no-padding">
		<div class="box-wrapper">
			<div class="box">
				<i class="fa fa-dot-circle-o"></i>
				<h2>One</h2>

				<p>
					Mauris in euismod ante. In accumsan orci sed turpis blandit elementum. Vestibulum.
				</p>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->

		<div class="box-wrapper">
			<div class="box">
				<i class="fa fa-dot-circle-o"></i>
				<h2>Two</h2>

				<p>
					Mauris in euismod ante. In accumsan orci sed turpis blandit elementum. Vestibulum.
				</p>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->

		<div class="box-wrapper">
			<div class="box">
				<i class="fa fa-dot-circle-o"></i>
				<h2>Three</h2>

				<p>
					Mauris in euismod ante. In accumsan orci sed turpis blandit elementum. Vestibulum.
				</p>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->

		<div class="box-wrapper">
			<div class="box">
				<i class="fa fa-dot-circle-o"></i>
				<h2>Four</h2>

				<p>
					Mauris in euismod ante. In accumsan orci sed turpis blandit elementum. Vestibulum.
				</p>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->						
	</div><!-- /.container-fluid -->
</div><!-- /.boxes -->


<div class="partners">
	<div class="container-fluid">
		<div class="page-title page-title-fullwidth-description page-title-no-padding-top center">
			<h2>Partners of Sponsolution</h2>

			<p>
				Vivamus viverra imperdiet efficitur. Fusce sagittis arcu sed fringilla blandit. In quis orci eu sapien porttitor feugiat pretium at metus. <br>Donec nec arcu sed augue convallis vestibulum vitae eget mauris.
			</p>
		</div><!-- /.page-title -->

		<a href="#">
			<img src="assets/img/tmp/partners/partner-1.png" alt="" height="50">
		</a>

		<a href="#">
			<img src="assets/img/tmp/partners/partner-2.png" alt="" height="74">
		</a>

		<a href="#">
			<img src="assets/img/tmp/partners/partner-3.png" alt="" height="64">
		</a>

		<a href="#">
			<img src="assets/img/tmp/partners/partner-4.png" alt="" height="50">
		</a>

		<a href="#">
			<img src="assets/img/tmp/partners/partner-5.png" alt="" height="40">
		</a>
	</div><!-- /.container -->
</div><!-- /.partners -->

<div class="container-fluid">
	<div class="page-title">
		<h2>Popular Locations</h2>

		<p>
			Vivamus viverra imperdiet efficitur. Fusce sagittis arcu sed fringilla blandit. In quis orci eu sapien porttitor feugiat pretium at metus. Donec nec arcu sed augue convallis vestibulum vitae eget mauris.
		</p>
	</div><!-- /.page-title -->

	<div class="row">	
		
			<div class="col-xl-2 col-5">
				<div class="card-simple">
	<div class="card-simple-image">
		<a href="#" style="background-image: url('assets/img/tmp/medium-1.jpg');"></a>
	</div><!-- /.card-simple-image -->

	<div class="card-simple-content">
		<h3 class="card-simple-title">Kathmandu</h3>
		<h4 class="card-simple-subtitle">328 events</h4>
		<a href="#" class="btn btn-secondary">See All Events</a>
	</div><!-- /.card-content -->
</div><!-- /.card-simple -->
			</div><!-- /.col-* -->
		
			<div class="col-xl-2 col-5">
				<div class="card-simple">
	<div class="card-simple-image">
		<a href="#" style="background-image: url('assets/img/tmp/medium-2.jpg');"></a>
	</div><!-- /.card-simple-image -->

	<div class="card-simple-content">
		<h3 class="card-simple-title">Lalitpur</h3>
		<h4 class="card-simple-subtitle">328 events</h4>
		<a href="#" class="btn btn-secondary">See All Events</a>
	</div><!-- /.card-content -->
</div><!-- /.card-simple -->
			</div><!-- /.col-* -->
		
			<div class="col-xl-2 col-5">
				<div class="card-simple">
	<div class="card-simple-image">
		<a href="#" style="background-image: url('assets/img/tmp/medium-3.jpg');"></a>
	</div><!-- /.card-simple-image -->

	<div class="card-simple-content">
		<h3 class="card-simple-title">Bhaktapur</h3>
		<h4 class="card-simple-subtitle">328 events</h4>
		<a href="#" class="btn btn-secondary">See All Events</a>
	</div><!-- /.card-content -->
</div><!-- /.card-simple -->
			</div><!-- /.col-* -->
		
			<div class="col-xl-2 col-5">
				<div class="card-simple">
	<div class="card-simple-image">
		<a href="#" style="background-image: url('assets/img/tmp/medium-4.jpg');"></a>
	</div><!-- /.card-simple-image -->

	<div class="card-simple-content">
		<h3 class="card-simple-title">Pokhara</h3>
		<h4 class="card-simple-subtitle">328 events</h4>
		<a href="#" class="btn btn-secondary">See All Events</a>
	</div><!-- /.card-content -->
</div><!-- /.card-simple -->
			</div><!-- /.col-* -->
		
			<div class="col-xl-2 col-5">
				<div class="card-simple">
	<div class="card-simple-image">
		<a href="#" style="background-image: url('assets/img/tmp/medium-5.jpg');"></a>
	</div><!-- /.card-simple-image -->

	<div class="card-simple-content">
		<h3 class="card-simple-title">Biratnagaar</h3>
		<h4 class="card-simple-subtitle">328 events</h4>
		<a href="#" class="btn btn-secondary">See All Events</a>
	</div><!-- /.card-content -->
</div><!-- /.card-simple -->
			</div><!-- /.col-* -->
		
	</div><!-- /.row -->
</div><!-- /.container-fluid -->


<div class="container-fluid push-bottom">
	<div class="page-title">
		<h2>Most Popular Events</h2>

		<p>
			Vivamus viverra imperdiet efficitur. Fusce sagittis arcu sed fringilla blandit. In quis orci eu sapien porttitor feugiat pretium at metus. Donec nec arcu sed augue convallis vestibulum vitae eget mauris.
		</p>
	</div><!-- /.page-title -->

	<div class="row">
		
			<div class="col-lg-3 col-xl-2 col-5">
				<div class="card">
	<div class="card-inner">
		<div class="card-image">
			<a href="event.html" style="background-image: url('assets/img/tmp/medium-1.jpg');">
				<span><i class="fa fa-search"></i></span>
			</a>

			<div class="card-actions">
				<a href="#"><i class="fa fa-bookmark"></i> <span>Save</span></a>
				<a href="#"><i class="fa fa-heart"></i> <span>Like</span></a>
			</div><!-- /.card-actions -->
		</div><!-- /.card-image -->

		<div class="card-content">	
			<div class="card-date">
				<strong>27</strong>
				<span>Apr</span>
			</div><!-- /.card-date -->

			<h3 class="card-title">
				<a href="event.html">Political Ha Ha Box: Free Public Art | Mission Dist.</a>
			</h3>

			<h4 class="card-subtitle">
				<a href="#">Thamel, kathmandu</a>
			</h4>
		</div><!-- /.card-content -->
	</div><!-- /.card-inner -->
</div><!-- /.card -->
			</div><!-- /.col-* -->
		
			<div class="col-lg-3 col-xl-2 col-5">
				<div class="card">
	<div class="card-inner">
		<div class="card-image">
			<a href="event.html" style="background-image: url('assets/img/tmp/medium-2.jpg');">
				<span><i class="fa fa-search"></i></span>
			</a>

			<div class="card-actions">
				<a href="#"><i class="fa fa-bookmark"></i> <span>Save</span></a>
				<a href="#"><i class="fa fa-heart"></i> <span>Like</span></a>
			</div><!-- /.card-actions -->
		</div><!-- /.card-image -->

		<div class="card-content">	
			<div class="card-date">
				<strong>27</strong>
				<span>Apr</span>
			</div><!-- /.card-date -->

			<h3 class="card-title">
				<a href="event.html">lorem Ipsum</a>
			</h3>

			<h4 class="card-subtitle">
				<a href="#">Jhamsikhel , Lalitpur</a>
			</h4>
		</div><!-- /.card-content -->
	</div><!-- /.card-inner -->
</div><!-- /.card -->
			</div><!-- /.col-* -->
		
			<div class="col-lg-3 col-xl-2 col-5">
				<div class="card">
	<div class="card-inner">
		<div class="card-image">
			<a href="event.html" style="background-image: url('assets/img/tmp/medium-3.jpg');">
				<span><i class="fa fa-search"></i></span>
			</a>

			<div class="card-actions">
				<a href="#"><i class="fa fa-bookmark"></i> <span>Save</span></a>
				<a href="#"><i class="fa fa-heart"></i> <span>Like</span></a>
			</div><!-- /.card-actions -->
		</div><!-- /.card-image -->

		<div class="card-content">	
			<div class="card-date">
				<strong>27</strong>
				<span>Apr</span>
			</div><!-- /.card-date -->

			<h3 class="card-title">
				<a href="event.html">lorem Ipsum</a>
			</h3>

			<h4 class="card-subtitle">
				<a href="#">Jhamsikhel , Lalitpur</a>
			</h4>
		</div><!-- /.card-content -->
	</div><!-- /.card-inner -->
</div><!-- /.card -->
			</div><!-- /.col-* -->
		
			<div class="col-lg-3 col-xl-2 col-5">
				<div class="card">
	<div class="card-inner">
		<div class="card-image">
			<a href="event.html" style="background-image: url('assets/img/tmp/medium-4.jpg');">
				<span><i class="fa fa-search"></i></span>
			</a>

			<div class="card-actions">
				<a href="#"><i class="fa fa-bookmark"></i> <span>Save</span></a>
				<a href="#"><i class="fa fa-heart"></i> <span>Like</span></a>
			</div><!-- /.card-actions -->
		</div><!-- /.card-image -->

		<div class="card-content">	
			<div class="card-date">
				<strong>27</strong>
				<span>Apr</span>
			</div><!-- /.card-date -->

			<h3 class="card-title">
				<a href="event.html">lorem Ipsum</a>
			</h3>

			<h4 class="card-subtitle">
				<a href="#">Jhamsikhel , Lalitpur</a>
			</h4>
		</div><!-- /.card-content -->
	</div><!-- /.card-inner -->
</div><!-- /.card -->
			</div><!-- /.col-* -->
		
			<div class="col-lg-3 col-xl-2 col-5">
				<div class="card">
	<div class="card-inner">
		<div class="card-image">
			<a href="event.html" style="background-image: url('assets/img/tmp/medium-5.jpg');">
				<span><i class="fa fa-search"></i></span>
			</a>

			<div class="card-actions">
				<a href="#"><i class="fa fa-bookmark"></i> <span>Save</span></a>
				<a href="#"><i class="fa fa-heart"></i> <span>Like</span></a>
			</div><!-- /.card-actions -->
		</div><!-- /.card-image -->

		<div class="card-content">	
			<div class="card-date">
				<strong>27</strong>
				<span>Apr</span>
			</div><!-- /.card-date -->

			<h3 class="card-title">
				<a href="event.html">lorem Ipsum</a>
			</h3>

			<h4 class="card-subtitle">
				<a href="#">Jhamsikhel , Lalitpur</a>
			</h4>
		</div><!-- /.card-content -->
	</div><!-- /.card-inner -->
</div><!-- /.card -->
			</div><!-- /.col-* -->
		
	</div><!-- /.row -->
</div><!-- /.container-fluid -->


	            </div><!-- /.content -->
	        </div><!-- /.main-inner -->
	    </div><!-- /.main -->
    </div><!-- /.main-wrapper -->

@endsection