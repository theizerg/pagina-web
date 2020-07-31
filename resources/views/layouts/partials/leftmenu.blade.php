
<section class="sidebar">
  @auth
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">Menu</li>
    @can('view_users')
    <li class="treeview {{ active_check(['user','login']) }}">
      <a href="#"><i class="fa fa-user"></i> <span>Usuarios</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        @can('view_users')
        <li class="active"><a href="{{ url('user') }}"><i class="fa fa-sort-alpha-desc"></i> Listado</a></li>
        @endcan
        @can('add_users')
        <li class="{{ active_check(['user/create']) }}"><a href="{{ url('user/create') }}"><i class="fa fa-plus-square"></i> Ingresar</a></li>
        @endcan
        @can('assign_permissions')
        <li class="{{ active_check(['permission']) }}"><a href="{{ url('permission') }}"><i class="fa fa-lock"></i> Permisos</a></li>
        @endcan
        @can('view_logins')
        <li class="{{ active_check(['logins']) }}"><a href="{{ url('logins') }}"><i class="fa fa-sign-in"></i> Logins</a></li>
        @endcan
      </ul>
    </li>
     <li class="treeview {{ active_check(['user','login']) }}">
      <a href="#"><i class="fa fa-cogs"></i> <span>Principal</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        @can('view_menus')
        <li class="{{ active_check(['menus']) }}"><a href="{{ url('menus') }}"><i class="material-icons">menu</i> Menú</a></li>
        @endcan
        @can('view_headers')
        <li class="{{ active_check(['header']) }}"><a href="{{ url('header') }}"><i class="material-icons">local_convenience_store</i> Cabecera</a></li>
        @endcan
         <li class="{{ active_check(['proyecto']) }}"><a href="{{ url('proyecto') }}"><i class="fa fa-sign-in"></i> Proyectos</a></li>
         <li class="{{ active_check(['donacion']) }}"><a href="{{ url('donacion') }}"><i class="fa fa-user"></i> Donación</a></li> 
      </ul>
    </li>
    <li class="treeview {{ active_check(['user','login']) }}">
      <a href="#"><i class="fa fa-user"></i> <span>Cuerpo</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        @can('view_somos')
        <li class="{{ active_check(['somos']) }}"><a href="{{ url('somos') }}"><i class="fa fa-question-circle"></i> Quienes somos</a></li>
        @endcan
        @can('add_estructura')
        <li class="{{ active_check(['estructura']) }}"><a href="{{ url('estructura') }}"><i class="fa fa-plus-square"></i> Estructura</a></li>
        @endcan
        @can('view_objetivo')
        <li class="{{ active_check(['objetivos']) }}"><a href="{{ url('objetivo') }}"><i class="fa fa-flag"></i> Objetivos</a></li>
        @endcan
        @can('view_proyectos')
        <li class="{{ active_check(['proyectos']) }}"><a href="{{ url('proyectos') }}"><i class="fa fa-sign-in"></i> Proyectos</a></li>
        @endcan
         @can('view_proyectos')
        <li class="{{ active_check(['donaciones']) }}"><a href="{{ url('donaciones') }}"><i class="fa fa-hand-o-up"></i> Donaciones</a></li>
        @endcan
      </ul>
    </li>
    @endcan
  </ul>
  @endauth
</section>
