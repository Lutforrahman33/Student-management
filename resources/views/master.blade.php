<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
  @yield('title' , 'Student management')
</title>
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">


</head>

<body>

  <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="{{ route('create') }}">Create</a></li>
               
            </ul>

            <ul class="nav navbar-nav navbar-right">
              
              @if (Auth::check())
               
               <li><a href="{{ route('home') }}">Dashboard</a></li>
              @else

              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
               
              @endif
            </ul>

            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      
      
      <div class="container">
      
      @yield('content')
        
      </div>



<script type="text/javascript" src="{{ asset('bootstrap/js/bootsrap.min.js') }}"></script>
</body>

</html>