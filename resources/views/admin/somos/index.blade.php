@extends('layouts.admin')

@section('title', 'Quienes somos ')
@section('page_title', '¿Quiénes somos? ')
@section('page_subtitle', 'Listado')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ url('somos')}}">menú</a></li>
    <li class="active">Listado</li>
@endsection

@section('content')

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="btn-group">
            @can('add_somosz')
            <a href="{{ url('somos/create') }}" class="btn btn-primary"><i class="fa fa-plus-square"></i> Ingresar</a>
            @endcan
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado del ¿Quiénes somos? </h3>
              
            </div>
            <div class="box-body table-responsive table-striped">
              <table class="table table-responsive table-hover">
                <tr>
                    <th>Título</th>
                    <th>Cuerpo</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
                @foreach ($somos  as $son)
                <tr class="row{{ $son->encode_id }}">
                  <td>{{ $son->titulo }}</td>
                  <td>{{ $son->cuerpo }}</td>
                  <td><span class="badge {{ $son->status ? 'bg-green' : 'bg-red' }}">{{ $son->display_status }}</span></td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="fa fa-gears"></i> <span class="caret"></span>
                      </button>
                      <ul class=" dropdown-menu dropdown-menu-right">
                        @can('edit_somos')
                        <li><a href="{{ url('somos',[$son->encode_id,'edit']) }}"><i class="fa fa-edit"></i> Editar</a></a></li>
                        @endcan
                      </ul>
                    </div>
                  </td>
                </tr>
                @endforeach
              </table>
              <div class="box-footer clearfix">
                  {{ $somos ->links() }}
                  <p class="text-muted">Mostrando <strong>{{ $somos ->count() }}</strong> registros de <strong>{{$somos ->total() }}</strong> totales</p>
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
