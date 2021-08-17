<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}"><img class="ml-3 mylogo" src="{{asset('images/mylogo.png')}}" alt="Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/service')}}">SERVICE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/portfolio')}}">PORTFOLIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/about')}}">ABOUT</a>
      </li>
    </ul>
  </div>
</nav>