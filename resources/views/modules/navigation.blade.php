

<nav aria-label="Header" id="header" class="top-menu">

    <!--LOGO AREA-->

    <div class="left">
    <a href="{{ url('../') }}" class="navbar-brand">
        @include('modules.logo')
    </a>
    </div>


    <!--NAV START-->

    <div class="right">
        <div class="top-menu-items" id="top-menu-items">

            <a href="{{ url('/about') }}" data-parenturl="/about/" class="top-menu-item">Why Bitgrounds?</a>

            <a href="{{ route('pricing') }}" data-parenturl="/pricing/" class="top-menu-item">Pricing</a>

            <a href="" data-parenturl="" class="top-menu-item">Resources</a>

            <a href="{{ url('/contact') }}" data-parenturl="/contact/" class="top-menu-item">Support</a>

        </div>

        <div class="download">


            @if( Auth::guest() )
                <a href="{{ route('register') }}" class="button button--red">
                    Sign Up
                </a>
            @elseif( Auth::check() )
                <a href="{{ route('home') }}" class="button button--red">
                    Dashboard
                </a>
            @endif

        </div>


        <!--ACCOUNT START-->

        <div class="download">
            @if( Auth::guest() )

            <a href="{{ route('login') }}" class="button button--grey--ghost">
                Sign In
            </a>
            @else

                    <a href="#" class="dropdown-toggle button button--grey--ghost" data-toggle="dropdown" role="button" aria-expanded="false">
                        My account
                        <div class="button__icon--nav button__icon--accordion-medium"></div>
                    </a>


                <!--DROPDOWN START-->

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('settings') }}">Account Settings</a></li>
                        @if( auth()->user()->subscribed('main') )
                            <li class="divider"></li>
                            <li><a href="{{ route('billing') }}">Billing Settings</a></li>
                            <li><a href="{{ route('invoices') }}">Payment History</a></li>
                        @endif
                        <li class="divider"></li>
                        <li><a href="#">Send Feedback...</a></li>
                        <li><a href="#">Send Invites...</a></li>

                        @if( Auth::check() and Auth::user()->isAdmin() )
                            <li class="divider"></li>
                            <li><a href="{{ route('adminDash') }}">Admin Dashboard</a></li>
                        @endif

                        <li class="divider"></li>

                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>

            @endif

        </div>
    </div>
</nav>


<!--MOBILE HEADER-->

<nav aria-label="Header" id="mobile-header">
    <a href="/" class="logo">
        @include('modules.logo')
    </a>

    <div class="right">
        <div class="hamburger">
            <i class="fa fa-lg fa-bars" aria-hidden="true"></i>
        </div>
    </div>

</nav>

<ul id="mobile-menu">
    <li>
    <a href="{{ url('/about') }}" data-parenturl="/about/" class="top-menu-item">Why Bitgrounds?</a>
    </li>
    <ul>

    </ul>

    <li>
    <a href="{{ route('pricing') }}" data-parenturl="/pricing/" class="top-menu-item">Pricing</a>
    </li>
    <ul>

    </ul>

    <li>
    <a href="" data-parenturl="" class="top-menu-item">Resources</a>
    </li>
    <ul>

    </ul>

    <li>
    <a href="{{ url('/contact') }}" data-parenturl="/contact/" class="top-menu-item">Support</a>
    </li>
    <ul>

    </ul>


</ul>

