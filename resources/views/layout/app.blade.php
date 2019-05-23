@include('layout.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('layout.left-sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('dashboard-name')
      </h1>

      <ol class="breadcrumb">
        @yield('breadcumb')
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