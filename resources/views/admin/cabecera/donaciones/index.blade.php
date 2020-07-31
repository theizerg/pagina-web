@extends('layouts.admin')

@section('title', 'Donaciones ')
@section('page_title', 'Donaciones ')
@section('page_subtitle', 'Listado')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ url('donacion')}}">donacion</a></li>
    <li class="active">Listado</li>
@endsection

@section('content')

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="btn-group">
            @can('add_donaciones')
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
              <h3 class="box-title">Listado de las donaciones de la fundación </h3>
              
            </div>
            <div class="box-body table-responsive table-striped">
              <table class="table table-responsive table-hover">
                <tr>
                    <th>Título</th>
                    <th>Cuerpo</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
                @foreach ($donaciones  as $son)
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
                        @can('edit_estructura')
                        <li><a href="{{ url('donacion',[$son->encode_id,'edit']) }}"><i class="fa fa-edit"></i> Editar</a></a></li>
                        @endcan
                      </ul>
                    </div>
                  </td>
                </tr>
                @endforeach
              </table>
              <div class="box-footer clearfix">
                  {{ $donaciones ->links() }}
                  <p class="text-muted">Mostrando <strong>{{ $donaciones ->count() }}</strong> registros de <strong>{{$donaciones ->total() }}</strong> totales</p>
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
