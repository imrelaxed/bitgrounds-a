

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-fixed-top navbar-custom">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a href="{{ url('../') }}">

                <div id="logo" class="logo"></div>

            </a>
        </div>


    <!--NAV START-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

            <a href="{{ url('/about') }}" class="nav-item">Why Bitgrounds?</a>

            <a href="{{ route('pricing') }}"class="nav-item">Pricing</a>

            <a href="" class="nav-item">Resources</a>

            <a href="{{ route('support') }}" class="nav-item">Support</a>




            @if( Auth::guest() )
                <a href="{{ route('register') }}" class="btn btn-success">
                    Sign Up
                </a>
            @elseif( Auth::check() )
                <a href="{{ route('home') }}" class="btn btn-success">
                    Dashboard
                </a>
            @endif



        <!--ACCOUNT START-->

            @if( Auth::guest() )

            <a href="{{ route('login') }}" class="btn btn-outline-primary">
                Sign In
            </a>
            @else

                    <a href="#" class="dropdown-toggle btn btn-outline-primary" data-toggle="dropdown" role="button" aria-expanded="false">
                        My account
                        <span class="fa fa-caret-down"></span>
                    </a>


                <!--DROPDOWN START-->

                    <ul class="dropdown-menu" role="menu">
                        {!! Html::dropdownItem('home', 'Dashboard') !!}
                        {!! Html::dropdownItem('user/settings', 'Account Settings') !!}
                        @if( auth()->user()->subscribed('main') )
                            <li class="divider"></li>
                            {!! Html::dropdownItem('user/billing', 'Billing Settings') !!}
                            <li><a href="{{ route('invoices') }}">Payment History</a></li>
                        @endif


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
        </ul>
            <!-- /.navbar-collapse -->
        </div>
        </div>
        <!-- /.container-fluid -->
</nav>

