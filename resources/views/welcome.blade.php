<!DOCTYPE html>
<html lang="en">
  <head>
  	
  	</style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/logo_128x128.png') }}" sizes="128x128" />

    <title>Axion Terminal </title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('icons/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href={{ asset('css/progress/nprogress.css progress') }} rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  </head>
<body class="welcome">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle">
            <div class="text-center text-center">
              <center><img class="img-responsive" src="{{ asset('images/logo.png') }}"></center>
              <br>
              <div class="mid_center">
                <h3>Buscar</h3>
                <form>
                  <div class="col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Identificación">
                      <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Buscar!</button>
                          </span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
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
  </body>
</html>





