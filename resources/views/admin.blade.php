
<li class="nav-item"><a href="{{ route('home') }}" class="nav-link">{{ Auth::user()->name }}</a></li>
<li class="nav-item"><a href="{{ route('logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();" class="nav-link">Logout</a></li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
</form>
<div class="container">

                    You are logged in as <strong>ADMIN</strong>
              
</div>

