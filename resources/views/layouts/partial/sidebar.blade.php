<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{ url('dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
              </p>
            </a>
          </li> --}}
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Sliders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('slider') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add.slider') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recyel Bin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('menu') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add.menu') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Category</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Item
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('item') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Item</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add.item') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Item</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Why Info Part
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('why.info') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('why.info.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Info</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Special Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('special.category') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Special Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('special.category.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Special Category</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Special Items
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('special.items') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Special Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('special.items.add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Special Items</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Website Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('contact.info') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Contact Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('wesite.logo') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add.social') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Social  Media</p>
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
