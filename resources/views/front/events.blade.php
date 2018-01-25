@extends('layout.main')

@section('content')
	
	    <div class="main-wrapper">
	    <div class="main">
	        <div class="main-inner">
	        	

	            <div class="content">
	                <div class="page-header pull-top">
	<div class="page-header-inner">
		<div class="container-fluid">
			<h1>Most Recent Events</h1>
		</div><!-- /.container-fluid -->
	</div><!-- /.page-header-inner -->
</div><!-- /.page-header -->

<div class="container-fluid">
	<ol class="breadcrumb">
		<li><a href="{{route('home')}}">EVE</a></li>
		<li><a href="{{route('event')}}">Events</a></li>
		<li class="active">Recent Events</li>
	</ol>
</div><!-- /.container-fluid -->

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-xl-2">
			<div class="filter filter-primary checkbox-light">
	<form method="get" action="http://eve-html.wearecodevision.com/events.html?">
		<h2>General Options</h2>

		<div class="filter-group">
			<div class="filter-group-inner">
				<div class="form-group">
					<label>Location</label>
			
					<select class="form-control">
						<option>Kathmandu</option>
						<option>Lalitpur</option>
					</select>
				</div><!-- /.form-group -->

				<div class="form-group">
					<label>Category</label>
			
					<select class="form-control">
						<option>Concert</option>
						<option>Art Exibition</option>
					</select>
				</div><!-- /.form-group -->

				<div class="form-group">
					<label>Keyword</label>
					<input type="text" class="form-control">
				</div><!-- /.form-group -->
			</div><!-- /.filter-group-inner -->
		</div><!-- /.filter-group -->

		<h2>Price Options</h2>

		<div class="filter-group">
			<div class="filter-group-inner">
				<div class="form-group">
					<label>Price From</label>
					<input type="text" class="form-control">
				</div><!-- /.form-group -->

				<div class="form-group">
					<label>Price To</label>
					<input type="text" class="form-control">
				</div><!-- /.form-group -->		
			</div><!-- /.filter-group-inner -->
		</div><!-- /.filter-group -->

		<h2>Time Filters</h2>

		<div class="filter-group">
			<div class="filter-group-inner">
				<div class="radio">
					<label><input type="radio" name="filter-time"> Today</label>				
				</div><!-- /.checkbox -->								

				<div class="radio">
					<label><input type="radio" name="filter-time"> This Weekend</label>				
				</div><!-- /.checkbox -->

				<div class="radio">
					<label><input type="radio" name="filter-time"> This Week</label>				
				</div><!-- /.checkbox -->

				<div class="radio">
					<label><input type="radio" name="filter-time"> This Month</label>				
				</div><!-- /.checkbox -->
			</div><!-- /.filter-group-inner -->
		</div><!-- /.filter-group -->

		<h2>Attributes</h2>

		<div class="filter-group">
			<div class="filter-group-inner">
				<div class="checkbox">
					<label><input type="checkbox"> Reduced</label>
				</div><!-- /.checkbox -->

				<div class="checkbox">
					<label><input type="checkbox"> Featured</label>
				</div><!-- /.checkbox -->
			</div><!-- /.filter-group-inner -->
		</div><!-- /.filter-group -->

		<div class="form-group-btn ">
			<button type="submit" class="btn btn-secondary btn-block">Filter Events</button>
		</div><!-- /.form-group -->				
	</form>
</div>
		</div><!-- /.col-* -->

		<div class="col-lg-9 col-xl-10">
			<div class="filter-results">
				<strong>258 events matching your search query</strong>

				<form method="get" action="#">
					<div class="form-group">
						<select class="form-control bordered">
							<option name="">Order by</option>
						</select>
					</div><!-- /.form-group -->
				</form>
			</div>

			<div class="row">	
							
			@forelse ( $events as $event )		
						<div class="col-sm-3">
							<div class="card">
	<div class="card-inner">
		<div class="card-image">
			<a href="{{ route('events.show', ['id' => $event->tid]) }}" style="background-image: url('assets/img/tmp/medium-1.jpg');">
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
				<a href="{{ route('events.show', ['id' => $event->tid]) }}">{{ $event->title }}</a>
			</h3>

			<h4 class="card-subtitle">
				<a href="#">{{ $event->location }}</a>
			</h4>
		</div><!-- /.card-content -->
	</div><!-- /.card-inner -->
</div><!-- /.card -->
						</div><!-- /.col-* -->
			@empty
					
						<strong>No records found.</strong>
					
			@endforelse		
			</div><!-- /.row -->

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
	</div><!-- /.row -->
</div><!-- /.container-fluid -->
	            </div><!-- /.content -->
	        </div><!-- /.main-inner -->
	    </div><!-- /.main -->
    </div><!-- /.main-wrapper -->



@endsection