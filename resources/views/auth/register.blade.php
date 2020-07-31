@extends('layouts.adminfront')

@section('content')
<div class="container"><br>
   <div class="row justify-content-center mt-5"> 
    <div class="col-md-8">
        <!-- Material form register -->
      <div class="card">

    <h5 class="title  black-text text-center py-4">
        <strong><b>Completa tus datos</b></strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0"><br><br>

        <!-- Form -->
        <form method="POST"  class="text-center" style="color: #757575;" action="{{ route('register') }}" id="main-form">
                    {{ csrf_field() }}

            <div class="form-row">
                <div class="col-sm-6">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" value="{{Request::old('name') ? : ''}}" id="materialRegisterFormFirstName" class="form-control" name="name">
                        <label for="materialRegisterFormFirstName">Nombres</label>
                    </div>
                     <span style="color: #F44336 !important;">{{$errors->first('name') }}</span>
                </div>
                <div class="col-sm-6">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" value="{{Request::old('last_name') ? : ''}}"  id="materialRegisterFormLastName" class="form-control" name="last_name">
                        <label for="materialRegisterFormLastName">Apellidos</label>
                    </div>
                     <span style="color: #F44336 !important;">{{$errors->first('last_name') }}</span>
                </div>
                <div class="col-sm-6">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text"  value="{{Request::old('username') ? : ''}}" id="materialRegisterFormLastName" class="form-control" name="username">
                        <label for="materialRegisterFormLastName">Usuario</label>
                    </div>
                    <span style="color: #F44336 !important;">{{$errors->first('username') }}</span>
                </div>
                 

                <!-- E-mail -->
                 <div class="col-sm-6">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="email"  value="{{Request::old('email') ? : ''}}" id="materialRegisterFormLastName" class="form-control" name="email">
                        <label for="materialRegisterFormLastName">Correo</label>
                    </div>
                </div>
                 <span style="color: #F44336 !important;">{{$errors->first('email') }}</span>
             </div>

             <div class="form-row">
                <div class="col-sm-6">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="password"  value="{{Request::old('password') ? : ''}}" name="password" id="materialRegisterFormFirstName" class="form-control" name="name">
                        <label for="materialRegisterFormFirstName">Contraseña</label>
                    </div>
                     <span style="color: #F44336 !important;">{{$errors->first('password') }}</span>
                </div>
                <div class="col-sm-6">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="password"  value="{{Request::old('password') ? : ''}}" name="password_confirmation" id="materialRegisterFormLastName" class="form-control" name="last_name">
                        <label for="materialRegisterFormLastName">Confirmación de contraseña</label>
                    </div>
                     <span style="color: #F44336 !important;">{{$errors->first('password') }}</span>
                </div>
            </div> 
            <div class="row mt-5">
                <div class="col-md-12 white-text">
                    <button type="submit" class="btn blue accent-4 form-control" style="height: 40px;">
                       <i class="fas fa-sign-in-alt"></i> {{ __('Registrar') }}
                    </button>
                </div>
            </div>
        </form>
        <!-- Form -->
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
         name: {
        required: true,
        minlength: 2,
      },
       email: {
        required: true,
        email: true,
      },
       last_name: {
        required: true,
        minlength: 2,
      },
      username: {
        required: true,
        minlength: 2,
      },
       phone: {
        required: true,
        number: true,
        minlength: 2,
      },
       address: {
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
        name: {
        required: "Introduzca su nombre",
         minlength: "Debe tener un mínimo de 2 caracteres"
      },
      last_name: {
        required: "Introduzca el apellido",
         minlength: "Debe tener un mínimo de 2 caracteres"
      },
      username: {
        required: "Introduce el usuario",
         minlength: "Debe tener un mínimo de 2 caracteres"
      },
      phone: {
        number: "Solo numeros",
        required: "Introduzca el telefono",
         minlength: "Debe tener un mínimo de 2 caracteres"
      },
      email: {
        required: "Introduzca el correo"
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


