@extends('layout.main')

@section('content')<div class="main-wrapper">
	    <div class="main">
	        <div class="main-inner">
	        	

	            <div class="content">
	                <div class="event-gallery owl-carousel">
	
		<img src="../assets/img/tmp/medium-1.jpg" alt="Political Ha Ha Box: Free Public Art | Mission Dist.">
	
		<img src="../assets/img/tmp/medium-2.jpg" alt="Fog City Movie Night: Finding Nemo">
	
		<img src="../assets/img/tmp/medium-3.jpg" alt="Carnaval Festival 2016: Sunday">
	
		<img src="../assets/img/tmp/medium-4.jpg" alt="Return of the Cypher Samurai Sunday Night">
	
		<img src="../assets/img/tmp/medium-5.jpg" alt="Free Rare Potrero Hill Guided Walking Tour">
	
		<img src="../assets/img/tmp/medium-1.jpg" alt="Free Comedy: Showtime at Showdown">
	
		<img src="../assets/img/tmp/medium-2.jpg" alt="Lower Polk / TL Art Walk">
	
		<img src="../assets/img/tmp/medium-1.jpg" alt="Political Ha Ha Box: Free Public Art | Mission Dist.">
	
</div><!-- /.event-gallery -->

<div class="page-header">
	<div class="page-header-inner">
		<div class="container-fluid">
			<div class="page-header-category">
				<i class="fa fa-film"></i>
			</div><!-- /.page-header-category -->

			<div class="page-header-content">
				<h1>{{$event->title}}</h1>
				<p>{{$event->description}}</p>
				<address>{{$event->location}}</address>
			</div><!-- /.page-header-content -->

			<div class="page-header-actions">
				<div class="social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-vimeo"></i></a>
					<a href="#"><i class="fa fa-google"></i></a>
				</div>
			</div><!-- /.page-header-actions -->
		</div><!-- /.container-fluid -->
	</div><!-- /.page-header-inner -->
</div><!-- /.page-header -->

<div class="container-fluid">
	<ol class="breadcrumb">
		<li><a href={{route('home')}}>Home</a></li>
		<li><a href={{route('event')}}>Events</a></li>
		<li class="active">Event Detail</li>
	</ol>
</div><!-- /.container-fluid -->

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9">
			<div class="information">
				<p>
				 	<strong>Maecenas non faucibus turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent venenatis dolor velit, vitae efficitur nisl malesuada sit amet. Quisque eu viverra tortor, et porttitor velit.</strong>
				</p>

				<p>
					Morbi congue neque eu dui fringilla vulputate. Aenean vitae viverra arcu. Proin ut eros eu neque malesuada ultricies in mollis tortor. Nunc ut ligula eget lorem maximus molestie. Integer suscipit lorem sit amet orci pharetra semper.
				</p>

				<p>
					Fusce consectetur diam at lectus lacinia, eget sollicitudin lorem pretium. Etiam euismod nulla nec laoreet venenatis. Curabitur sodales condimentum tristique. Curabitur pellentesque, tortor eget vulputate eleifend, odio lectus posuere odio, in varius justo dui quis felis.
				</p>

				

				<div class="information-comments">
					<strong>8.7</strong> Total rating based on 20 unique reviews.
				</div><!-- /.information-comments -->

				<div class="information-actions">
					<a href="#"><i class="fa fa-bookmark-o"></i> <span>Save</span></a>
					<a href="#"><i class="fa fa-heart"></i> <span>Like</span></a>					
				</div><!-- /.information-actions -->
			</div><!-- /.information -->

			<div class="comments">
				<div class="comments-title">
					<h3>Displaying 8 tips</h3>
				</div><!-- /.comment-title -->

				
					<div class="comment">
						<div class="comment-image">
							<a href="#" style="background-image: url('../assets/img/tmp/medium-1.jpg');"></a>
						</div><!-- /.comment-image -->

						<div class="comment-content">
							<div class="comment-body">
								<p>
									Nunc commodo lacus consequat, pulvinar nunc quis, lacinia diam. Aliquam eu enim vitae sapien luctus vehicula. Praesent ex sem, pellentesque eget dignissim at, tempor vel dolor. Maecenas aliquet eget mauris non congue. Sed vitae tempus dui.
								</p>
							</div><!-- /.comment-body -->

							<div class="comment-meta">
								<a href="#">John Doe</a>
								<a href="#">May 29, 2012</a>
								<a href="#">7.5 / 10</a>
							</div><!-- /.comment-meta -->

							<div class="comment-actions">
								<a href="#"><i class="fa fa-bookmark-o"></i> <span>Save</span></a>
								<a href="#"><i class="fa fa-heart-o"></i> <span>Like</span></a>
							</div><!-- /.comment-actions -->
						</div><!-- /.comment-content -->
					</div><!-- /.comment -->
				
					<div class="comment">
						<div class="comment-image">
							<a href="#" style="background-image: url('../assets/img/tmp/medium-1.jpg');"></a>
						</div><!-- /.comment-image -->

						<div class="comment-content">
							<div class="comment-body">
								<p>
									Nunc commodo lacus consequat, pulvinar nunc quis, lacinia diam. Aliquam eu enim vitae sapien luctus vehicula. Praesent ex sem, pellentesque eget dignissim at, tempor vel dolor. Maecenas aliquet eget mauris non congue. Sed vitae tempus dui.
								</p>
							</div><!-- /.comment-body -->

							<div class="comment-meta">
								<a href="#">John Doe</a>
								<a href="#">May 29, 2012</a>
								<a href="#">7.5 / 10</a>
							</div><!-- /.comment-meta -->

							<div class="comment-actions">
								<a href="#"><i class="fa fa-bookmark-o"></i> <span>Save</span></a>
								<a href="#"><i class="fa fa-heart-o"></i> <span>Like</span></a>
							</div><!-- /.comment-actions -->
						</div><!-- /.comment-content -->
					</div><!-- /.comment -->
				
					<div class="comment">
						<div class="comment-image">
							<a href="#" style="background-image: url('../assets/img/tmp/medium-1.jpg');"></a>
						</div><!-- /.comment-image -->

						<div class="comment-content">
							<div class="comment-body">
								<p>
									Nunc commodo lacus consequat, pulvinar nunc quis, lacinia diam. Aliquam eu enim vitae sapien luctus vehicula. Praesent ex sem, pellentesque eget dignissim at, tempor vel dolor. Maecenas aliquet eget mauris non congue. Sed vitae tempus dui.
								</p>
							</div><!-- /.comment-body -->

							<div class="comment-meta">
								<a href="#">John Doe</a>
								<a href="#">May 29, 2012</a>
								<a href="#">7.5 / 10</a>
							</div><!-- /.comment-meta -->

							<div class="comment-actions">
								<a href="#"><i class="fa fa-bookmark-o"></i> <span>Save</span></a>
								<a href="#"><i class="fa fa-heart-o"></i> <span>Like</span></a>
							</div><!-- /.comment-actions -->
						</div><!-- /.comment-content -->
					</div><!-- /.comment -->
				
					<div class="comment">
						<div class="comment-image">
							<a href="#" style="background-image: url('../assets/img/tmp/medium-1.jpg');"></a>
						</div><!-- /.comment-image -->

						<div class="comment-content">
							<div class="comment-body">
								<p>
									Nunc commodo lacus consequat, pulvinar nunc quis, lacinia diam. Aliquam eu enim vitae sapien luctus vehicula. Praesent ex sem, pellentesque eget dignissim at, tempor vel dolor. Maecenas aliquet eget mauris non congue. Sed vitae tempus dui.
								</p>
							</div><!-- /.comment-body -->

							<div class="comment-meta">
								<a href="#">John Doe</a>
								<a href="#">May 29, 2012</a>
								<a href="#">7.5 / 10</a>
							</div><!-- /.comment-meta -->

							<div class="comment-actions">
								<a href="#"><i class="fa fa-bookmark-o"></i> <span>Save</span></a>
								<a href="#"><i class="fa fa-heart-o"></i> <span>Like</span></a>
							</div><!-- /.comment-actions -->
						</div><!-- /.comment-content -->
					</div><!-- /.comment -->
				
					<div class="comment">
						<div class="comment-image">
							<a href="#" style="background-image: url('../assets/img/tmp/medium-1.jpg');"></a>
						</div><!-- /.comment-image -->

						<div class="comment-content">
							<div class="comment-body">
								<p>
									Nunc commodo lacus consequat, pulvinar nunc quis, lacinia diam. Aliquam eu enim vitae sapien luctus vehicula. Praesent ex sem, pellentesque eget dignissim at, tempor vel dolor. Maecenas aliquet eget mauris non congue. Sed vitae tempus dui.
								</p>
							</div><!-- /.comment-body -->

							<div class="comment-meta">
								<a href="#">John Doe</a>
								<a href="#">May 29, 2012</a>
								<a href="#">7.5 / 10</a>
							</div><!-- /.comment-meta -->

							<div class="comment-actions">
								<a href="#"><i class="fa fa-bookmark-o"></i> <span>Save</span></a>
								<a href="#"><i class="fa fa-heart-o"></i> <span>Like</span></a>
							</div><!-- /.comment-actions -->
						</div><!-- /.comment-content -->
					</div><!-- /.comment -->
				
			</div><!-- /.comments -->

			<div class="comment-form">
				<div class="comment-form-title">
					<h3>Post New Comment</h3>
				</div><!-- /.comment-title -->

				<form method="post" action="http://eve-html.wearecodevision.com/event.html?">
					<div class="row">
						<div class="col-sm-7">
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control"></textarea>
							</div><!-- /.form-group -->
						</div><!-- /.col-* -->

						<div class="col-sm-5">
							<div class="form-group">
								<label>Name</label>
								<input type="email" class="form-control">
							</div><!-- /.form-group -->													

							<div class="form-group">
								<label>E-mail</label>
								<input type="email" class="form-control">
							</div><!-- /.form-group -->						

							<div class="form-group">
								<label>Website</label>
								<input type="email" class="form-control">
							</div><!-- /.form-group -->										
						</div><!-- /.col-* -->
					</div><!-- /.row -->

					<button type="submit" class="btn btn-secondary pull-right">Post Comment</button>
				</form>
			</div><!-- /.comment-form -->			

			<div class="page-navigation">
				<a href="#" class="prev"><i class="fa fa-chevron-left"></i> Art Exibition </a>
				<a href="#" class="next">Summer Fest<i class="fa fa-chevron-right"></i></a>
			</div><!-- /.page-navigation -->
		</div><!-- /.col-* -->

		<div class="col-sm-3">
			<div class="widget purchase">
				<h3>{{$event->title}}</h3>
				<p>{{$event->date}} {{$event->location}}</p>
				<strong>Rs.100</strong>

				<div class="purchase-action">
					<a href="#" class="btn btn-secondary pull-right">
						Promote/Buy Ticket				
					</a>
				</div><!-- /.purchase-action -->
			</div><!-- /.purchase -->

			<div class="widget map">
				<div class="map-inner">

					<div class="map-address">
						Thamel,<br>
						kathmandu
					</div><!-- /.map-address -->
				</div><!-- /.map-inner -->
			</div><!-- /.map -->

			<div class="widget category">
				<ul>
					<li><i class="fa fa-cutlery"></i> Restaurant</li>
					<li><i class="fa fa-wifi"></i> Wireless</li>
					<li><i class="fa fa-coffee"></i> Coffee Shop</li>
				</ul>
			</div><!-- /.widget-->

			<div class="widget gallery">
				<h2 class="widgettitle">Event Gallery</h2>

				<ul>
					
						<li><a href="#" style="background-image: url('../assets/img/tmp/search-1.jpg');"></a></li>
					
						<li><a href="#" style="background-image: url('../assets/img/tmp/search-2.jpg');"></a></li>
					
						<li><a href="#" style="background-image: url('../assets/img/tmp/search-3.jpg');"></a></li>
					
						<li><a href="#" style="background-image: url('../assets/img/tmp/search-4.jpg');"></a></li>
					
						<li><a href="#" style="background-image: url('../assets/img/tmp/search-5.jpg');"></a></li>
					
						<li><a href="#" style="background-image: url('../assets/img/tmp/search-1.jpg');"></a></li>
					
						<li><a href="#" style="background-image: url('../assets/img/tmp/search-2.jpg');"></a></li>
					
						<li><a href="#" style="background-image: url('../assets/img/tmp/search-1.jpg');"></a></li>
					
				</ul>
			</div><!-- /.widget -->
		</div><!-- /.col-* -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
	            </div><!-- /.content -->
	        </div><!-- /.main-inner -->
	    </div><!-- /.main -->
    </div><!-- /.main-wrapper -->

@endsection