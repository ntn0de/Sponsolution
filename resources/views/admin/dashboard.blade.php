<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
   <!-- CSFR token for ajax call -->
    <meta name="_token" content="{{ csrf_token() }}"/>
  <link href="{{ url('assets/css/admindash.css')}}" rel="stylesheet" type="text/css" id="css-primary">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    {{-- <link rel="styleeheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}

    <!-- icheck checkboxes -->
    <link rel="stylesheet" href="{{ asset('icheck/square/yellow.css') }}">
    {{-- <link rel="stylesheet" href="https://raw.githubusercontent.com/fronteed/icheck/1.x/skins/square/yellow.css"> --}}

    <!-- toastr notifications -->
    {{-- <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="nav">
    <div class="user-banner"><img src="https://bit.ly/1jFjKGa"/>
      <h5 class="username"><a href="{{ route('home') }}">{{ Auth::user()->name }}</a></h5>
    </div>
    <ul>
      <li class="head">General</li>
      <li class="active"><a href="#"><i class="fa fa-fw fa-dashboard"></i><span>Dashboard</span></a></li>
      <li><a href="#"><i class="fa fa-fw fa-inbox"></i><span class="swatch light-grey">Events</span></a></li>
      <li><a href="#"><i class="fa fa-fw fa-user"></i><span>Event Users</span></a></li>
      <li><a href="#"><i class="fa fa-fw fa-money"></i><span>Brands</span></a></li>
      <li><a href="#"><i class="fa fa-fw fa-cog"></i><span>Settings</span></a></li>
      <li><a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();" class="nav-link">
                 <i class="fa fa-sign-out" aria-hidden="true"></i><span>Logout</span></a></li>
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
      <div>
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
                        </thead>
                        <tbody>
                            @foreach($events as $indexKey => $event)
                                <tr class="item{{$event->id}} @if($event->featured) warning @endif">
                                    <td class="col1">{{ $indexKey+1 }}</td>
                                    <td>{{$event->title}}</td>
                                    <td>
                                        {{$event->description}}
                                    </td>
                                    <td class="text-center"><input type="checkbox" class="featured" id="" data-id="{{$event->id}}" @if ($event->featured) checked @endif></td>
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
  <div>
    <table class="table table-striped table-bordered table-hover"  >
                        <thead>
                            <tr>
                                <th valign="middle">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Premium?</th>
                                <th>Last updated</th>
                            </tr>
                            {{ csrf_field() }}
                        </thead>
                        <tbody>
                            @foreach($users as $indexKey => $user)
                                <tr class="item{{$user->id}}"><!-- @if($user->usertype) warning @endif -->
                                    <td class="col1">{{ $indexKey+1 }}</td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td class="text-center"><input type="checkbox" class="featured" id="" data-id="{{$user->id}}" ></td>
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->updated_at)->diffForHumans() }}</td>
                                    <td>
                                        <button class="show-modal btn btn-success" data-id="{{$user->id}}" data-title="{{$user->title}}" data-content="{{$user->description}}" >
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                        <button class="edit-modal btn btn-info" data-id="{{$user->id}}" data-title="{{$user->title}}" data-content="{{$user->description}}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button class="delete-modal btn btn-danger" data-id="{{$user->id}}" data-title="{{$user->title}}" data-content="{{$user->description}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
    </table>
  </div>
  <div>
    <table class="table table-striped table-bordered table-hover"  >
                        <thead>
                            <tr>
                                <th valign="middle">#</th>
                                <th>Brand Name</th>
                                <th>Email</th>
                                <th>Premium?</th>
                                <th>Last updated</th>
                            </tr>
                            {{ csrf_field() }}
                        </thead>
                        <tbody>
                            @foreach($brands as $indexKey => $brand)
                                <tr class="item{{$brand->id}}"><!-- @if($brand->brandtype) warning @endif -->
                                    <td class="col1">{{ $indexKey+1 }}</td>
                                    <td>{{$brand->name}}</td>
                                    <td>
                                        {{$brand->email}}
                                    </td>
                                    <td class="text-center"><input type="checkbox" class="featured" id="" data-id="{{$brand->id}}" ></td>
                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $brand->updated_at)->diffForHumans() }}</td>
                                    <td>
                                        <button class="show-modal btn btn-success" data-id="{{$brand->id}}" data-title="{{$brand->title}}" data-content="{{$brand->description}}" >
                                        <span class="glyphicon glyphicon-eye-open"></span> Show</button>
                                        <button class="edit-modal btn btn-info" data-id="{{$brand->id}}" data-title="{{$brand->title}}" data-content="{{$brand->description}}">
                                        <span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button class="delete-modal btn btn-danger" data-id="{{$brand->id}}" data-title="{{$brand->title}}" data-content="{{$brand->description}}">
                                        <span class="glyphicon glyphicon-trash"></span> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
    </table>
  </div>
  </div>
  </div>
                   
    <script type="text/javascript" src="{{ url('assets/js/admindash.js')}}"></script>
    <script src="https://use.fontawesome.com/72c957b24c.js"></script>
    <!-- icheck checkboxes -->
    <script type="text/javascript" src="{{ asset('icheck/icheck.min.js') }}"></script>
    <!-- Delay table load until everything else is loaded -->
    <script>
        $(window).load(function(){
            $('#postTable').removeAttr('style');
        })
    </script>

     <script>
        $(document).ready(function(){
            $('.featured').iCheck({
                checkboxClass: 'icheckbox_square-yellow',
                radioClass: 'iradio_square-yellow',
                increaseArea: '20%'
            });
            $('.featured').on('ifClicked', function(event){
                id = $(this).data('id');
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
