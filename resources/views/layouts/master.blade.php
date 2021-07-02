
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventario </title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">



</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- MENU DERECHA Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a> -->
        <!-- <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div> -->
      </li>
      <!-- Notifications Dropdown Menu -->
     <!--  FULL SCREEN -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     <!--  BARRA DERECHA -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <!-- USUARIO -->
      <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
    </ul>
    <!-- FIN MENU DERECHA  Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('/img/smu_circulo.png') }}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SMU Inventario</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">  
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
               Activos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('activos') }}" class="nav-link active">
                  <i class="far fa-compass nav-icon"></i>
                  <p>Activos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('movimientoingresos.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activos Nuevos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('movimientoingresos.createusado') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activos Usados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('movimientoingresos.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendientes de Revisión</p>
                </a>
              </li>
              
            </ul>
          </li> 
          <!-- DESPACHO -->
          <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                Despacho
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('presolicitud') }}" class="nav-link active">
                    <i class="far fa-compass nav-icon"></i>
                    <p>PRE - Solicitud</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('despacho.create') }}" class="nav-link active">
                    <i class="far fa-compass nav-icon"></i>
                    <p>Crear - Solicitud</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('bulto.index') }}" class="nav-link active">
                    <i class="far fa-compass nav-icon"></i>
                    <p>Asignar Bultos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('despacho') }}" class="nav-link active">
                    <i class="far fa-compass nav-icon"></i>
                    <p>Despacho</p>
                  </a>
                </li>
              </ul>
          
          </li>
           <!-- Conversión a partes y piezas -->
           <li>
              <a href="{{ route('conversion.index') }}" class="nav-link active">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                Conversión
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          
          </li>
           <!-- Reportes -->
           <li>
              <a href="{{ route('reportes.index') }}" class="nav-link active">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                Reportes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
          
          </li>

          <!-- CONFIGURACION -->
          <li class="nav-item">
            <a href="" class="nav-link">
             
              <i class="fab fa-cogs "></i>
              <p>
                Configuración
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('categorias') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('subcategorias') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SubCategorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('productos') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('proveedores') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proveedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tipodocumentos') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo de Documentos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('estadoactivos') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estado de los activos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('motivocambioestados') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Motivos cambio de estado</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('motivodespachos') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Motivos del Despacho</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('ubicacions') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubicacion</p>
                </a>
              </li>

            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Main content -->
    {{ $slot }}
  </div>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Configuración</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>  -->
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://smu.cl">SMU</a>.</strong> Todos los derechos reservados.
 </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('js/app.js') }}"></script>


<script>
  $(function () {

    $("#barreport").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#barreport_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


</body>
</html>
