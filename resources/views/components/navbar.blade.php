<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <form action="{{url('logout')}}" method="post" id="logout_form" style="display: none;">
      @csrf
    </form>
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('dashboard')}}" class="nav-link">Home</a>
      </li>
      @if (Auth::user()->role_id == $role_id)
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('dashboard/super-admin')}}" class="nav-link">Admins</a>
      </li>
      @endif
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" id="logout_link"  class="nav-link">Logout</a>
      </li>
    </ul>

  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src='{{asset("admin/img/logo.png")}}' alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Mirage Board</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src='{{asset("admin/img/user-profile.jpg")}}' class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{$user->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('dashboard/projects')  }}" class="nav-link">
                  <i class="fas fa-hard-hat"></i>
                  <p>
                    Projects
                  </p>
                </a>
              </li>

          <li class="nav-item">
            <a href="{{ url('dashboard/messages')  }}" class="nav-link">
            <i class="fas fa-envelope"></i>
              <p>
                Messages
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('dashboard/news')  }}" class="nav-link">
              <i class="fas fa-newspaper"></i>
              <p>
                News
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('dashboard/companies')  }}" class="nav-link">
                <i class="fas fa-building"></i>
              <p>
                Companies
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('dashboard/experts')  }}" class="nav-link">
                <i class="fas fa-user"></i>
              <p>
                Experts
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
