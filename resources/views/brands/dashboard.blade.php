

<link href="{{ url('assets/css/admindash.css')}}" rel="stylesheet" type="text/css" id="css-primary">

                                  
<div id="nav">
    <div class="user-banner"><img src="https://bit.ly/1jFjKGa"/>
      <h5 class="username"><a href="{{ route('home') }}">{{ Auth::user()->name }}</a></h5>
    </div>
    <ul>
      <li class="head">General</li>
      <li class="active"><a href="#"><i class="fa fa-fw fa-dashboard"></i><span>Dashboard</span></a></li>
      <li><a href="#"><i class="fa fa-fw fa-inbox"></i><span class="swatch light-grey">Inbox</span></a></li>
      <li><a href="#"><i class="fa fa-fw fa-user"></i><span>Tenants</span></a></li>
      <li><a href="#"><i class="fa fa-fw fa-money"></i><span>Payments</span></a></li>
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
     <h1 class="page-header">You are logged in as <strong>Brand </strong></h1> 
    </header>
    <div id="content">
         
      
        <h1>Properties</h1>
      
      <div class="box">
        <div class="body">
          <p>A quick-glance at your performance.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="box property-glance">
            <div class="header">
              <h2 >Recent Events</h2>
            </div>
            <div class="body">
              
                <li>helloe </li>
                <li>helloe </li>
                <li>helloe </li>
                <li>helloe </li>
                <li>helloe </li>            
              
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="box property-glance">
            <div class="header">
              <h4 class="pull-left">Hawkins Point</h4><span class="pull-right">Avg. Rent: $790</span>
              <div class="progress clear-right">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">70% occupied<span class="sr-only">70% Complete</span></div>
              </div>
              <div class="clear-left"><i class="fa fa-map-marker"></i><span>Mascoutah, IL</span></div>
            </div>
            <div class="body">
              <div class="row">
                <div class="col-sm-6 statistic text-center">
                  <h1>24</h1><small>units</small>
                </div>
                <div class="col-sm-6 text-center">
                  <h1>18</h1><small>filled</small>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 col-xs-6 widget" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"><i class="fa fa-comments-o"></i></div>
                <div class="col-sm-3 col-xs-6 widget"><i class="fa fa-line-chart"></i></div>
                <div class="col-sm-3 col-xs-6 widget"><i class="fa fa-money"></i></div>
                <div class="col-sm-3 col-xs-6 widget"><i class="fa fa-users"></i></div>
              </div>
            </div>
          </div>
        </div>
      <div class="row">
        <div class="col-sm-6">
          <h1>Recent Messages</h1>
          <div class="box" style="margin-top: 20px;">
            <div class="body">
              <p>A quick-glance at work orders and customer needs.</p>
            </div>
          </div>
          <div class="timeline">
            <div class="item">
              <div class="circle"></div>
              <div class="message">
                <Here>we have a timeline item</Here>
              </div>
            </div>
            <div class="item">
              <div class="circle"></div>
              <div class="message">
                <Here>we have a timeline item</Here>
              </div>
            </div>
            <div class="item">
              <div class="circle"></div>
              <div class="message">
                <Here>we have a timeline item</Here>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">   
          <h1>Recent Transactions</h1>
          <div class="box" style="margin-top: 20px;">
            <div class="body">
              <p>A quick-glance at income and expendatures.</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
                   
    <script type="text/javascript" src="{{ url('assets/js/admindash.js')}}"></script>
    <script src="https://use.fontawesome.com/72c957b24c.js"></script>