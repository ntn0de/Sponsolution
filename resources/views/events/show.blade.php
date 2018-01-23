@extends('layout.main')

@section('content')
<div class="event-row">
						<div class="event-row-index">
							<span>{{$event->tid}}</span>
						</div>

						<div class="event-row-image">
							<a href="event.html" style="background-image: url('assets/img/tmp/medium-2.jpg')"></a>
						</div><!-- /.event-row-image -->

						<div class="event-row-title">
							<h2>
								<a href="event.html">{{ $event->title }}</a>
							</h2>

							<p>{{ $event->description }}</p>
						</div><!-- /.event-row-title -->				

						<div class="event-row-action">
							<a href="#" class="btn btn-secondary">Show Event</a>
						</div><!-- /.event-row-action -->
					</div><!-- /.event-row -->
@endsection