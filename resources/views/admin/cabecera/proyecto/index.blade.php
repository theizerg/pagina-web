@extends('layouts.admin')

@section('title', 'Proyectos ')
@section('page_title', 'Proyectos ')
@section('page_subtitle', 'Listado')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ url('proyecto')}}">proyecto</a></li>
    <li class="active">Listado</li>
@endsection

@section('content')

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="btn-group">
            @can('add_estructuraz')
            <a href="{{ url('proyecto/create') }}" class="btn btn-primary"><i class="fa fa-plus-square"></i> Ingresar</a>
            @endcan
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de los proyectos de la fundación </h3>
              
            </div>
            <div class="box-body table-responsive table-striped">
              <table class="table table-responsive table-hover">
                <tr>
                    <th>Título</th>
                    <th>Cuerpo</th>
                    <th>Clase</th>
                    <th>Ícono</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
                @foreach ($proyectos  as $son)
                <tr class="row{{ $son->encode_id }}">
                  <td>{{ $son->titulo }}</td>
                  <td>{{ $son->cuerpo }}</td>
                  <td>{{ $son->class }}</td>
                  <td>{{ $son->icono }}</td>
                  <td><span class="badge {{ $son->status ? 'bg-green' : 'bg-red' }}">{{ $son->display_status }}</span></td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="fa fa-gears"></i> <span class="caret"></span>
                      </button>
                      <ul class=" dropdown-menu dropdown-menu-right">
                        @can('edit_estructura')
                        <li><a href="{{ url('proyecto',[$son->encode_id,'edit']) }}"><i class="fa fa-edit"></i> Editar</a></a></li>
                        @endcan
                      </ul>
                    </div>
                  </td>
                </tr>
                @endforeach
              </table>
              <div class="box-footer clearfix">
                  {{ $proyectos ->links() }}
                  <p class="text-muted">Mostrando <strong>{{ $proyectos ->count() }}</strong> registros de <strong>{{$proyectos ->total() }}</strong> totales</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


@endsection

@push('scripts')
  <script src="{{ asset('js/admin/user/index.js') }}"></script>
@endpush
