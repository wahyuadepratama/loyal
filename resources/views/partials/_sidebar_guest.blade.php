<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header" style="background-color:#198ae3">
      <center>
        <div style="background-color:#fafafa;width: 150px;height: 150px;border-radius:50%">
          <img src="{{asset('storage/logo.png')}}" width="80%" style="margin-top:25%">
        </div>
      </center>
    </div>

    <ul class="list-unstyled components" style="margin:7%">
        <li class="{{ request()->is('/') ? 'active' : '' }}">
            <a href="{{ url('/') }}" style="border-radius:2%">Home</a>
        </li>
        <li class="{{ request()->is('trip', 'trip/*') ? 'active' : '' }}">
            <a href="{{ url('trip') }}">Trip</a>
        </li>
        <li class="{{ request()->is('private', 'private/*') ? 'active' : '' }}">
            <a href="{{ url('private') }}">Private</a>
        </li>
        <li class="{{ request()->is('family', 'family/*') ? 'active' : '' }}">
            <a href="{{ url('family') }}">Family</a>
        </li>
        <li class="{{ request()->is('island', 'island/*') ? 'active' : '' }}">
            <a href="{{ url('island') }}">Island</a>
        </li>
        <li class="{{ request()->is('adventure', 'adventure/*') ? 'active' : '' }}">
            <a href="{{ url('adventure') }}">Adventure</a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li style="margin-bottom: 5%">
            <a href="{{ url('about') }}" class="download">About</a>
        </li>
        <li>
            <a href="{{ url('gallery') }}" class="article">Gallery</a>
        </li>
    </ul>
</nav>

<!-- Page Content Holder -->
