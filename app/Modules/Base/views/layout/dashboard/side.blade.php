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

                <li class="nav-item has-treeview @if(Request::is('dawry/*') || Request::is('dawry')) menu-open @endif">
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
                            <a href="{{ route('dawry.create') }}" class="nav-link @if(Request::is('dawry/create'))active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>إضافة دورى</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview @if(Request::is('question/*') || Request::is('question')) menu-open @endif">
                    <a href="#" class="nav-link @if(Request::is('question'))active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الاسئله
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('question.index') }}" class="nav-link @if(Request::is('question'))active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>كل الاسئله</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('question.create') }}" class="nav-link @if(Request::is('question/create'))active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>إضافة سؤال</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview @if(Request::is('hezma/*') || Request::is('hezma')) menu-open @endif">
                    <a href="#" class="nav-link @if(Request::is('hezma'))active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الحزم
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('hezma.index') }}" class="nav-link @if(Request::is('hezma'))active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>كل الحزم</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('hezma.create') }}" class="nav-link @if(Request::is('hezma/create'))active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>إضافة حزمه</p>
                            </a>
                        </li>

                    </ul>
                </li>


                {{-- players --}}
                <li class="nav-item has-treeview @if(Request::is('players/*') || Request::is('players')) menu-open @endif">
                    <a href="#" class="nav-link @if(Request::is('players'))active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Players
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('players.index') }}" class="nav-link @if(Request::is('players'))active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Players </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('players.create') }}" class="nav-link @if(Request::is('players'))active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Players </p>
                            </a>
                        </li>


                    </ul>
                </li>

                {{-- end players --}}


                 {{-- reports --}}
                 <li class="nav-item has-treeview @if(Request::is('visitors/*') || Request::is('visitors')) menu-open @endif">
                    <a href="#" class="nav-link @if(Request::is('visitors'))active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Reports
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('visitors.index') }}" class="nav-link @if(Request::is('visitors'))active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visitors </p>
                            </a>
                        </li>


                    </ul>
                </li>

                {{-- end reports --}}


{{--                insights--}}

                <li class="nav-item">
                    <a href="{{ route('insights.home.dashboard') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Insights Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('support.home.dashboard') }}" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Support</p>
                    </a>
                </li>


{{--                insights--}}





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
