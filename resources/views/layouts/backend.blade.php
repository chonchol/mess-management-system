<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/select2.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/sweetalert.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet">


        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li><a href="{{ url('/admin') }}">Dashboard <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @if (Session::has('flash_message'))
            <div class="container">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('flash_message') }}
                </div>
            </div>
        @endif

        @yield('content')

        <hr/>

        <div class="container" style="color:white;font-weight:bold">
            &copy; {{ date('Y') }}. Created by <a href="http://www.mahmudbd.com">Chonchol Mahmud</a>
            <br/>
        </div>

        <!-- Scripts -->
        <script src="/js/app.js"></script>
        <script src="{{URL::asset('js/jQuery-3.1.1.min.js')}}"></script>
        <script src="{{URL::asset('js/select2.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
        <script src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="{{URL::asset('js/dataTables.bootstrap.min.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
              $(".selecting").select2({
                placeholder: "Select a Role",
              });
              
            });
        </script>
        <script type="text/javascript">
            $(function () {
                // Navigation active
                $('ul.navbar-nav a[href="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}"]').closest('li').addClass('active');
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
    </body>
</html>
