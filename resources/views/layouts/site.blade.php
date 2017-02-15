<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Africa Policy Institute') }}</title>

  <!-- Styles -->
  <link rel="stylesheet" href="/css/custom.css">
  <link href="/css/app.css" rel="stylesheet">


  <!-- Scripts -->
  <script>
      window.Laravel = {!! json_encode([
          'csrfToken' => csrf_token(),
      ]) !!};
  </script>
</head>

<body>
  <div div="app">
    <div class="page-header africapi-header">
      <img src="/img/pyramids.png" alt="Africa Policy Institute">
      <i class="africapi-brand">{{ config('app.name', 'Laravel') }}</i>
        <nav class="navbar navbar-default africapi-navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active" role="presentation"><a href="#">Home </a></li>
                        <li role="presentation"><a href="#">API Centres</a></li>
                        <li role="presentation"><a href="{{ route('reports') }}">Reports &amp; Publications</a></li>
                        <li role="presentation"><a href="#">News </a></li>
                        <li role="presentation"><a href="#">Media Centre</a></li>
                        <li role="presentation"><a href="#">Partners &amp; Networks</a></li>
                        <li role="presentation"><a href="#">Our Experts</a></li>
                        <li role="presentation"><a href="#">Advisory Board</a></li>
                        <li role="presentation"><a href="#">Associates</a></li>
                        <li role="presentation"><a href="#">About API</a></li>
                        <li role="presentation"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
  </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>

</html>
