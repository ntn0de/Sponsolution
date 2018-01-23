@extends('layout.main')

@section('content')


    <div class="main-wrapper">
	    <div class="main">
	        <div class="main-inner">
	        	

	            <div class="content">
	                <div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<h3>Get In Touch With Us</h3>

			<p class="large">
				Maecenas venenatis et ex at posuere. Nunc pulvinar orci vitae est condimentum, et scelerisque justo porta. Morbi accumsan sollicitudin orci et eleifend. Aliquam sodales tincidunt ex, vitae sagittis magna congue vel. Vestibulum non hendrerit diam.
			</p>

			<form method="post" action="#">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>First Name</label>
							<input type="text" class="form-control bordered">
						</div><!-- /.form-group-->
					</div><!-- /.col-* -->

					<div class="col-sm-6">
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" class="form-control bordered">
						</div><!-- /.form-group-->
					</div><!-- /.col-* -->					
				</div><!-- /.row -->

				<div class="form-group">
					<label>E-mail Address</label>
					<input type="email" class="form-control bordered">
				</div><!-- /.form-group-->

				<div class="form-group">
					<label>Message</label>
					<textarea class="form-control bordered"></textarea>
				</div><!-- /.form-group -->

				<a href="#" class="btn btn-secondary pull-right">Post Message</a>
			</form>
		</div><!-- /.col-* -->

		<div class="col-sm-6">
			<h3>Aliquam sodales tincidunt ex, vitae sagittis magna congue vel. Vestibulum non hendrerit diam.</h3>

			<p class="large">
				Maecenas venenatis et ex at posuere. Nunc pulvinar orci vitae est condimentum, et scelerisque justo porta. Morbi accumsan sollicitudin orci et eleifend. Aliquam sodales tincidunt ex, vitae sagittis magna congue vel. Vestibulum non hendrerit diam.
			</p>

			<h4>Contact Information</h4>

			<div class="row">
				<div class="col-sm-6">
					<h5>kathmandu</h5>

					<p>				
						Company Name Example<br>
						Chakupat, Lalitpur.<br>
						Nepal.
					</p>

					<p>
						<strong>E-mail:</strong> <a href="#">info@example.com</a><br>
						<strong>Phone:</strong> +0-123-456-789
					</p>
				</div><!-- /.col-* -->

				<div class="col-sm-6">
					<h5>Patan</h5>

					<p>				
						Company Name Example<br>
						Chakupat, Lalitpur.<br>
						Nepal.
					</p>

					<p>
						<strong>E-mail:</strong> <a href="#">info@example.com</a><br>
						<strong>Phone:</strong> +0-123-456-789
					</p>					
				</div><!-- /.col-* -->				
			</div><!-- /.row -->
		</div><!-- /.col-* -->
	</div><!-- /.row -->
</div><!-- /.container-fluid -->

<div id="contactmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14136.269262726159!2d85.33946470000001!3d27.65338895!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1516081517987" width="1920" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

	            </div><!-- /.content -->
	        </div><!-- /.main-inner -->
	    </div><!-- /.main -->
    </div><!-- /.main-wrapper -->

@endsection