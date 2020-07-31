@extends('layouts.adminfront')
@section('title', 'Inicio de Sesión')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 ml-5"><br><br>
            <div class="card wow fadeInRight float-righst mr-5" >
              <h6 class="mt-3"><b> <center class="wow fadeInRight">¡Hola! Ingresa tu usuario y contraseña.</center> </b></h6>
                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}" id="main-form" autocomplete="off">
                        {{ csrf_field() }}
                <div class="md-form">
                        
                          <span class="fas fa-user float-right"></span>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1">
                         <label for="materialRegisterFormFirstName">Usuario</label>

                        
                    
                    <span style="color: #F44336 !important;">{{$errors->first('username') }}</span>
                  </div>
                  <div class="md-form">
                      <span class="fas fa-lock float-right"></span>
                   
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    <label for="materialRegisterFormFirstName">Contraseña</label>
                  </div>
               
                   <div class="row">
                            
                        <div class="col-md-12 text-center">
                           <button style="color: white; height: 40px;" type="submit" class="btn blue accent-4 form-control">
                                    <i class="fas fa-sign-in-alt"></i> {{ __('Entrar') }}
                                </button>
                        </div> 
                        <div class="col-sm-12 text-center mt-1">
                          <a href=" {{route('register')}} " style="color:#2962ff; font-size: 18px;">Crear cuenta</a>
                        </div>                        
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
<script type="text/javascript">
$(document).ready(function () {

  $('#main-form').validate({
    rules: {
      username: {
        required: true,
        minlength: 2,
      },
      password: {
        required: true,
        minlength: 6
      },
      terms: {
        required: true
      },
    },
    messages: {
      username: {
        required: "Introduce el usuario",
         minlength: "Debe tener un mínimo de 2 caracteres"
      },
      password: {
        required: "Introduce una contraseña",
        minlength: "Debe tener un mínimo de 2 caracteres"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.md-form').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

@endpush

@push('styles')
<style>
   .backbox{  
  background-color: #404040;
  width: 100%;
  height: 80%;
  position: absolute;
  transform: translate(0,-50%);
  top:50%;
  display: inline-flex;
}

.frontbox{
  background-color: white;
  border-radius: 20px;
  height: 100%;
  width: 50%;
  z-index: 10;
  position: absolute;
  right:0;
  margin-right: 3%;
  margin-left: 3%;
  transition: right .8s ease-in-out;
}

#login{

}
</style>
@endpush

