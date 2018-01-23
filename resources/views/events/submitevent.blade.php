@extends('layout.main')

@section('content')
	
    <div class="main-wrapper">
	    <div class="main">
	        <div class="main-inner">
	        	

	            <div class="content">
	                <div class="container">
	<form method="post" action="{{ route('events.store') }}">		
		<fieldset>
			<legend>Basic Information</legend>		

			<div class="form-group">
				<label>Title</label>
				<input id="title" type="text" class="form-control bordered" name="title" value="{{ old('title') }}" required>
			</div><!-- /.form-group -->

			<div class="form-group">
				<label>Description</label>
				<textarea  id="description" class="form-control bordered" name="description" value="{{ old('description') }}" required rows="6"></textarea>
			</div><!-- /.form-group -->
		</fieldset>
		<fieldset>
			<legend>Location</legend>

			<div class="form-group">
				<label>Location</label>
				<input id="location" type="text" class="form-control bordered" name="location" value="{{ old('location') }}" required>
			</div><!-- /.form-group -->
		</fieldset>

		<fieldset>			
			<legend>Additional Information</legend>		

			<div class="checkbox">
			    <label><input type="checkbox" name="newsletter" value="1" required> Send me newsletter</label>
			</div>

			<div class="checkbox">
			    <label><input type="checkbox" name="terms" value="1" required> I agree with terms &amp; conditions</label>
			</div>

			<div class="checkbox">
			    <label><input type="checkbox" name="featured" value="1"> Featured</label>
			</div>
		</fieldset>
 
		<div class="center">
			<button type = "submit" class="btn btn-primary btn-large">Submit Event</button>
		</div><!-- /.center -->
		{{csrf_field()}}
	</form>
</div><!-- /.container-fluid -->
	            </div><!-- /.content -->
	        </div><!-- /.main-inner -->
	    </div><!-- /.main -->
    </div><!-- /.main-wrapper -->

    @endsection