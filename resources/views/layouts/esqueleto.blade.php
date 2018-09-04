<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/logo_128x128.png') }}" sizes="128x128" />
    <title>Axion Terminal</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('icons/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href={{ asset('css/progress/nprogress.css progress') }} rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    @yield('estilos') 
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-bus"></i> <span>AXION Terminal</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('images/logo_128x128.png') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            
            <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">
                  @can('users.index')
                    <li><a href="{{ route ('users.index') }}"><i class="fa fa-user"></i> Usuarios </a></li>
                  @endcan
                  @can('shareholder.index')
                    <li><a href="{{ route ('shareholders.index') }}"><i class="fa fa-dollar"></i> Accionistas</a>
                    </li>
                  @endcan
                  @can('title.index')
                    <li><a><i class="fa fa-file"></i> Titulos </a></li>
                  @endcan
                  </ul>
                </div>

              </div>
            
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="navbar-nav ml-auto">
                
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <!-- <img src="images/img.jpg" alt=""> -->{{ Auth::user()->name . " "}} 
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" > Cerrar sesión
                      </a>
                    </li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            @yield('content')            

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            AXION - Terminal de transportes de Pasto <a href=""></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src={{ asset('css/jquery/dist/jquery.min.js') }}></script>
    <!-- Bootstrap -->
    <script src={{ asset('js/app.js') }}></script>
    <!-- NProgress -->
    <script src={{ asset('css/progress/nprogress.js') }}></script>
    <!-- Custom Theme Scripts -->
    <script src={{ asset('js/custom.min.js') }}></script>
    @yield('scripts') 
  </body>
</html>





