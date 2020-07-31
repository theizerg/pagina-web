<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Fundación Little Aiden"/>
    
     <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('iconfont/material-icons.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/addons/toastr.min.css')}}" rel="stylesheet">

    <link href="{{asset('styles/main.css')}}" rel="stylesheet">
    @stack('styles')
  </head>

  <body id="top">
    <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
        <div class="container"><a class="navbar-brand" href="#"><h5>Bienvenido(a)  </h5></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          @foreach ($menus as $menu)
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link active" href=" {{$menu->ruta}}">{{$menu->nombre}}</a></li>
              
              @endforeach
               <li class="nav-item">
            @guest
                <li  class="nav-item"><a class="nav-link" href="{{ route('login') }}">Ingresar</a></li>
                <li  class="nav-item"><a class="nav-link" href="{{ route('register') }}">Registrarse</a></li>
             @else
                 <li class="nav-item">
            <a class="nav-link waves-effect"  style="color: white;" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                             <i class="fas fa-sign-out-alt"></i>
                {{ __('Salir') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>            
          @endguest
            </ul>
          </div>
        </div>

      </nav>
      <!-- Intro <Section-->
      <section class="view hm-gradient" id="intro">
        <div class="full-bg-img d-flex align-items-center">
        
          <div class="container">
            <div class="row no-gutters">
              <div class="col-md-10 col-lg-6 text-center text-md-left margins">
                <div class="white-text" id="copia"><br><br>
                  <div class="wow fadeInLeft" data-wow-delay="0.3s"><br><br><br>
                    @foreach($headers as $header)
                    <h1 class="h1-responsive font-bold mt-sm-5"> {{$header->titulo}}. </h1>
                    <div class="h6">
                     {{$header->cuerpo}}
                      
                    </div>
                    @endforeach
                  </div><br>
                  <div class="wow fadeInLeft" data-wow-delay="0.3s"><a class="btn btn-white dark-grey-text font-bold ml-0" href="https://www.youtube.com/watch?v=60ItHLz5WEA" target="_blank"><i class="fa fa-play mr-1"></i> Reproducir video</a></div><br><br><br><br><br><br><br><br><br><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    
    @yield('content')






     <footer class="page-footer indigo darken-2 center-on-small-only pt-0 mt-0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-5 flex-center"><a class="px-3"><i class="fab fa-facebook fa-lg white-text"></i></a><a class="px-3"><i class="fab fa-twitter fa-lg white-text"></i></a><a class="px-3"><i class="fab fa-google-plus fa-lg white-text"></i></a><a class="px-3"><i class="fab fa-instagram fa-lg white-text"></i></a></div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container-fluid">
          <p>&copy; <a href="/">Material Landing</a> - Design: <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></p>
        </div>
      </div>
    </footer>
 

        <!-- REQUIRED JS SCRIPTS -->
    <!--   Core JS Files   -->
    <!-- JQuery -->
  <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/additional-methods.min.js')}}"></script>
  <script src="{{asset('js/addons/toastr.min.js')}}"></script>

  
    @stack('scripts')

       <style>
      
      #intro{

          background: url('{{asset('images/fondo/images2.jpg')}}')no-repeat center center;
          background-size: cover;
          
          

      }
       #colores{


      
    }

      </style>




  </body>
</html>
