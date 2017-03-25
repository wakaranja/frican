<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/app.css" rel="stylesheet">
    <!-- <link href="/css/custom.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/css/admin.css">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
  </head>
  <body>

    <div class="wrapper">
        <div class="row row-offcanvas row-offcanvas-left">
            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
                <ul class="nav" id="menu">
                    <li><a href="https://publicte.ch/" target="_blank"><i class="fa fa-globe"></i> <span class="collapse in hidden-xs">View page</span></a></li>
                    <li><a href="{{ url('/gaitara') }}"><i class="fa fa-globe"></i> <span class="collapse in hidden-xs">Dashboard</span></a></li>
                    <li>
                        <a href="#" data-target="#item1" data-toggle="collapse"><i class="fa fa-file-text-o"></i> <span class="collapse in hidden-xs">Posts <span class="caret"></span></span></a>
                        <ul class="nav nav-stacked collapse left-submenu" id="item1">
                            <li><a href="{{ route('adminposts') }}"><i class="fa fa-book"></i> All Posts</a></li>
                            <li><a href="{{ url('/newpost') }}"><i class="fa fa-plus"></i> New Post</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-target="#item2" data-toggle="collapse"><i class="fa fa-calendar"></i> <span class="collapse in hidden-xs">Events <span class="caret"></span></span></a>
                        <ul class="nav nav-stacked collapse" id="item2">
                            <li><a href="{{ route('adminevents')}}"><i class="fa fa-calendar-check-o"></i> All Events</a></li>
                            <li><a href="{{ url('/newevent')}}"><i class="fa fa-calendar-plus-o"></i> New Event</a></li>

                        </ul>
                    </li>
                    <li><a href="{{ route('settings',['id'=>1]) }}"><i class="fa fa-cog"></i> <span class="collapse in hidden-xs">Settings</span></a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                </ul>
            </div>
            <!-- /sidebar -->

            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                <p><a href="#" data-toggle="offcanvas"><i class="fa fa-navicon fa-2x"></i></a></p>
                <p>
                  @yield('content')
                </p>
            </div>
            <!-- /main -->
        </div>
    </div>

    <!-- Scripts -->
      <script src="/js/app.js"></script>
    <script src="{{ asset('/js/admin/admin.js')}}"></script>
  </body>
</html>