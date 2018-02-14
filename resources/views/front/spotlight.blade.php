@extends('layout.main')

@section('content')


	<div class="main-wrapper">
	    <div class="main">
	        <div class="main-inner">
	        	

	            <div class="content">
	                <div class="page-header page-header-simple pull-top">
	<div class="page-header-inner">
		<div class="container-fluid">
			<h1>Top Events in Your City</h1>
		</div><!-- /.container-fluid -->
	</div><!-- /.page-header-inner -->
</div><!-- /.page-header -->

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-9 col-xl-10">
			<div class="event-rows">
				@foreach($events as $event)


						<div class="event-row">
						<div class="event-row-index">
							<span>{{$event->id}}</span>
						</div>

						<div class="event-row-image">
							<a href="event.html" style="background-image: url('assets/img/tmp/medium-2.jpg')"></a>
						</div><!-- /.event-row-image -->

						<div class="event-row-title">
							<h2>
								<a href="{{ route('events.show', ['id' => $event->id]) }}">{{ $event->title }}</a>
							</h2>

							<p>{{ $event->description }}</p>
						</div><!-- /.event-row-title -->				

						<div class="event-row-action">
							<a href="#" class="btn btn-secondary">Show Event</a>
						</div><!-- /.event-row-action -->
					</div><!-- /.event-row -->
			


				@endforeach
				
				
			</div><!-- /.event-row -->

			<div class="center">
	<ul class="pagination">
		<li class="page-item">
			<a class="page-link" href="#">
				<i class="fa fa-chevron-left"></i>
			</a>
		</li>

		<li class="page-item active"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">4</a></li>
		<li class="page-item"><a class="page-link" href="#">5</a></li>

		<li class="page-item">
			<a class="page-link" href="#">
				<i class="fa fa-chevron-right"></i>
			</a>
		</li>
	</ul><!-- /.pagination -->
</div><!-- /.center -->			
		</div><!-- /.col-* -->

		<div class="col-lg-3 col-xl-2">
			<div class="widget locations">
				<h2 class="widgettitle">Popular Places</h2>

				
					<div class="location">
						<div class="location-image">
							<a href="#" style="background-image: url('assets/img/tmp/medium-1.jpg');"></a>
						</div><!-- /.location-image -->

						<div class="location-content">
							<h3><a href="event.html">Thamel, Kathmandu</a></h3>

							<h4>212 available events</h4>
						</div><!-- /.location-content -->
					</div><!-- /.location -->
				
					<div class="location">
						<div class="location-image">
							<a href="#" style="background-image: url('assets/img/tmp/medium-2.jpg');"></a>
						</div><!-- /.location-image -->

						<div class="location-content">
							<h3><a href="event.html">New York / Manhattan</a></h3>

							<h4>212 available events</h4>
						</div><!-- /.location-content -->
					</div><!-- /.location -->
				
					<div class="location">
						<div class="location-image">
							<a href="#" style="background-image: url('assets/img/tmp/medium-3.jpg');"></a>
						</div><!-- /.location-image -->

						<div class="location-content">
							<h3><a href="event.html">Thamel, Kathmandu</a></h3>

							<h4>212 available events</h4>
						</div><!-- /.location-content -->
					</div><!-- /.location -->
				
					<div class="location">
						<div class="location-image">
							<a href="#" style="background-image: url('assets/img/tmp/medium-4.jpg');"></a>
						</div><!-- /.location-image -->

						<div class="location-content">
							<h3><a href="event.html">Thamel, Kathmandu</a></h3>

							<h4>212 available events</h4>
						</div><!-- /.location-content -->
					</div><!-- /.location -->
				
					<div class="location">
						<div class="location-image">
							<a href="#" style="background-image: url('assets/img/tmp/medium-5.jpg');"></a>
						</div><!-- /.location-image -->

						<div class="location-content">
							<h3><a href="event.html">Thamel, Kathmandu</a></h3>

							<h4>212 available events</h4>
						</div><!-- /.location-content -->
					</div><!-- /.location -->
				
					<div class="location">
						<div class="location-image">
							<a href="#" style="background-image: url('assets/img/tmp/medium-1.jpg');"></a>
						</div><!-- /.location-image -->

						<div class="location-content">
							<h3><a href="event.html">Thamel, Kathmandu</a></h3>

							<h4>212 available events</h4>
						</div><!-- /.location-content -->
					</div><!-- /.location -->
				
					<div class="location">
						<div class="location-image">
							<a href="#" style="background-image: url('assets/img/tmp/medium-2.jpg');"></a>
						</div><!-- /.location-image -->

						<div class="location-content">
							<h3><a href="event.html">Thamel, Kathmandu</a></h3>

							<h4>212 available events</h4>
						</div><!-- /.location-content -->
					</div><!-- /.location -->
				
					<div class="location">
						<div class="location-image">
							<a href="#" style="background-image: url('assets/img/tmp/medium-1.jpg');"></a>
						</div><!-- /.location-image -->

						<div class="location-content">
							<h3><a href="event.html">New York / Brooklyn</a></h3>

							<h4>212 available events</h4>
						</div><!-- /.location-content -->
					</div><!-- /.location -->
				
			</div><!-- /.widget -->
		</div><!-- /.col-* -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
	            </div><!-- /.content -->
	        </div><!-- /.main-inner -->
	    </div><!-- /.main -->
    </div><!-- /.main-wrapper -->



@endsection