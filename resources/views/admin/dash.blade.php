<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    {{--<!-- CSFR token for ajax call --> --}}
    <meta name="_token" content="{{ csrf_token() }}"/>
    
    <link href="{{ url('assets/css/admindash.css')}}" rel="stylesheet" type="text/css" id="css-primary">
    {{--<!-- Bootstrap CSS --> --}} 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    {{-- icheck checkboxes --}}
    <link rel="stylesheet" href="{{ asset('icheck/square/orange.css') }}">

    {{-- toastr notifications --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body>
       <div id="nav">
            <div class="user-banner"><img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/512/user-male-icon.png"/>
                <h5 class="username"><a href="{{ route('home') }}">{{ Auth::user()->name }}</a></h5>
            </div>
            <ul>
            <li class="head">General</li>
            <li class="active"><a href="{{route('admin.dashboard')}}"><i class="fa fa-fw fa-dashboard"></i><span>Dashboard</span></a></li>
            <li><a href="{{route('admin.events')}}"><i class="fa fa-fw fa-inbox"></i><span class="swatch light-grey">Events</span></a></li>
            <li><a href="{{route('admin.users')}}" class="eventuser"><i class="fa fa-fw fa-user"></i><span>Event Users</span></a></li>
            <li><a href="{{route('admin.brands')}}"><i class="fa fa-fw fa-money"></i><span>Brands</span></a></li>
            <li><a href="#"><i class="fa fa-fw fa-cog"></i><span>Settings</span></a></li>
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="nav-link">
                        <i class="fa fa-sign-out" aria-hidden="true"></i><span>Logout</span></a>
            </li>
                        <form id="logout-form" action="{{ 'App\Admin' == Auth::getProvider()->getModel() ? route('admin.logout') : route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
            </ul>
        </div>
        <div id="main">
        <header>
        <h1 class="page-header">You are logged in as <strong>ADMIN</strong></h1> 
        </header>
        <div id="content">
          
         @yield('content')
        
        </div>
    
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
                    
        <script type="text/javascript" src="{{ url('assets/js/admindash.js')}}"></script>
        <script src="https://use.fontawesome.com/72c957b24c.js"></script>
        <script type="text/javascript" src="{{ asset('icheck/icheck.min.js') }}"></script>

            <script>
            $(document).ready(function(){
                $('.featured').iCheck({
                    checkboxClass: 'icheckbox_square-orange',
                    radioClass: 'iradio_square-orange',
                    increaseArea: '20%'
                });
                   
                $('input[name="featured"]').on('ifClicked', function(event){
                    id = $(this).data('id');
        
                    alert("You featured event no." + $(this).data('id'));
                    $.ajax({
                        type: 'POST',
                        url: "{{ URL::route('changeStatus') }}",
                        data: {
                            '_token': $('input[name=_token]').val(),
                            'id': id
                        },
                        success: function(data) {
                            // empty
                        },
                    });
                });
                $('.featured').on('ifToggled', function(event) {
                    $(this).closest('tr').toggleClass('warning');
                });
            });
            
        </script>
    </body>
</html>
