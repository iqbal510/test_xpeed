<nav   class="navbar navbar-light bg-info">
  <div class="container-fluid">
    <div class="navbar-header">
     
    </div>
    <ul class="nav navbar-nav">
    
    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
      <li class="{{ Request::is('new-form') ? 'active' : '' }}"><a href="{{ route('newform') }}">Form</a></li>
      <li class="{{ Request::is('forms') ? 'active' : '' }}"><a href="{{ route('forms.index') }}">All submission</a></li>
    </ul>
  </div>
</nav>