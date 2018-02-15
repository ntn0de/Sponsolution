

<link href="{{ url('assets/css/admindash.css')}}" rel="stylesheet" type="text/css" id="css-primary">

                                  
<div id="nav">
    <div class="user-banner"><img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/512/user-male-icon.png"/>
      <h5 class="username"><a href="{{ route('home') }}">{{ Auth::user()->name }}</a></h5>
    </div>
    <ul>
      <li class="head">General</li>
      <li class="active"><a href="#"><i class="fa fa-fw fa-dashboard"></i><span>Dashboard</span></a></li>
      <li><a href="{{ route('brand.test') }}"><i class="fa fa-fw fa-inbox"></i><span class="swatch light-grey">test page</span></a></li>
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
     <h1 class="page-header">You are logged in as <strong>Brand </strong></h1> 
    </header>
  <div id="content">
         
      
       
  </div>
                   
    <script type="text/javascript" src="{{ url('assets/js/admindash.js')}}"></script>
    <script src="https://use.fontawesome.com/72c957b24c.js"></script>