@extends('layouts.app')
@section('title', 'Inicio')

@section('content')
 
 <div id="content">
  
<section class="text-center py-5 grey lighten-4" id="somos">
  <div class="container">
    <div class="wow fadeIn">
       @foreach ($somos as $somo)
      <h2 class="h1 pt-5 pb-3">{{$somo->titulo}}</h2>
      <p class="px-5 mb-5 pb-3 lead blue-grey-text">
        {{$somo->cuerpo}}
      </p>
    </div>
    @endforeach
    <div class="row">
  @foreach ($options as $option)
      <div class=" {{$option->class}} " data-wow-delay=".3s"><i class="{{$option->icono}}"></i>
        <h3 class="h4 mt-3">{{$option->titulo}}</h3>
        <p class="mt-3 blue-grey-text">
         {{$option->cuerpo}}
        </p>
      </div>
       @endforeach 
    </div>
   
  </div>

</section>
<div class="wow fadeIn">
      <h2 class="h1 pt-5 pb-3 text-center">Nuestros objetivos</h2>
    </div>
<section class="row no-gutters" id="features">
  @foreach($objetivos as $objetivo)
  <div class="{{$objetivo->class}}">
    <div class="p-5 text-center wow zoomIn" data-wow-delay=".1s">
      <div class="h5 mt-3"> {{$objetivo->subtitulo}}  </div>
      <p class="mt-5">{{$objetivo->cuerpo}} .</p>
    </div>
  </div>
  @endforeach
</section>
<section class="py-5" id="proyectos">
  <div class="container">
    <div class="wow fadeIn">
      @foreach($proyectos as $proyecto)
      <h2 class="text-center h1 my-4">{{$proyecto->titulo}}</h2>
      <p class="px-5 mb-5 pb-3 lead blue-grey-text text-center">
       {{$proyecto->cuerpo}}
      </p>
    </div>
    @endforeach
    @foreach($optionsP as $proyecto)
    <div class=" {{$proyecto->class}} " data-wow-delay=".3s">
      <div class="col-lg-6 col-xl-5 pr-lg-5 pb-5"><img class="img-fluid rounded z-depth-2" src="images/kuala-lumpur.jpg" alt="project image"/></div>
      <div class="col-lg-6 col-xl-7 pl-lg-5 pb-4">
        <div class="row mb-3">
          <div class="col-1 mr-1"><i class=" {{$proyecto->icono}} "></i></div>
          <div class="col-10">
            <h5 class="font-bold">{{$proyecto->titulo}}</h5>
            <p class="grey-text">
              {{$proyecto->cuerpo}}
            </p>
          </div>
        </div>
      </div>
    </div>
    </hr>
    @endforeach

   </div>
</section>
<section class="text-center py-5 indigo darken-1 text-white" id="pricing">
  <div class="container">
    <div class="wow fadeIn">
      @foreach($donaciones as $donacion)
      <h2 class="h1 pt-5 pb-3"> {{$donacion->titulo}} </h2>
      <p class="px-5 mb-5 pb-3 lead">
       {{$donacion->cuerpo}}
      </p>
      @endforeach
    </div>
   
    <div class="row wow zoomIn">
       @foreach($optionsD as $donaciones)
      <div class="col-lg-4 col-md-12 mb-r">
        <div class="card card-image">
          
          <div class="{{$donaciones->class}} ">
            <div class="card-body">
              <div class="h5">{{$donaciones->titulo}}</div>
              <i class="fas fa-users  fa-4x mt-5"></i>
              <ul class="list-unstyled mt-5">
                <li>
                  <p>{{$donaciones->cuerpo}}</p>
                </li>
                
              </ul>
            </div>
          </div>
          
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
<section class="py-5" id="equipo">
  <div class="container">
    <div class="wow fadeIn">
      @foreach ($equipos as $equipo)
      <h2 class="h1 pt-5 pb-3 text-center">{{$equipo->titulo}}  </h2>
      <p class="px-5 mb-5 pb-3 lead text-center blue-grey-text">
       {{$equipo->cuerpo}}
      </p>
      @endforeach
    </div>

    <div class="row mb-lg-4 center-on-small-only">
    	<div class="col-lg-6 col-md-12 mb-r wow fadeInLeft mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/george-diaconeasa.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">George Diaconeasa </div>
          <h6 class="font-bold blue-grey-text mb-4">Fundador</h6>
          <p class="grey-text">Inspirado en mi hijo tomé la desición de emprender un sueño, ayudar a muchos venezolanos que están necesitados, creando así de una manera diferente, donde solo debes hacer un click para que muchos puedan ser beneficiados con la ayuda que emprenderemos.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@georgediaconeasa</span></a>
        </div>
       
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInRight mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/endrimar-vanegas.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Endrimar Vanegas </div>
          <h6 class="font-bold blue-grey-text mb-4">Co-fundador</h6>
          <p class="grey-text">En apoyo a lo que hemos deseado, hoy en día muchos de nuestros hermanos venezolanos necesitan de nuestro apoyo y ayuda, con tan solo un click en nuestras cuentas en Intagram y Youtube serás parte de esta maravillosa historia para los venezolanos.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@endrimarlugo</span></a>
        </div>
       
      </div>
       <div class="col-lg-6 col-md-12 mb-r wow fadeInRight mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/ada-tovar.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Ada Tovar </div>
          <h6 class="font-bold blue-grey-text mb-4">Locutora</h6>
          <p class="grey-text">El deseo de ser parte de este trabajo es que muchos sean beneficiados con esta noble causa, dando lo mejor de nosotros para ver esos rostros relucientes que siempre tiene el venezolano, apoya y da tu grano de arena para este proyecto.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@adatov_22</span></a>
        </div>
       
      </div>
       <div class="col-lg-6 col-md-12 mb-r wow fadeInRight mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/theizer-gonzalez.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Theizer Gonzalez</div>
          <h6 class="font-bold blue-grey-text mb-4">Administrador del sitio web</h6>
          <p class="grey-text">El gusto está en poder ayudar para una buena causa, dando nuestro granito de arena para que muchos hogares venezolanos sean beneficiados y devolvamos una sonrisa a aquellos que tal vez la han perdido.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@theizerg</span></a>
        </div>
       
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/vicky.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Vickleidy John </div>
          <h6 class="font-bold blue-grey-text mb-4">TSU Recursos Humanos</h6>
          <p class="grey-text">Apoyar esta noble causa es lo que deseo, dar lo mejor de mí para que muchos hogares Venezolanos sean beneficiados y bendecidos, entre todos podremos hacer que este proyecto se convierta en una realidad completa.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@vikyjo_hn</span></a>
        </div>
       
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/dayana-venegas.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Dayana Venegas </div>
          <h6 class="font-bold blue-grey-text mb-4">Ejecutivo bancario</h6>
          <p class="grey-text">Transformando vidas através de la ayuda social, juntos damos amor y alegría a Venezuela.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@dayanavenegas24</span></a>
        </div>
       
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInRight mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/katiley-ceballos.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Katiley Ceballos </div>
          <h6 class="font-bold blue-grey-text mb-4">TSU Recursos humanos</h6>
          <p class="grey-text">Es un gusto poder aportar a esta noble causa, ser parte de este traajo es un buen deseo que siempre he tenido presente, daré lo mejor de mi para que todo se haga una realidad.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@katiley2016</span></a>
        </div>
       
      </div>
       <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/miriam-g.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Mirian Guédez </div>
          <h6 class="font-bold blue-grey-text mb-4">Redactora de blogs</h6>
          <p class="grey-text">Lo mejor de todo es que entre todos podremos ayudar a muchos que están necesitados, son muchos los hogares que podremos ayudar, con tu aporte y el nuestro, lo vamos a lograr es el deseo de todos nosotros.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@mrguedez</span></a>
        </div>
       
      </div>
   
      <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/anyoli.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Anyoli Martínez </div>
          <h6 class="font-bold blue-grey-text mb-4">Contador público</h6>
          <p class="grey-text">Todo mi buena intención estará presente para este proyecto, dar lo mejor de mí para que todo esto sea una realidad.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@anyolina0708</span></a>
        </div>
       
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInRight mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/victor.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Víctor Carrero </div>
          <h6 class="font-bold blue-grey-text mb-4">Persona de Apoyo</h6>
          <p class="grey-text">Deseo dar todo mi apoyo a esta noble causa, por los más necesitados, siempre será un gusto ser parte de este proyecto.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@victor_carrero</span></a>
        </div>
       
      </div>
       <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/jonathan-velasquez.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Jonathan Velásquez </div>
          <h6 class="font-bold blue-grey-text mb-4">...</h6>
          <p class="grey-text">Siempre he deseado aportar un grano de arena para el bienestar de las familias venezolanas, daré lo mejor de mí para aportar y apoyar este grandioso proyecto.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@jonathanvlasqz</span></a>
        </div>
       
      </div>
       <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/alexander-rojas.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Alexander Rojas </div>
          <h6 class="font-bold blue-grey-text mb-4">Publicidad y Mercadeo</h6>
          <p class="grey-text">Aportar un grano de arena es lo que he deseado, ayudar por los demás es lo que siempre he tenido presente, es una buena acción para quiénes están necesitados, daremos lo mejor para que sea una realidad.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@alexanderrojasarteaga</span></a>
        </div>
       
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInRight mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/patricia-valentina.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Patricia Martínez </div>
          <h6 class="font-bold blue-grey-text mb-4">Estudiante</h6>
          <p class="grey-text">Obtener buenos resultados es lo que más deseo, apoyando en lo que pueda y dar lo mejor de mí para que este proyecto sea una realidad y se pueda ayudar a los más necesitados.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@patty.val</span></a>
        </div>
       
      </div>
       <div class="col-lg-6 col-md-12 mb-r wow fadeInRight mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/karina-rosales.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Karina Rosales </div>
          <h6 class="font-bold blue-grey-text mb-4">Recursos humanos</h6>
          <p class="grey-text">Tomaré el mejor deseo para que este proyecto sea una realidad, mi deseo es que obtengamos los mejores resultados de nuestro esfuerzo, con la ayuda de todos podremos alcanzar nuestros objetivos. Ayudaremos y todo saldrá bien</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@nafta0712</span></a>
        </div>
       
      </div>
    
             <div class="col-lg-6 col-md-12 mb-r wow fadeInLeft mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/johana-colmenares.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Johana Colmenares </div>
          <h6 class="font-bold blue-grey-text mb-4">TSU Finanzas</h6>
          <p class="grey-text">Mi aporte a esta noble causa es lo que me motiva a que todo esto sea una realidad, entre todos podremos hacer una realidad nuestros proyectos, únete y sé parte de esta noble causa, para que otros sea .</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@johanacolmenares19</span></a>
        </div>
       
      </div>
      <div class="col-lg-6 col-md-12 mb-r wow fadeInRight mt-3" data-wow-delay=".3s">
       
        <div class="col-md-6 float-left"><img class="img-fluid rounded z-depth-1 mb-3" src="{{asset('images/fondo/personas/camila-moreno.jpg')}}" alt="team member"/></div>
        <div class="col-md-6 float-right">
          <div class="h6">Camila Moreno </div>
          <h6 class="font-bold blue-grey-text mb-4">Estudiante</h6>
          <p class="grey-text">Poder ayudar, es lo que estoy dispuesta hacer, me motiva que podamos apoyar a los más necesitados en nuestro país, Venezuela necesita hoy en día de todos nosotros, que nos unamos y entre todos podamos apoyar.</p><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i><span class="ml-1">@camila_moreno1506</span></a>
        </div>
       
      </div>
      
      
    </div>
      
    </div>

    
  </div>
</section>
<section id="contact" style="background-image:url('images/panorama-3094696_1920.jpg');">
  <div class="rgba-black-strong py-5">
    <div class="container">
      <div class="wow fadeIn">
        <h2 class="h1 text-white pt-5 pb-3 text-center">Contáctanos</h2>
        <p class="text-white px-5 mb-5 pb-3 lead text-center">
          Tu opinión es de vital importancia para nosotros, contáctanos y declaranos lo que te puede parecer nuestros proyectos, y si deseas participar en ellas, será de mucho valor conocer tu intervensión.
        </p>
      </div>
      <div class="card mb-5 wow fadeInUp" data-wow-delay=".4s">
        <div class="card-body p-5">
          <div class="row">
            <div class="col-md-8">
              <form method="POST" action="{{ url('comentarios') }}" id="main-form" autocomplete="off">
                        {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="name" type="text" name="nombre" required="required"/>
                      <label for="name">Tu nombre</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form">
                      <input class="form-control" id="email" type="text" name="apellido" required="required"/>
                      <label for="email">Tu apellido</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form">
                      <input class="form-control" id="subject" type="email" name="correo" required="required"/>
                      <label for="subject">Correo</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="md-form">
                      <textarea class="md-textarea form-control" id="message" name="mensaje" required="required"></textarea>
                      <label for="message">Tu mensaje</label>
                    </div>
                  </div>
                </div>
                <div class="center-on-small-only mb-4">
                  <button class="btn btn-indigo ml-0" type="submit"><i class="material-icons mr-2">send</i> Send</button>
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <ul class="list-unstyled text-center">
                <li class="mt-4"><i class="fa fa-map-marker indigo-text fa-2x"></i>
                  <p class="mt-2">140, City Center, New York, U.S.A</p>
                </li>
                <li class="mt-4"><i class="fa fa-phone indigo-text fa-2x"></i>
                  <p class="mt-2">+ 01 234 567 89</p>
                </li>
                <li class="mt-4"><i class="fa fa-envelope indigo-text fa-2x"></i>
                  <p class="mt-2">contact@company.com</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</div>

@endsection




