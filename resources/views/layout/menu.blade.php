<nav class="site-navigation position-relative text-right" role="navigation">
  <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
    
    <li class="{{ Request::is('/*') ? 'active' : '' }}">
      <a href="{{ url('/') }}" class="nav-link">Home</a>
    </li>
    
    <li class="{{ Request::is('about*') ? 'active' : '' }}">
      <a href="{{ url('/about') }}" class="nav-link">About</a>
    </li>

    <li class="has-children {{ Request::is('services*') ? 'active' : '' }}">
      <a href="{{ url('web_development') }}" class="nav-link">Services</a>
      <ul class="dropdown">
        <li><a href="{{ url('web_development') }}" class="nav-link">Web Development</a></li>
        <li><a href="{{ url('app_development') }}" class="nav-link">Application Development</a></li>
        <li><a href="{{ url('uiux_design') }}" class="nav-link">UI/UX Designing</a></li>
        <li><a href="{{ url('logo_design') }}" class="nav-link">Logo & Brand Designing</a></li>
      </ul>
    </li>
    
    <li class="{{ Request::is('portfolio*') ? 'active' : '' }}">
      <a href="{{ url('/portfolio') }}" class="nav-link">Portfolio</a>
    </li>

    <li class="{{ Request::is('contact*') ? 'active' : '' }}">
      <a href="{{ url ('contact') }}" class="nav-link">Contact</a>
    </li>
  </ul>
</nav>