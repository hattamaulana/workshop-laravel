  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('theme/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
         <li class="active">
          <a href="/">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Crew</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="/crew">
                <i class="fa fa-list-ul"></i> List Crew
              </a>
            </li>

            <li>
              <a href="/crew/create">
                <i class="fa fa-user-plus"></i> Tambah Crew
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="/member">
            <i class="fa fa-users"></i> <span>Member</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="/member">
                <i class="fa fa-list-ul"></i> List Member
              </a>
            </li>

            <li>
              <a href="/member/create">
                <i class="fa fa-user-plus"></i> Tambah Member
              </a>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Event</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#">
                <i class="fa fa-list"></i> List Event
              </a>
            </li>

            <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> Buat Event Baru
              </a>
            </li>

            <li>
              <a href="#">
                <i class="fa fa-check"></i> History Event
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>