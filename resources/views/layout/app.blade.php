@include('layout.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('layout.left-sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <!-- Control Sidebar -->
  @include('layout.right-sidebar')
  <!-- /.content-wrapper -->

@include('layout.footer')