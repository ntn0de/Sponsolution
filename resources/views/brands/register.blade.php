<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
    <link href="{{url('assets/libraries/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/libraries/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/libraries/owl-carousel/owl.carousel.default.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/eve.css" rel="stylesheet" type="text/css')}}" id="css-primary">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <title>Sponsolution</title>
</head>

<body class="empty-layout">

	<a href="{{route('home')}}" class="return-back">
	<i class="fa fa-long-arrow-left"></i> Return Back
</a>

<div class="content-center">
                    <form role="form" method="POST" action="{{ route('brand.store') }}" class="login-form">
                        {{ csrf_field() }}

    	<h1>Create Account</h1>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" >Name</label>

                            
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
        </div>
        <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                <label for="job_title" >Job Title</label>

                
                    <input id="job_title" type="text" class="form-control" name="job_title" value="{{ old('job_title') }}" required autofocus>

                    @if ($errors->has('job_title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('job_title') }}</strong>
                        </span>
                    @endif
                
        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" >Password</label>

                            
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" >Confirm Password</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            
                        </div>

                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-secondary pull-right">
                                    Register
                                </button>
                           
                        </div>


    </form>
</div><!-- /.content-center -->
</body>

</html>