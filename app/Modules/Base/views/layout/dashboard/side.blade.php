<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
        <img src="{{ url('dist/img/AdminLTELogo.png') }}" alt=" Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">7arefa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name??'' }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview @if(Request::is('admin')) menu-open @endif">
                    <a href="#" class="nav-link   @if(Request::is('admin'))active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview @if(Request::is('dawry/*')) menu-open @endif">
                    <a href="#" class="nav-link @if(Request::is('dawry'))active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الدورى
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dawry.index') }}" class="nav-link @if(Request::is('dawry'))active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>كل الدوريات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dawry.create') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>إضافة دورى</p>
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
