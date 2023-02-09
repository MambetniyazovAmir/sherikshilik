<header id="page-topbar">
    <div class="navbar-header">
        <div class="header-src">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                                <span class="logo-sm">
                                    {{--<img src="{{ asset('/img/Logo-sm.svg') }}" alt="" height="">--}}
                                </span>
                    <span class="logo-lg">
                                    {{--<img src="{{ asset('/img/logo.svg') }}" alt="" height="20">--}}
                                </span>
                </a>

                <a href="/" class="logo logo-light">
                                <span class="logo-sm">
{{--                                    <img src="{{ asset('/img/Logo-sm.svg') }}" alt="" height="">--}}
                                </span>
                    <span class="logo-lg">
{{--                                    <img src="{{ asset('/img/Logo-lt.svg') }}" alt="" height="20">--}}
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <div class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" id="search" class="form-control" placeholder="Поиск..." autocomplete="off">
                    <span class="uil-search"></span>
                </div>
                <div class="position-absolute" id="poisk" style="display: none">
                    <div class="card">
                        <div class="card-body">
                            <p id="search1"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Поиск ..."
                                       aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1" style="margin-right: 5px;">
                <p style="margin-bottom: 0;">{{ \Carbon\Carbon::now()->format('d.m.Y') }}
                </p>
            </div>
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="uil-minus-path"></i>
                </button>
            </div>

            @php($user = auth()->user())
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{ $user->name }}</span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="/profile"><i
                            class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                            class="align-middle">Профиль</span></a>
                    <a class="dropdown-item" href="/lockscreen"><i
                            class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span
                            class="align-middle">Блокировки</span></a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span
                            class="align-middle">Выход</span></a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
