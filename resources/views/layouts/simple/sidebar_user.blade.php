<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
                        <span class="logo-sm">
                            {{--<img src="{{ asset('/img/Logo-sm.svg') }}" alt="" height="30">--}}
                        </span>
            <span class="logo-lg">
                            {{--<img src="{{ asset('/img/logo.svg') }}" alt="" height="50">--}}
                        </span>
        </a>

        <a href="/" class="logo logo-light">
                        <span class="logo-sm">
                            {{--<img src="{{ asset('/img/Logo-sm.svg') }}" alt="" height="30">--}}
                        </span>
            <span class="logo-lg">
                            {{--<img src="{{ asset('/img/Logo-lt.svg') }}" alt="" height="50">--}}
                        </span>
        </a>
    </div>
    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="/dashboard">
                        <i class="uil-home-alt"></i>
                        <span>Главная</span>
                    </a>
                </li>
                <li>
                    <a href="/imports/create">
                        <i class="mdi mdi-newspaper"></i>
                        <span>Брэнды</span>
                    </a>
                </li>
                <li>
                    <a href="/investors/create">
                        <i class="mdi mdi-newspaper"></i>
                        <span>Продукты</span>
                    </a>
                </li>
                <li>
                    <a href="/products/create">
                        <i class="mdi mdi-newspaper"></i>
                        <span>Продукты</span>
                    </a>
                </li>
                <li>
                    <a href="/stocks/create">
                        <i class="mdi mdi-newspaper"></i>
                        <span>Продукты</span>
                    </a>
                </li>
                <li>
                    <a href="/message">
                        <i class="mdi mdi-newspaper"></i>
                        <span>Заявки</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
