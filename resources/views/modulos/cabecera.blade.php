<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('Inicio') }}" class="logo">
      <!-- logo para el estado regular y dispositivos móviles -->
      <span class="logo-mini">
        <img src="{{ url('dist/img/logo_cuidavet_blanco.png') }}" alt="CUIDAVET Logo" style="height: 30px; width: auto;">
      </span>
      <span class="logo-lg">
        <img src="{{ url('dist/img/logo_cuidavet_blanco.png') }}" alt="CUIDAVET Logo" style="height: 30px; width: auto; margin-right: 1px;">
        <b>CUIDAVET</b>
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
            @if(auth()->user()->foto == "")
            <img src="{{url('dist\img\defecto.png')}}" class="user-image" alt="User Image">
            @else
            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
            @endif

                <span class="hidden-xs">{{ auth()->user()->nombre }} {{ auth()->user()->apellido }}</span>
            </a>
            <ul class="dropdown-menu">

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-primary btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout')}}" class="btn btn-danger btn-flat" 
                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
                </div>
                <form method="post" id="logout-form" action="{{route('logout')}}">
                  @csrf
                </form>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>