@include('_head')


  <body>



        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse  w3-navbar w3-black" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav ">
            <li class=" {{ Request::is('/') ? "active" : "" }} " ><a href="/">Home</a></li>
            <li class=" {{ Request::is('/blog') ? "active" : "" }} " ><a href="/blog">Blog</a></li>
            <li class=" {{ Request::is('about') ? "active" : "" }}" ><a href="/about">About</a></li>
            <li class=" {{ Request::is('contact') ? "active" : "" }}" ><a href="/contact">Contact</a></li>
          </ul> 


          <ul class="nav navbar-nav navbar-right">
          @if (Auth::check())
            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Hello {{ Auth::user()->name  }} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href=" {{ route('posts.index')}} ">Posts </a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('logout') }}">Log out</a></li>
              </ul>
            </li>
            @else
              <a href="{{route('login')}}" class="btn btn-default btn-top-margin">Login</a>
            @endif


          </ul>
        </div>
        <!-- /.navbar-collapse -->


<br>


    <div class="container">

    @include('partials._messages')

    @yield('content') 

    <hr>
    <p class="text-center"> Copyright MedDer - Al rights reserved </p>

    </div>
    <!-- end of .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@yield('scripts')
  </body>

</html>