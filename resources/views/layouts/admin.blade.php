<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SISTEMA  HOTELERO | www.hotelparaiso.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SH</b>I</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Sistema Hotelero</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Activo</small>
                  <span class="hidden-xs">Jose Martin Pereira</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                     Ingeniera de software
                      <small>Jose Martin Pereira
                            Juan cano
                            Junior porras</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar cesion</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-register"></i>
                <span>Reservacion</span>
                <i class="fa fa-angle-left pull-right"0></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('hotel/cliente')}}"><i class="fa fa-circle-o"></i>Registrar Reservacion</a></li>
                <li><a href="{{url('hotel/persona')}}"><i class="fa fa-circle-o"></i> Empleados</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-factura"></i>
                <span>Servicios</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('hotel/producto')}}"><i class="fa fa-circle-o"></i> Productos</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Eventos</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> </a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> </a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> </a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> </a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> </a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Pagos</span>
                
              </a>
              <ul class="treeview-menu">
                
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="  r"></i> <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Administradores</a></li>
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i>Recepcion</a></li>
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i>Encargado Indormatico</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class=""></i> <span>Comprobante de pago</span>
                <small class="label pull-right bg-red">Boucher</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class=""></i> <span>Boocking</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema Hotelero</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido-->
                             @yield('contenido')
		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      

      
    <!-- jQuery 2.1.4 -->
       <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2019-2019 <a href="www.incanatoit.com">Martin Pereira</a>.</strong> All rights reserved.
      </footer>
  </body>
</html>
