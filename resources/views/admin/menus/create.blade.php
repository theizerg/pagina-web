@extends('layouts.admin')

@section('title', 'Menus')
@section('page_title', 'Menus')
@section('page_subtitle', 'Ingresar')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ url('menus') }}">menus</a></li>
    <li class="active">Ingresar</li>
@endsection

@section('content')

  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="btn-group">
          @can('view_menus')
          <a href="{{ url('menus') }}" class="btn btn-primary"><i class="fa fa-sort-alpha-desc"></i> Listado</a>
          @endcan
          @can('add_menus')
          <a href="{{ url('menus/create') }}" class="btn btn-primary"><i class="fa fa-plus-square"></i> Ingresar</a>
          @endcan
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <form role="form" id="main-form" autocomplete="off">
            <input type="hidden" id="_url" value="{{ url('menus') }}">
            <input type="hidden" id="_token" value="{{ csrf_token() }}">
            <div class="box-body">
              <div class="form-group pading">
                <label for="name">Nombre del menú</label>
                <input class="form-control" id="nombre" name="nombre" placeholder="Nombre del menú">
                <span class="missing_alert text-danger" id="nombre_alert"></span>
              </div>
              <div class="form-group">
                <label for="ruta">Ruta del menú</label>
                <input class="form-control" id="ruta" name="ruta" placeholder="Ruta del menú">
                <span class="missing_alert text-danger" id="ruta_alert"></span>
              </div>
              <div class="form-group">
                <label for="status">Estado del menú</label>
                <div class="checkbox icheck">
                  <label>
                    <input type="radio" name="status" value="1" checked> Activo&nbsp;&nbsp;
                    <input type="radio" name="status" value="0"> Deshabilitado
                  </label>
                </div>
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary ajax" id="submit">
                <i id="ajax-icon" class="fa fa-save"></i> Ingresar
              </button>
              <a type="submit" class="btn btn-info ajax hide" id="edit-button">
                <i class="fa fa-edit"></i> Editar
              </a>
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
    <script src="{{ asset('js/admin/menus/create.js') }}"></script>
@endpush
