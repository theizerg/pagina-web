@extends('layouts.admin')

@section('title', 'Menus')
@section('page_title', 'Menus')
@section('page_subtitle', 'Editar')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ url('menus') }}">Menus</a></li>
    <li class="active">Editar</li>
@endsection

@section('content')

  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="btn-group">
          @can('view_somos')
          <a href="{{ url('somos') }}" class="btn btn-primary"><i class="fa fa-sort-alpha-desc"></i> Listado</a>
          @endcan
          @can('add_somoss')
          <a href="{{ url('somos/create') }}" class="btn btn-primary"><i class="fa fa-plus-square"></i> Ingresar</a>
          @endcan
          <a href="{{ url('somos', [$somos->encode_id]) }}" class="btn btn-primary"><i class="fa fa-eye"></i> Datos</a>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <form role="form" id="main-form">
            <input type="hidden" id="_url" value="{{ url('somos', [$somos->encode_id]) }}">
            <input type="hidden" id="_token" value="{{ csrf_token() }}">
            <div class="box-body">
              <div class="form-group pading">
                <label for="titulo">Título</label>
                <input class="form-control" id="titulo" name="titulo" value="{{ $somos->titulo }}" placeholder="Título">
                <span class="missing_alert text-danger" id="titulo_alert"></span>
              </div>
              <div class="form-group">
               
               <textarea name="cuerpo"  class="form-control" id="" cols="115" rows="10">{{ $somos->cuerpo }}</textarea>
                <span class="missing_alert text-danger" id="last_name_alert"></span>
              </div>            
              <div class="form-group">
                <label for="status">Estado</label>
                <div class="checkbox icheck">
                  <label>
                    <input type="radio" name="status" value="1" {{ $somos->status == 1 ? 'checked' : '' }}> Activo&nbsp;&nbsp;
                    <input type="radio" name="status" value="0" {{ $somos->status == 0 ? 'checked' : '' }}> Deshabilitado&nbsp;&nbsp;
                  </label>
                </div>
              </div>
             
              <br>
              <div class="form-group">
                <label for="password">Contraseña actual ({{ Auth::user()->display_name }})</label>
                <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Contraseña actual">
                <span class="missing_alert text-danger" id="current_password_alert"></span>
              </div>
              <div class="box-footer">
              <button type="submit" class="btn btn-primary ajax" id="submit">
                <i id="ajax-icon" class="fa fa-edit"></i> Editar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('scripts')
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    <script src="{{ asset('js/admin/menus/edit.js') }}"></script>
@endpush
