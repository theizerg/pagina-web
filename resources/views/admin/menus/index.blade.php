@extends('layouts.admin')

@section('title', 'Menus')
@section('page_title', 'Menus')
@section('page_subtitle', 'Listado')

@section('breadcrumb')
    @parent
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="{{ url('menus') }}">menú</a></li>
    <li class="active">Listado</li>
@endsection

@section('content')

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="btn-group">
            @can('add_menus')
            <a href="{{ url('menus/create') }}" class="btn btn-primary"><i class="fa fa-plus-square"></i> Ingresar</a>
            @endcan
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado del menú</h3>
              
            </div>
            <div class="box-body table-responsive table-striped">
              <table class="table table-responsive table-hover">
                <tr>
                    <th>Nombre</th>
                    <th>Ruta</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
                @foreach ($menus as $menu)
                <tr class="row{{ $menu->encode_id }}">
                  <td>{{ $menu->nombre }}</td>
                  <td>{{ $menu->ruta }}</td>
                  <td><span class="badge {{ $menu->status ? 'bg-green' : 'bg-red' }}">{{ $menu->display_status }}</span></td>
                  <td>
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="fa fa-gears"></i> <span class="caret"></span>
                      </button>
                      <ul class=" dropdown-menu dropdown-menu-right">
                        @can('edit_menus')
                        <li><a href="{{ url('menus', [$menu->encode_id, 'edit']) }}"><i class="fa fa-edit"></i> Editar</a></a></li>
                        @endcan
                      </ul>
                    </div>
                  </td>
                </tr>
                @endforeach
              </table>
              <div class="box-footer clearfix">
                  {{ $menus->links() }}
                  <p class="text-muted">Mostrando <strong>{{ $menus->count() }}</strong> registros de <strong>{{$menus->total() }}</strong> totales</p>
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
