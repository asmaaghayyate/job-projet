<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="#"><img src="{{ asset('assets2/img/brand/logo.png') }} "
                class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="#"><img
                src="{{ asset('assets2/img/brand/logo-white.png') }} " class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="#"><img
                src="{{ asset('assets2/img/brand/favicon.png') }}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="#"><img
                src="{{ asset('assets2/img/brand/favicon-white.png') }}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround"
                        src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ficon-library.com%2Fimages%2Fdefault-user-icon%2Fdefault-user-icon-3.jpg&f=1&nofb=1&ipt=3ef62c835b40da152fda723e6bb14e8fa2f6f11c6ce5ec2d7909b0410bbfb47d&ipo=images "><span
                        class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::guard('admin')->user()->name }}</h4>
                    <span class="mb-0 text-muted">
                        Admin
                    </span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">Main</li>
            <li class="slide">
                @php
                     $currentYear = date('Y');
                @endphp
                <a class="side-menu__item" href="{{route('admin.dashboard',$currentYear)}}"><svg xmlns="http://www.w3.org/2000/svg"
                        class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg><span class="side-menu__label" style="font-weight: bold;color: black">Dashboard</span></a>
            </li>

            <li class="side-item side-item-category">General</li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i class="fa-solid fa-user-tie"
                        style="color: #000000;"></i><span class="side-menu__label"
                        style="margin-left: 14px;font-weight: bold;color: black">Accounts</span><i
                        class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{route('admin.utilisateurs')}}">Utilisateurs</a></li>

                    </li>
                    <li><a class="slide-item" href="{{route('admin.lesannances')}}">Annonces</a>
                    </li>

                </li>
                <li><a class="slide-item" href="{{route('admin.lesannances.enattente')}}">Annonces en attente</a>
                </li>

            </li>
            <li><a class="slide-item" href="{{route('admin.lesannances.publiee')}}">Annonces publiées</a>
            </li>


        </li>
        <li><a class="slide-item" href="{{route('admin.lesannances.fermee')}}">Annonces fermées</a>
        </li>


    </li>
    <li><a class="slide-item" href="{{ route('admin.index') }}">Admins</a>
    </li>


                </ul>
            </li>
            {{-- <li class="slide">
                <a class="side-menu__item" href=""><i class="fa-solid fa-gears"
                        style="color: #000000;"></i><span style="margin-left: 14px;font-weight: bold;color: black"
                        class="side-menu__label">Dashboard</span></a>

            </li> --}}



        </ul>
    </div>
</aside>
