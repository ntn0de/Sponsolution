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
    <link rel="stylesheet" href="{{ asset('icheck/square/yellow.css') }}">

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
            <li class="active"><a href="#"><i class="fa fa-fw fa-dashboard"></i><span>Dashboard</span></a></li>
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
                <div class="dashinfo">
                        <table class="table table-striped table-bordered table-hover" id="postTable"  >
                                    <thead>
                                        <tr>
                                            <th valign="middle">#</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Featured?</th>
                                            <th>Last updated</th>
                                            <th>Actions</th>
                                        </tr>
                                        {{ csrf_field() }}
                                    
                                        @foreach($events as $indexKey => $event)
                                    </thead>
                                    <tbody>     
                                        <tr class="item{{$event->id}} @if($event->featured) warning @endif">
                                                <td class="col1">{{ $indexKey+1 }}</td>
                                                <td>{{$event->title}}</td>
                                                <td>{{$event->description}}</td>
                                                <td class="text-center"><input type="checkbox" name="featured" class="featured" id="" data-id="{{$event->id}}" @if ($event->featured) checked @endif></td>
                                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $event->updated_at)->diffForHumans() }}</td>
                                                <td>
                                                    <button class="show-modal btn btn-success" data-id="{{$event->id}}" data-title="{{$event->title}}" data-content="{{$event->description}}" >
                                                    <span class="glyphicon glyphicon-eye-open"></span> <a href="{{ route('events.show', ['id' => $event->id]) }}"> Show</a></button>
                                                    <button class="edit-modal btn btn-info" data-id="{{$event->id}}" data-title="{{$event->title}}" data-content="{{$event->description}}">
                                                    <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                                    <button class="delete-modal btn btn-danger" data-id="{{$event->id}}" data-title="{{$event->title}}" data-content="{{$event->description}}">
                                                    <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                                </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                        </table>
            </div>
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
                    checkboxClass: 'icheckbox_square-yellow',
                    radioClass: 'iradio_square-yellow',
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
